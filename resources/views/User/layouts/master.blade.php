<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/Site/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Site/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Site/css/styles.css') }}" />
    <title>@yield('title')</title>
</head>
<body>

@include('User.layouts.navbar')
@yield('content')
<div class="side-overlay panel-responsive-btn panel-responsive-close"></div>

<script src="{{ asset('assets/Site/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/Site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/Site/js/main.js') }}"></script>
</body>
</html>
