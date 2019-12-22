<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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

    <title>Share Traffic - Store your files</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')   }}">

    <link rel="stylesheet" href="{{ asset('css/style.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/fixed.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/login.css')   }}">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--- start home section --->
<div id="home">

    <!--- nav --->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <div class = "gfg">
            <p style="text-align: right" ><a href="/index"><img src="img/log.png" ></a></p>
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
            <div class="home-inner" style="background-image: url('computers.png') ">

            </div>
        </div>
    </div>

    <div class="caption text-center">
        <h1>Contact Us</h1>
        <h3>Contact Us Anytime </h3>
    </div>
    <!-- end land -->

</div>
<!---end home --->


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper" style="width: 40%>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class=" p-5">

                        <h4>Send us a message</h4>

                        <form >
                            <div class="form-group">
                                <label for="inputName">Username</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label for="Textarea2">Message</label>
                                <textarea class="form-control rounded-0" id="Textarea2" rows="3" placeholder="Your Message"></textarea>
                            </div>

                            <div class="button">
                                <button type="submit" class="btn btn-default btn-lg btn-block">Send</button></br>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--- footer --->
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
                    <p class="pull-left copyright"> Copyright © Footer 2014. All right reserved. </p>

                </div>
            </div>
            <!--/.footer-bottom-->

    </footer>
</div>
<!---footer--->

<!--- Script Source Files -->
<script src="{{ asset('js/style.js')   }}"></script>


<script src="{{ asset('js/bootstrap-4.1.3-dist/js/bootstrap.min.js')   }}"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<!--- End of Script Source Files -->

</body>
</html>
