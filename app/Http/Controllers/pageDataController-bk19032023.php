<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;
use App\Models\Page_master;
use App\Models\ContactUs;
use Session;
use Auth;
use Mail;
 
use App\Mail\SendMail;
use Illuminate\Http\Request;

class pageDataController extends Controller
{
    //home page
    public function index(Request $request) {
        
	  $data['menudata']	 = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();	
      return view('welcome',compact('data'));

   }
   //other details pages
   public function details(Request $request,$name) {
      
      $data = Page_master::where('url_word', $name)->where('status','Active')->where('is_delete','no')->get();
	  $data['menudata']	 = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();	

      return view('cms_details_page',compact('data'));


   }
   //Contact us page
   public function contactus(Request $request) {
	    $data['menudata']	 = Page_master::where('url_word', 'menu')->where('status','Active')->where('is_delete','no')->get();	
      return view('contactus',compact('data'));

   }

   //Contact us page
   public function post_contactus(Request $request) {
       
       $request->validate([
                  'first_name' => 'required',
                  'last_name' => 'required',
                  'email' => 'required|email',
                  'comment' => 'required',
                  'g-recaptcha-response'=>'required',
              ],
              [ 'g-recaptcha-response.required' => 'Captcha field is required.']);
       
        $userIp = request()->ip();
        $secret =  '6Lcp-GEhAAAAAA2BqyIrh9hKOuIVwdYL2rJDhxmv';
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

   //create language variable
   public function ch_lang(Request $request) {
        $lan = $request->lan;
        Session::put('site_language', $lan);
   }

}
