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

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>mehmood</span> <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/account"><i class="far fa-user-cog"></i> My Account</a>
                        <a class="dropdown-item" href="/view"><i class="far fa-file-export"></i> File Manager</a>
                        <div class="dropdown-divider"></div>
                        <a href="/index" class="dropdown-item logout"><i class="far fa-power-off"></i> Logout</a>
                    </div>
                </li>

            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<!-- <div class="top-shadow"></div> -->

<div class="container-fluid">
    <br> <br> <br> <br> <br> <br> <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <h1 class="text-center">File Upload</h1>

                <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                <div class="file-upload">
                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File</button>

                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text">
                            <h3>Drag and drop a file or select Add File</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                            <button type="button" onclick="removeUpload()" class="upload-image">Upload <span class="image-title">Uploaded Image</span></button>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg text-center">
                <br> <br><br> <br>

                <div class="asdf">
                <a href="/view" class="btn btn-outline-secondary">View Files
                </a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });

    </script>


</body>
</html>
