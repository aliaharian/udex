@extends('layouts.profile.master')

@section('page-title', 'Architectionary')

@section('content')
    <article class="content-inner">
        <div class="heading-page-block">
            <div class="row align-items-center">
                <div class="col-7">
                    <div class="heading-text">UDEX <span>Architectionary</span></div>
                    <div class="excerpt-page">Architectural terms, understandable for everybody.</div>
                </div>
                <div class="col-5">
                    <div class="search-form">
                        <form>
                            <input type="text" placeholder="Search for a term....">
                            <button class="submit-form"><span class="icon-search"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="all-post-items">
            <div class="heading-block">
                <div class="h-text">Showing all terms</div>
            </div>

            <div class="items-block">
                <div class="list-item">
                    <div class="row">
                        @php
                            function truncateString($str, $chars, $to_space, $replacement="...") {
                                if($chars > strlen($str)) return $str;

                                $str = substr($str, 0, $chars);
                                $space_pos = strrpos($str, " ");
                                if($to_space && $space_pos >= 0)
                                    $str = substr($str, 0, strrpos($str, " "));

                                return($str . $replacement);
                            }
                        @endphp
                        @foreach($Architectionary as $item)
                            <div class="col-4">
                                <div class="item">
                                    <div class="item-inner">
                                        <a href="#"> <span class="heading-item">{{ $item->title }}</span>
                                            <span class="excerpt-item">{{ truncateString($item->excerpt, 100, 1) }}</span>
                                            <span class="right">
												<span class="read-more">more...</span>
											</span> </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
