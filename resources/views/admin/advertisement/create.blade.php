@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-11">
                  <h1 class="m-0">Add New Advertisement</h1>
               </div>
               <div class="col-sm-1">
                  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.advertisement.index') }}"> Back </a>
                </div>
               </div>
            </div>
         </div>
      </div>
  <span class="clearfix"> </span>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
              

              
           
            <div class="card card-primary card-outline">
              <div class="card-body  table-responsive">
            <form action="{{ route('admin.advertisement.store') }}" method="POST" enctype="multipart/form-data" name="create_advertisement" id="create_advertisement">
                @csrf
                    <div class="box-body">

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">
                     Advertisement In English Title <font color="red">*</font>
                        </label>
                        
                        <input type="text" placeholder="English Title" name="eng_title" class="form-control" id="eng_title"  value="" >
                        </div>
                      


                      <div class="form-group">
                        <label for="exampleInputPassword1">
                      Advertisement In Marathi Title <font color="red">*</font>
                        </label>
                          <input type="text" placeholder="Marathi Title" name="marathi_title" class="form-control" id="marathi_title"   value="" >
                        </div>

					  <div class="form-group">
                        <label for="exampleInputEmail1">
                      Upload a document <font color="red">*</font>
                        </label>
                        <input type="file" accept=".png, .pdf" placeholder="Please_upload_a_file" name="advt_doc[]" multiple="multiple" class="form-control" id="advt_doc"   value="" >
                        <!--<input type="file"  placeholder="Please_upload_a_file" name="advt_doc" class="form-control" id="advt_doc"   value="" >-->
                            </div>
                           
                      

 			           
                      
                    <div class="form-group">
                                <label for="exampleInputFile">
                             Select Status <font color="red">*</font>
                                </label>
                                <select name="status" id="status" style="width:30% " class="form-control">
                              
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                </select>
                                </div>
                      </div>
                    
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary sub_but" name="submit" id="add_tender">Submit</button>
                      </div></div>
                    </form>
                </div>
         	 </div>
         </div>
       </div>
      </div>
     </section>
     <script src="{{asset('resources/js/jquery.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery.validate.min.js')}}"></script>
     <script>
         $('#create_advertisement').validate({
              ignore: [],
          debug: false,
    rules: {
        eng_title: {
            required: true,
        },
        marathi_title: {
            required: true,
        },
        advt_doc: {
            required: true,
        },
       
         
    },
    messages: {
        eng_title: {
            required: "Please Enter English Title",
        },
        marathi_title: {
            required: "Please Enter Marathi Title",
        },
        advt_doc: {
            required: "Please Upload a File",
        },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
    
    
   
   
  });


//Extention method for check CKEditor Control   
// jQuery.validator.addMethod("customfunctionanme",validationfunction,validationmessage);  
  
        jQuery.validator.addMethod("ckrequired", function (value, element) {  
            var idname = $(element).attr('id');  
            var editor = CKEDITOR.instances[idname];  
            var ckValue = GetTextFromHtml(editor.getData());  //.replace(/<[^>]*>/gi, '').trim()
            if (ckValue.length === 0) {  
//if empty or trimmed value then remove extra spacing to current control  
                $(element).val(ckValue);  
            } else {  
//If not empty then leave the value as it is  
                $(element).val(editor.getData());  
            }  
            return $(element).val().length > 0;  
        }, "Please Enter Description");  
  
function GetTextFromHtml(html) {  
            var dv = document.createElement("DIV");  
            dv.innerHTML = html;  
            return dv.textContent || dv.innerText || "";  
        }  

  
     </script>
@endsection   