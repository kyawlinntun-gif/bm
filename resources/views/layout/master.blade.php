<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- -------- Start of Style CSS -------- --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    {{-- -------- End of Style CSS -------- --}}

    {{-- -------- Start of Bootstrap CSS -------- --}}
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    {{-- -------- End of Bootstrap CSS -------- --}}

    {{-- -------- Start of Fontawesome CSS -------- --}}
    <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
    {{-- -------- End of Fontawesome CSS -------- --}}

</head>
<body>
    {{-- -------- Start of Nav -------- --}}
        @include('layout.nav')
    {{-- -------- End of Nav -------- --}}

    {{-- -------- Start of Content -------- --}}
        @yield('content')
    {{-- -------- End of Content -------- --}}


    {{-- -------- Start of jquery JS -------- --}}
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    {{-- -------- End of jquery JS -------- --}}
    {{-- -------- Start of Boostrap JS -------- --}}
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    {{-- -------- End of Boostrap JS -------- --}}

    {{-- -------- Start of Accordion Javascript -------- --}}
    <script src="{{ asset('/js/accordion.js') }}"></script>
    {{-- -------- End of Accordion Javascript -------- --}}
</body>
</html>
