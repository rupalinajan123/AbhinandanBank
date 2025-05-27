@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-10">
                  <h1 class="m-0">My Blogs</h1>
               </div>
               <div class="col-sm-2">
                  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.blogs.create') }}"> Create new blogs </a>
                </div>
               </div>
            </div>
         </div>
      </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
  
                    <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th width="250px">Action</th>
                    </tr>
                    @php $i = $blogs->firstItem(); @endphp
                    @php --$i @endphp
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>
                            <form action="{{ route('admin.blogs.destroy',$blog->id) }}" method="GET">
               
                                <a class="btn btn-info" href="{{ route('admin.blogs.show',$blog->id) }}">Show</a>
                
                                <a class="btn btn-primary" href="{{ route('admin.blogs.edit',$blog->id) }}">Edit</a>
               
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
              
                Showing {{ $blogs->firstItem() }} - {{ $blogs->lastItem() }} of {{ $blogs->total() }}   {!! $blogs->links('vendor.pagination.custom') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection