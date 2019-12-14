<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/drive.css')   }}">

</head>
<body >


<header role="banner">
    <nav class="navbar navbar-expand-lg  bg-light">
        <div class="container-fluid">
            <div class = "gfg">
                <p style="text-align: center" ><a href="/index"><img src="img/log.png"></a></p>
            </div>

            <div class="navbar-nav ml-auto">
                <form method="post" class="search-form">
                    <span class="icon ion ion-search"></span>
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>

            <div class="collapse navbar-collapse" id="navbarsExample05" style="padding-left: 800px " >
                <ul class="navbar-nav pl-md-5 mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Signout</a>
                    </li>
                    <li class="nav-item" style="text-align: right">
                        <a class="nav-link" href="/account">Account</a>
                    </li>
                </ul>



            </div>
        </div>
    </nav>
</header>
<!-- END header -->

</body>
</html>
