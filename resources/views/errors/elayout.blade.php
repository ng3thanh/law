<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href='{{ asset("$logo->favicon") }}' type="image/x-icon">
    <link rel="icon" href='{{ asset("$logo->favicon") }}' type="image/x-icon">
    <link href="{{ asset('web/css/errors.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    @yield('css')
</head>


<body>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    @yield('script')
</body>
</html>
