<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/main.css') }}">

    <script src="{{ url('storage/js/jquery.js') }}"></script>
    <script src="{{ url('storage/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('storage/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('storage/js/main.js') }}"></script>
</head>

<body>
    @yield('content')
</body>

</html>
