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
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg text-center">
                <br> <br><br> <br>

                <a href="view.html" class="btn btn-outline-secondary" style="height:250px; width: 250px; color: #2e9ece; font-size: 40px; border: solid">View Files
                </a>

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
