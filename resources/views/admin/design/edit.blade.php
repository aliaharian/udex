@extends('layouts.admin.dashboard.master')
@section('page-title', strtoupper(str_replace('_',' ', json_decode($Design->design_meta, true)['which_specific_parts_of_the_property'])) )

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.19 14.426c.293 0 .456.229.49.49.089.942.094 1.877.099 2.82.002.428.004.858.014 1.29.017.262-.228.49-.49.49l-1.33.02c-.87.015-1.735.03-2.6.03a.502.502 0 01-.49-.49c0-.588 0-1.191-.016-1.778-3.084-.017-6.183.049-9.267.195 0 .245-.004.49-.008.734-.004.245-.008.49-.008.735 0 .26-.228.489-.49.489-.45-.005-.902-.007-1.353-.009a84.322 84.322 0 01-2.708-.04.586.586 0 01-.294-.114.434.434 0 01-.196-.375c0-.637-.004-1.273-.008-1.909-.004-.636-.008-1.273-.008-1.909 0-.277.228-.473.49-.49l.472-.024.473-.024c-.016-3.181-.016-6.346-.016-9.527H.674c-.294 0-.457-.229-.49-.49C.095 3.737.105 2.941.115 2.143c.005-.37.01-.739.004-1.11 0-.261.228-.49.49-.49 1.32 0 2.626 0 3.931.017.261 0 .49.228.49.49v1.272l4.666-.05 4.665-.048.003-.394c.004-.267.008-.536-.003-.797 0-.261.228-.49.49-.49 1.32 0 2.626 0 3.93.017.262 0 .49.228.49.49-.005.385-.007.771-.009 1.158a61.502 61.502 0 01-.04 2.316.544.544 0 01-.081.245.435.435 0 01-.408.244h-1.256c.081 3.149.147 6.298.212 9.446.253-.008.502-.012.75-.016.25-.004.498-.008.75-.017zm-1.9 1.028c-.482.012-.963.025-1.445.033-.012.77.003 1.542.019 2.312l.014.771c.979 0 1.958-.016 2.936-.032-.011-.38-.015-.757-.018-1.134a28.567 28.567 0 00-.063-1.982c-.481.008-.963.02-1.444.032zM15.35 2.248c.003-.241.006-.483.006-.726.979 0 1.958 0 2.936.017 0 .832 0 1.664-.032 2.512a85.206 85.206 0 00-2.888 0 26.155 26.155 0 01-.021-1.803zm-14.225 0c-.007.6-.013 1.197.022 1.803a85.258 85.258 0 012.887 0c.033-.848.033-1.68.033-2.513-.979-.016-1.958-.016-2.937-.016 0 .243-.002.485-.005.726zm3.497 16.224c-1.028 0-2.056 0-3.1-.032 0-.963 0-1.925-.016-2.888a39.637 39.637 0 012.222-.022c.297.003.595.006.894.006a88.17 88.17 0 010 2.936zm.995-3.442v1.485c3.08-.147 6.165-.213 9.25-.196-.017-.44-.017-.865 0-1.305 0-.147.048-.245.13-.327a.089.089 0 00.013-.017c.006-.009.01-.015.02-.015a.43.43 0 01.326-.13c.228-.009.453-.013.677-.017.226-.003.451-.009.677-.016-.08-3.086-.144-6.188-.208-9.274l-.004-.188h-1.583c-.293 0-.456-.229-.489-.49-.049-.44-.065-.897-.065-1.337l-4.666.049L5.03 3.3c0 .408-.016.816-.032 1.224 0 .098-.016.18-.066.245a.48.48 0 01-.424.244H2.941c.016 3.182.016 6.347.016 9.528.24 0 .478.001.717.003.48.004.963.008 1.453-.003.261 0 .49.228.49.489z" fill="#000"/></svg></span>
    <span class="text text-capitalize">Design: {{ str_replace('_',' ', json_decode($Design->design_meta, true)['which_specific_parts_of_the_property']) }}</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('design.update', $Design->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="order-icon">
                                        <img width="70" src="{{ asset('public/assets/site/images/base/design/designs-icons') . "/" . json_decode($Design->design_meta, true)['which_specific_parts_of_the_property'] . '.svg' }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="widget-title text-capitalize">{{ str_replace('_',' ', json_decode($Design->design_meta, true)['which_specific_parts_of_the_property']) }}</div>
                                    <div class="order-date">{{ date('d M Y', strtotime($Design->created_at)) }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-padding">
                            <div class="section-content-tab-mode">
                                <div class="section-inner">
                                    <div class="design-info">
                                        <div class="design-options">
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/headphone.svg') }}" alt="Initial Phone Consultation">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Initial Phone Consultation</div>
                                                        <div class="desc">An introductory call to better understand your project</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">
                                                            @if(isset(json_decode($Design->design_meta, true)['InitialPhoneConsultation']) && json_decode($Design->design_meta, true)['InitialPhoneConsultation'] > 0)
                                                                <div class="colored">£ {{ json_decode($Design->design_meta, true)['InitialPhoneConsultation'] }}</div>@else{{ 'Free' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/metr.svg') }}" alt="On Site Measured Survey">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">On Site Measured Survey</div>
                                                        <div class="desc">Visiting your property to gather all the key details needed during the design process</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">
                                                            @if(json_decode($Design->design_meta, true)['ProposedDesign'] > 0)
                                                                <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey']) }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/convert.svg') }}" alt="Existing Drawings">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Existing Drawings</div>
                                                        <div class="desc">We draw up your existing layout, prior to new designs</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">@if(json_decode($Design->design_meta, true)['ExistingDrawings'] > 0)
                                                                <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['ExistingDrawings']) }}</div>@endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/scale.svg') }}" alt="Proposed Design">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Proposed Design</div>
                                                        <div class="desc">We work closely with you to design your new space</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">@if(json_decode($Design->design_meta, true)['ProposedDesign'] > 0)
                                                                <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['ProposedDesign']) }}</div>@endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/support.svg') }}" alt="Planning Support">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Planning Support</div>
                                                        <div class="desc">We take your project through the approval process</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">@if(json_decode($Design->design_meta, true)['PlanningSupport'] > 0)
                                                                <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['PlanningSupport']) }}</div>@endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/bulding.svg') }}" alt="Building Regulations">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Building Regulations</div>
                                                        <div class="desc">We add the necessary technical details to meet building regulations requirement</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">@if(json_decode($Design->design_meta, true)['Would_you_like_to_add_Building_Regulation_drawings'] != 'planning_only')
                                                                <div class="colored">£ {{ number_format(json_decode($Design->design_meta, true)['BuildingRegulations']) }}</div>@else Not included @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/3d.svg') }}" alt="Photo-realistic 3Ds">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Photo-realistic 3Ds</div>
                                                        <div class="desc">Using the latest rendering software, we allow you to take a virtual tour of your future home</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">@if(isset(json_decode($Design->design_meta, true)['PhotoRealistic3Ds']) && json_decode($Design->design_meta, true)['PhotoRealistic3Ds'] > 0)
                                                                <div class="colored">£ {{ json_decode($Design->design_meta, true)['PhotoRealistic3Ds'] }}</div>
                                                            @else{{ 'Not included' }}@endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/drile.svg') }}" alt="Connect">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Connect</div>
                                                        <div class="desc">We introduce you to the trusted professionals needed to complete your build</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">@if(isset(json_decode($Design->design_meta, true)['Connect']) && json_decode($Design->design_meta, true)['Connect'] > 0)
                                                                <div class="colored">£ {{ json_decode($Design->design_meta, true)['Connect'] }}</div>
                                                            @else{{ 'Free' }}@endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="icon">
                                                            <img src="{{ asset('public/assets/site/images/base/design/icons/calculator.svg') }}" alt="Total (inc. VAT)">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title">Total (inc. VAT)</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="value">
                                                            <div class="colored">£
                                                                @php
                                                                    $TotalPrice = json_decode($Design->design_meta, true)['ProposedDesign'] + json_decode($Design->design_meta, true)['PlanningSupport'] + json_decode($Design->design_meta, true)['ExistingDrawings'] + json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey'];
                                                                    if (isset(json_decode($Design->design_meta, true)['Connect'])){
                                                                        $TotalPrice += json_decode($Design->design_meta, true)['Connect'];
                                                                    }
                                                                    if (isset(json_decode($Design->design_meta, true)['PhotoRealistic3Ds'])){
                                                                        $TotalPrice += json_decode($Design->design_meta, true)['PhotoRealistic3Ds'];
                                                                    }
                                                                    if (isset(json_decode($Design->design_meta, true)['InitialPhoneConsultation'])){
                                                                        $TotalPrice += json_decode($Design->design_meta, true)['InitialPhoneConsultation'];
                                                                    }
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Design Update</span>
                        </div>
                        <div class="widget-content widget-content-padding">
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('InitialPhoneConsultation'))
                                    <span class="col-12 message-show">{{ $errors->first('InitialPhoneConsultation') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['InitialPhoneConsultation']) && json_decode($Design->design_meta, true)['InitialPhoneConsultation'] > 0){{ json_decode($Design->design_meta, true)['InitialPhoneConsultation'] }}@endif" type="text" name="InitialPhoneConsultation" class="col-12 field-style input-text" id="InitialPhoneConsultation" placeholder="Amount...">
                                <label class="col-12" for="InitialPhoneConsultation">Initial Phone Consultation:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('OnSiteMeasuredSurvey'))
                                    <span class="col-12 message-show">{{ $errors->first('OnSiteMeasuredSurvey') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey']) && json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey'] > 0){{ json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey'] }}@endif" type="text" name="OnSiteMeasuredSurvey" class="col-12 field-style input-text" id="OnSiteMeasuredSurvey" placeholder="Amount...">
                                <label class="col-12" for="OnSiteMeasuredSurvey">On Site Measured Survey:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('ExistingDrawings'))
                                    <span class="col-12 message-show">{{ $errors->first('ExistingDrawings') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['ExistingDrawings']) && json_decode($Design->design_meta, true)['ExistingDrawings'] > 0){{ json_decode($Design->design_meta, true)['ExistingDrawings'] }}@endif" id="ExistingDrawings" name="ExistingDrawings" placeholder="Amount..." type="text" class="col-12 field-style input-text">
                                <label class="col-12" for="ExistingDrawings">Existing Drawings:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('ProposedDesign'))
                                    <span class="col-12 message-show">{{ $errors->first('ProposedDesign') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['ProposedDesign']) && json_decode($Design->design_meta, true)['ProposedDesign'] > 0){{ json_decode($Design->design_meta, true)['ProposedDesign'] }}@endif" id="ProposedDesign" name="ProposedDesign" placeholder="Amount..." type="text" class="col-12 field-style input-text">
                                <label class="col-12" for="ExistingDrawings">Proposed Design:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('PlanningSupport'))
                                    <span class="col-12 message-show">{{ $errors->first('PlanningSupport') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['PlanningSupport']) && json_decode($Design->design_meta, true)['PlanningSupport'] > 0){{ json_decode($Design->design_meta, true)['PlanningSupport'] }}@endif" id="PlanningSupport" name="PlanningSupport" placeholder="Amount..." type="text" class="col-12 field-style input-text">
                                <label class="col-12" for="ExistingDrawings">Planning Support:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('BuildingRegulations'))
                                    <span class="col-12 message-show">{{ $errors->first('BuildingRegulations') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['BuildingRegulations']) && json_decode($Design->design_meta, true)['BuildingRegulations'] > 0){{ json_decode($Design->design_meta, true)['BuildingRegulations'] }}@endif" id="BuildingRegulations" name="BuildingRegulations" placeholder="Amount..." type="text" class="col-12 field-style input-text">
                                <label class="col-12" for="ExistingDrawings">Building Regulations:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('PhotoRealistic3Ds'))
                                    <span class="col-12 message-show">{{ $errors->first('PhotoRealistic3Ds') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['PhotoRealistic3Ds']) && json_decode($Design->design_meta, true)['PhotoRealistic3Ds'] > 0){{ json_decode($Design->design_meta, true)['PhotoRealistic3Ds'] }}@endif" id="PhotoRealistic3Ds" name="PhotoRealistic3Ds" placeholder="Amount..." type="text" class="col-12 field-style input-text">
                                <label class="col-12" for="PhotoRealistic3Ds">Photo-realistic 3Ds:</label>
                            </div>
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('Connect'))
                                    <span class="col-12 message-show">{{ $errors->first('Connect') }}</span>
                                @endif
                                <input value="@if(isset(json_decode($Design->design_meta, true)['Connect']) && json_decode($Design->design_meta, true)['Connect'] > 0){{ json_decode($Design->design_meta, true)['Connect'] }}@endif" id="Connect" name="Connect" placeholder="Amount..." type="text" class="col-12 field-style input-text">
                                <label class="col-12" for="Connect">Connect:</label>
                            </div>

                            <button type="submit" class="submit-form-btn">Update</button>
                        </div>
                    </div>

                    @if(isset($Invoice))
                        <div class="widget-block widget-item widget-style">
                            <div class="heading-widget">
                                <span class="widget-title">Design Payments</span>
                            </div>
                            <div class="widget-content widget-content-padding">
                                <div class="payment-col">
                                    <div class="price-items">
                                        @forelse($Invoice as $item)
                                            <div class="item">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="title">£{{ number_format($item->amount, 2) }} @if($item->payment_step == 1)
                                                                <span style="font-size:10px; font-weight: 500; color: #888888;">(Deposit)</span> @endif</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="value text-capitalize">
                                                            <span style="@if($item->status == 'paid'){{ 'color: #268d31;' }}@else{{ 'color: #ff3333;' }}@endif">{{ $item->status }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="No Item"></div>
                                        @endforelse

                                        <div class="manage-payment">
                                            <a href="{{ url('dashboard/design/payment-manage/' . $Design->id) }}">Manage Payments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>

@endsection
