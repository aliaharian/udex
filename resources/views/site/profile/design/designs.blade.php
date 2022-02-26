@extends('layouts.profile.master')

@section('page-title', 'Designs')

@section('content')
    <article class="content-inner">
        <!-- Dashboard Heading -->
        <div class="heading-dashboard">
            <div class="row align-items-end">
                <div class="col-auto">
                    <svg width="94" height="79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M0 51.054l48.805 27.501v-31.99L0 19.061v31.992z" fill="#ED7B00"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M48.804 46.564v31.992L73.128 64.85v-32.03l-12.13-6.831-12.194 20.574z" fill="#ED3F00"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M13.456.278L0 19.06l48.805 27.503L60.997 25.99 13.456.278z" fill="#ED5D00"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M73.17 64.824L48.808 78.556 94 67.398 73.17 55.696v9.128z" fill="#5F5F5F"/>
                    </svg>
                </div>
                <div class="col content-col-heading">
                    <div class="h-text">Explore
                        <span>our services</span>
                    </div>
                    <div class="excerpt">Start a design project, find suppliers or compare finance options</div>
                </div>
            </div>
        </div>

        <div class="section-tab-mode">
            <div class="heading-section">
                <div class="row g-0">
                    <div class="col-md-auto col-6 item active">
                        <a href="{{ url('profile/design') }}" class="item-inner">
                            <div class="icon">
                                <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M28.785 21.64c.44 0 .685.342.734.734.134 1.414.142 2.816.149 4.23.003.642.007 1.287.022 1.936.024.392-.343.735-.734.735-.668.008-1.333.019-1.997.03a234.67 234.67 0 01-3.9.043.753.753 0 01-.735-.734c0-.881 0-1.787-.024-2.668-4.625-.024-9.274.074-13.9.294 0 .367-.005.734-.012 1.101-.006.367-.012.734-.012 1.101a.753.753 0 01-.734.735c-.677-.009-1.354-.011-2.031-.014-1.354-.005-2.708-.011-4.062-.06a.88.88 0 01-.44-.171.65.65 0 01-.294-.563c0-.954-.006-1.909-.012-2.863-.007-.954-.013-1.909-.013-2.863 0-.416.343-.71.734-.734l.71-.037.71-.037c-.025-4.771-.025-9.519-.025-14.29H1.011c-.44 0-.685-.343-.734-.735C.143 5.605.157 4.412.173 3.214.18 2.66.186 2.106.179 1.549c0-.391.342-.734.734-.734 1.982 0 3.94 0 5.897.025.392 0 .734.342.734.734v1.908l7-.073h.001l6.996-.073c0-.195.003-.393.006-.591.005-.4.01-.803-.006-1.196 0-.391.343-.734.735-.734 1.982 0 3.94 0 5.897.025.392 0 .734.342.734.734-.008.579-.01 1.158-.014 1.737a92.571 92.571 0 01-.06 3.475c-.024.147-.048.269-.122.367a.652.652 0 01-.611.367h-1.885c.123 4.723.22 9.446.318 14.169.38-.013.753-.019 1.126-.025.373-.006.747-.012 1.126-.024zm-2.851 1.541c-.722.019-1.444.037-2.166.05-.018 1.155.005 2.312.028 3.468.007.385.015.77.021 1.156 1.468 0 2.936-.024 4.405-.049-.018-.569-.023-1.135-.028-1.7-.008-.99-.017-1.977-.095-2.974-.721.012-1.443.03-2.165.05zM23.026 3.372c.004-.362.008-.724.008-1.089 1.468 0 2.937 0 4.405.025 0 1.248 0 2.496-.05 3.768a127.884 127.884 0 00-4.33 0c-.053-.908-.043-1.803-.033-2.704zm-21.338 0c-.01.9-.02 1.796.032 2.704 1.444-.024 2.888-.024 4.331 0 .05-1.272.05-2.52.05-3.768-1.469-.025-2.937-.025-4.405-.025 0 .365-.004.727-.008 1.089zm5.245 24.336c-1.542 0-3.084 0-4.65-.049 0-1.443 0-2.887-.024-4.33 1.117-.053 2.223-.044 3.333-.033.446.004.892.008 1.34.008.025 1.468.025 2.936 0 4.404zm1.492-5.163v2.227c4.622-.22 9.248-.318 13.875-.294a26.081 26.081 0 010-1.958c0-.22.073-.366.196-.489a.133.133 0 00.02-.026c.008-.013.013-.023.029-.023a.644.644 0 01.489-.195c.343-.013.68-.019 1.015-.025.34-.005.678-.013 1.016-.025-.12-4.628-.216-9.28-.312-13.91l-.006-.282h-2.374c-.44 0-.685-.343-.734-.735a18.364 18.364 0 01-.098-2.006l-6.998.073-6.999.074c0 .612-.024 1.223-.049 1.835 0 .147-.024.269-.098.367-.122.196-.318.367-.636.367h-2.35c.025 4.772.025 9.52.025 14.291.358 0 .716.003 1.075.005.72.006 1.445.011 2.18-.005.391 0 .734.343.734.734z"
                                          fill="#ED7B00"/>
                                </svg>
                            </div>
                            <div class="label">
                                <div class="title">Design</div>
                                <div class="desc">Not started</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-auto col-6 item">
                        <a href="{{ url('profile/connect') }}" class="item-inner">
                            <div class="icon">
                                <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M17.916.218c1.892-.095 4.18-.21 5.543 1.006 1.335 1.182 1.207 3.215 1.096 4.969-.023.364-.045.716-.053 1.046a.724.724 0 01-.711.702c-.58 0-1.167.006-1.754.012-.586.006-1.173.012-1.753.012.094 4.025.096 8.051.098 12.077.002 3.019.003 6.038.044 9.058a.725.725 0 01-.711.702c-2.923.047-5.846.047-8.768 0a.725.725 0 01-.711-.702c-.011-1.542-.046-3.09-.082-4.636a244.447 244.447 0 01-.084-5.57c.012-1.813.03-3.633.047-5.452.018-1.82.036-3.64.047-5.454-1.28 0-2.535 0-3.815-.023a.708.708 0 01-.71-.702l-.072-2.739c0 .14-.024-.14-.024-.398 0-.374.048-.749.119-1.1C6.316.137 9.548.213 12.112.272c.407.01.797.019 1.157.016.38 0 .71.327.71.702v2.2h1.897V.967c0-.211.07-.352.19-.468l.047-.047c.095-.117.26-.188.474-.188.404 0 .854-.022 1.329-.046zm-9.98 1.849c-.686.397-.947 1.123-.97 1.848 0 .019 0 .059.003.108.005.14.014.355-.004.337 0 .094.006.188.012.281.006.094.012.187.012.281.012.27.018.544.024.82.006.274.012.55.023.818 4.285.038 8.57.015 12.854-.007l3.214-.016.014-.17c.119-1.438.279-3.372-.678-4.16-.498-.421-1.161-.538-1.8-.562-1.115-.047-2.229-.023-3.342 0V3.87a.724.724 0 01-.711.702h-3.318a.724.724 0 01-.71-.702v-2.2c-.392.011-.777.017-1.162.023-.385.006-.77.012-1.161.024a18.75 18.75 0 01-.388.006c-.652.007-1.339.013-1.911.345zm3.58 18.84a.676.676 0 00.355-.093c2.37-1.31 4.74-2.621 7.11-3.955v3.3c-1.233.679-2.465 1.363-3.698 2.048-1.232.684-2.464 1.37-3.697 2.048-.007-.36-.017-.722-.028-1.086-.021-.749-.043-1.505-.043-2.261zm-.024-1.497l7.464-4.143v-3.136c-1.184.655-2.363 1.31-3.541 1.965h-.001c-1.18.656-2.358 1.312-3.543 1.967a.675.675 0 01-.356.094c-.023.912-.023 1.825-.023 2.738v.515zm.166 8.988c0-.844-.023-1.666-.046-2.508l-.002-.067.043-.014a.778.778 0 00.194-.08c2.37-1.31 4.74-2.621 7.11-3.955 0 2.2 0 4.4.023 6.6-2.417.07-4.882.07-7.322.024zm-.142-13.763c2.464-1.357 4.929-2.715 7.393-4.096 0-.843-.022-1.665-.045-2.507l-.002-.067c-1.209 0-2.423.006-3.638.011-1.215.006-2.429.012-3.638.012l-.07 6.647z"
                                          fill="#ADADAD"/>
                                </svg>
                            </div>
                            <div class="label">
                                <div class="title">Connect</div>
                                <div class="desc">Not started</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-content-tab-mode">
                <div class="section-inner">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <div class="section-text">
                                <div class="title-section">Architectural design & planning</div>
                                <div class="desc-section">Get to grips with the often-complicated design and planning
                                    process with our free guides to help you understand the journey.
                                </div>
                            </div>
                            <div class="section-links">
                                <a target="_blank"
                                   href="https://udex.co.uk/download/Design/Guide%20to%20Measured%20Surveys.pdf"
                                   class="item">
                                    <span class="icon"><img
                                            src="{{ asset('public/assets/site/images/base/design/pdf.svg') }}"
                                            alt="PDF"></span>
                                    <span class="title">Guide to Measured Surveys</span>
                                    <i class="arrow">
                                        <img src="{{ asset('public/assets/site/images/base/design/arrow-right.svg') }}"
                                             alt="right">
                                    </i> </a>
                                <a target="_blank"
                                   href="https://udex.co.uk/download/Design/UDEX_New_Builds.pdf" class="item">
                                    <span class="icon"><img
                                            src="{{ asset('public/assets/site/images/base/design/pdf.svg') }}"
                                            alt="PDF"></span>
                                    <span class="title">Guide to New Builds</span>
                                    <i class="arrow">
                                        <img src="{{ asset('public/assets/site/images/base/design/arrow-right.svg') }}"
                                             alt="right">
                                    </i> </a>
                                <a target="_blank"
                                   href="https://udex.co.uk/download/Design/UDEX_Building_Regulations.pdf"
                                   class="item">
                                    <span class="icon"><img
                                            src="{{ asset('public/assets/site/images/base/design/pdf.svg') }}"
                                            alt="PDF"></span>
                                    <span class="title">Guide to Building Regulations</span>
                                    <i class="arrow">
                                        <img src="{{ asset('public/assets/site/images/base/design/arrow-right.svg') }}"
                                             alt="right">
                                    </i> </a>
                                <a target="_blank"
                                   href="https://udex.co.uk/download/Design/UDEX_Proposed_Design.pdf"
                                   class="item">
                                    <span class="icon"><img
                                            src="{{ asset('public/assets/site/images/base/design/pdf.svg') }}"
                                            alt="PDF"></span>
                                    <span class="title">Guide to Design and Planning</span>
                                    <i class="arrow">
                                        <img src="{{ asset('public/assets/site/images/base/design/arrow-right.svg') }}"
                                             alt="right">
                                    </i> </a>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="thumbnail-section">
                                <img src="{{ asset('public/assets/site/images/base/design/design-thumbnail.png') }}"
                                     alt="Designs">
                            </div>
                        </div>
                    </div>

                    <div class="accordion-block">
                        <div class="title-block text-md-start text-center">Explore a Design project</div>

                        <div class="accordion" id="accordionPanelsStayOpenDesign">
                            <div class="accordion-item mb-4">
                                <div class="accordion-header" id="panelsStayOpen-heading-1" data-bs-toggle="collapse"
                                     data-bs-target="#panelsStayOpen-collapse-1" aria-expanded="true"
                                     aria-controls="panelsStayOpen-collapse-1">
                                    <div class="row">
                                        <div class="col-auto d-md-block d-none">
                                            <div class="check-box-shape"></div>
                                        </div>
                                        <div class="col">
                                            <div class="heading-accordion">
                                                <div class="title">Get a quick quote</div>
                                                <div class="desc">Answer a few quick questions to get an idea of the
                                                    costs involved in design and planning for your project.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="arrow">
                                        <svg width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1l4 4 4-4" stroke="#333" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </i>
                                </div>
                                <div id="panelsStayOpen-collapse-1" class="accordion-content collapse show"
                                     aria-labelledby="panelsStayOpen-heading-1">
                                    <div class="accordion-content-inner">
                                        <div class="orders">
                                            @forelse($Designs as $item)
                                                @php
                                                    $TotalPrice = json_decode($item->design_meta, true)['ProposedDesign'] + json_decode($item->design_meta, true)['PlanningSupport'] + json_decode($item->design_meta, true)['ExistingDrawings'] + json_decode($item->design_meta, true)['OnSiteMeasuredSurvey'];
                                                    if (isset(json_decode($item->design_meta, true)['Connect'])){
                                                        $TotalPrice += json_decode($item->design_meta, true)['Connect'];
                                                    }
                                                    if (isset(json_decode($item->design_meta, true)['PhotoRealistic3Ds'])){
                                                        $TotalPrice += json_decode($item->design_meta, true)['PhotoRealistic3Ds'];
                                                    }
                                                    if (isset(json_decode($item->design_meta, true)['InitialPhoneConsultation'])){
                                                        $TotalPrice += json_decode($item->design_meta, true)['InitialPhoneConsultation'];
                                                    }
                                                    if (json_decode($item->design_meta, true)['Would_you_like_to_add_Building_Regulation_drawings'] != 'planning_only'){
                                                        $TotalPrice += json_decode($item->design_meta, true)['BuildingRegulations'];
                                                    }
                                                    $d1 = new DateTime($item->created_at);
                                                    $d2 = Carbon\Carbon::now();
                                                    //$d2 = new DateTime();
                                                    $interval = $d1->diff($d2);
                                                    $diffInDays = $interval->d;
                                                @endphp
                                                <a href="{{$diffInDays>13?'#':url('profile/design' .'/'. $item->id) }}"
                                                   class="order-item">
                                                    <div class="row align-items-center">
                                                        <div
                                                            class="col-md-auto col-12 text-md-start text-center mb-md-0 mb-4">
                                                            <div class="order-icon">
                                                                <img
                                                                    src="{{ asset('public/assets/site/images/base/design/designs-icons') . "/" . json_decode($item->design_meta, true)['which_specific_parts_of_the_property'] . '.svg' }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md col-12 text-md-start text-center mb-md-0 mb-4">
                                                            <div
                                                                class="order-title">{{ str_replace('_',' ', json_decode($item->design_meta, true)['which_specific_parts_of_the_property']) }}</div>
                                                            <div class="order-address">Published
                                                                on {{ $item->created_at }} @if($diffInDays>13)<span
                                                                    style="color:red">Expired</span>@endif</div>
                                                            <div class="order-address">
                                                                Postcode: {{ json_decode($item->design_meta, true)['postcode'] }}</div>
                                                        </div>
                                                        <div class="col-md-auto col-12">
                                                            <div class="price text-md-start text-center">
                                                                £ {{ number_format($TotalPrice)  }}
                                                            </div>
                                                            <div class="option text-md-start text-center">incl. VAT
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @empty
                                                <div class="section-text">
                                                    <a href="{{ url('design-quote') }}">Get an instant quote</a>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-4">
                                <div class="accordion-header" id="panelsStayOpen-heading-2" data-bs-toggle="collapse"
                                     data-bs-target="#panelsStayOpen-collapse-2" aria-expanded="true"
                                     aria-controls="panelsStayOpen-collapse-2">
                                    <div class="row">
                                        <div class="col-auto d-md-block d-none">
                                            <div class="check-box-shape"></div>
                                        </div>

                                        <div class="col">
                                            <div class="heading-accordion">
                                                <div class="title">Create a project brief</div>
                                                <div class="desc">Creating a project brief will help us understand your
                                                    project and give you the best possible advice when we have our
                                                    consultation call.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="arrow">
                                        <svg width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1l4 4 4-4" stroke="#333" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </i>
                                </div>
                                <div id="panelsStayOpen-collapse-2" class="accordion-content collapse show"
                                     aria-labelledby="panelsStayOpen-heading-2">
                                    <div class="accordion-content-inner">
                                        <div class="orders">
                                            <div class="connect-service-block">
                                                <div class="section-text mb-0">
                                                    <a href="{{ url('profile/project/create') }}">Complete Project
                                                        Brief</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-4">
                                <div class="accordion-header" id="panelsStayOpen-heading-3" data-bs-toggle="collapse"
                                     data-bs-target="#panelsStayOpen-collapse-3" aria-expanded="true"
                                     aria-controls="panelsStayOpen-collapse-3">
                                    <div class="row">
                                        <div class="col-auto d-md-block d-none">
                                            <div class="check-box-shape"></div>
                                        </div>

                                        <div class="col">
                                            <div class="heading-accordion">
                                                <div class="title">Receive a finalised quote</div>
                                                <div class="desc">Once you have booked a consultation call above and we
                                                    have had a chance to understand your project, we’ll issue a
                                                    finalised quote for the services you require and can begin work with
                                                    a deposit payment.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="arrow">
                                        <svg width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1l4 4 4-4" stroke="#333" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </i>
                                </div>
                            </div>
                        </div>


                        <div class="order-list">
                            <div class="item">
                                <div class="item-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
