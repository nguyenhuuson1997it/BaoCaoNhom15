<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V14</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="{{asset('')}}">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="source/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="source/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="source/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="source/css/util.css">
  <link rel="stylesheet" type="text/css" href="source/css/main.css">
  <!--===============================================================================================-->
</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        @if(session('flash_message'))
                <div class="alert alert-{{session('flash_level')}} ">
                    {{session('flash_message')}}
                </div>
                @endif
        <form class="login100-form validate-form flex-sb flex-w" method="post" action="{{route('post-adminlogin')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <span class="login100-form-title p-b-32">
            Account Login
          </span>

          <span class="txt1 p-b-11">
            Username     
          </span>
          
          <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
            <input class="input100" type="text" name="username" id="username"" >
            <span class="focus-input100"></span>
          </div> 
          <div class="col-md-12" style="margin-top:-30px;">
            <p id="error_username"></p>
          </div>               
          <span class="txt1 p-b-11">
            Password
          </span>
          <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="password" id="password">
          </div>
          
          <div class="flex-sb-m w-full p-b-48">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt3">
                Forgot Password?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="register" id="register">
              Login
            </button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
  <div id="dropDownSelect1"></div>
  <!--===============================================================================================-->
  <script src="source/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="source/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="source/vendor/bootstrap/js/popper.js"></script>
  <script src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="source/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="source/vendor/daterangepicker/moment.min.js"></script>
  <script src="source/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="source/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="source/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="source/js/login.js"></script>
  <!--===============================================================================================-->
</body>
</html>

