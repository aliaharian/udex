@extends('layouts.site.pages-master')

@section('page-title',  str_replace('_',' ', json_decode($Design->design_meta, true)['which_specific_parts_of_the_property']))

@section('content')
    <article class="container container-padding">
        <div class="page-info">
            <div class="row align-items-center">
<<<<<<< HEAD
                <div class="col-auto">
                    <div class="page-icon">
=======
                <div class="col-md-auto text-md-start text-center md-md-0 mb-3">
                    <div class="page-icon d-inline-block">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                        <svg id="SVGDoc" width="68" height="120" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 120">
                            <path d="M67.8128,41.156c-0.3279,-0.704 -1.034,-1.1559 -1.8119,-1.1559h-23.7v0l23.3899,-36.93002c0.39,-0.61594 0.4139,-1.39594 0.0621,-2.03391c-0.352,-0.64008 -1.0242,-1.03617 -1.7522,-1.03617h-31.9999c-0.758,0 -1.4501,0.42797 -1.7899,1.10602l-30.00001,59.99998c-0.31008,0.6181 -0.27609,1.354 0.08789,1.9439c0.36609,0.5899 1.00805,0.9499 1.70203,0.9499h20.56589v0l-22.40995,53.2242c-0.38203,0.91 -0.04195,1.966 0.79992,2.482c0.32391,0.198 0.68391,0.294 1.04203,0.294c0.57399,0 1.14001,-0.246 1.53211,-0.71l64.00009,-76.0002c0.5018,-0.5958 0.6098,-1.4278 0.2819,-2.1338z" fill="#000000" fill-opacity="1"></path>
                        </svg>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="col">
=======
                <div class="col-md text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                    <div class="heading-title">Here's your quick quote for <br>
                        <span class="base-color text-color text-capitalize">{{ str_replace('_',' ', json_decode($Design->design_meta, true)['which_specific_parts_of_the_property']) }}!</span>
                    </div>
                    <div class="heading-desc">This quote is a rough indication of what your design project will cost. For a more in-depth quotation book a consultation call below to speak to us directly.</div>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="heading-in-content">Quote details</div>

            <div class="design-quote-title">
                <div class="icon">
                    <img src="{{ asset('public/assets/site/images/base/design/designs-icons') . "/" . json_decode($Design->design_meta, true)['which_specific_parts_of_the_property'] . '.svg' }}" alt="">
                </div>
                <div class="title text-capitalize">{{ str_replace('_',' ', json_decode($Design->design_meta, true)['which_specific_parts_of_the_property']) }}</div>
            </div>

            <div class="quote-details">
                <div class="design-options">
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/headphone.svg') }}" alt="Initial Phone Consultation">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Initial Phone Consultation</div>
                                <div class="desc">An introductory call to better understand your project</div>
                            </div>
                            <div class="col-auto">
                                <div class="value">Free</div>
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Initial Phone Consultation</div>
                                <div class="desc">An introductory call to better understand your project</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
                                <div class="value">
                                    @if(json_decode($Design->design_meta, true)['ProposedDesign'] > 0)
                                        <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey']) }}</div>
                                    @endif
                                </div>
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/metr.svg') }}" alt="On Site Measured Survey">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">On Site Measured Survey</div>
                                <div class="desc">Visiting your property to gather all the key details needed during the design process</div>
                            </div>
                            <div class="col-auto">
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">On Site Measured Survey</div>
                                <div class="desc">Visiting your property to gather all the key details needed during the design process</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="value">@if(json_decode($Design->design_meta, true)['ProposedDesign'] > 0)
                                        <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey']) }}</div>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/convert.svg') }}" alt="Existing Drawings">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Existing Drawings</div>
                                <div class="desc">We draw up your existing layout, prior to new designs</div>
                            </div>
                            <div class="col-auto">
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Existing Drawings</div>
                                <div class="desc">We draw up your existing layout, prior to new designs</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="value">@if(json_decode($Design->design_meta, true)['ExistingDrawings'] > 0)
                                        <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['ExistingDrawings']) }}</div>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/scale.svg') }}" alt="Proposed Design">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Proposed Design</div>
                                <div class="desc">We work closely with you to design your new space</div>
                            </div>
                            <div class="col-auto">
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Proposed Design</div>
                                <div class="desc">We work closely with you to design your new space</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="value">@if(json_decode($Design->design_meta, true)['ProposedDesign'] > 0)
                                        <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['ProposedDesign']) }}</div>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/support.svg') }}" alt="Planning Support">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Planning Support</div>
                                <div class="desc">We take your project through the approval process</div>
                            </div>
                            <div class="col-auto">
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Planning Support</div>
                                <div class="desc">We take your project through the approval process</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="value">@if(json_decode($Design->design_meta, true)['PlanningSupport'] > 0)
                                        <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['PlanningSupport']) }}</div>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/bulding.svg') }}" alt="Building Regulations">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Building Regulations</div>
                                <div class="desc">We add the necessary technical details to meet building regulations requirement</div>
                            </div>
                            <div class="col-auto">
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Building Regulations</div>
                                <div class="desc">We add the necessary technical details to meet building regulations requirement</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="value">@if(json_decode($Design->design_meta, true)['Would_you_like_to_add_Building_Regulation_drawings'] != 'planning_only')
                                        <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['BuildingRegulations']) }}</div>@else Not included @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/3d.svg') }}" alt="Photo-realistic 3Ds">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Photo-realistic 3Ds</div>
                                <div class="desc">Using the latest rendering software, we allow you to take a virtual tour of your future home</div>
                            </div>
                            <div class="col-auto">
                                <div class="value">Not included</div>
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Photo-realistic 3Ds</div>
                                <div class="desc">Using the latest rendering software, we allow you to take a virtual tour of your future home</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
                                <div class="value">@if(isset(json_decode($Design->design_meta, true)['PhotoRealistic3Ds']) && json_decode($Design->design_meta, true)['PhotoRealistic3Ds'] > 0)
                                        <div class="colored">£ {{ json_decode($Design->design_meta, true)['PhotoRealistic3Ds'] }}</div>
                                    @else{{ 'Not included' }}@endif
                                </div>
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/drile.svg') }}" alt="Connect">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Connect</div>
                                <div class="desc">We introduce you to the trusted professionals needed to complete your build</div>
                            </div>
                            <div class="col-auto">
                                <div class="value">Free</div>
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Connect</div>
                                <div class="desc">We introduce you to the trusted professionals needed to complete your build</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
                                <div class="value">@if(isset(json_decode($Design->design_meta, true)['Connect']) && json_decode($Design->design_meta, true)['Connect'] > 0)
                                        <div class="colored">£ {{ json_decode($Design->design_meta, true)['Connect'] }}</div>
                                    @else{{ 'Free' }}@endif
                                </div>
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
<<<<<<< HEAD
                            <div class="col-auto">
