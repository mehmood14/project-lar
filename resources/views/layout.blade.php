<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="layout1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@section('navbar')
    <nav class="navbar navbar-expand-sm bg-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a id="index" class="navbar-brand" href="{{url('welcome')}}">welcome</a>
            </li>

            <li class="nav-item">
                <a id="index" class="navbar-brand" href="{{url('about')}}">about</a>
            </li>
        </ul>

    </nav>

</body>
</html>
