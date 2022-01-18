<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title') | UDEX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/site/images/base/') }}/udex-fav.jpeg">

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
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="branding-logo">
                    <a href="https://udex.co.uk/"><img width="128" src="{{ asset('public/assets/site/images/base/udai-black.png') }}" alt="UDEX"></a>
                </div>
            </div>
            <div class="col-8 right">
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
                <div class="col-md-3 col-4 mb-md-0 mb-3">
                    <div class="widget-inner">
                        <div class="heading-widget">Office Address</div>
                        <div class="widget-content">
                            <div class="blank-text">
                                UDEX<br> International House,<br> 185 Tower Bridge Road,<br> London, SE1 2UF<br> <a href="mailto:Info@udex.co.uk">Info@udex.co.uk</a><br> <a href="tel:+442034889822">(+44)2034889822</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-4 mb-md-0 mb-3">
                    <div class="widget-inner">
                        <div class="heading-widget">Opening Hours</div>
                        <div class="widget-content">
                            <div class="blank-text">
                                Monday — Friday 10am – 6pm<br> Saturday — 11am – 3pm<br> Sunday — Closed
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4 mb-md-0 mb-3">
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
                <div class="col-md-4 col-12 mb-md-0 mb-3">
                    <div class="widget-inner">
                        <div class="heading-widget">Philosophy</div>
                        <div class="widget-content">
                            <div class="blank-text">
                                “We have reached a new era in Architecture. At UDEX, designs evolve through our unique algorithmic process; generating solutions that are adaptable to their environment and client needs.”
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

</body>
</html>
