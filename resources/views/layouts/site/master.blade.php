<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title') | UDEX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<<<<<<< HEAD
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/site/images/base/') }}/udai.png">
=======
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/site/images/base/') }}/udex-fav.jpeg">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969

    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/pages/profile/profile.css') }}">

    {{-- Page Style --}}
{{--    <link href="{{ asset('public/assets/site/styles/pages') }}/@yield('page-style')" type="text/css" rel="stylesheet">--}}

    {{-- Page Responsive Style --}}
    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/responsive/base.min.css') }}">
{{--    <link href="{{ asset('public/assets/site/styles/pages') }}/@yield('page-style-responsive')" type="text/css" rel="stylesheet">--}}

    <script src="{{ asset('public/assets/site/js/theme-libs.js') }}"></script>
    @yield('heading-lib')
</head>
<body class="@yield('body-class')">
@yield('content')

@yield('footer-lib')

<script src="{{ asset('public/assets/site/js/footer.js') }}"></script>

</body>
</html>
