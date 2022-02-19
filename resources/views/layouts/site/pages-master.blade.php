<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title') | UDEX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/site/images/base/') }}/udex-fav.jpeg">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/site/images/base/') }}/udex-fav.jpeg">

    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/pages/other/base/style.min.css') }}">
    <link href="{{ asset('public/assets/site/styles/pages') }}/@yield('page-style')" type="text/css" rel="stylesheet">

    {{-- Page Responsive Style --}}
    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/responsive/base.min.css') }}">

    <script src="{{ asset('public/assets/site/js/theme-libs.js') }}"></script>

    @yield('heading-lib')

</head>
<body class="@yield('body-class')">

{{-- Page Header --}}
<header class="page-header">
    <div class="container-fluid m-w-1425px">
        <div class="row">
            <div class="col-xl-2 col-lg-4 col-sm-4 col-4">
                <div class="branding-logo">
                    <a href="https://udex.co.uk/"><img width="128" src="{{ asset('public/assets/site/images/base/udai-black.png') }}" alt="UDEX"></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-1 col-md-1 col-sm-1 col-1">
                <ul class="navBar-menu">
                    <li><a href="https://udex.co.uk/">home</a></li>
                    <li><a href="https://udex.co.uk/contactus/">contact</a></li>
                    <li><a href="https://udex.co.uk/project/">projects</a></li>
                    <li><a href="https://udex.co.uk/services/">services</a></li>
                    <li><a href="https://udex.co.uk/development/">development</a></li>
                    <li><a href="https://udex.co.uk/blog/">blog</a></li>
                    <li><a href="https://udex.co.uk/aboutus/">about us</a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-7 col-sm-7 col-7 right">
                <div class="fn-btn get-an-instant-quote">
                    <a href="{{ url('design-quote') }}">Get an instant quote</a>
                </div>
                <div class="fn-btn auth-btn">
                    @if(auth()->check())
                        <a href="{{ url('profile/project') }}">My Account</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>
                    @endif
                </div>
                <div class="menu-toggle" onclick="handleToggleMenu">
                    <i class="fa fa-bars"></i>
                </div>
            </div>

        </div>
    </div>
</header>

<main class="main-page">
    @yield('content')
</main>

{{-- Page Footser --}}
<footer class="page-footer">
    <div class="container">
        <div class="footer-main-content">
            <div class="row">
                <div class="col-3">
                    <div class="widget-inner">
                        <div class="heading-widget">Office Address</div>
                        <div class="widget-content">
                            <div class="blank-text">
                                UDEX<br> International House<br> 64 Nile Street<br> London, N1 7SR<br> Info@udex.uk<br> (+44)7807059059
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="widget-inner">
                        <div class="heading-widget">Opening Hours</div>
                        <div class="widget-content">
                            <div class="blank-text">
                                Monday — Friday 10am – 6pm<br> Saturday — 11am – 3pm<br> Sunday — Closed
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="widget-inner">
                        <div class="heading-widget">Social</div>
                        <div class="widget-content">
                            <nav class="navigation">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/udai.uk/"><i class="fab fa-facebook-f"></i>Facebook</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/udai.uk/"><i class="fab fa-instagram"></i>Instagram</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/company/udai"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="widget-inner">
                        <div class="heading-widget">Shortcuts</div>
                        <div class="widget-content">
{{--                            <div class="blank-text">--}}
{{--                                “We have reached a new era in Architecture.<br> Here at UDEX, designs get evolved through our unique algorithmic process; resulting in generating solutions that are adaptable to their environment and needs.”--}}
{{--                            </div>--}}
                            <div class="footerLinks">
                                <ul>
                                    <li><a href="https://udex.co.uk/aboutus/">About</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="{{url('become-udex-tradesperson')}}">Trade</a></li>
                                    <li><a href="https://udex.co.uk/project/">Projects</a></li>
                                    <li><a href="https://udex.co.uk/contactus/">Contact</a></li>
                                    <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{url('terms-of-use')}}">Terms of use</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="row">
                <div class="col-6">© Copyright</div>
                <div class="col-6 right"></div>
            </div>
        </div>
    </div>
</footer>
@yield('footer-lib')

<script src="{{ asset('public/assets/site/js/footer.js') }}"></script>
<script>
    function handleToggleMenu(){
        $('.navBar-menu').toggleClass('navBar-menu-open');
    }
</script>
</body>
</html>
