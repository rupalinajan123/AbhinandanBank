@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-11">
                  <h1 class="m-0">Detail Page</h1>
               </div>
               <div class="col-sm-1">
                  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.pages.index') }}"> Back </a>
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
              <td width="17"><strong><?php echo 'Page Type'; ?></strong></td>
              <td width="32"> @if($page[0]->page_type=='home') {{ 'Home Page Content' }} @else {{ 'Inner Content'; }} @endif
              
              </td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'English Title'; ?></strong></td>
              <td width="32">{{ $page[0]->title_english }}</td>
            </tr>
            <tr>
              <td width="17"><strong><?php echo 'Marathi Title';  ?></strong></td>
              <td width="32">{{ $page[0]->title_marathi }}</td>
            </tr>
            <tr>
              <td><strong><?php echo 'Url Title' ?></strong></td>
              <td>{{ $page[0]->url_word }}</td>
            </tr>
            <tr style="display:none;">
              <td><strong><?php echo 'Meta Keywords' ?></strong></td>
              <td>{{ $page[0]->meta_keyword }}</td>
            </tr>
            <tr style="display:none;">
              <td><strong><?php echo 'Meta Description' ?></strong></td>
              <td>{{ $page[0]->meta_desc }}</td>
            </tr>
            <tr>
             <td><strong><?php echo 'Page Description (English)' ?></strong></td>
             <td>
             <textarea type="text" id="desc_english" name="desc_english" class="form-control ckeditor" >{{ $page[0]->desc_english }}</textarea>
             </td>
              
            </tr>
            <tr>
              <td><strong><?php echo 'Page Description (Marathi)' ?></strong></td>
              <td><textarea type="text" id="desc_english" name="desc_english" class="form-control ckeditor" >{{ $page[0]->desc_marathi }}</textarea></td> 
            </tr>
            
            <tr>
              <td><strong><?php echo 'Status' ?></strong></td>
              <td>{{ $page[0]->status }}</td> 
            </tr>
            
            <tr>
              <td><strong><?php echo 'Last Updated on' ?></strong></td>
              <td>{{ $page[0]->updated_at }}</td>
              
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection