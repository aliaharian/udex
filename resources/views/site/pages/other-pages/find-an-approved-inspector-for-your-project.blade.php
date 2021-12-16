@extends('layouts.site.pages-master')

@section('page-title',  'Find an approved inspector for your project')

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
                        <img src="{{ asset('public/assets/site/images/example') }}/Find_an_approved_inspector_for_your_project.png" alt="Find an approved inspector for your project">
                    </div>
                </div>
                <div class="col-8">
                    <div class="heading-title">Find an approved inspector for your project</div>
                    <div class="heading-desc">Keep your project in good hands by using UDEX Connect to find vetted party wall surveyors.</div>
                </div>
            </div>
        </section>

        {{-- Do I need to commission a CCTV drainage survey? --}}
        <section class="section-content pb-5">
            <div class="center">
                <div class="icon mb-4">
                    <svg width="78" height="121" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50.6581.2941c7.6156-.3882 16.8232-.8566 22.3136 4.0997 5.3702 4.817 4.8551 13.1012 4.4116 20.2485-.0926 1.4842-.1822 2.9207-.2147 4.2656 0 1.5262-1.3354 2.8616-2.8615 2.8616-2.337 0-4.6978.0239-7.0586.0477-2.3608.0239-4.7216.0477-7.0585.0477.3815 16.4064.3891 32.8127.3968 49.2181.0057 12.3048.0114 24.611.1755 36.915 0 1.526-1.3354 2.862-2.8616 2.862-11.7324.191-23.4649.191-35.2927 0-1.5262 0-2.8616-1.336-2.8616-2.862-.0439-6.284-.1851-12.588-.3272-18.8937-.1698-7.5727-.3405-15.1473-.3405-22.6942.0477-7.3924.1192-14.8087.1908-22.2249.0715-7.4163.143-14.8325.1907-22.2249-5.1508 0-10.2063 0-15.357-.0954-1.6216 0-2.8617-1.3354-2.8617-2.8616L.9554 17.8432c0 .5723-.0954-.5723-.0954-1.6216 0-1.5261.1908-3.0523.477-4.4831C3.9714-.034 16.9801.2731 27.3.5155c1.6368.038 3.2059.0762 4.6548.0629 1.5262 0 2.8616 1.3354 2.8616 2.8615v8.9663h7.6309V3.3445c0-.8584.2861-1.4307.763-1.9077l.1908-.1907C43.7827.769 44.4504.483 45.3088.483c1.6273 0 3.4387-.0925 5.3493-.1889zM10.494 7.8277c-2.7662 1.6215-3.8155 4.5785-3.9109 7.5355 0 .0744.0067.2384.0144.4378.0219.5723.0562 1.4451-.0144 1.3745 0 .3815.0239.7631.0477 1.1446.0239.3816.0477.7631.0477 1.1447.0477 1.0969.0716 2.2177.0954 3.3385.0239 1.1207.0477 2.2415.0954 3.3385 17.2458.1526 34.4915.061 51.7373-.0306 4.3114-.0229 8.6228-.0457 12.9343-.0648l.0563-.6954c.4797-5.8586 1.1246-13.7413-2.7271-16.951-2.0031-1.717-4.6739-2.1939-7.2493-2.2893-4.4832-.1907-8.9663-.0954-13.4494 0v9.0617c0 1.5262-1.3354 2.8616-2.8616 2.8616h-13.354c-1.5262 0-2.8616-1.3354-2.8616-2.8616V6.2061c-1.5739.0477-3.1239.0716-4.6739.0954-1.55.0239-3.1.0477-4.6739.0954-.5113.0162-1.034.021-1.5615.0267-2.6231.0267-5.3893.0544-7.691 1.404zm14.5749 86.0008c.0432 1.4748.0813 2.9498.1145 4.4249 4.96-2.7662 9.9201-5.5562 14.8802-8.3462 4.96-2.7901 9.9201-5.5801 14.8802-8.3463V68.1115c-9.5386 5.437-19.0772 10.7786-28.6158 16.1202-.4769.2862-.9538.3816-1.4308.3816 0 3.0809.0859 6.1628.1717 9.2152zm-.2671-15.3199 30.0466-16.8833V48.8436c-4.7684 2.6708-9.5119 5.3397-14.2564 8.0095l-.0038.0029c-4.7455 2.6708-9.4909 5.3416-14.2602 8.0124-.4769.2862-.9538.3815-1.4308.3815-.0954 3.7201-.0954 7.4401-.0954 11.1602zm30.142 36.5324c-.0954-8.966-.0954-17.9322-.0954-26.8985-9.5386 5.437-19.0772 10.7786-28.6158 16.1205-.2308.153-.5246.246-.7793.326l-.1745.055.0076.272c.0925 3.434.1831 6.782.1831 10.221 9.8248.19 19.7449.19 29.4743-.096zM24.8972 59.0499c9.9201-5.5324 19.8403-11.0648 29.7604-16.6926 0-3.4386-.0906-6.7867-.1831-10.2205l-.0077-.2719c-4.8647 0-9.7532.0239-14.6417.0477-4.8885.0238-9.777.0477-14.6417.0477z" fill="#ed7b00"/>
                        <path d="M50.6581.2941c7.6156-.3882 16.8232-.8566 22.3136 4.0997 5.3702 4.817 4.8551 13.1012 4.4116 20.2485-.0926 1.4842-.1822 2.9207-.2147 4.2656 0 1.5262-1.3354 2.8616-2.8615 2.8616-2.337 0-4.6978.0239-7.0586.0477-2.3608.0239-4.7216.0477-7.0585.0477.3815 16.4064.3891 32.8127.3968 49.2181.0057 12.3048.0114 24.611.1755 36.915 0 1.526-1.3354 2.862-2.8616 2.862-11.7324.191-23.4649.191-35.2927 0-1.5262 0-2.8616-1.336-2.8616-2.862-.0439-6.284-.1851-12.588-.3272-18.8937-.1698-7.5727-.3405-15.1473-.3405-22.6942.0477-7.3924.1192-14.8087.1908-22.2249.0715-7.4163.143-14.8325.1907-22.2249-5.1508 0-10.2063 0-15.357-.0954-1.6216 0-2.8617-1.3354-2.8617-2.8616L.9554 17.8432c0 .5723-.0954-.5723-.0954-1.6216 0-1.5261.1908-3.0523.477-4.4831C3.9714-.034 16.9801.2731 27.3.5155c1.6368.038 3.2059.0762 4.6548.0629 1.5262 0 2.8616 1.3354 2.8616 2.8615v8.9663h7.6309V3.3445c0-.8584.2861-1.4307.763-1.9077l.1908-.1907C43.7827.769 44.4504.483 45.3088.483c1.6273 0 3.4387-.0925 5.3493-.1889zM10.494 7.8277c-2.7662 1.6215-3.8155 4.5785-3.9109 7.5355 0 .0744.0067.2384.0144.4378.0219.5723.0562 1.4451-.0144 1.3745 0 .3815.0239.7631.0477 1.1446.0239.3816.0477.7631.0477 1.1447.0477 1.0969.0716 2.2177.0954 3.3385.0239 1.1207.0477 2.2415.0954 3.3385 17.2458.1526 34.4915.061 51.7373-.0306 4.3114-.0229 8.6228-.0457 12.9343-.0648l.0563-.6954c.4797-5.8586 1.1246-13.7413-2.7271-16.951-2.0031-1.717-4.6739-2.1939-7.2493-2.2893-4.4832-.1907-8.9663-.0954-13.4494 0v9.0617c0 1.5262-1.3354 2.8616-2.8616 2.8616h-13.354c-1.5262 0-2.8616-1.3354-2.8616-2.8616V6.2061c-1.5739.0477-3.1239.0716-4.6739.0954-1.55.0239-3.1.0477-4.6739.0954-.5113.0162-1.034.021-1.5615.0267-2.6231.0267-5.3893.0544-7.691 1.404zm14.5749 86.0008c.0432 1.4748.0813 2.9498.1145 4.4249 4.96-2.7662 9.9201-5.5562 14.8802-8.3462 4.96-2.7901 9.9201-5.5801 14.8802-8.3463V68.1115c-9.5386 5.437-19.0772 10.7786-28.6158 16.1202-.4769.2862-.9538.3816-1.4308.3816 0 3.0809.0859 6.1628.1717 9.2152zm-.2671-15.3199 30.0466-16.8833V48.8436c-4.7684 2.6708-9.5119 5.3397-14.2564 8.0095l-.0038.0029c-4.7455 2.6708-9.4909 5.3416-14.2602 8.0124-.4769.2862-.9538.3815-1.4308.3815-.0954 3.7201-.0954 7.4401-.0954 11.1602zm30.142 36.5324c-.0954-8.966-.0954-17.9322-.0954-26.8985-9.5386 5.437-19.0772 10.7786-28.6158 16.1205-.2308.153-.5246.246-.7793.326l-.1745.055.0076.272c.0925 3.434.1831 6.782.1831 10.221 9.8248.19 19.7449.19 29.4743-.096zM24.8972 59.0499c9.9201-5.5324 19.8403-11.0648 29.7604-16.6926 0-3.4386-.0906-6.7867-.1831-10.2205l-.0077-.2719c-4.8647 0-9.7532.0239-14.6417.0477-4.8885.0238-9.777.0477-14.6417.0477z" fill="#ed7b00"/>
                    </svg>
                </div>
                <div class="heading-block mb-5">Do I need to commission a CCTV drainage survey?</div>
            </div>
            <div class="section-content mb-5 pb-3 selecting-the-right-contractor">
                    <section class="faq-section">
                        <div class="faq-list">
                            <div class="accordion" id="accordionPanelsFAQ">
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed" id="panelsStayOpen-heading-1" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-1" aria-expanded="true" aria-controls="panelsStayOpen-collapse-1">Who's involved?</div>
                                    <div id="panelsStayOpen-collapse-1" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-1">
                                        <div class="content-inner">
                                            <ul>
                                                <li>A member of our surveying team will be the one to visit your property, and get everything measured up.</li>
                                                <li>In areas we’re unable to reach, we’ll either use one of our trusted third parties, or help you source your own local surveyor.</li>
                                                <li>Once your survey has been completed, we’ll match you with a designer who's perfectly suited to your project.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed" id="panelsStayOpen-heading-2" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-2" aria-expanded="true" aria-controls="panelsStayOpen-collapse-2">Is the work that UDEX completes insured?</div>
                                    <div id="panelsStayOpen-collapse-2" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-2">
                                        <div class="content-inner">This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed" id="panelsStayOpen-heading-3" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-3" aria-expanded="true" aria-controls="panelsStayOpen-collapse-3">Is the work that UDEX completes insured?</div>
                                    <div id="panelsStayOpen-collapse-3" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-2">
                                        <div class="content-inner">This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        </section>

        {{-- Download Box --}}
        <section class="download-box-section link-box-style-2 center" style="margin-bottom: 75px">
            <div class="download-text">In summary...</div>
            <div class="download-excerpt">Using an approved inspector can help you get onsite faster by reducing the time you need to wait for your technical drawings to be signed off.</div>
            <div class="download-link"><a href="#quick-register">Find an approved inspector</a></div>
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
                        <img src="{{ asset('public/assets/site/images/example') }}/only-the-very-best.png" alt="Only the very best?">
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
