@extends('layouts.site.pages-master')

@section('page-title',  'Find a CCTV drainage surveyor for your project')

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
                        <img src="{{ asset('public/assets/site/images/example') }}/Find_a_CCTV_drainage_surveyor_for_your_project.png" alt="Find a CCTV drainage surveyor for your project">
                    </div>
                </div>
                <div class="col-8">
                    <div class="heading-title">Find a CCTV drainage surveyor for your project</div>
                    <div class="heading-desc">Keep your project in good hands by using UDEX Connect to find vetted CCTV drainage surveyor.</div>
                </div>
            </div>
        </section>

        {{-- What does a structural engineer do? --}}
        <section class="section-content pb-5">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_is_a_CCTV_drainage_surveyor.png" alt="What is a CCTV drainage surveyor?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">What is a CCTV drainage surveyor?</div>
                    <div class="text-block">
                        <p>In order to check whether or not your project will run into any drainage issues, a Closed Circuit Television (CCTV) survey will need to be carried out. Your surveyor will use a special camera to check on the condition and placement of your pipes before any construction takes place.</p>
                        <p>At UDEX, we arrange CCTV surveys on behalf of our customers, charging £350 for the process.</p>
                    </div>
                    <div class="show-more"><a href="#quick-register">Find out more</a></div>
                </div>
            </div>
        </section>

        {{-- What will they provide? --}}
        <section class="section-content pb-5">
            <div class="center">
                <div class="icon mb-4">
                    <svg width="123" height="117" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.71 19.1c1 0 1.7.4 2.2 1 .5.5.8 1.2.8 2v30.2c0 1.6-1.4 3-3 3-6.8.1-13.5.1-20.2002.1-.893 0-1.796-.022-2.707-.044-1.844-.044-3.719-.09-5.593.044-6.58.5-6.292 7.728-6.07 13.308.045 1.119.087 2.173.07 3.092-.2 16.5-5.9 32.6-21.7 40.2-14.9 7.2-35.1 5.8-48.2-4.7-14.2-11.5-15.2-32-15.3-48.9-.09-16.409.458-32.897 1.003-49.323l.197-5.977c.1-1.6 1.3-3 3-3 5.1 0 10.2-.025 15.3-.05 5.1-.025 10.2-.05 15.3-.05 1.6 0 3 1.4 3 3 0 16.9-.1 33.8-.3 50.5-.1 3.993-.2 7.887-.3 11.78v.02c-.028.559-.066 1.135-.104 1.723-.237 3.621-.502 7.68 1.304 10.777 1.7 3 5.8 4.2 8.3 1.5 1.157-1.246 1.363-3.284 1.536-4.987.021-.21.042-.415.064-.613.2-2.333.222-4.667.245-7 .01-1.167.022-2.333.055-3.5.3-12.8 1.5-26.3 10.7-36.1 7.697-8.072 17.507-8.039 27.779-8.005.672.003 1.346.005 2.021.005zm-3 30.3V25.2c-2 0-4 0-6-.1 0 4.05.025 8.1.05 12.15v.004c.025 4.049.05 8.097.05 12.146zM31.8098 6c-4.1 0-8.225.025-12.35.05s-8.25.05-12.35.05c-.05.85-.075 1.675-.1 2.5-.025.825-.05 1.65-.1 2.5 4.15 0 8.3-.025 12.45-.05 4.15-.025 8.3-.05 12.45-.05zm-.3 45.1c.2-11.4.3-22.7.3-34.1-4.2 0-8.374.025-12.549.05-4.175.025-8.351.05-12.551.05-.5 14-.9 28-.7 42 4.15 0 8.324-.025 12.498-.05h.004c4.174-.025 8.349-.05 12.498-.05.064-.964.139-1.907.21-2.813.152-1.914.29-3.662.29-5.087zm-25.2 18c4.049 0 8.123-.025 12.196-.05h.004c4.075-.025 8.15-.05 12.2-.05v-4c-4.1 0-8.2.025-12.3.05-4.1.025-8.2.05-12.3.05 0 1.3.1 2.7.2 4zm72.9-3.5c0-7 1.9-14.5 9.8-15.9 3.635-.593 7.601-.416 11.4482-.245 1.338.06 2.662.12 3.952.145h.4c0-4.05-.025-8.1-.05-12.15-.025-4.05-.05-8.1-.05-12.15H82.3098c-7.6 0-13.9.9-19.2 6.8-5.5 6-7.4 14.3-8.1 22.2-.134 1.722-.096 4.007-.053 6.573.18 10.851.445 26.731-11.847 26.327-7.5-.3-10.6-5.5-11.8-12.2-4.1 0-8.175.025-12.25.05-4.075.025-8.15.05-12.25.05 1.7 13.8 6.5 27 20.8 32.6 16.7 6.6 38.6 1.9 47.4-14.7 4.236-7.907 4.219-16.965 4.202-25.758z" fill="#ed7b00"/>
                        <path d="M119.71 19.1c1 0 1.7.4 2.2 1 .5.5.8 1.2.8 2v30.2c0 1.6-1.4 3-3 3-6.8.1-13.5.1-20.2002.1-.893 0-1.796-.022-2.707-.044-1.844-.044-3.719-.09-5.593.044-6.58.5-6.292 7.728-6.07 13.308.045 1.119.087 2.173.07 3.092-.2 16.5-5.9 32.6-21.7 40.2-14.9 7.2-35.1 5.8-48.2-4.7-14.2-11.5-15.2-32-15.3-48.9-.09-16.409.458-32.897 1.003-49.323l.197-5.977c.1-1.6 1.3-3 3-3 5.1 0 10.2-.025 15.3-.05 5.1-.025 10.2-.05 15.3-.05 1.6 0 3 1.4 3 3 0 16.9-.1 33.8-.3 50.5-.1 3.993-.2 7.887-.3 11.78v.02c-.028.559-.066 1.135-.104 1.723-.237 3.621-.502 7.68 1.304 10.777 1.7 3 5.8 4.2 8.3 1.5 1.157-1.246 1.363-3.284 1.536-4.987.021-.21.042-.415.064-.613.2-2.333.222-4.667.245-7 .01-1.167.022-2.333.055-3.5.3-12.8 1.5-26.3 10.7-36.1 7.697-8.072 17.507-8.039 27.779-8.005.672.003 1.346.005 2.021.005zm-3 30.3V25.2c-2 0-4 0-6-.1 0 4.05.025 8.1.05 12.15v.004c.025 4.049.05 8.097.05 12.146zM31.8098 6c-4.1 0-8.225.025-12.35.05s-8.25.05-12.35.05c-.05.85-.075 1.675-.1 2.5-.025.825-.05 1.65-.1 2.5 4.15 0 8.3-.025 12.45-.05 4.15-.025 8.3-.05 12.45-.05zm-.3 45.1c.2-11.4.3-22.7.3-34.1-4.2 0-8.374.025-12.549.05-4.175.025-8.351.05-12.551.05-.5 14-.9 28-.7 42 4.15 0 8.324-.025 12.498-.05h.004c4.174-.025 8.349-.05 12.498-.05.064-.964.139-1.907.21-2.813.152-1.914.29-3.662.29-5.087zm-25.2 18c4.049 0 8.123-.025 12.196-.05h.004c4.075-.025 8.15-.05 12.2-.05v-4c-4.1 0-8.2.025-12.3.05-4.1.025-8.2.05-12.3.05 0 1.3.1 2.7.2 4zm72.9-3.5c0-7 1.9-14.5 9.8-15.9 3.635-.593 7.601-.416 11.4482-.245 1.338.06 2.662.12 3.952.145h.4c0-4.05-.025-8.1-.05-12.15-.025-4.05-.05-8.1-.05-12.15H82.3098c-7.6 0-13.9.9-19.2 6.8-5.5 6-7.4 14.3-8.1 22.2-.134 1.722-.096 4.007-.053 6.573.18 10.851.445 26.731-11.847 26.327-7.5-.3-10.6-5.5-11.8-12.2-4.1 0-8.175.025-12.25.05-4.075.025-8.15.05-12.25.05 1.7 13.8 6.5 27 20.8 32.6 16.7 6.6 38.6 1.9 47.4-14.7 4.236-7.907 4.219-16.965 4.202-25.758z" fill="#ed7b00"/>
                    </svg>
                </div>
                <div class="heading-block mb-4">Do I need to commission a CCTV drainage survey?</div>
                <img srcset="{{ asset('public/assets/site/images/example') }}/Do_I_need_to_commission_a_CCTV_drainage_survey.png 1x, {{ asset('public/assets/site/images/example') }}/Do_I_need_to_commission_a_CCTV_drainage_survey@2x.png 2x" src="{{ asset('public/assets/site/images/example') }}/Do_I_need_to_commission_a_CCTV_drainage_survey.png" alt="Do I need to commission a CCTV drainage survey?">
            </div>
        </section>

        {{-- Download Box --}}
        <section class="download-box-section link-box-style-2 center" style="margin-bottom: 75px">
            <div class="download-text">Unsure about whether you need a CCTV drainage surveyor? Get in touch with our Connect team today.</div>
            <div class="download-link"><a href="#quick-register">Get in touch</a></div>
        </section>

        {{-- What does a structural engineer do? --}}
        <section class="section-content">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What-is-UDEX-Connect_2.png" alt="What is UDEX Connect?">
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

    {{-- Black Section --}}
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
                        <img src="{{ asset('public/assets/site/images/example') }}/only-the-very-best.png" alt="What is UDEX Connect?">
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
