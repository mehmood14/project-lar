<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/acc.css')   }}">

    <title>Title</title>
</head>

<body>

<div class="form-gap"></div>
<div class="container" >
    <div class="row d-flex justify-content-center" >
        <div class="col-md-5 col-md-offset-5" >
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        <div class="panel-body">

                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <label>Current Password</label>
                            <div class="form-group pass_show">
                                <input type="password" value="faisalkhan@123" class="form-control" placeholder="Current Password">
                            </div>
                            <label>New Password</label>
                            <div class="form-group pass_show">
                                <input type="password" value="faisal.khan@123" class="form-control" placeholder="New Password">
                            </div>
                            <label>Confirm Password</label>
                            <div class="form-group pass_show">
                                <input type="password" value="faisal.khan@123" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                    </div>
                    <input type="hidden" class="hide" name="token" id="token" value="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>
