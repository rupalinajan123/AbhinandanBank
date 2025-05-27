<?php
namespace App;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use App\Models\Page_master;
use Illuminate\Http\Request;

class PageController extends Controller
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
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
        $pages = Page_master::where('is_delete', 'no')->orderBy('pageid', 'desc')->latest()->paginate(10);
        return view('admin.pages.index',compact('pages'))->with('i',(request()->input('page',1)-1)*2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
        $request->validate([
			'title_english' => 'required',
			'title_marathi' => 'required',
			'url_word' => 'required',
			'desc_english' =>'required', //|min:20
			'desc_marathi' => 'required',//|min:20
			'page_type' => 'required',
			'status' => 'required'
			],
			[ 'title_marathi.required' => 'The title marathi field is required.',
			'desc_marathi.required' => 'The desc marathi field is required.',
			'desc_marathi.min' => 'The desc marathi must be at least 20 characters.'
			]);
  
        Page_master::create($request->all());
   
        return redirect()->route('admin.pages.index')
                        ->with('success','Page created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
        $page = Page_master::where('pageid', $id)->get();
        return view('admin.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
       //$blog = Blog::get();
       $page = Page_master::where('pageid', $id)->get();
       //dd($blog->toArray());

        return view('admin.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
     
    public function update(Request $request, $id)
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
        $request->validate([
			'title_english' => 'required',
			'title_marathi' => 'required',
			'url_word' => 'required',
			'desc_english' =>'required',//|min:20
			'desc_marathi' => 'required',//|min:20
			'page_type' => 'required',
			'status' => 'required',
			//'meta_keyword'=>'required',
			//'meta_desc'=>'required'
			],
			[ 'title_marathi.required' => 'The title marathi field is required.',
			'desc_marathi.required' => 'The desc marathi field is required.',
			'desc_marathi.min' => 'The desc marathi must be at least 20 characters.'
			]);
        
        $page = Page_master::where('pageid', $id)->get();
        
        /*$page->title_english = $request->input('title_english');
        $page->title_marathi = $request->input('title_marathi');
        $page->url_word = $request->input('url_word');
        $page->desc_english = $request->input('desc_english');
        $page->desc_marathi = $request->input('desc_marathi');
        $page->page_type = $request->input('page_type');
        $page->status = $request->input('status');
        $page->meta_keyword = $request->input('meta_keyword');
        $page->meta_desc = $request->input('meta_desc');*/
        
         $update_array = [
              'title_english'  => $request->input('title_english'),
              'title_marathi' => $request->input('title_marathi'),   
              'url_word'=> $request->input('url_word'),   
              'desc_english'=> $request->input('desc_english'),   
              'desc_marathi'  => $request->input('desc_marathi'),   
              'page_type'   => $request->input('page_type'),   
              'status'   => $request->input('status'),   
              'meta_keyword'  => $request->input('meta_keyword'),   
              'meta_desc'   => $request->input('meta_desc')
          ];  
        
        Page_master::where('pageid', $id)->update($update_array);
  
        return redirect()->route('admin.pages.index')
                        ->with('success','Page updated successfully');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
  public function destroy($id)
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        //$res=Page_master::where('pageid', $id)->delete();
        
        $update_array = [
              'is_delete'  => 'yes'
        ]; 
        $res=Page_master::where('pageid', $id)->update($update_array);
        if ($res){
        return redirect()->route('admin.pages.index')
                        ->with('success','Page deleted successfully');
        }
        else{
            return redirect()->route('admin.pages.index')
                        ->with('error','Page not deleted');
        }
    }
    
}