=======
                            <div class="col-md-auto col-12 text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="icon">
                                    <img src="{{ asset('public/assets/site/images/base/design/icons/calculator.svg') }}" alt="Total (inc. VAT)">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col">
                                <div class="title">Total (inc. VAT)</div>
                            </div>
                            <div class="col-auto">
=======
                            <div class="col-md col-12 text-md-start text-center">
                                <div class="title">Total (inc. VAT)</div>
                            </div>
                            <div class="col-md-auto col-12 text-md-end text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="value">
                                    <div class="colored">£
                                        @php
                                            $TotalPrice = json_decode($Design->design_meta, true)['ProposedDesign'] + json_decode($Design->design_meta, true)['PlanningSupport'] + json_decode($Design->design_meta, true)['ExistingDrawings'] + json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey'];
<<<<<<< HEAD
=======
                                            if (isset(json_decode($Design->design_meta, true)['Connect'])){
                                                $TotalPrice += json_decode($Design->design_meta, true)['Connect'];
                                            }
                                            if (isset(json_decode($Design->design_meta, true)['PhotoRealistic3Ds'])){
                                                $TotalPrice += json_decode($Design->design_meta, true)['PhotoRealistic3Ds'];
                                            }
                                            if (isset(json_decode($Design->design_meta, true)['InitialPhoneConsultation'])){
                                                $TotalPrice += json_decode($Design->design_meta, true)['InitialPhoneConsultation'];
                                            }
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                            if (json_decode($Design->design_meta, true)['Would_you_like_to_add_Building_Regulation_drawings'] != 'planning_only'){
                                                $TotalPrice += json_decode($Design->design_meta, true)['BuildingRegulations'];
                                            }
                                            echo number_format($TotalPrice);
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-section">
<<<<<<< HEAD
                <div class="heading-in-content"><span>F</span>requently <span>A</span>sked <span>Q</span>uestions
=======
                <div class="heading-in-content">
                    <span>F</span>
                    requently
                    <span>A</span>
                    sked
                    <span>Q</span>
                    uestions
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                    <div class="subtitle">Straightforward answers to some of the most common questions we hear</div>
                </div>
            </div>
        </div>
    </article>
@endsection
