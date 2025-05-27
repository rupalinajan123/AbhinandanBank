@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-10">
                  <h1 class="m-0">Advertisement</h1>
               </div>
               <div class="col-sm-2">
                  <div class="pull-right ml-4">
                    <a class="btn btn-success" href="{{ route('admin.advertisement.create') }}"> Add Advertisement </a>
                </div>
               </div>
            </div>
         </div>
      </div>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="card card-primary card-outline">
                
                <div class="card-body table-responsive">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" area-hidden="true">X</button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    @if ($message = Session::get('deletemessage'))
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" area-hidden="true">X</button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
  
                    <table class="table table-bordered">
                    <tr>
                        <th>Sr No</th>
                        <th>English Title</th>
                        <th>Marathi Title</th>
                        <!--<th>Documents</th>-->
                        <th>Status</th>
                        <th width="250px">Action</th>
                    </tr>
                    
                    
                    @foreach ($advertisement as $advertisement)
                    
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$advertisement->eng_title}}</td>
                        <td>{{$advertisement->marathi_title}}</td>
                      <!--  <td>-->
                      <!--<a href="{{ asset($advertisement->advt_doc) }}" target="_blank" class="btn btn-primary">View PDF</a>-->
                      <!--<a href="{{ ('public/' . $advertisement->advt_doc) }}" target="_blank" class="btn btn-primary">View PDF</a>-->

                      <!--  </td>-->
                        <td>
                          <a class="btn btn-warning"  href="{{route('admin.advertisement.update_advertisement',$advertisement->id)}}">{{$advertisement->status}}</a>   
                        </td>
                        <td>
                            <form action="{{ route('admin.advertisement.destroy',$advertisement->id) }}" method="GET">
               
                                <!--<a class="btn btn-info" href="#">Details</a>-->
                
                                <a class="btn btn-primary" href="{{ route('admin.advertisement.edit',$advertisement->id) }}">Edit</a>
               
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" onclick="return confirm_action(this,event,'Do you really want to delete this record ?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
       
 
          
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{asset('assets/admin/sweetalert/sweetalert.css')}}">
<script src="{{asset('assets/admin/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    function confirm_action(ref,evt,msg)
    {
           var msg = msg || false;
            evt.preventDefault();  
            swal({
                  title: "Are you sure ?",
                  text: msg,
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#0aa89e",
                  confirmButtonText: "Yes",
                  cancelButtonText: "No",
                  closeOnConfirm: false,
                  closeOnCancel: true
                },
                function(isConfirm)
                {
                    if(isConfirm==true)
                    {
                         //window.location = $(ref).attr('id');
                         ref.form.submit();
                         return true;
                    }
                    else
                    {
                         return false;
                    }

                });

            } 
</script>
@endsection
