@include('header')
<div class="inner-title">
<div class="text-center">
<h2>Complaint Feedback Form</h2>

<div class="pagination justify-content-center">
<ul class="d-flex justify-content-center mt-2">
<li><a href="{{ URL::to('/')}}">Home</a></li>
<li><a href="#">&nbsp;<i class="bi bi-chevron-right"></i>&nbsp;</a></li>
<li class="active"> Complaint Feedback Form</li>
</ul>
</div>
</div>
</div>
<section class="complaint-form">
<div class="container">
<div class="form-wrap">
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
                    <form enctype="multipart/form-data" action="{{ route('complaint_form.post') }}" method="POST" name="complaint_form" id="complaint_form"><!-- <form id="survey-form"> -->
<div class="row">
<div class="col-md-6">
@csrf
<div class="form-group">
<label>Select Subject</label>
<select id="subject" name="subject" class="form-control" required>
<option disabled selected value>Select</option>
<option value="Customer Suggestion">Customer Sugession</option>
<option value="Customer Complaint">Customer Complaint</option>
</select>
              @if ($errors->has('subject'))
                <span class="text-danger">{{ $errors->first('subject') }}</span>
              @endif
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Select Category</label>
<select id="category" name="category" class="form-control" required>
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
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Address</label>
<textarea id="address" rows="5" class="form-control" name="address" placeholder="Enter Address"></textarea>
                  @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                  @endif
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Select Branch</label>
<select id="branch" name="branch" class="form-control" required>
      <option value="">Select Branch</option>
      <!-- <option value="Head Office">Head Office</option> -->
      <option value="Main Branch">Main Branch</option>
      <option value="Paratwada">Paratwada</option>
      <option value="Badnera">Badnera</option>
      <option value="New Cotton Market Road">New Cotton Market Road</option>
      <option value="Achalpur">Achalpur</option>
      <option value="Chandur Bazar">Chandur Bazar</option>
      <option value="Dhamangao Rly">Dhamangao Rly</option>
      <option value="Nagpur">Nagpur</option>
      <option value="Warud">Warud</option>
</select>

       @if ($errors->has('branch'))
          <span class="text-danger">{{ $errors->first('branch') }}</span>
       @endif 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Select Account Head</label>
<select id="acc_head" name="acc_head" class="form-control" required>
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
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Complaint Details</label>
<textarea id="cdetails" class="form-control" name="cdetails" placeholder="Enter Complaint Details"></textarea>
              @if ($errors->has('cdetails'))
                <span class="text-danger">{{ $errors->first('cdetails') }}</span>
              @endif
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label id="name-label" for="name">Customer Name</label>
<input type="text" name="customer_name" id="customer_name" placeholder="Enter Customer Name" class="form-control" required>
              @if ($errors->has('customer_name'))
                <span class="text-danger">{{ $errors->first('customer_name') }}</span>
              @endif
</div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label id="name-label" for="acc_number">Account Number</label>
        <input type="password" name="acc_number" id="acc_number" placeholder="Enter Account Number" class="form-control" 
               required pattern="\d{15}" maxlength="15" title="Please enter exactly 15 digits."  oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        @if ($errors->has('acc_number'))
            <span class="text-danger">{{ $errors->first('acc_number') }}</span>
        @endif
    </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
  <label id="name-label" for="name">Emaill</label>
  <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(in|co\.in|org\.in|net\.in|gov\.in|ac\.in|edu\.in|mil\.in|gen\.in|firm\.in|ind\.in|res\.in|bbs\.in)$" title="Please enter a valid email address with a valid Indian extension like .in, .co.in, .org.in, .net.in, .gov.in, .ac.in, .edu.in, .mil.in, .gen.in, .firm.in, .ind.in, .res.in, or .bbs.in." required>
  @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
  @endif
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label id="name-label" for="name">Mobile Number</label>
<input type="text" onkeypress="return isNumber(event)" maxlength="10" pattern="[1-9]{1}[0-9]{9}" minlength="10" name="mobile" id="mobile" placeholder="Enter Mobile Number" class="form-control" required>
                  @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                  @endif
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group choose">
<label for="formFile" class="form-label">Choose File</label>
<input class="form-control" type="file" id="attachment" placeholder="Choose file" name="attachment" accept=".pdf">
                  @if ($errors->has('attachment'))
                    <span class="text-danger">{{ $errors->first('attachment') }}</span>
                  @endif
</div>
</div>
<div class="col-md-6">
<div class="g-recaptcha float-end" data-sitekey="{{ $recaptchaSitekey }}"></div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
</div>
</div>
</form>
</div>
</div>
</section>
</div>


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
            email: true,
            pattern: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(in|co\.in|org\.in|net\.in|gov\.in|ac\.in|edu\.in|mil\.in|gen\.in|firm\.in|ind\.in|res\.in|bbs\.in)$/
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
            email: "Please enter a valid email",
            pattern: "Please enter a valid email address with a valid Indian extension like .in, .co.in, etc."
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

@include('footer')