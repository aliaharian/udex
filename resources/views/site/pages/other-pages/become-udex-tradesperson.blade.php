@extends('layouts.site.pages-master')

@section('page-title',  'Become a UDEX tradesperson')

@section('page-style',  'pages/pages.min.css')

@section('heading-lib')
    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/swiper-bundle.min.css') }}">
    <script src="{{ asset('public/assets/site/js/swiper-bundle.min.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <section class="page-info m-b-70">
            <div class="row align-items-center">
                <div class="col-7">
                    <div class="heading-title">Become a UDEX tradesperson</div>
                    <div class="heading-desc p-0 mt-2">Access 100s of high-quality projects in our intuitive online
                        supplier Dashboard
                    </div>
                    <div class="show-more"><a href="#quick-register">Register your interest</a></div>
                    <div class="callUsContainer">
                        <p>
                            or call us now on
                            <b> (+44)203 488 9822 </b>
                        </p>
                        <span>Mon-Fri 9am-6pm</span>
                    </div>
                </div>
                <div class="col-5">
                    <div class="page-icon w-auto">
                        <img class="w-auto"
                             src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/introImg.png"
                             alt="Become a UDEX tradesperson">
                    </div>
                </div>

            </div>
        </section>

        {{-- Join Growing Community --}}

        <section class="col-3-service center pb-5 mb-5 join-growing-community">
            <div class="heading-title">
                Join a growing community of Connect
                tradespeople across the UK
            </div>

            <div class="items">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="icon w-auto p-0-55">
                            <img class="w-100"
                                 src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/service1.png"
                                 alt="Join a growing community of Connect
                tradespeople across the UK">
                        </div>
                        <div class="name p-0-35">Get exclusive access to <span class="text-highlight">100+</span>
                            projects per month
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon w-auto p-0-55">
                            <img class="w-100"
                                 src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/service2.png"
                                 alt="Join a growing community of Connect
                tradespeople across the UK">

                        </div>
                        <div class="name p-0-35"><span class="text-highlight">150+</span> vetted tradespeople already on
                            board
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon w-auto p-0-55">
                            <img class="w-100"
                                 src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/service3.png"
                                 alt="Join a growing community of Connect
                tradespeople across the UK">

                        </div>
                        <div class="name ">Manage your projects using our online <span
                                class="text-highlight">Dashboard</span></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- What does a structural engineer do? --}}
        <section class="section-content pb-5">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="image-block">
                        <img class="w-100"
                             src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/why-should-i-join-udex.jpeg"
                             alt="What does a structural engineer do?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">Why should I join UDEX?</div>
                    <div class="text-block">
                        <p>
                            Every year, we introduce hundreds of customers to vetted local tradespeople through Connect,
                            ensuring they remain in safe hands throughout their projects. Whether you’re in
                            construction, carpentry, or interior design, we’re always on the lookout for stand-out
                            professionals.
                        </p>
                        <p>
                            By becoming a Connect tradesperson, you not only get to meet customers who are raring to go
                            on their build, but you also know they come with high-quality technical drawings from our
                            very own architectural team. We work closely with our specialists to make sure they have
                            everything they need to bring our designs to life.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        {{-- The Connect process --}}
        @include('site.pages.other-pages.sections.five-box-link')

        <section class="page-info m-b-70">
            <div class="row align-items-center">
                <div class="col-7">
                    <div class="heading-title">How do I apply?</div>
                    <div class="heading-desc p-0 mt-2">
                        If you’re interested in joining our Connect service, the first step is to express interest
                        through this page. Once your request has been received, our team will be in touch to start the
                        vetting process.
                    </div>
                    <div class="heading-desc p-0 mt-2">
                        We vet all our recommended tradespeople, in order to protect our customers from bad practices.
                        If you’ve worked with our team in the past, do let us know. Otherwise, our team will go through
                        your portfolio to get a sense of what work you’re suited to, and may even reach out to previous
                        clients.
                    </div>
                    <div class="show-more"><a href="#quick-register">Register your interest</a></div>
                    <div class="callUsContainer">
                        <p>
                            or call us now on
                            <b> (+44)203 488 9822 </b>
                        </p>
                        <span>Mon-Fri 9am-6pm</span>
                    </div>
                </div>
                <div class="col-5">
                    <div class="page-icon w-auto">
                        <img class="w-auto"
                             src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/how-do-i-apply.png"
                             alt="Become a UDEX tradesperson">
                    </div>
                </div>
            </div>
        </section>

        <section class="benefit-of-working-container">
            <div class="heading-title">Benefits of working with us</div>
            <div class="heading-title">Connect with our Dashboard</div>
            <img class="w-100"
                 src="{{ asset('public/assets/site/images/base/becomeUdexTradeperson') }}/introducePanel.png"
                 alt="Benefits of working with us">
            <div class="heading-title-2">Connect with our Dashboard</div>
            <p class="benefits-text">
                All of our tradespeople get to enjoy our Dashboard and have their own profile on display. Through this
                platform, you and your team can provide quotes, manage important documents, and communicate with our
                team from any phone, desktop, or tablet device.
            </p>
        </section>

        <section class="become-tradeperson-three-items row">
            <div class="col-md-4">
                <h4>
                    Access to 100+ projects a month
                </h4>
                <p>
                    Since 2017, we’ve worked on over 3000 UK projects and we’re only getting bigger! By joining Connect,
                    you’ll have access to hundreds of potential customers every month.
                </p>
            </div>
            <div class="col-md-4">
                <h4>
                    Support from our team
                </h4>
                <p>
                    Our Connect team is there to support both the customer and you. We’ll help ensure a smooth handover,
                    so you have everything you need to hit the ground running on-site. </p>
            </div>
            <div class="col-md-4">
                <h4>
                    Access to third-party services
                </h4>
                <p>
                    We work with an array of trades, so if you need a helping hand, you know exactly where to turn. Our
                    team is always happy to make introductions to help your own business grow. </p>
            </div>
        </section>


        {{-- Quick Register --}}
        @include('site.pages.other-pages.sections.quick-register-tradeperson')
    </div>


    {{-- Review Section --}}
    @include('site.pages.other-pages.sections.review')
@endsection

@section('footer-lib')
    <script src="{{ asset('public/assets/site/js/custom-select.js') }}"></script>

@endsection
