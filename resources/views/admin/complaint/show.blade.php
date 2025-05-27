@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-11">
                  <h1 class="m-0">Complaint </h1>
               </div>
               <div class="col-sm-1">
                  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.complaint.index') }}"> Back </a>
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
              <td width="17"><strong><?php echo 'Customer Name'; ?></strong></td>
              <td width="32">{{ $contact[0]->customer_name }}</td>
            </tr>
            <tr>
              <td><strong><?php echo 'Email' ?></strong></td>
              <td>{{ $contact[0]->email }}</td>
            </tr>
            <tr>
              <td><strong><?php echo 'Mobile' ?></strong></td>
              <td>{{ $contact[0]->mobile }}</td>
            </tr>
            
            <tr>
              <td width="17"><strong><?php echo 'subject'; ?></strong></td>
              <td width="32">{{ $contact[0]->subject }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Category'; ?></strong></td>
              <td width="32">{{ $contact[0]->category }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Branch'; ?></strong></td>
              <td width="32">{{ $contact[0]->branch }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Address'; ?></strong></td>
              <td width="32">{{ $contact[0]->address }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Account Head'; ?></strong></td>
              <td width="32">{{ $contact[0]->acc_head }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Account Number'; ?></strong></td>
              <td width="32">{{ $contact[0]->acc_number }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Attachment'; ?></strong></td>
              <td width="32"><a download href="{{ URL('/assets/uploads/complaint/') }}/{{ $contact[0]->attachment }}">{{ $contact[0]->attachment }}</a></td>
            </tr>
            
           
            <tr>
             <td><strong><?php echo 'Complaint Details' ?></strong></td>
             <td>
             {{ $contact[0]->cdetails }}
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