<?php
namespace App;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use App\Models\Complaintform;
use Illuminate\Http\Request;


class ComplaintController extends Controller
{
    //home page
    public function index(Request $request) {
        
	    if(!Auth::check()){
        return redirect("login")->withSuccess('Opps! You do not have access');
      }
      
      $pages = Complaintform::where('is_delete', 'no')->orderBy('id', 'desc')->latest()->paginate(10);
      return view('admin.complaint.complaint',compact('pages'))->with('i',(request()->input('page',1)-1)*2);

   }

  	public function show($id)
    {
    	//echo"hello";
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
       //$blog = Blog::get();
       $contact = Complaintform::where('id', $id)->get();
       //dd($blog->toArray());

        return view('admin.complaint.show',compact('contact'));
    }
}
