@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-10">
                  <h1 class="m-0">Complaint</h1>
               </div>
               <div class="col-sm-2">
                  <!-- <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.pages.create') }}"> Create New Page </a>
                </div> -->
               </div>
            </div>
         </div>
      </div>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body card-primary card-outline">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
  
                    <table class="table table-bordered">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @php $i = $pages->firstItem(); @endphp
                    @php --$i @endphp
                    
                    @foreach ($pages as $page)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $page->customer_name }}</td>
                        <td>{{ $page->mobile }}</td>
                        <td>{{ $page->email }}</td>
                        <td>{{ $page->created_at }}</td>
                        <td><a class="btn btn-info" href="{{ route('admin.complaint.show',$page->id) }}">Details</a></td>
                    </tr>
                    @endforeach
                </table>
              
                Showing {{ $pages->firstItem() }} - {{ $pages->lastItem() }} of {{ $pages->total() }}  {!! $pages->links('vendor/pagination/custom') !!}
                
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
