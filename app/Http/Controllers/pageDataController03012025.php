<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;
use App\Models\Page_master;
use App\Models\ContactUs;
use App\Models\Complaintform;
use App\Models\Advertisement;
use Session;
use Auth;
use Mail;
use ZipArchive;
// use File;
use Illuminate\Support\Facades\Storage;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;


class pageDataController extends Controller
{
    //home page
    public function index(Request $request, $pdfPaths = []) {
        
      $data['menudata']  = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();
      $advertisement = Advertisement::orderBy('id', 'desc')->where('status','Active')->get();
      $data['pdfPaths'] = $pdfPaths;
      return view('welcome',compact('data','advertisement'));

   }
   //other details pages
   public function details(Request $request,$name) {
      
      $data = Page_master::where('url_word', $name)->where('status','Active')->where('is_delete','no')->get();
      $data['menudata']  = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();    

      return view('cms_details_page',compact('data'));


   }
   //Contact us page
   public function contactus(Request $request) {
        $data['menudata']    = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();    
      $recaptchaSitekey = config('services.recaptchaKeys.siteKey');
      return view('contactus',compact('data', 'recaptchaSitekey'));

   }

   //Contact us page
   public function post_contactus(Request $request) {
       
       $request->validate([
                  'first_name' => 'required',
                  'last_name' => 'required',
                  'email' => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) {
                        // Custom validation for Indian domain email or .com
                        if (!preg_match('/\.(in|co\.in|org\.in|gov\.in|nic\.in|edu\.in|ac\.in|com)$/i', $value)) {
                            $fail('The email domain must be either an Indian domain (e.g., .in, .co.in) or .com.');
                        }
                    },
                  ],
                  'comment' => 'required',
                  'g-recaptcha-response'=>'required',
              ],
              [ 'g-recaptcha-response.required' => 'Captcha field is required.']);
       
        $userIp = request()->ip();
        $secret =  config('services.recaptchaKeys.secretKey');
        $recaptchaResponse = trim($request['g-recaptcha-response']);
        if($recaptchaResponse =='')
        {
            return redirect('/contactus')->with('error','Captcha field is required.');
        }
        $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
        $status= json_decode($output, true);
        if ($status['success']) 
        { 
              $data = $request->only('first_name', 'last_name', 'email', 'comment');
              ContactUs::create($data);
              
              //$data['subject'] = 'Thanks for contact us';
              //$data['from'] = 'support@spochub.com';
              
              //Mail::to($data['from'])->send(new SendMail($data));
            
              //if (Mail::failures()) {
                //return redirect('/contactus')->with('error','Sorry! Please try again latter');
              //}else{
                return redirect("/contactus")->withSuccess('Thanks for contacting us.');
              //}
        }   
        else
        {
            return redirect('/contactus')->with('error','Invalid captcha.');
        } 
      
    }
    
    
    //Complain Form page

    function maskAccountNumber($accountNumber) {
      // Show only the last 4 digits and mask the rest with asterisks
      $maskLength = strlen($accountNumber) - 4;
      return str_repeat('*', $maskLength) . substr($accountNumber, -4);
    }
  
  
   public function complaint_form(Request $request) {
        $data['menudata']    = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();    
          $recaptchaSitekey = config('services.recaptchaKeys.siteKey');
          return view('complaint_form', compact('data', 'recaptchaSitekey'));
   }
   
   public function post_complaint_form(Request $request) {
    // Validate input fields as before
    $request->validate([
        // Validation rules
    ]);

    $userIp = request()->ip();
    $secret = config('services.recaptchaKeys.secretKey');
    $recaptchaResponse = trim($request['g-recaptcha-response']);
    if($recaptchaResponse == '') {
        return redirect('/complaint_form')->with('error', 'Captcha field is required.');
    }

    // Recaptcha verification
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    $status = json_decode($output, true);

    if ($status['success']) {
        $file = $request->file('attachment');
        // Sanitize and save the file as before
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $sanitizedFileName = pathinfo($originalName, PATHINFO_FILENAME);
        $sanitizedFileName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $sanitizedFileName);
        $sanitizedFileName = substr($sanitizedFileName, 0, 200); // Limit filename length
        $fileName = $sanitizedFileName . '.' . $extension;
        $file->move(public_path('assets/uploads/complaint'), $fileName);

        $encryptedAccNumber = encrypt($request['acc_number']);
        // Save complaint form data
        Complaintform::create([
            'subject' => $request['subject'],
            'category' => $request['category'],
            'cdetails' => $request['cdetails'],
            'customer_name' => $request['customer_name'],
            'branch' => $request['branch'],
            'address' => $request['address'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'acc_head' => $request['acc_head'],
            'acc_number' => $encryptedAccNumber,
            'attachment' => $fileName
        ]);

        // Determine the branch's email based on the selected branch
        // $branchEmails = [
        //     'Head Office' => 'mainbranch@abhinandanbank.net',
        //     'Paratwada' => 'paratwada@abhinandanbank.net',
        //     'Badnera' => 'badnera@abhinandanbank.net',
        //     'New Cotton Market Road' => 'ncm@abhinandanbank.net',
        //     'Achalpur' => 'achalpur@abhinandanbank.net',
        //     'Chandur Bazar' => 'chandurbazar@abhinandanbank.net',
        //     'Dhamangao Rly' => 'dhamangaon@abhinandanbank.net',
        //     'Nagpur' => 'nagpur@abhinandanbank.net',
        //     'Warud' => 'warud@abhinandanbank.net'
        // ];

        $branchEmails = [
            'Head Office' => 'rupalinajan123@gmail.com',
            'Paratwada' => 'rupali.najan@esds.co.in',
            'Badnera' => 'esdsdev@gmail.com',
            'New Cotton Market Road' => 'rupalinajan123@gmail.com',
            'Achalpur' => 'esdsdev@gmail.com',
            'Chandur Bazar' => 'rupalinajan01@gmail.com',
            'Dhamangao Rly' => 'rupalinajan123@gmail.com',
            'Nagpur' => 'esdsdev@gmail.com',
            'Warud' => 'rupalinajan123@gmail.com'
        ];

        $branchEmail = $branchEmails[$request->branch] ?? 'rupalinajan01@gmail.com';

        // Send email to the selected branch
        try {
            Mail::send('emails.complaint_acknowledgement', ['subject' => 'Complaint Received', 'name' => $request->customer_name, 'email_body' => 'Thank you for submitting your complaint. We will address it as soon as possible.'], function ($message) use ($branchEmail) {
                $message->to($branchEmail)->subject('Complaint Submission');
            });

            return redirect("/complaint_form")->withSuccess('Thank you for your complaint. A confirmation email has been sent to the branch.');
        } catch (\Exception $e) {
            return redirect("/complaint_form")->with('error', 'Email Error: ' . $e->getMessage());
        }
    } else {
        return redirect('/complaint_form')->with('error', 'Invalid captcha.');
    }
}

   
    // public function post_complaint_form(Request $request) {

       
    //    $request->validate([
           
    //                'subject'=> 'required',
    //                'category'=> 'required',
    //                'cdetails'=> 'required',
    //                'customer_name'=> 'required',
    //                'branch'=> 'required',
    //                'address'=> 'required',
    //                'email' => [
    //                 'required',
    //                 'email',
    //                 function ($attribute, $value, $fail) {
    //                     // Custom validation for Indian domain email or .com
    //                     if (!preg_match('/\.(in|co\.in|org\.in|gov\.in|nic\.in|edu\.in|ac\.in|com)$/i', $value)) {
    //                         $fail('The email domain must be either an Indian domain (e.g., .in, .co.in) or .com.');
    //                     }
    //                 },
    //               ],
    //                'mobile' => [
    //                               'required',
    //                               'regex:/^[7-9]\d{9}$/', // Indian mobile number validation

    //                               function ($attribute, $value, $fail) {
    //                                 // Check for repeated numbers like 77777777777 or 88888888888
    //                                 if (preg_match('/^(\d)\1{9}$/', $value)) {
    //                                     $fail('The mobile number cannot have repeated digits.');
    //                                 }
                    
    //                                 // Check for sequential numbers like 1234567890 or 9876543210
    //                                 if (preg_match('/^(1234567890|9876543210)$/', $value)) {
    //                                     $fail('The mobile number cannot be a sequential number.');
    //                                 }
    //                             },
    //                           ],
    //                'acc_head'=> 'required',
    //                'acc_number'=> 'required',
    //                'attachment' => 'nullable|file|max:2048|mimes:pdf',  //jpg,png,jpeg,csv,txt,xlx,xls,pdf
    //               'g-recaptcha-response'=>'required',
    //           ],
    //           [ 'g-recaptcha-response.required' => 'Captcha field is required.',
    //             'mobile.regex' => 'The mobile number must be a valid Indian number starting with 7, 8, or 9 and must be 10 digits long.'
    //         ]);
              
    //           // print_r($request->all()); // Print all request data
    //           // exit;
      
    //     $userIp = request()->ip();
    //     $secret =  config('services.recaptchaKeys.secretKey');
    //     // $secret =  config('app.secret_key');
    //     // print_r($secret);exit;
    //     $recaptchaResponse = trim($request['g-recaptcha-response']);
    //     if($recaptchaResponse =='')
    //     {
    //         return redirect('/complaint_form')->with('error','Captcha field is required.');
    //     }
    //     $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
    //     $ch = curl_init(); 
    //     curl_setopt($ch, CURLOPT_URL, $url); 
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    //     $output = curl_exec($ch); 
    //     curl_close($ch);      
    //     $status= json_decode($output, true);
    //     //echo "<pre>"; print_r($status);die;
    //     if ($status['success']) 
    //     {
    //             $file = $request->file('attachment');

    //         // Sanitize filename
    //         $originalName = $file->getClientOriginalName();
    //         $extension = $file->getClientOriginalExtension();
    //         $sanitizedFileName = pathinfo($originalName, PATHINFO_FILENAME);
    //         $sanitizedFileName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $sanitizedFileName); // Remove special characters
    //         $sanitizedFileName = substr($sanitizedFileName, 0, 200); // Limit filename length
    //         $fileName = $sanitizedFileName . '.' . $extension;

    //         // Move file to the safe location
    //          $file->move(public_path('assets/uploads/complaint'), $fileName);
    //          $encryptedAccNumber = encrypt($request['acc_number']); 
    //         //  print_r($encryptedAccNumber);exit;
    //                Complaintform::create([
    //                 'subject' => $request['subject'],
    //                 'category' => $request['category'],
    //                'cdetails'=> $request['cdetails'],
    //                'customer_name'=> $request['customer_name'],
    //                'branch'=> $request['branch'],
    //                'address'=> $request['address'],
    //                'email'=> $request['email'],
    //                'mobile'=> $request['mobile'],
    //                'acc_head'=> $request['acc_head'],
    //                'acc_number'=> $encryptedAccNumber,
    //                'attachment'=>$fileName
                    
    //             ]);

    //         //     $data = $request->all();
    //         //    print_r($data);exit;
    //             // // Send mail
    //             // Mail::to('recipient@example.com')->send(new ComplaintFeedbackMail($data));
            
                
    //             // Send email to the user
    //             $userEmail = $request['email'];
    //             $mailData = [
    //             'subject' => 'Complaint Received',
    //             'name' => $request['customer_name'],
    //             'email_body' => 'Thank you for submitting your complaint. We will address it as soon as possible.',
    //             ];


    //     try {
    //         Mail::send('emails.complaint_acknowledgement', $mailData, function ($message) use ($userEmail) {
    //             $message->to($userEmail)
    //                     ->subject('Complaint Acknowledgement');
    //         });

    //         return redirect("/complaint_form")->withSuccess('Thank you for your complaint. A confirmation email has been sent.');
    //     } catch (\Exception $e) {
    //         //return redirect("/complaint_form")->with('error', 'Complaint submitted, but email could not be sent.');
    //         return redirect("/complaint_form")->with('error', 'Email Error: ' . $e->getMessage());
    //         }
    //     }   
    //     else
    //     {
    //         return redirect('/complaint_form')->with('error','Invalid captcha.');
    //     } 
      
    // }


   //create language variable
   public function ch_lang(Request $request) {
        $lan = $request->lan;
        Session::put('site_language', $lan);
   }

