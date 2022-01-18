@extends('layouts.profile.master')

@section('page-title', 'Payments')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <article class="content-inner">
                <div class="heading-page-block center mb-5">
                    <div class="heading-text">Pay by bank transfer</div>
                    <div class="excerpt-page">Our details for paying via bank transfer</div>
                </div>

                <div class="page-content-body single-payment single-payment-by-transfer mb-5">
                    @if ($message = Session::get('success'))
                        <div class="w3-panel w3-green w3-display-container mb-2 opacity-75">
                            <div onclick="this.parentElement.style.display='none'"
                                class="w3-button w3-green w3-large w3-display-topright">&times;
                            </div>
                            <p>{!! $message !!}</p>
                        </div>
                        <?php Session::forget('success');?>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="w3-panel w3-red w3-display-container mb-2">
                            <div onclick="this.parentElement.style.display='none'"
                                class="w3-button w3-red w3-large w3-display-topright">&times;
                            </div>
                            <p>{!! $message !!}</p>
                        </div>
                        <?php Session::forget('error');?>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 item">
                                    <div class="label">Recipient::</div>
                                    <div class="value">KavaX Media Ltd.</div>
                                </div>
                                <div class="col-12 item">
                                    <div class="label">Bank name:</div>
                                    <div class="value">Barclays bank Ltd.</div>
                                </div>
                                <div class="col-12 item">
                                    <div class="label">Sort code:</div>
                                    <div class="value">20-45-45</div>
                                </div>
                                <div class="col-12 item">
                                    <div class="label">Account number:</div>
                                    <div class="value">03 72 55 53</div>
                                </div>
                                <div class="col-12 item">
                                    <div class="label">Payment Reference:</div>
                                    <div class="value text-uppercase">{{ auth()->user()->first_name[0] . auth()->user()->last_name }}</div>
                                </div>
                                <div class="col-12 item">
                                    <div class="label">Transfer amount:</div>
                                    <div class="value">£ {{ number_format($Payment->amount, 2) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="pay-btn">
                    <div class="center">
                        <div class="center">
                            @if($Payment->bt_transfer != 1)
                            <form class="d-inline-block" action="{{ route('ByTransfer.submit', $Payment->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="submit" class="colored mb-0" value="I have already paid">
                            </form>
                            @endif
                            <a class="back-to-profile mx-4 me-0" href="{{ url('profile/payments?status=paid') }}">Take me back to the dashboard</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
