@extends('layouts.site.pages-master')

@section('page-title',  'Find a structural engineer for your project')

@section('page-style',  'pages/pages.min.css')

@section('heading-lib')
    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/swiper-bundle.min.css') }}">
    <script src="{{ asset('public/assets/site/js/swiper-bundle.min.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <section class="page-info">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="page-icon w-auto">
                        <img src="{{ asset('public/assets/site/images/example') }}/Find_a_structural_engineer_for_your_project.png" alt="Find a structural engineer for your project">
                    </div>
                </div>
                <div class="col-8">
                    <div class="heading-title">Find a structural engineer for your project</div>
                    <div class="heading-desc">Keep your project in good hands by using UDEX Connect to find vetted structural engineers.</div>
                </div>
            </div>
        </section>

        {{-- What does a structural engineer do? --}}
        <section class="section-content pb-5">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_does_a_structural_engineer_do.png" alt="What does a structural engineer do?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">What does a structural engineer do?</div>
                    <div class="text-block">
                        <p>Just as the name suggests, structural engineers are concerned with everything that makes your house stand up. They’re a vital part of the building regulations process and will work with UDEX to produce the technical equations needed to secure building control approval.</p>
                        <p>When starting the building regulations process, finding a structural engineer will be one of the very first steps.</p>
                    </div>
                    <div class="show-more"><a href="#quick-register">Find out more</a></div>
                </div>
            </div>
        </section>

        {{-- What will they provide? --}}
        <section class="section-content pb-5">
            <div class="row align-items-center">
                <div class="col">
                    <div class="heading-block">What will they provide?</div>
                    <div class="text-block">
                        <p>Your structural engineer will produce a set of technical drawings, which your contractor will need during the construction stage to make sure your home stays standing.</p>
                        <strong>Their calculations will breakdown…</strong>
                        <ul class="list-unstyled ps-3">
                            <li>▸ Materials you plan to use</li>
                            <li>▸ Site location</li>
                            <li>▸ Weight of the build</li>
                            <li>▸ Structural support needed</li>
                        </ul>
                        <p>In order to secure approval from either an approved inspector or your local building control, you must have these drawings.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_will_they_provide.png" alt="What does a structural engineer do?">
                    </div>
                </div>
            </div>
        </section>

        {{-- What does a structural engineer do? --}}
        <section class="section-content">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_is_UDEX_Connect copy.png" alt="What is UDEX Connect?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">What is UDEX Connect?</div>
                    <div class="text-block">
                        <p>As the leading residential architect in the UK, we’ve helped thousands of people extend up and down the country. And because we want nothing but the best for our homeowners, we make sure they’re in safe hands throughout their journey.</p>
                        <p>Our Connect service not only introduces you to vetted onsite professionals, but we’ll also guide you through the tendering process. We can provide you with expertise on everything from quotes, insurance, to payment plans. With UDEX, there’s never been a safer way to build.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- The Connect process --}}
        @include('site.pages.other-pages.sections.four-box-link')

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
                        <p>Who you trust to build your project is one of the most important decisions you’ll make. That’s why we want to make sure you’re making your selection from the best tradespeople on the market.<br>Our team has been in the business for nearly 20 years, meaning we know how to spot the best from the rest. We vet all our recommended professionals, as well as showing you how to perform your own checks, so you have the knowledge to keep your home protected.</p>
                    </div>
                </div>
                <div class="col-auto mb-5">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_are_building_regulations_2.png" alt="What is UDEX Connect?">
                    </div>
                </div>
            </div>

            <div class="child-items center">
                <div class="row gx-5">
                    <div class="col-4">
                        <div class="item-inner">
                            <div class="heading">Avoid the cowboys</div>
                            <div class="text">Our experts can help you spot any dodgy practices, protecting you form rogue traders. We’ll match you with professionals we’ve worked with before, offering a proven track record and thorough vetting</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-inner">
                            <div class="heading">No extra cost</div>
                            <div class="text">Our Connect introduction service comes at zero cost to you - you only pay for the service the professional provides. Share your requirements for free and start to receive trusted quotes right away.</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-inner">
                            <div class="heading">Free advice & guidance</div>
                            <div class="text">We’ll walk you through the quotes professionals and specialists provide. Rather than sifting through hundreds of quotes, we’ll recommend a selection that is perfect for you and your project.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Review Section --}}
    @include('site.pages.other-pages.sections.review')
@endsection
