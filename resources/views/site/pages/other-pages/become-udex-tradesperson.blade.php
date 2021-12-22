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
                        If you’re interested in joining our Connect service, the first step is to express interest through this page. Once your request has been received, our team will be in touch to start the vetting process.
                    </div>
                    <div class="heading-desc p-0 mt-2">
                    We vet all our recommended tradespeople, in order to protect our customers from bad practices. If you’ve worked with our team in the past, do let us know. Otherwise, our team will go through your portfolio to get a sense of what work you’re suited to, and may even reach out to previous clients.
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

        {{-- Download Box --}}
        @include('site.pages.other-pages.sections.download-box')

        {{-- Quick Register --}}
        @include('site.pages.other-pages.sections.quick-register')
    </div>

    @include('site.pages.other-pages.sections.black-section-links')

    <div class="container">
        {{-- Only the very best --}}
        <section class="section-content only-the-very-best">
            <div class="row align-items-center">
                <div class="col">
                    <div class="heading-block">Only the very best</div>
                    <div class="text-block">
                        <p>Who you trust to build your project is one of the most important decisions you’ll make.
                            That’s why we want to make sure you’re making your selection from the best tradespeople on
                            the market.<br>Our team has been in the business for nearly 20 years, meaning we know how to
                            spot the best from the rest. We vet all our recommended professionals, as well as showing
                            you how to perform your own checks, so you have the knowledge to keep your home protected.
                        </p>
                    </div>
                </div>
                <div class="col-auto mb-5">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_are_building_regulations_2.png"
                             alt="What is UDEX Connect?">
                    </div>
                </div>
            </div>

            <div class="child-items center">
                <div class="row gx-5">
                    <div class="col-4">
                        <div class="item-inner">
                            <div class="heading">Avoid the cowboys</div>
                            <div class="text">Our experts can help you spot any dodgy practices, protecting you form
                                rogue traders. We’ll match you with professionals we’ve worked with before, offering a
                                proven track record and thorough vetting
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-inner">
                            <div class="heading">No extra cost</div>
                            <div class="text">Our Connect introduction service comes at zero cost to you - you only pay
                                for the service the professional provides. Share your requirements for free and start to
                                receive trusted quotes right away.
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-inner">
                            <div class="heading">Free advice & guidance</div>
                            <div class="text">We’ll walk you through the quotes professionals and specialists provide.
                                Rather than sifting through hundreds of quotes, we’ll recommend a selection that is
                                perfect for you and your project.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Review Section --}}
    @include('site.pages.other-pages.sections.review')
@endsection
