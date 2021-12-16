@extends('layouts.profile.master')

@section('page-title', 'Payments')

@section('content')
    <article class="content-inner">
        <div class="heading-page-block mb-4">
            <div class="heading-text">Payments</div>
            <div class="excerpt-page">View payment details</div>
        </div>

        <div class="page-content-body single-payment">
            @if ($message = Session::get('success'))
                <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                    <p>{!! $message !!}</p>
                </div>
                <?php Session::forget('success');?>
            @endif

            @if ($message = Session::get('error'))
                <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                    <p>{!! $message !!}</p>
                </div>
                <?php Session::forget('error');?>
            @endif


            <div class="row">
                <div class="col-6 item">
                    <div class="label">Code:</div>
                    <div class="value">{{ $Payment->id }}</div>
                </div>
                <div class="col-6 item">
                    <div class="label">Amount:</div>
                    <div class="value">{{ number_format($Payment->amount, 2) }} £</div>
                </div>
                <div class="col-6 item">
                    <div class="label">Date:</div>
                    <div class="value">{{ $Payment->created_at }}</div>
                </div>
                <div class="col-6 item">
                    <div class="label">Status:</div>
                    <div class="value text-capitalize" style="@if($Payment->status == 'paid'){{ 'color: #268d31;' }}@else{{ 'color: #ff3333;' }}@endif">{{ $Payment->status }}</div>
                </div>
                @if(isset($Payment->payer_id))
                    <div class="col-6 item">
                        <div class="label">Tracking Code:</div>
                        <div class="value">{{ $Payment->payer_id }}</div>
                    </div>
                @endif
            </div>
        </div>


        @if($Payment->status == 'unpaid')
            <div class="pay-btn">
                <div class="center">
                    <form action="{{ route('pay') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="pay_type" value="payment">
                        <input type="submit" class="colored" value="Pay Now">
                    </form>
                </div>
            </div>
        @endif
    </article>
@endsection
