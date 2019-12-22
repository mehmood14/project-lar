<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Stellar Admin</title>

    <link rel="stylesheet" href="{{ asset('css/login.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/fixed.css')   }}">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

<!--- start home section --->
<div id="home">

    <!--- nav --->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <div class = "gfg">
            <p style="text-align: right" ><a href="/index"><img src="img/log.png"></a></p>
        </div>
        <div class="site-logo">
            <h4 style=" color: white; font-size: 1.1rem; font-weight: 700; letter-spacing: .3rem;">Share Traffic</h4>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--- end nav --->
    <!--- land page -->


    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner" style="background-image: url('computers.png')">

            </div>
        </div>
    </div>

    <div class="caption text-center">
        <h1>Already have an account?</h1>
        <h3> Scroll Down And Signin </h3>
    </div>
    <!-- end land -->

</div>
<!---end home --->
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class=" p-5">
                        <div class="brand-logo">
                            <p> <img src="img/log.png"></p></br>
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>

                        <form action="/examples/actions/confirmation.php" class="needs-validation" method="post" novalidate>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                <div class="invalid-feedback">Please enter your password to continue.</div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn btn-default btn-lg btn-block">SIGN IN</button></br>
                            </div>

                            <div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div> </br>

                            <div class="icons" style="text-align: center;" style="display: inline-block;">
                                <a class="btn btn-social-icon btn-twitter"  href= "https://twitter.com/?lang=en>">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a class="btn btn-social-icon btn-google" href="https://mail.google.com/mail/">
                                    <span class="fa fa-google"></span>
                                </a>

                            </div>


                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="/signup" class="text-primary">Create</a>
                            </div>

                        </form>

                        <!-- JavaScript for disabling form submissions if there are invalid fields -->
                        <script>
                            // Self-executing function
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    const forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    const validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="div7" class="offset">
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4> Share Traffic </h4>
                    </div>
                    <div class="col-lg-3 col-sm-2 col-xs-3">
                        <h3> Contact </h3>
                        <ul>
                            <li><a class="email"href="#"> insert email here </a></li>
                            <br/>
                            <li> <p> address line one </p> </li>
                            <li> <p> address line two </p> </li>
                        </ul>
                    </div>


                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left copyright"> Copyright © Share Traffic. All right reserved. </p>

                </div>
            </div>
            <!--/.footer-bottom-->

    </footer>
</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/style.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