public function download_pdf($id){
    
    $advertisement = Advertisement::findOrFail($id);
    $pdfs = explode('|', $advertisement->advt_doc);
    echo json_encode($pdfs);
   
}


public function file_download($file_name){
    $pdfFileName = basename($file_name);
$pdfFullPath = public_path('pdfs/' . $pdfFileName);

$headers = [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'attachment; filename="abhinandan_bank' . '.pdf"',
];

if (File::exists($pdfFullPath)) {
    return new StreamedResponse(function () use ($pdfFullPath) {
        $fileStream = fopen($pdfFullPath, 'rb');
        fpassthru($fileStream);
        fclose($fileStream);
    }, 200, $headers);
} else {
    // Handle the case when the PDF file does not exist
    return response()->json(['error' => 'PDF file not found'], 404);
}}


public function counter(Request $request)
{
    // Retrieve the first hit count or create a new one
    $hit = Hit::firstOrCreate([], ['count' => 0]);

    // Get the client's IP address
    $ipAddress = $request->ip();

    // Increment the hit count
    $hit->increment('count');
    
    // Update the IP address field
    $hit->ip_address = $ipAddress;
    $hit->save();

    // Return the current hit count
    return response()->json(['hit_count' => $hit->count]);
}


// public function sendEmail()
//     {
//         $data = ['message' => 'This is a test email!'];

//         Mail::send('emails.test_email', $data, function ($message) {
//             $message->to('rupalinajan123@gmail.com', 'Rupali')
//                     ->subject('Test Email Subject');
//             $message->from('rupalinajan123@gmail.com', 'Your Name');
//         });

//         return "Email sent successfully!";
//     }
}
