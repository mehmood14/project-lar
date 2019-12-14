<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/su.css')   }}">


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
<div class="main">

    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                    <a href="/signup" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/style.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
