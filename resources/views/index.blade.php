<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Traffic - Store your files</title>
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
            <p style="text-align: right ;width: 100%;max-width:100%;height:auto;" ><a href="/index"><img src="img/log.png" ></a></p>
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
        <h1>Welcome to Share Traffic</h1>
        <h3> A safe place for all your files </h3>
        <a class="btn btn-outline-light btn-lg" href="/signup">Get Started</a>
    </div>
    <!-- end land -->

</div>
<!---end home --->


<!--- div2 --->
<div id="div2" class="offset">
    <div class="row" align="right">
        <div class="col-md-6" style="width: 100%;max-width:100%;height:auto;">
            <img src="img/files.jpg" >
        </div>

        <div class="col-md-6 narrow text-center">
            <h1>Store any file</h1>
            <p class="lead">Keep photos, stories, designs, drawings,</br>
                recordings, videos, and more. Your first</br> 15 GB of storage
                are free with a Google</br> Account.</p>
        </div>
    </div>
</div>
<!---Div2 --->

<!--- div3 --->

<div id="div3" class="offset">
    <div class="row" align="right">
        <img src="img/div3.jpg" style="width: 100%;max-width:100%;height:auto;">
    </div>
</div>
<!---div3 --->


<!--- div4 --->

<div id="div4" class="offset">
    <div class="row" align="right">
        <div class="col-md-6 narrow text-center">
            <h1>Store any file</h1>
            <p class="lead">Keep photos, stories, designs, drawings,</br>
                recordings, videos, and more. Your first</br> 15 GB of storage
                are free with a Google</br> Account.</p>
        </div>

        <div class="col-md-6">
            <img src="img/div4.png" style="width: 100%;max-width:100%;height:auto;">
        </div>
    </div>
</div>

<!---div4 --->


<!--- div5--->

<div id="div5" class="offset">

    <div class="row">
        <img src="img/divv55.jpeg" style="width: 100%;max-width:100%;height:auto;">
    </div>
</div>
<!---div5 --->




<!--- div6 --->
<div id="div6" class="offset">
    <div class="col-12 narrow text-center" style="padding-top: 100px; padding-bottom: 100px">
        <p>    <img src="img/log.png"></p>
        <p class="apple">Get started with Drive for free</p>
    </div>
</div>
<!---div6 --->

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
                    <p class="pull-left copyright"> Copyright © Share Traffic. All right reserved. </p>

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
<!--- End of Script Source Files -->

</body>
</html>
