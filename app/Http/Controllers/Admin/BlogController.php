<?php
namespace App;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index',compact('blogs'))->with('i',(request()->input('page',1)-1)*2);
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
        
        return view('admin.blogs.create');
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
            'title' => 'required',
            'description' => 'required',
        ]);
  
        Blog::create($request->all());
   
        return redirect()->route('admin.blogs.index')
                        ->with('success','Blog created successfully.');
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
        
        $blog = Blog::where('id', $id)->get();
        return view('admin.blogs.show',compact('blog'));
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
       $blog = Blog::where('id', $id)->get();
       //dd($blog->toArray());

        return view('admin.blogs.edit',compact('blog'));
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
            'title' => 'required',
            'description' => 'required',
        ]);
  
        //$blog->update($request->all());

        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->update();
        //return redirect()->back()->with('status','Student Updated Successfully');

  
        return redirect()->route('admin.blogs.index')
                        ->with('success','Blog updated successfully');
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
        
        //$blog->delete();
        $res=Blog::find($id)->delete();
        if ($res){
        return redirect()->route('admin.blogs.index')
                        ->with('success','Blogs deleted successfully');
        }
        else{
            return redirect()->route('admin.blogs.index')
                        ->with('error','Blogs not deleted');
        }
    }
}
