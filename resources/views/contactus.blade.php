@include('header')
<meta name="robots" content ="noindex, nofollow">
<div class="inner-title">
<div class="text-center">
<h2>Contact Us</h2>

<div class="pagination justify-content-center">
<ul class="d-flex justify-content-center mt-2">
<li><a href="{{ URL::to('/')}}">Home</a></li>
<li><a href="#">&nbsp;<i class="bi bi-chevron-right"></i>&nbsp;</a></li>
<li class="active"> Contact Us</li>
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
<form action="{{ route('contactus.post') }}" method="POST" name="contactForm" id="contactForm">
@csrf
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label id="name-label" for="name">First Name</label>
<input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class="form-control" required>
@if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
              @endif
</div>
<div class="form-group">
<label id="name-label" for="name">Last Name</label>
<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control" required>
@if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
              @endif
</div>
<div class="form-group">
<label id="name-label" for="name">Email</label>
<input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" required>
@if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
</div>
<div class="form-group">
<label>Message</label>
<textarea id="comments" class="form-control" name="comment" placeholder="Enter Message"></textarea>
@if ($errors->has('comment'))
                <span class="text-danger">{{ $errors->first('comment') }}</span>
              @endif
</div>
<div class="form-group d-flex">
<div class="g-recaptcha float-start"  data-sitekey="{{ $recaptchaSitekey }}">
</div>
</div>
<div class="form-group">
<div class="submit-btn">
<button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
</div>
</div>
</div>
<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14906.12884868636!2d77.7518008!3d20.9311318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80c0c5e73af9bf23!2sAbhinandan%20Urban%20Co-Op%20Bank%20Ltd!5e0!3m2!1sen!2sin!4v1612850443486!5m2!1sen!2sin" width="600" height="550" frameborder="0" style="border:0;max-width: 100%;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
</form>
</div>
</div>
</section>
</div>

    <script src="{{asset('resources/js/jquery.validate.min.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
     <script>
$('#contactForm').validate({
        ignore: [],
          debug: false,
    rules: {
        first_name: {
            required: true,
        },
        last_name: {
            required: true,
        },
        email: {
            required: true,
        },
        comment: {
            required: true,
        },
        'g-recaptcha-response':{
            gcvalidation: true,
        }
    },
    messages: {
        first_name: {
            required: "Please Enter First Name",
        },
        last_name: {
            required: "Please Enter Last Name",
        },
        email: {
            required: "Please Enter Email",
        },
        comment: {
            required: "Please Enter Comment",
        },
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
  
</script>
<!-- board of directors page css End -->
@include('footer')