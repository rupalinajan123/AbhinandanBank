@extends('admin.layout.login_layout')

@section('content')
<body class="login-page" style="min-height: 496.781px;">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><img src="assets/admin/images/logo.png"></a>
    </div>

    <div class="card">
      <div class="card-body login-card-body">
        <h5 class="login-box-msg">Sign in to start your session</h5>
         @if (session('success'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
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
        <form action="{{ route('login.post') }}" method="POST" name="loginform" id="loginform">
          @csrf
          <div class="input-group mb-3">
            <input type="text" id="email_address" class="form-control" name="email"  autofocus placeholder="Email or Username">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" name="password"  placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="row">
            <!-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label> 
              </div>
            </div> -->
            
              <div class="col-4">
               <button type="submit" onClick="encryptPassword()" class="btn btn-primary btn-block">Sign In</button>
            </div>   
          </div>
        </form>

        <!-- <p class="mb-0">
          <a href="{{ route('register') }}" class="text-center">Register</a>
        </p> -->
      </div>

    </div>
  </div>
</body>

<script src="{{asset('resources/js/jquery.min.js')}}"></script>
<script src="{{asset('resources/js/jquery.validate.min.js')}}"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>-->
<script src="https://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha256.js"></script>
     <script>
    
        function encryptPassword() {
        // Validate the form using jQuery Validate
        if ($('#loginform').valid()) {
            var password = document.getElementById('password').value;

            // Use Base64 encoding for the password
            var encodedPassword = btoa(password);
            console.log('Encoded Password:', encodedPassword);

            // Set the encoded password as a hidden input in the form
            document.getElementById('password').value = encodedPassword;

            // Submit the form
            document.getElementById('loginform').submit();
        }
     }


    // jQuery Validate settings
    $('#loginform').validate({
        ignore: [],
        rules: {
            email: {
                required: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "Please Enter Email or Username",
            },
            password: {
                required: "Please Enter Password",
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
</script>
@endsection