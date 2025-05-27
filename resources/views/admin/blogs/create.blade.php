@extends('admin.layout.layout')
  
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-11">
                  <h1 class="m-0">Create New Blog</h1>
               </div>
               <div class="col-sm-1">
                  <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.blogs.index') }}"> Back</a>
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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Warning!</strong> Please check your input code<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
   
            <form action="{{ route('admin.blogs.store') }}" method="POST">
                @csrf
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="height:200px" name="description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
               
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection