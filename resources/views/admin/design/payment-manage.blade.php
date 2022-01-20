@extends('layouts.admin.dashboard.master')
@section('page-title', 'Payment Management' )

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.19 14.426c.293 0 .456.229.49.49.089.942.094 1.877.099 2.82.002.428.004.858.014 1.29.017.262-.228.49-.49.49l-1.33.02c-.87.015-1.735.03-2.6.03a.502.502 0 01-.49-.49c0-.588 0-1.191-.016-1.778-3.084-.017-6.183.049-9.267.195 0 .245-.004.49-.008.734-.004.245-.008.49-.008.735 0 .26-.228.489-.49.489-.45-.005-.902-.007-1.353-.009a84.322 84.322 0 01-2.708-.04.586.586 0 01-.294-.114.434.434 0 01-.196-.375c0-.637-.004-1.273-.008-1.909-.004-.636-.008-1.273-.008-1.909 0-.277.228-.473.49-.49l.472-.024.473-.024c-.016-3.181-.016-6.346-.016-9.527H.674c-.294 0-.457-.229-.49-.49C.095 3.737.105 2.941.115 2.143c.005-.37.01-.739.004-1.11 0-.261.228-.49.49-.49 1.32 0 2.626 0 3.931.017.261 0 .49.228.49.49v1.272l4.666-.05 4.665-.048.003-.394c.004-.267.008-.536-.003-.797 0-.261.228-.49.49-.49 1.32 0 2.626 0 3.93.017.262 0 .49.228.49.49-.005.385-.007.771-.009 1.158a61.502 61.502 0 01-.04 2.316.544.544 0 01-.081.245.435.435 0 01-.408.244h-1.256c.081 3.149.147 6.298.212 9.446.253-.008.502-.012.75-.016.25-.004.498-.008.75-.017zm-1.9 1.028c-.482.012-.963.025-1.445.033-.012.77.003 1.542.019 2.312l.014.771c.979 0 1.958-.016 2.936-.032-.011-.38-.015-.757-.018-1.134a28.567 28.567 0 00-.063-1.982c-.481.008-.963.02-1.444.032zM15.35 2.248c.003-.241.006-.483.006-.726.979 0 1.958 0 2.936.017 0 .832 0 1.664-.032 2.512a85.206 85.206 0 00-2.888 0 26.155 26.155 0 01-.021-1.803zm-14.225 0c-.007.6-.013 1.197.022 1.803a85.258 85.258 0 012.887 0c.033-.848.033-1.68.033-2.513-.979-.016-1.958-.016-2.937-.016 0 .243-.002.485-.005.726zm3.497 16.224c-1.028 0-2.056 0-3.1-.032 0-.963 0-1.925-.016-2.888a39.637 39.637 0 012.222-.022c.297.003.595.006.894.006a88.17 88.17 0 010 2.936zm.995-3.442v1.485c3.08-.147 6.165-.213 9.25-.196-.017-.44-.017-.865 0-1.305 0-.147.048-.245.13-.327a.089.089 0 00.013-.017c.006-.009.01-.015.02-.015a.43.43 0 01.326-.13c.228-.009.453-.013.677-.017.226-.003.451-.009.677-.016-.08-3.086-.144-6.188-.208-9.274l-.004-.188h-1.583c-.293 0-.456-.229-.489-.49-.049-.44-.065-.897-.065-1.337l-4.666.049L5.03 3.3c0 .408-.016.816-.032 1.224 0 .098-.016.18-.066.245a.48.48 0 01-.424.244H2.941c.016 3.182.016 6.347.016 9.528.24 0 .478.001.717.003.48.004.963.008 1.453-.003.261 0 .49.228.49.489z" fill="#000"/></svg></span>
    <span class="text text-capitalize">Payment Management</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('design.payment.update', $Design->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Design Payments</span>
                        </div>
                        <div class="widget-content widget-content-padding">
                            <div class="form-group">
                                <div class="payment-management text-field-repeater">
                                    <div class="field-list small-image row" id="invoice_list">
                                        <div class="row">
                                            <div class="col mb-3">Amount</div>
                                            <div style="width: 52px" class="col-auto">Paid</div>
                                            <div style="width: 30px" class="col-auto">Delete</div>
                                        </div>
                                        @php $count = 0; @endphp
                                        @if(isset($Invoice))
                                            @foreach($Invoice as $item)
                                                <div class='text-field col-12' id='field-invoice-{{ $count += 1 }}'>
                                                    <div class='row align-items-center gy-4'>
                                                        <div class='col'>
                                                            <input value="{{ $item['amount'] }}" placeholder='Amount' class='input-field' type="text" name="invoice[{{ $count }}][amount]" id="invoice_{{ $count }}">
                                                        </div>
                                                        <div class="col-auto check-box-field">
                                                            <input id="paid-{{ $count }}" @if(isset($item['status']) && $item['status'] == 'paid'){{ 'checked' }}@endif name="invoice[{{ $count }}][paid]" value="1" type="checkbox">
                                                            <label for="paid-{{ $count }}"><i class="zmdi zmdi-check"></i></label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <span class='delete-row icon-close' onclick='delete_invoice({{ $count }})'><img src='{{ asset('public/assets/admin/img/base/icons') }}/close.svg'></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="add-field center" id="addInvoice">
                                        <span class="icon-plus"></span>
                                        Add Item
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Payment Details</span>
                        </div>
                        <div class="widget-content widget-content-padding">
                            <div class="details-items">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="label">Total Design Price:</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="value">
                                                £ @php
                                                    $TotalPrice = json_decode($Design->design_meta, true)['ProposedDesign'] + json_decode($Design->design_meta, true)['PlanningSupport'] + json_decode($Design->design_meta, true)['ExistingDrawings'] + json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey'];
                                                    if (json_decode($Design->design_meta, true)['Would_you_like_to_add_Building_Regulation_drawings'] != 'planning_only'){
                                                        $TotalPrice += json_decode($Design->design_meta, true)['BuildingRegulations'];
                                                    }
                                                    echo number_format($TotalPrice);
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="label">Total Invoice Amount:</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="value">£ {{ number_format($TotalAmount, 2) }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="label">The Remaining Amount:</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="value">£ {{ number_format($RemainingAmount, 2) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="submit-form-btn mt-3">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    {{-- Add Meet The FAQ --}}
    <script>
        jQuery(document).ready(function () {
            var i = {{ $count }};
            jQuery("#addInvoice").click(function () {
                i += 1;
                jQuery("#invoice_list").append("<div class='text-field col-12' id='field-invoice-" + i + "'><div class='row align-items-center gy-4'><div class='col'><input placeholder='Amount...' class='input-field' type=\"text\" name=\"invoice[" + i + "][amount]\" id=\"invoice_" + i + "\"></div><div class=\"col-auto check-box-field\"><input id=\"paid-" + i + "\" name=\"invoice[" + i + "][paid]\" value=\"1\"  type=\"checkbox\"><label for=\"paid-" + i + "\"><i class=\"zmdi zmdi-check\"></i></label></div><div class=\"col-auto\"><span class='delete-row icon-close' onclick='delete_invoice(\"" + i + "\")'><img src='{{ asset('public/assets/admin/img/base/icons') }}/close.svg'></span></div></div>");
                return false;
            });
        });

        function delete_invoice($id) {
            $('#field-invoice-' + $id).remove();
        }
    </script>
@endsection
