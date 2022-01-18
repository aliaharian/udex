@extends('layouts.site.pages-master')

@section('page-title',  'Find a party wall surveyor for your project')

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
                        <img src="{{ asset('public/assets/site/images/example') }}/Find_a_party_wall_surveyor_for_your_project.png" alt="Find a structural engineer for your project">
                    </div>
                </div>
                <div class="col-8">
                    <div class="heading-title">Find a party wall surveyor for your project</div>
                    <div class="heading-desc">Keep your project in good hands by using UDEX Connect to find vetted party wall surveyors.</div>
                </div>
            </div>
        </section>

        {{-- What does a structural engineer do? --}}
        <section class="section-content pb-5">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_is_a_party_wall_notice,_and_do_I_need_one.png" alt="What is a party wall notice, and do I need one?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">What is a party wall notice, and do I need one?</div>
                    <div class="text-block">
                        <p>A party wall notice is required if you’re building anywhere within 3ms of a party wall, including shared boundaries.</p>
                        <p>The notice must be served at least two months before any construction takes place and be given to all legal owners of any building affected by your proposed build.</p>
                        <p>If they give written consent within 14 days, your works can go on ahead. However, if they fail to reply or dissent, then you’ll need to commission a party wall agreement.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- What will they provide? --}}
        <section class="section-content pb-5">
            <div class="row align-items-center">
                <div class="col">
                    <div class="heading-block">The benefits of getting a party wall surveyor from the start.</div>
                    <div class="text-block">
                        <p>While having a party wall surveyor is optional for serving notice, we highly recommend you consider getting their expertise involved.</p>
                        <p>Appointing a party wall surveyor at the start of the process is the best thing you can do to ensure all the correct procedures are being followed. This matters because if the original notice isn’t valid then any response (positive or negative) received will consequently no longer be legally valid too.</p>
                    </div>
                    <div class="show-more">
                        <a href="#quick-register">Find a party wall surveyor</a>
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
