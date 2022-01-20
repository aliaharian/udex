@extends('layouts.profile.master')

@section('page-title', 'File Library')

@section('content')
    <article class="content-inner file-library-page">
        <div class="heading-page-block mb-5">
            <div class="heading-text">File library</div>
            <div class="excerpt-page">Keep track of all your drawings, or share your inspiration with us</div>
        </div>

        <div class="row">
            <div class="col-md-3 col-12">
                {{--                <div class="nav-items">--}}
                {{--                    <div class="col-title">UDEX uploads</div>--}}
                {{--                    <ul>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">--}}
                {{--                                <span class="row align-items-center">--}}
                {{--                                    <span class="col-9"><span class="name">All files</span></span>--}}
                {{--                                    <span class="col-3 right"><span class="count">0</span><span class="icon icon-arrow-right-line"></span></span>--}}
                {{--                                </span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}

                <div class="nav-items">
                    <div class="col-title">Your uploads</div>
                    <ul>
                        <li class="@if(!isset($_GET['type'])){{ 'active-menu' }}@endif">
                            <a href="{{ url('profile/file-library') }}">
                                <span class="row align-items-center">
                                    <span class="col-9"><span class="name">All files</span></span>
                                    <span class="col-3 right"><span class="count">{{ count($Attachments) }}</span><span class="icon icon-arrow-right-line"></span></span>
                                </span>
                            </a>
                        </li>
                        <li class="@if(isset($_GET['type']) && $_GET['type'] == 'images'){{ 'active-menu' }}@endif">
                            <a href="{{ url('profile/file-library?type=images') }}">
                                <span class="row align-items-center">
                                    <span class="col-9"><span class="icon-enter"></span><span class="name">All images</span></span>
                                    <span class="col-3 right"><span class="count">{{ count($AttachmentsImages) }}</span><span class="icon icon-arrow-right-line"></span></span>
                                </span>
                            </a>
                        </li>
                        <li class="@if(isset($_GET['type']) && $_GET['type'] == 'doc'){{ 'active-menu' }}@endif">
                            <a href="{{ url('profile/file-library?type=doc') }}">
                                <span class="row align-items-center">
                                    <span class="col-9"><span class="icon-enter"></span><span class="name">All documents</span></span>
                                    <span class="col-3 right"><span class="count">{{ count($AttachmentsDocuments) }}</span><span class="icon-arrow-right-line"></span></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="quick-access">
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ url('profile/file-library?type=images') }}" class="item-inner center">
                                <span class="icon"><svg width="38" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M31.862 2.195H12.745C12.745.985 11.792 0 10.62 0H7.788c-1.17 0-2.124.985-2.124 2.195h-.708C2.223 2.195 0 4.493 0 7.317v17.561C0 27.702 2.223 30 4.956 30h26.906c2.733 0 4.956-2.298 4.956-5.122V7.318c0-2.825-2.223-5.123-4.956-5.123ZM7.743 1.818h2.923c.402 0 .73.408.73.91H7.013c0-.502.328-.91.73-.91ZM31.55 28.182H4.831c-1.939 0-3.516-1.62-3.516-3.61V10.856H6.94a.713.713 0 0 0 .703-.722.713.713 0 0 0-.703-.722H1.315V7.246c0-1.99 1.577-3.61 3.516-3.61h26.718c1.939 0 3.516 1.62 3.516 3.61v2.166H29.44a.713.713 0 0 0-.703.722c0 .398.315.722.703.722h5.625v13.716c0 1.99-1.577 3.61-3.516 3.61ZM18.41 5.455c-5.8 0-10.52 4.893-10.52 10.909 0 6.015 4.72 10.909 10.52 10.909s10.52-4.894 10.52-10.91c0-6.015-4.72-10.908-10.52-10.908Zm0 20.363c-5.027 0-9.117-4.241-9.117-9.454 0-5.214 4.09-9.455 9.117-9.455 5.027 0 9.117 4.241 9.117 9.455 0 5.213-4.09 9.454-9.117 9.454Zm0-17.636c-4.35 0-7.89 3.67-7.89 8.182 0 4.511 3.54 8.181 7.89 8.181s7.89-3.67 7.89-8.181c0-4.512-3.54-8.182-7.89-8.182Zm0 14.876c-3.56 0-6.455-3.003-6.455-6.694S14.85 9.67 18.409 9.67c3.56 0 6.455 3.003 6.455 6.694s-2.896 6.694-6.455 6.694ZM31.12 9.09c1.209 0 2.192-1.02 2.192-2.273 0-1.253-.983-2.273-2.192-2.273-1.208 0-2.191 1.02-2.191 2.273 0 1.253.983 2.273 2.191 2.273Zm0-3.03c.403 0 .73.34.73.757a.745.745 0 0 1-.73.758.745.745 0 0 1-.73-.758c0-.418.327-.757.73-.757Z" fill="#8A8A8A"/></svg></span>
                                <span class="name">Images</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ url('profile/file-library?type=doc') }}" class="item-inner center">
                                <span class="icon"><svg width="24" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m15.517.304 7.031 7.03.046-.045-.046.046a.822.822 0 0 1 .239.575v19.453a2.575 2.575 0 0 1-2.572 2.572H2.637a2.575 2.575 0 0 1-2.572-2.572V2.637A2.574 2.574 0 0 1 2.637.065h12.305c.216 0 .423.087.575.239Zm.35 2.65-.112-.11v3.308c0 .521.424.944.944.944h3.31l-.112-.11-4.03-4.031Zm-1.739-1.196v-.065H2.637a.945.945 0 0 0-.944.944v24.726c0 .521.423.944.944.944h17.578c.52 0 .944-.423.944-.944V8.724H16.7a2.574 2.574 0 0 1-2.571-2.572V1.758Z" fill="#8A8A8A" stroke="#8A8A8A" stroke-width=".1"/><path d="M6.153 12.487h10.546a.814.814 0 1 1 0 1.627H6.153a.814.814 0 0 1 0-1.627ZM6.153 16.003h10.546a.814.814 0 1 1 0 1.627H6.153a.814.814 0 0 1 0-1.627ZM6.153 19.518h10.546a.814.814 0 1 1 0 1.628H6.153a.814.814 0 1 1 0-1.628ZM6.153 23.034h7.03a.814.814 0 0 1 0 1.627h-7.03a.814.814 0 0 1 0-1.627Z" fill="#8A8A8A" stroke="#8A8A8A" stroke-width=".1"/></svg></span>
                                <span class="name">PDF/Doc</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="show-file">
                    @if(isset($_GET['type']) && $_GET['type'] == 'images')
                        @php $Attachments = $AttachmentsImages @endphp
                    @elseif(isset($_GET['type']) && $_GET['type'] == 'doc')
                        @php $Attachments = $AttachmentsDocuments @endphp
                    @endif

                    {{-- Heading --}}
                    <div class="heading-nav">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <div class="title-section">All files ({{ count($Attachments) }})</div>
                            </div>
                            <div class="col-2">
{{--                                <div class="view-icon right">--}}
{{--                                    <span class="icon-view icon-grid-list"></span>--}}
{{--                                    <span class="icon-view icon-list"></span>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>

                    {{-- File List --}}
                    <div class="file-list">
                        @forelse($Attachments as $item)
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <div class="file-name">{{ $item->orgname }} @if(isset($item->directory))<span style="display: inline-block;font-size: 10px; color: #888">(Uploaded by Admin)</span> @endif</div>
                                        <div class="file-date">{{ date_format($item->created_at,'D, jS M Y') }}</div>
                                    </div>
                                    <div class="col-2 right">
                                        @if(isset($item->directory))
                                            <a target="_blank" href="{{ asset('storage/app/') . '/' . $item->directory . '/' . $item->path }}" class="view-file">
                                                <span class="icon-search"></span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
