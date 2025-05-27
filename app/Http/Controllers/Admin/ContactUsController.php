<?php
namespace App;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use App\Models\ContactUs;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    //home page
    public function index(Request $request) {
        
	    if(!Auth::check()){
        return redirect("login")->withSuccess('Opps! You do not have access');
      }
      
      $pages = Contactus::where('is_delete', 'no')->orderBy('id', 'desc')->latest()->paginate(10);
      return view('admin.contactus.contact_us',compact('pages'))->with('i',(request()->input('page',1)-1)*2);

   }

  	public function show($id)
    {
    	//echo"hello";
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
       //$blog = Blog::get();
       $contact = Contactus::where('id', $id)->get();
       //dd($blog->toArray());

        return view('admin.contactus.show',compact('contact'));
    }
}
