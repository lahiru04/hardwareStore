<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body class="account-page">

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="account-content">
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                            <div class="login-logo logo-normal">
                                <img src="assets/img/logo.png" alt="img">
                            </div>
                            <a href="index" class="login-logo logo-white">
                                <img src="assets/img/logo-white.png"  alt="">
                            </a>
                            <div class="login-userheading">
                                <h3>Sign In</h3>
                                <h4>Please login to your account</h4>
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input id="email" type="text" placeholder="Enter your email address">
                                    <img src="assets/img/icons/mail.svg" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input id="password" type="password" class="pass-input" placeholder="Enter your password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login">
                                <div class="alreadyuser">
                                    <h4><a href="forgetpassword" class="hover-a">Forgot Password?</a></h4>
                                </div>
                            </div>
                            <div class="form-login">
                                <a id="btnLogin" class="btn btn-login" >Sign In</a>
                            </div>

                            <div class="signinform text-center">
                                <h4>Don't have an account?  <a href="{{ url('/signup') }}" class="hover-a">Sign Up</a></h4>
                            </div>

                        </div>
                    </div>
                    <div class="login-img">
                        <img src="assets/img/login.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <!-- Feather Icon JS -->
        <script src="assets/js/feather.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>


        <script>
$(document).ready(function () {
    $('#btnLogin').click(function () {

        let email = $('#email').val();
        let password = $('#password').val();


        $.ajax({
//            url: '/login', // Replace with the actual URL
            url: "{{ url('/sign-in') }}",
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                email: email,
                password: password
            }

            ,
            success: function (response) {
                // Handle the response from the server
                console.log(response);
                window.location.href = response.url;
                /*   var jsonString = JSON.stringify(response);
                 var jsonObject = JSON.parse(jsonString);
                 
                 if(jsonObject.type === 0)
                 {
                 Swal.fire({
                 icon: 'error',
                 title: 'Error',
                 text: jsonObject.message,
                 confirmButtonColor: '#FF9F43',
                 });
                 }else
                 {
                 window.location.href ='index';
                 }
                 */

            }

            ,
            error: function (xhr, status, error) {
                // Handle any errors that occurred during the Ajax call
                console.log(error);
            }
        });

    });

});


        </script>

    </body>
</html>