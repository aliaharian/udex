@extends('layouts.admin.dashboard.master')

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.078 3.79l-9.232.016c-.621 0-.621.958 0 .958l9.232-.016c.606 0 .622-.958 0-.958zM7.846 7.478l9.232-.016c.622 0 .606.958 0 .958l-9.232.016c-.621 0-.621-.958 0-.958zm9.232 3.64l-9.232.015c-.621 0-.621.958 0 .958l9.232-.016c.606 0 .622-.957 0-.957zm-9.232 3.671l9.232-.016c.622 0 .606.958 0 .958l-9.232.016c-.621 0-.621-.958 0-.958z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M19.852 3.982c.004-.263.011-.526.018-.79.02-.795.042-1.596-.018-2.387a.49.49 0 00-.478-.479l-3.508.016L8.74.39 5.056.422A.47.47 0 004.578.9c0 1.136-.017 2.272-.034 3.412-.012.766-.023 1.533-.03 2.303v1.788l-3.284.032H.72a.47.47 0 00-.479.478 259.048 259.048 0 000 7.04l.004.21c.01.826.023 1.733.522 2.424.447.623 1.244.99 2.025 1.022a.384.384 0 00.24.064c2.439 0 4.878-.016 7.318-.032h.046c1.197-.016 2.409-.032 3.605-.064.269-.004.54-.001.811.002.855.008 1.718.016 2.553-.177.877-.208 1.674-.687 2.057-1.517.366-.782.414-1.628.414-2.458a371.16 371.16 0 01-.032-7.296c.022-.927.029-1.847.036-2.77l.012-1.38zM1.31 17.55a3.7 3.7 0 01-.112-1.102 259.107 259.107 0 010-7.04l3.013-.032.303-.016v3.896a76.15 76.15 0 01-.064 3.304c0 .367-.047.732-.143 1.085-.064.32-.255.607-.51.799-.558.35-1.42.255-1.977-.128a1.294 1.294 0 01-.51-.766zM18.864 7.015c0-1.182.015-2.379.031-3.576 0-.283.006-.568.01-.851.008-.422.016-.84.006-1.24h-.78l-6.171.032-3.22.024-3.221.023c0 1.076-.016 2.156-.032 3.237a221.515 221.515 0 00-.032 3.26l.002 1.748v.002c.003 1.753.006 3.51-.018 5.259l-.048 1.724a5.868 5.868 0 01-.175 1.293 2.14 2.14 0 01-.367.798c2.073 0 4.146-.016 6.218-.048.387-.005.775-.014 1.164-.023a64.385 64.385 0 012.344-.025c.16 0 .321.003.485.005.885.013 1.817.026 2.624-.324.032-.016.175-.096.223-.128a.314.314 0 00.088-.051l.04-.029c0-.016.015-.032.031-.032.08-.063.144-.127.208-.191l.095-.096c0-.016 0-.016.016-.032l.144-.24a.323.323 0 01.032-.063c.012-.02.024-.04.032-.064 0-.016.015-.032.015-.032.016-.016.016-.016.016-.032a2.24 2.24 0 00.144-.463c.028-.1.044-.211.058-.314l.004-.025.002-.012c-.01.04-.008.024-.005.003a.346.346 0 00.005-.035l.016-.16c.016-.191.032-.383.032-.574.009-.316.001-.632-.006-.948-.006-.211-.01-.422-.01-.633a535.175 535.175 0 010-7.167z" fill="#000"/></svg></span>
    <span class="text">View Project</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('projects.update', $Project->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            @php $ProjectMeta = json_decode($Project->project_meta) @endphp
            <div class="row">
                <div class="col-9">
                    <nav class="tab-nav-heading-block">
                        <div class="row nav center g-0" id="nav-tab" role="tablist">
                            <div class="col-3 nav-link-item active" id="nav-about-your-property-tab" data-bs-toggle="tab" data-bs-target="#nav-about-your-property" role="tab" aria-controls="nav-about-your-property" aria-selected="true">About your property</div>
                            <div class="col-3 nav-link-item" id="nav-getting-to-know-you-tab" data-bs-toggle="tab" data-bs-target="#nav-getting-to-know-you" role="tab" aria-controls="nav-getting-to-know-you" aria-selected="false">Getting to know you</div>
                            <div class="col-3 nav-link-item" id="nav-ideas-inspiration-tab" data-bs-toggle="tab" data-bs-target="#nav-ideas-inspiration" role="tab" aria-controls="nav-ideas-inspiration" aria-selected="false">Ideas & inspiration</div>
                            <div class="col-3 nav-link-item" id="nav-timeframes-budget-tab" data-bs-toggle="tab" data-bs-target="#nav-timeframes-budget" role="tab" aria-controls="nav-timeframes-budget" aria-selected="false">Timeframes & budget</div>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-about-your-property" role="tabpanel" aria-labelledby="nav-about-your-property-tab">
                            {{-- Confirm your property address --}}
                            <div class="widget-block widget-item widget-style">
                                <div class="heading-widget">
                                    <span class="widget-title">Confirm your property address</span>
                                </div>

                                <div class="widget-content widget-content-padding">
                                    @if(isset($ProjectMeta->address_number_name))
                                        <div class="show-info-block">
                                            <div class="title-block">Number/name:</div>
                                            <div class="value-block">{{ $ProjectMeta->address_number_name }}</div>
                                        </div>
                                    @endif

                                    @if(isset($ProjectMeta->address_street_name))
                                        <div class="show-info-block">
                                            <div class="title-block">Street name:</div>
                                            <div class="value-block">{{ $ProjectMeta->address_street_name }}</div>
                                        </div>
                                    @endif

                                    @if(isset($ProjectMeta->postcode))
                                        <div class="show-info-block">
                                            <div class="title-block">Postcode:</div>
                                            <div class="value-block">{{ $ProjectMeta->postcode }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Does your property have any of the following special considerations? --}}
                            @if(isset($ProjectMeta->special_considerations))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Confirm your property address</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <ul>
                                                @foreach($ProjectMeta->special_considerations as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        @if(isset($ProjectMeta->special_considerations_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->special_considerations_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Currently own this property? --}}
                            @if(isset($ProjectMeta->currently_own_this_property))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Currently own this property?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <ul>
                                                @foreach($ProjectMeta->currently_own_this_property as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        @if(isset($ProjectMeta->currently_own_this_property_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->currently_own_this_property_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- What do you like about your property? --}}
                            @if(isset($ProjectMeta->about_your_property_describe))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">What do you like about your property?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="title-block">Please describe...</div>
                                            <div class="value-block">{{ $ProjectMeta->about_your_property_describe }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- And what don't you like? --}}
                            @if(isset($ProjectMeta->dont_like_about_your_property_describe))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">And what don't you like?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="title-block">Please describe...</div>
                                            <div class="value-block">{{ $ProjectMeta->dont_like_about_your_property_describe }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="nav-getting-to-know-you" role="tabpanel" aria-labelledby="nav-getting-to-know-you-tab">
                            {{-- What is the main purpose of this property? --}}
                            @if(isset($ProjectMeta->purpose_of_this_property))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">What is the main purpose of this property?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->purpose_of_this_property }}</div>
                                        </div>

                                        @if(isset($ProjectMeta->purpose_of_this_property_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->purpose_of_this_property_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Who is (or will be) living in this property? --}}
                            <div class="widget-block widget-item widget-style">
                                <div class="heading-widget">
                                    <span class="widget-title">Who is (or will be) living in this property?</span>
                                </div>

                                <div class="widget-content widget-content-padding">
                                    <div class="show-info-block">
                                        <div class="row center">
                                            @if(isset($ProjectMeta->living_in_this_property_adults))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Adults</div>
                                                        <div class="value-block">{{ $ProjectMeta->living_in_this_property_adults }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->living_in_this_property_children))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Children</div>
                                                        <div class="value-block">{{ $ProjectMeta->living_in_this_property_children }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->living_in_this_property_pets))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Pets</div>
                                                        <div class="value-block">{{ $ProjectMeta->living_in_this_property_pets }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- How creative would you like us to be with your space? --}}
                            @if(isset($ProjectMeta->how_creative_would_you_like_us_to_be_with_your_space))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">How creative would you like us to be with your space?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->how_creative_would_you_like_us_to_be_with_your_space }}</div>
                                        </div>

                                        @if(isset($ProjectMeta->how_creative_would_you_like_us_to_be_with_your_space_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->how_creative_would_you_like_us_to_be_with_your_space_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Have you ever worked with an architect before? --}}
                            @if(isset($ProjectMeta->concerns_about_starting_your_project))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Have you ever worked with an architect before?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->have_you_ever_worked_with_an_architect_before }}</div>
                                        </div>

                                        <div class="show-info-block">
                                            <div class="title-block">Any further information you'd like to add?</div>
                                            <div class="value-block">{{ $ProjectMeta->have_you_ever_worked_with_an_architect_before_information }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Do you have any concerns about starting your project? --}}
                            @if(isset($ProjectMeta->concerns_about_starting_your_project))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Do you have any concerns about starting your project?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->concerns_about_starting_your_project }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- What are you most looking forward to about your project? --}}
                            @if(isset($ProjectMeta->What_are_you_most_looking_forward_to_about_your_project))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">What are you most looking forward to about your project?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->What_are_you_most_looking_forward_to_about_your_project }}</div>
                                        </div>

                                        @if(isset($ProjectMeta->What_are_you_most_looking_forward_to_about_your_project_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->What_are_you_most_looking_forward_to_about_your_project_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="nav-ideas-inspiration" role="tabpanel" aria-labelledby="nav-ideas-inspiration-tab">
                            {{-- Which spaces would you like us to design (whether existing or new)? --}}
                            <div class="widget-block widget-item widget-style">
                                <div class="heading-widget">
                                    <span class="widget-title">Which spaces would you like us to design (whether existing or new)?</span>
                                </div>

                                <div class="widget-content widget-content-padding">
                                    <div class="show-info-block">
                                        <div class="row center">
                                            @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_bathroom))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Bathroom</div>
                                                        <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_bathroom }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_double_bedroom))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Double Bedroom</div>
                                                        <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_double_bedroom }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_single_bedroom))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Single Bedroom</div>
                                                        <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_single_bedroom }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_dining_room))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Dining Room</div>
                                                        <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_dining_room }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_kitchen))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Kitchen</div>
                                                        <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_kitchen }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_living_room))
                                                <div class="col-4 multi-col-info">
                                                    <div class="item-inner">
                                                        <div class="title-block">Living Room</div>
                                                        <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_living_room }}</div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    @if(isset($ProjectMeta->which_spaces_would_you_like_us_to_design_detailed))
                                        <div class="show-info-block">
                                            <div class="title-block">Do you have a more detailed explanation of your vision for the project? Be as descriptive as your wish</div>
                                            <div class="value-block">{{ $ProjectMeta->which_spaces_would_you_like_us_to_design_detailed }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Do you have any inspiration photos or PDFs you'd like to share with us? --}}
                            @if(isset($ProjectMeta->inspiration))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Do you have any inspiration photos or PDFs you'd like to share with us?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block download-file">
                                                <ul>
                                                    <li><a href="{{ url('storage/app/projects/file') }}/{{ \App\Model\Attachments::find($ProjectMeta->inspiration)->path }}" download="">Download <span>({{ \App\Model\Attachments::find($ProjectMeta->inspiration)->orgname }})</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Any Pinterest or website links you would like us to see? --}}
                            <div class="widget-block widget-item widget-style">
                                <div class="heading-widget">
                                    <span class="widget-title">Any Pinterest or website links you would like us to see?</span>
                                </div>

                                <div class="widget-content widget-content-padding">
                                    @if(isset($ProjectMeta->pinterest_name))
                                        <div class="show-info-block">
                                            <div class="title-block">Name:</div>
                                            <div class="value-block">{{ $ProjectMeta->pinterest_name }}</div>
                                        </div>
                                    @endif

                                    @if(isset($ProjectMeta->website))
                                        <div class="show-info-block">
                                            <div class="title-block">Website link:</div>
                                            <div class="value-block">{{ $ProjectMeta->website }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-timeframes-budget" role="tabpanel" aria-labelledby="nav-timeframes-budget-tab">
                            {{-- Do you have a date in mind, for the construction work to begin? --}}
                            @if(isset($ProjectMeta->start_time_month) || isset($ProjectMeta->start_time_year))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Do you have a date in mind, for the construction work to begin?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block" style="font-size: 24px; color: #ed7b00; font-weight: 900">{{ $ProjectMeta->start_time_month }}/{{ $ProjectMeta->start_time_year }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- How flexible are you on this timeframe? --}}
                            @if(isset($ProjectMeta->how_flexible_are_you_on_this_timeframe))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">How flexible are you on this timeframe?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->how_flexible_are_you_on_this_timeframe }}</div>
                                        </div>

                                        @if(isset($ProjectMeta->purpose_of_this_property_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->how_flexible_are_you_on_this_timeframe_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Do you have an ideal overall budget in mind for your project? --}}
                            @if(isset($ProjectMeta->price))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Do you have a date in mind, for the construction work to begin?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block" style="font-size: 24px; color: #ed7b00; font-weight: 900">£{{ number_format(explode(";", $ProjectMeta->price)[0]) }} <span style="color: #777777">and</span> £{{ number_format(explode(";", $ProjectMeta->price)[1]) }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- How flexible is your budget? --}}
                            @if(isset($ProjectMeta->how_flexible_are_you_on_this_timeframe))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">How flexible is your budget?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->how_flexible_is_your_budget }}</div>
                                        </div>

                                        @if(isset($ProjectMeta->how_flexible_is_your_budget_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->how_flexible_is_your_budget_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- How are you financing your project? --}}
                            @if(isset($ProjectMeta->how_are_you_financing_your_project))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">How are you financing your project?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <ul>
                                                @foreach($ProjectMeta->how_are_you_financing_your_project as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        @if(isset($ProjectMeta->how_are_you_financing_your_project_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->how_are_you_financing_your_project_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Do you have any of the following services already in place? --}}
                            @if(isset($ProjectMeta->following_services))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">Do you have any of the following services already in place?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <ul>
                                                @foreach($ProjectMeta->following_services as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        @if(isset($ProjectMeta->following_services_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->following_services_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- How involved would you like to be in the build phase? --}}
                            @if(isset($ProjectMeta->you_like_to_be_in_the_build_phase))
                                <div class="widget-block widget-item widget-style">
                                    <div class="heading-widget">
                                        <span class="widget-title">How involved would you like to be in the build phase?</span>
                                    </div>

                                    <div class="widget-content widget-content-padding">
                                        <div class="show-info-block">
                                            <div class="value-block">{{ $ProjectMeta->you_like_to_be_in_the_build_phase }}</div>
                                        </div>

                                        @if(isset($ProjectMeta->you_like_to_be_in_the_build_phase_information))
                                            <div class="show-info-block">
                                                <div class="title-block">Any further information you'd like to add?</div>
                                                <div class="value-block">{{ $ProjectMeta->you_like_to_be_in_the_build_phase_information }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Project Options</span>
                        </div>

                        <div class="widget-content widget-content-padding widget-content-padding-side">
                            <button type="submit" class="submit-form-btn">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
