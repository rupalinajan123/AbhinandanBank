@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-11">
                  <h1 class="m-0">Contact Us</h1>
               </div>
               <div class="col-sm-1">
                  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.contactus.index') }}"> Back </a>
                </div>
               </div>
            </div>
         </div>
      </div>


<!-- Main content -->
<section class="content">
 <div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary card-outline">
       
        <div class="card-body table-responsive">
          <table id="ex" class="table table-bordered table-striped">
           <tbody>
            <tr>
              <td width="17"><strong><?php echo 'First Name'; ?></strong></td>
              <td width="32">{{ $contact[0]->first_name }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Last Name';  ?></strong></td>
              <td width="32">{{ $contact[0]->last_name }}</td>
            </tr>
            <tr>
              <td><strong><?php echo 'Email' ?></strong></td>
              <td>{{ $contact[0]->email }}</td>
            </tr>
            
           
            <tr>
             <td><strong><?php echo 'Comments' ?></strong></td>
             <td>
             <textarea type="text" id="desc_english" name="desc_english" class="form-control ckeditor" >{{ $contact[0]->comment }}</textarea>
             </td> 
            </tr>
        </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection