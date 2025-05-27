@extends('admin.layout.layout')
 
@section('content')
<div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-11">
                  <h1 class="m-0">Edit Page</h1>
               </div>
               <div class="col-sm-1">
                  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.pages.index') }}"> Back </a>
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
        <div class="card card-primary card-outline">
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

          <div class="card-body table-responsive">
            <form action="{{ route('admin.pages.update',$page[0]->pageid) }}" method="POST" name="edit_page" id="edit_page">
                @csrf
              @method('POST')
              <div class="box-body">

               <div class="form-group">
                <label for="exampleInputEmail1">
                 Page Type <font color="red">*</font>
               </label>
               
               <select name="page_type" class="form-control" onchange="enablepageoptions(this.value)">
                <option value="">--Select Page Type--</option>
                         <option value="home" {{ ($page[0]->page_type=='home')? 'selected':'' }}>Home Page Content</option>
                         <option value="innerpage" {{ ($page[0]->page_type=='innerpage')? 'selected':'' }}>Inner Contnet</option>
               

              </select>

            </div>



            <div class="form-group">
              <label for="exampleInputEmail1">
                English Title <font color="red">*</font>
              </label>
              <input type="text" name="title_english" class="form-control" id="title_english"  value="{{ $page[0]->title_english }}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">
               Marathi Title <font color="red">*</font>
             </label>
             <input type="text" name="title_marathi" class="form-control" id="title_marathi"   value="{{ $page[0]->title_marathi }}">
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">
              Url Title <font color="red">*</font>
            </label>
            <input type="text" name="url_word" class="form-control" id="url_word"   value="{{ $page[0]->url_word }}">
          </div>




          <div  style="display:none;">
            <div class="form-group" >
              <label for="exampleInputPassword1">
               Meta Keywords <font color="red">*</font>
             </label>
             <textarea type="text" id="meta_keyword" name="meta_keyword" class="form-control " >{{ $page[0]->meta_keyword }}</textarea>
           </div>

           <div class="form-group">
            <label for="exampleInputPassword1">
             Meta Description <font color="red">*</font>
           </label>
           <textarea type="text" id="meta_desc" name="meta_desc" class="form-control "  >{{ $page[0]->meta_desc }}</textarea>
         </div>
       </div>


       <div class="form-group">
        <label for="exampleInputPassword1">
          Page Description (English) <font color="red">*</font>
        </label>
        <textarea type="text" id="desc_english" name="desc_english" class="form-control ckeditor" >{{ $page[0]->desc_english }}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">
          Page Description (Marathi ) <font color="red">*</font>
        </label>
        <textarea type="text" id="desc_marathi" name="desc_marathi" class="form-control ckeditor" >{{ $page[0]->desc_marathi }}</textarea>
      </div>
</div>



<div style="clear:both;"></div><br/>


<div class="form-group">
  <label for="exampleInputFile">
     Select Status <font color="red">*</font>
   </label>

   <select name="status" id="status" style="width:30% " class="form-control">

    <option value="Active" {{ ($page[0]->status=='Active')? 'selected':'' }}>Active</option>
    <option value="Inactive" {{ ($page[0]->status=='Inactive')? 'selected':'' }}>Inactive</option>
  </select>
</div>

<div class="box-footer">
  <button type="submit" class="btn btn-primary sub_but" name="submit" id="add_tender">Submit</button>
</div>

</div>


</form>
</div>
</div>
</div>
</div>
</section>

     <script src="{{asset('resources/js/jquery.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery.validate.min.js')}}"></script>
     <script>
         $('#edit_page').validate({
              ignore: [],
          debug: false,
    rules: {
        page_type: {
            required: true,
        },
        title_english: {
            required: true,
        },
        title_marathi: {
            required: true,
        },
        url_word: {
            required: true,
        },
       // desc_english: {
       //     required: true,
        //},
       // desc_marathi: {
       //     required: true,
       // },
       /*desc_english:{
             required: function() 
            {
             CKEDITOR.instances.desc_english.updateElement();
            }
        },
        desc_marathi:{
             required: function() 
            {
             CKEDITOR.instances.desc_marathi.updateElement();
            }
        },*/
        
        desc_english: {
           ckrequired:true
        },
        desc_marathi: {
           ckrequired:true
         }
         
    },
    messages: {
        page_type: {
            required: "Please Select Page Type",
        },
        title_english: {
            required: "Please Enter English Title",
        },
        title_marathi: {
            required: "Please Enter Marathi Title",
        },
        url_word: {
            required: "Please Enter URL Title",
        },
        desc_english:{
                required:"Please Enter Text",
        },
        desc_marathi:{
                required:"Please Enter Text",
        }
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
            var ckValue = GetTextFromHtml(editor.getData());//.replace(/<[^>]*>/gi, '').trim()  
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