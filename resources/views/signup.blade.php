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
        <h1>Signup</h1>
        <h3>Scroll Down To Creat Your Own Account</h3>
    </div>
    <!-- end land -->

</div>
<!---end home --->
<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                    <a href="/signin" class="signup-image-link">I am already member</a>
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
