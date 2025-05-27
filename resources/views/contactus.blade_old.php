@include('header')
<div class="innerBanner">
  <div class="text_ib">
    <h5>Contact Us</h5>
    <ol class="">
      <li><a href="#">Home</a></li>
      <li><a href="#">&nbsp;/&nbsp;</a></li>
      <li class="active">Contact Us</li>
    </ol>
  </div>
</div>
<section class="innerPagetext">

  <div class="container ">
    <div class="careerBox p-4">
      <div class="row">


        <div class="col-sm-6">
          <h3>Abhinandan Urban Co-Op Bank Ltd</h3>
          <p class="text-justify">Prabhat Chowk, near Prabhat Theater, Amravati, Maharashtra 444601</p>
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
          <div class="contact-form">
            <div class="form-group">
              <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
              @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
              @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" placeholder="Enter Your Message" id="comment" name="comment"></textarea>
              @if ($errors->has('comment'))
                <span class="text-danger">{{ $errors->first('comment') }}</span>
              @endif
            </div>
            
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
            
            
            
            <div class="form-group">
              <button type="submit" class="btn btn-blue">Submit</button>
            </div>
          </div>
          </form>
        </div>

        <div class="col-md-6 col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14906.12884868636!2d77.7518008!3d20.9311318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80c0c5e73af9bf23!2sAbhinandan%20Urban%20Co-Op%20Bank%20Ltd!5e0!3m2!1sen!2sin!4v1612850443486!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

      </div>

      
    </div>

  </div>

</section>

     <script src="{{asset('resources/js/jquery.min.js')}}"></script>
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