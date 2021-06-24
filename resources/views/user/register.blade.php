<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/register/bootstrap/css/bootstrap.min.css')}}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/register/animate/animate.css')}}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/register/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/register/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/register/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../../public/register/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('../../css/register/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../../css/register/main.css')}}">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/8b03973819.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="/user/register" method="post">
                @csrf
					<span class="login100-form-title p-b-49">
						Create An Account
					</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Fullname is required">
                    <span class="label-input100">Fullname</span>
                    <input class="input100" type="text" name="fullname" placeholder="Type your fullname">
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Type your email">
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Phone is required">
                    <span class="label-input100">Phone</span>
                    <input class="input100" type="text" name="phone" placeholder="Type your phone">
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Address is required">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" placeholder="Type your address">
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="ID card is required">
                    <span class="label-input100">Identity Card</span>
                    <input class="input100" type="text" name="id_card" placeholder="Type your id card">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('../../../public/register/jquery/jquery-3.2.1.min.js')}}}"></script>
<!--===============================================================================================-->
<script src="{{asset('../../../public/register/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('../../../public/register/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('../../../public/register/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('../../../public/register/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('../../../public/register/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('../../../public/register/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('../../../public/register/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('../../../public/js/register/main.js')}}"></script>

</body>
</html>
