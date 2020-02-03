<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/flashy.css') }}">
    <title>Smart Events</title>
</head>
<body>
    @include('layouts/partials/_nav')

    <div class="container pt-5">

        @if(Session::has('notification.msg'))
            <div class="alert alert-{{ Session::get('notification.type') }}">
                {{ Session::get('notification.msg') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="{{ asset('/js/flashy.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    @include('flashy::message')
</body>

</html>