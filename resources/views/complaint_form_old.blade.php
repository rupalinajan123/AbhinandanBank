@include('header')
<div class="innerBanner">
  <div class="text_ib">
    <h5>Customer Suggestions / Customer Complaint Form</h5>
    <ol class="">
      <li><a href="#">Home</a></li>
      <li><a href="#">&nbsp;/&nbsp;</a></li>
      <li class="active">Customer Suggestions / Customer Complaint Form</li>
    </ol>
  </div>
</div>
<section class="innerPagetext">

  <div class="container ">
    <div class="careerBox p-4"> <!--enctype="multipart/form-data"-->
    @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif
          @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
        <form enctype="multipart/form-data" action="{{ route('complaint_form.post') }}" method="POST" name="complaint_form" id="complaint_form">
      <div class="row">

        
        <div class="col-sm-6">
          
          
          
          
            @csrf
          <div class="contact-form">
            <div class=" col-md-12 ">
            <div class="form-group">
              <select name="subject" id="subject" class="form-control">
                  <option value="">Select Subject</option>
                  <option value="Customer Suggestion">Customer Suggestion</option>
                  <option value="Customer Complaint">Customer Complaint</option>
              </select>
              @if ($errors->has('subject'))
                <span class="text-danger">{{ $errors->first('subject') }}</span>
              @endif
            </div>
            </div>
            
            <div class=" col-md-12 ">
            <div class="form-group">
              <select name="category" id="category" class="form-control">
                  <option value="">Select Category</option>
                  <option value="Service Complaints">Service Complaints</option>
                  <option value="Documentation">Documentation</option>
                  <option value="Financial Transaction">Financial Transaction</option>
                  <option value="Enquire">Enquire</option>
                  <option value="ATM/Imps/Pos">ATM/Imps/Pos</option>
                  <option value="General">General</option>
              </select>
              @if ($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
              @endif
            </div>
            </div>
            
            <div class=" col-md-12 ">
            <div class="form-group">
              <textarea class="form-control" rows="5" placeholder="Enter Complaint Details" id="cdetails" name="cdetails"></textarea>
              @if ($errors->has('cdetails'))
                <span class="text-danger">{{ $errors->first('cdetails') }}</span>
              @endif
            </div>
            </div>
            
            <div class=" col-md-12 ">
            <div class="form-group">
              <input type="text" class="form-control" id="customer_name" placeholder="Enter Customer Name" name="customer_name">
              @if ($errors->has('customer_name'))
                <span class="text-danger">{{ $errors->first('customer_name') }}</span>
              @endif
            </div>
            </div>
           
            <div class=" col-md-12 ">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                </div>
                
                <div class=" col-md-12 ">
                <div class="form-group">
                  <input type="text" onkeypress="return isNumber(event)" maxlength="10" pattern="[1-9]{1}[0-9]{9}" minlength="10" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
                  @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                  @endif
                </div>
                </div>
            
            
            
            
           

            
          </div>
          
        </div>
        <div class="col-sm-6">
            <div class="contact-form">
                
                
                <div class=" col-md-12 ">
                <div class="form-group">
                  <textarea class="form-control" rows="5" placeholder="Enter Address" id="address" name="address"></textarea>
                  @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                  @endif
                </div>
                </div>
                
                
                
                <div class=" col-md-12 ">
                <div class="form-group">
                  <select name="branch" id="branch" class="form-control">
                      <option value="">Select Branch</option>
                      <option value="Head Office">Head Office</option>
                      <option value="Main Branch">Main Branch</option>
                      <option value="Paratwada">Paratwada</option>
                      <option value="Badnera">Badnera</option>
                      <option value="New Cotton Market Road">New Cotton Market Road</option>
                      <option value="Achalpur">Achalpur</option>
                      <option value="Chandur Bazar">Chandur Bazar</option>
                      <option value="Dhamangao Rly">Dhamangao Rly</option>
                      <option value="Nagpur">Nagpur</option>
                  </select>
                  @if ($errors->has('branch'))
                    <span class="text-danger">{{ $errors->first('branch') }}</span>
                  @endif
                </div>
                </div>
                
                <div class=" col-md-12 ">
                <div class="form-group">
                  <select name="acc_head" id="acc_head" class="form-control">
                      <option value="">Select Account Head</option>
                      <option value="Saving">Saving</option>
                      <option value="Current">Current</option>
                      <option value="Loan">Loan</option>
                      <option value="others">others</option>
                  </select>
                  @if ($errors->has('acc_head'))
                    <span class="text-danger">{{ $errors->first('acc_head') }}</span>
                  @endif
                </div>
                </div>
                
                <div class=" col-md-12 ">
                <div class="form-group">
                  <input type="text" class="form-control" id="acc_number" placeholder="Enter Account Number" name="acc_number">
                  @if ($errors->has('acc_number'))
                    <span class="text-danger">{{ $errors->first('acc_number') }}</span>
                  @endif
                </div>
                </div>
                
                <div class=" col-md-12 ">
                <div class="form-group">
                  <input type="file" class="form-control" id="attachment" placeholder="Choose file" name="attachment" accept=".pdf">
                  @if ($errors->has('attachment'))
                    <span class="text-danger">{{ $errors->first('attachment') }}</span>
                  @endif
                </div>
                </div>
                
                 <div class=" col-md-12 ">
                <div class="form-group">
                     <div class="form-row">
                        <div class="form-group col-md-4 capcha">
                          <!-- <img src="images/capcha.jpg" alt="img"> -->
                            <div class="g-recaptcha" data-sitekey="<?php echo '6Lcp-GEhAAAAAIGjFsEh6JcEGL8-4nDHyX1pKIYx'; ?>"></div> 
                        </div>
                     <!--    <div class="form-group col-md-5">
                          <input class="form-control" id="g-recaptcha-response" name="g-recaptcha-response" placeholder="Enter Capcha Code" type="text" >
                        </div> -->
                        <div class="form-group col-md-3">                                
                          <!--   <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Reset">  -->
                        </div>
                      </div>
                      @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                  @endif
                   </div>
                   </div>
                
                
                
            </div> 
            
           
        </div> 
        
        <div class="col-sm-2" style="text-align: center; padding-left: 40px;">
            <div class="contact-form">
             <div class="form-group">
                <button type="submit" class="btn btn-blue">Submit</button>
                </div>
            </div>
        </div>   
             
      </div>
   </form>
      
    </div>

  </div>

</section>

     <script src="{{asset('resources/js/jquery.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery.validate.min.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
     <script>
$('#complaint_form').validate({
        ignore: [],
          debug: false,
          
    rules: {
        subject: {
            required: true,
        },
        category: {
            required: true,
        },
        cdetails: {
            required: true,
        },
        customer_name: {
            required: true,
        },
        branch: {
            required: true,
        },
        address: {
            required: true,
        },
        email: {
            required: true,
        },
        mobile: {
            required: true,
        },
        acc_head: {
            required: true,
        },
        acc_number: {
            required: true,
        },
        //attachment: {
        //    required: true,
        //},
        'g-recaptcha-response':{
            gcvalidation: true,
        }
    },
    messages: {
        subject: {
            required: "Please Select Subject",
        },
        category: {
            required: "Please Select Category",
        },
        cdetails: {
            required: "Please Enter Details",
        },
        customer_name: {
            required: "Please Enter Name",
        },
        branch: {
            required: "Please Select Branch",
        },
        address: {
            required: "Please Enter Address",
        },
        email: {
            required: "Please Enter Email",
        },
        mobile: {
            required: "Please Enter Mobile",
        },
        acc_head: {
            required: "Please Select Acc Head",
        },
        acc_number: {
            required: "Please Enter Acc Number",
        },
        //attachment: {
        //    required: "Please Select Attachment",
        //},
        'g-recaptcha-response':{
                required:"Please Select Captcha",
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
  
  jQuery.validator.addMethod("gcvalidation", function (value, element) {  
            var v = grecaptcha.getResponse();
            if(v.length == 0){
                 //alert("You can't proceed!");
            } else {  
                //alert("Thank you");
            }  
            return grecaptcha.getResponse();  
        }, "Please Select Captcha");  


function isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
return false;
}
return true;
}
</script>
<!-- board of directors page css End -->
@include('footer')      