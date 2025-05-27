<?php
namespace App;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function __construct()
    {
        $this->middleware('checkAdminEmail')->except(['publicMethods', 'accessibleForAll']);
    }
    
    
    public function index()
    {
        if (!Auth::check()) {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }

        $advertisement = Advertisement::orderBy('id', 'desc')->latest()->get();
        // return view('admin.advertisement.index', compact('advertisement'))->with('i',(request()->input('page', 1) - 1) * 2);
        return view('admin.advertisement.index',compact('advertisement'))->with('i',(request()->input('page',1)-1)*2);


    }
    public function create_advertisement()
    {

        if (!Auth::check()) {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        return view('admin.advertisement.create');

    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }

        $request->validate([
            'eng_title' => 'required',
            'marathi_title' => 'required',
            'advt_doc' => 'required|max:2048',
            'status' => 'required'
        ], [
                'eng_title.required' => 'The English title is required.',
                'marathi_title.required' => 'The Marathi title is required.',
                'advt_doc.required' => 'The advertisement document is required.',
                'advt_doc.max' => 'The advertisement document size must not exceed 2MB.',
                'status.required' => 'The status is required.'
            ]);


        // Advertisement :: create($request->all());


        $advertisement = new Advertisement();
        $advertisement->eng_title = $request->eng_title;
        $advertisement->marathi_title = $request->marathi_title;
        // $file = $request->file('advt_doc');
        // $fileName = time() . '_' . $file->getClientOriginalName();
        // $filePath = $file->move(public_path('pdfs'), $fileName);
        // $advertisement->advt_doc = 'pdfs/' . $fileName;
        
        // Uploading multiple documents
        $pdfOne = [];
        if($file = $request->file('advt_doc')){
            
        foreach($file as $pdf)
        {
            // $fileName = time() . '_' . $pdf->getClientOriginalName();
            $fileName = 'abhinandan_doc_' . random_int(1000, 9999)  . '.pdf';
            $pdf->move(public_path('pdfs'), $fileName);
            $pdfOne[] = $fileName;
        
        }}
        $advertisement->advt_doc = implode('|',$pdfOne);

        $advertisement->status = $request->status;


        $advertisement->save();

        return redirect()->route('admin.advertisement.index')
            ->with('success', 'Advertisement added successfully.');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }

        $advertisement = Advertisement::find($id);
        $advertisement->delete();
        return redirect()->back()->with('deletemessage', 'Advertisement Deleted Successfully');

    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }

        $advertisement = Advertisement::where('id', $id)->get();
        return view('admin.advertisement.edit', compact('advertisement'));
    }

    // public function update(Request $request, $id)
    // {
    //     if (!Auth::check()) {
    //         return redirect("login")->withSuccess('Opps! You do not have access');
    //     }

    //     $request->validate([
    //         'eng_title' => 'required',
    //         'marathi_title' => 'required',
    //         'status' => 'required'
    //     ], [
    //             'eng_title.required' => 'The English title is required.',
    //             'marathi_title.required' => 'The Marathi title is required.',
    //             'status.required' => 'The status is required.'
    //         ]);

    //     $advertisement = Advertisement::find($id);
    //     $advertisement->eng_title = $request->eng_title;
    //     $advertisement->marathi_title = $request->marathi_title;
    //     $advertisement->status = $request->status;
       
    //     $pdfOne = [];
    //     if($file = $request->file('advt_doc')){
            
    //     foreach($file as $pdf)
    //     {
    //         $fileName = time() . '_' . $pdf->getClientOriginalName();
    //         $pdf->move(public_path('pdfs'), $fileName);
    //         $pdfOne[] = 'pdfs/' . $fileName;
        
    //     }}
    //      $existingDocuments = explode('|', $advertisement->advt_doc);
    //      $allDocuments = array_merge($existingDocuments, $pdfOne);
    //      $advertisement->advt_doc = implode('|', $allDocuments);

    //     $advertisement->status = $request->status;


    //     $advertisement->save();
        
    //     return redirect()->route('admin.advertisement.index')
    //         ->with('success', 'Advertisement updated successfully.');

    // }
    
    public function update(Request $request, $id)
{
    if (!Auth::check()) {
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    $request->validate([
        'eng_title' => 'required',
        'marathi_title' => 'required',
        'status' => 'required'
    ], [
        'eng_title.required' => 'The English title is required.',
        'marathi_title.required' => 'The Marathi title is required.',
        'status.required' => 'The status is required.'
    ]);

    $advertisement = Advertisement::find($id);
    $advertisement->eng_title = $request->eng_title;
    $advertisement->marathi_title = $request->marathi_title;
    $advertisement->status = $request->status;

    $pdfOne = [];
    if ($file = $request->file('advt_doc')) {
        foreach ($file as $pdf) {
            // $fileName = time() . '_' . $pdf->getClientOriginalName();
            $fileName = 'abhinandan_doc_' . random_int(1000, 9999) . '.pdf';
            $pdf->move(public_path('pdfs'), $fileName);
            $pdfOne[] =  $fileName;
        }
    }

    if (!empty($advertisement->advt_doc)) {
        $existingDocuments = explode('|', $advertisement->advt_doc);
        $allDocuments = array_merge($existingDocuments, $pdfOne);
    } else {
        $allDocuments = $pdfOne;
    }
    $advertisement->advt_doc = implode('|', $allDocuments);

    $advertisement->status = $request->status;

    $advertisement->save();

    return redirect()->route('admin.advertisement.index')
        ->with('success', 'Advertisement updated successfully.');
}

    
    
    public function update_advertisement(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        $advertisement = Advertisement::find($id);
        // dd($advertisement);
        if ($advertisement) {
        if ($advertisement->status == 'Active') {
            $advertisement->status = 'Inactive';
        } elseif ($advertisement->status == 'Inactive') {
            $advertisement->status = 'Active';
        }
            $advertisement->save();
            return redirect()->route('admin.advertisement.index')
                ->with('success', 'Status updated successfully.');
        }

    return redirect()->route('admin.advertisement.index')
        ->with('error', 'Advertisement not found.');
        }

   public function removeDocument(Request $request, $id)
     {
    if (!Auth::check()) {
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    $advertisement = Advertisement::find($id);
    if ($advertisement) {
        $document = $request->query('document');

        $documents = explode('|', $advertisement->advt_doc);

        $key = array_search($document, $documents);
        if ($key !== false) {
            $documentPath = public_path('pdf/' . $document);
            if (File::exists($documentPath)) {
                
                File::delete($documentPath);
            }

            unset($documents[$key]);

            $advertisement->advt_doc = implode('|', $documents);
          
            $advertisement->save();

            return redirect()->back()->with('success', 'Document deleted successfully');
        }
    }

    return redirect()->back()->with('error', 'Document not found');
    
     }

    
}
        
        
    
    