<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title') | UDEX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/site/images/base/') }}/udai.png">

    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/pages/profile/profile.css') }}">

    {{-- Page Style --}}
    {{--    <link href="{{ asset('public/assets/site/styles/pages') }}/@yield('page-style')" type="text/css" rel="stylesheet">--}}

    {{-- Page Responsive Style --}}
    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/responsive/base.min.css') }}">
    {{--    <link href="{{ asset('public/assets/site/styles/pages') }}/@yield('page-style-responsive')" type="text/css" rel="stylesheet">--}}

    <script src="{{ asset('public/assets/site/js/theme-libs.js') }}"></script>
    @yield('heading-lib')
</head>
<body class="dashboard-page @yield('body-class')">

<div class="row dashboard-row g-0">
    <div class="col-auto sidebar-col light-mode">
        @include('layouts.profile.extends.sidebar')
    </div>

    <div class="col content-col">
        @yield('content')
    </div>

@yield('footer-lib')

<!-- Search Modal -->
    <div class="modal-website modal-search">
        <div class="modal-block-box search-modal-body">
            <div class="close-btn icon-close"></div>
            <div class="whats-news-block">
                <div id="carouselWhatsNews" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    @php $slide_active = 0; @endphp
                    <div class="carousel-indicators carousel-indicators-whats-news">
                        @forelse($WhatsNews as $item)
                            <button type="button" data-bs-target="#carouselWhatsNews" data-bs-slide-to="{{ $slide_active }}" @if($slide_active == 0)class="{{ 'active' }}" aria-current="true"@endif></button>
                            @php $slide_active++; @endphp
                        @empty
                        @endforelse
                    </div>

                    @php $slide_active = 0; @endphp
                    <div class="carousel-inner">
                        @forelse($WhatsNews as $item)
                            <div class="carousel-item @if($slide_active == 0){{ 'active' }}@endif">
                                <div class="item-inner">
                                    <div class="icon-item">
                                        <img src="@if($item->thumbnail && isset(\App\Model\Attachments::find($item->thumbnail)->path)) {{asset('storage/app/news/thumbnail/170').'/'.\App\Model\Attachments::find($item->thumbnail)->path}}@endif">
                                    </div>
                                    <div class="title-item">{{ $item->title }}</div>
                                    <div class="content-item">{!! $item->content_text !!}</div>
                                </div>
                            </div>
                            @php $slide_active++; @endphp
                        @empty
                        @endforelse
                    </div>

                    <button class="carousel-nav-btn carousel-prev" type="button" data-bs-target="#carouselWhatsNews" data-bs-slide="prev">Previous</button>
                    <button class="carousel-nav-btn carousel-next" type="button" data-bs-target="#carouselWhatsNews" data-bs-slide="next">Next</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#carouselWhatsNews').carousel({
                interval: false,
                wrap: false
            })
        });
    </script>

    <script src="{{ asset('public/assets/site/js/footer.js') }}"></script>
<?php Session::forget('error');?>
</body>
</html>
