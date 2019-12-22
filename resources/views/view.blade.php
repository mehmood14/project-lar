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

<div class="container pt-5 page myFiles">
    <form style="margin:0">

        <div class="row">
            <div class="col-md-4 folders" style="background-color: #f8f9fa">
                <div class="title-wrap d-flex flex-wrap justify-content-between align-items-center">
                    <h1>My Files</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFolder">
                        Add Folder <i class="far fa-plus-circle"></i>
                    </button>
                </div>
                <div class="browse-wrap d-block position-relative" >
                    <span>Folders</span>
                    <ul class="folder-list" id="folder_list">
                        <li class="d-block position-relative">
                            <a href="?op=my_files&amp;fld_id=9943" class="folder-item d-block position-relative">
                                <i class="fas fa-folder"></i>
                                xz
                            </a>
                            <a class="right-menu dropdown-toggle" href="#" role="button" id="dropdownFolderMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownFolderMenu">
                                <h6 class="dropdown-header">0 Files</h6>
                                <a class="dropdown-item" href=""><i class="far fa-external-link"></i> Open</a>
                                <a class="dropdown-item" href="" target="_blank"><i class="far fa-share-all"></i> Share</a>
                                <a class="dropdown-item" href=""><i class="far fa-edit"></i> Rename</a>
                                <a class="dropdown-item del" href="" name="delete" onclick="return Dialogs.confirm('Delete this folder with all files inside?', this);">
                                    <i class="far fa-trash"></i> Delete
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="storage-space d-flex flex-wrap justify-content-between align-items-center">
                    <div class="used">
                        <b>12 KB</b> of <b>100.0 GB</b>
                        <div class="files_total">1 Files</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 m-0 files" style="background-color: #f8f9fa;border: 2px solid black">
                <div class="input-group search-files search">
                    <input type="text" id="key" name="key" value="" class="form-control" placeholder="Type here to search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" value="Search">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="file-list">
                    <ul id="files_list">
                        <li class="top-bar d-flex align-items-center justify-content-between">
                            <div class="checkbox">
                                <input type="checkbox" name="file_id" id="all" class="selall" value="0">
                                <label for="all"></label>
                            </div>
                            <div class="name">
                                <a href="?fld_id=0&amp;op=my_files&amp;sort_field=file_name&amp;sort_order=down">Filename / Description</a>
                            </div>
                            <div class="downloads">
                                <a href="?fld_id=0&amp;op=my_files&amp;sort_field=file_downloads&amp;sort_order=down"><i class="far fa-cloud-download"></i></a>
                            </div>
                            <div class="premium-only">
                                <i class="fas fa-gem"></i>
                            </div>
                            <div class="published">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="dropdown"></div>
                        </li>
                        <li class="file-item d-flex flex-wrap align-items-center justify-content-between">
                            <div class="checkbox">
                                <input type="checkbox" name="file_id" id="file_985497" value="985497">
                                <label for="file_985497"></label>
                            </div>
                            <div class="name">
                                <a href="https://douploads.net/kxlq322flo04" target="_blank">
                                    files.jpg
                                </a>
                                <span>Size: <strong>12 KB</strong></span>
                                <span>Uploaded: <strong>2019-12-22</strong></span>
                            </div>
                            <div class="downloads">
                            </div>
                            <div class="premium-only">
                                <div class="checkbox ">
                                    <input type="checkbox" id="pro_985497" name="file_premium_only" onclick="setFileFlag([985497], 'file_premium_only', this.checked);">
                                    <label for="pro_985497"></label>
                                </div>
                            </div>
                            <div class="published">
                                <div class="checkbox ">
                                    <input type="checkbox" id="public_985497" name="file_public" onclick="setFileFlag([985497], 'file_public', this.checked);">
                                    <label for="public_985497"></label>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="file-actions dropdown-toggle" type="button" id="dropdownMenuFile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuFile">
                                    <a class="dropdown-item" target="_blank" href="https://douploads.net/kxlq322flo04"><i class="far fa-cloud-download"></i> Download</a>
                                    <a class="dropdown-item" href="?op=file_edit&amp;file_code=kxlq322flo04"><i class="far fa-edit"></i> Edit</a>
                                    <a class="dropdown-item del" href="?op=my_files&amp;del_code=kxlq322flo04&amp;token=c2cf7794c6d5d310c1988de0ba8d0af0" name="delete" onclick="return Dialogs.confirm('Delete this file?', this);"><i class="far fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                <div class="browse-action d-block d-lg-flex justify-content-between align-items-center">
                    <select name="to_folder" class="form-control w-20">
                        <option disabled="" selected="">- Select folder -</option>
                        <option value="0"> / </option>
                        <option value="9943">xz</option>
                    </select>
                    <div class="pt-3 pb-3 pl-1 d-block d-lg-flex justify-content-between">
                        <button class="btn btn-primary mr-1 mb-2 mb-lg-0" name="to_folder_copy" value="Copy files" type="submit">Copy <i class="far fa-copy"></i></button>
                        <button class="btn btn-primary mr-1 mb-2 mb-lg-0" name="to_folder_move" value="Move files" type="submit">Move <i class="far fa-arrows"></i></button>


                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

</body>
</html>
