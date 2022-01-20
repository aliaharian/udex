@extends('layouts.profile.master')

@section('page-title', 'Payments')

@section('content')
    <article class="content-inner">
        <div class="heading-page-block mb-4">
            <div class="heading-text">Payments</div>
            <div class="excerpt-page">View payment list</div>
        </div>

        @if ($message = Session::get('error'))
            <div class="w3-panel w3-red w3-display-container mb-4">
                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                <p>{!! $message !!}</p>
            </div>
            <?php Session::forget('error');?>
        @endif

        <div class="section-tab-mode">
            <div class="heading-section center">
                <div class="row g-0">
                    <div class="col-md-auto col-6 item @if(isset($_GET['status']) && $_GET['status'] == 'paid'){{ 'active' }}@endif">
                        <a href="{{ url('profile/payments?status=paid') }}" class="item-inner">
                            <div class="label">
                                <div class="title fw-bold" style="color: #268d31">Paid</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-auto col-6 item @if(isset($_GET['status']) && $_GET['status'] == 'unpaid'){{ 'active' }}@endif">
                        <a href="{{ url('profile/payments?status=unpaid') }}" class="item-inner">
                            <div class="label">
                                <div class="title fw-bold" style="color: #ff3333;">Unpaid</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-content-tab-mode">
                @if(count($Payments))
                    <div class="section-inner p-0">
                        <div class="table-block">
                            <table class="w-100">
                                <thead>
                                <tr>
                                    <td>Code</td>
                                    <td>Amount</td>
                                    <td>Date</td>
                                    <td>Status</td>
                                    <td>Processes</td>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($Payments as $item)
                                    <tr>
                                        <td style="font-weight: 500">{{ $item->id }} @if($item->payment_step == 1)
                                                <span style="font-size:10px; font-weight: 500; color: #888888;">(Deposit)</span> @endif</td>
                                        <td>{{ number_format($item->amount, 2) }} £</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td class="text-capitalize" style="@if($item->status == 'paid'){{ 'color: #268d31;' }}@else{{ 'color: #ff3333;' }}@endif">{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ url('profile/payments' .'/'. $item->id) }}">
                                                <span class="icon-edit icon-eye"></span>
                                                Show</a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr class="pagination-app">
                                    <td style="vertical-align: middle; border-top: solid 1px #cfcfcf" colspan="8">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 col-6">
                                                Show items {{ $Payments->firstItem() }} to {{ $Payments->lastItem() }} from {{ $Payments->total() }} item (pages {{ $Payments->currentPage() }} from {{ $Payments->lastPage() }})
                                            </div>
                                            <div class="col-md-8 col-6 right">
                                                <div class="pagination-links">
                                                    {{$Payments->links('vendor.pagination.default')}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="show-message-item-not-found">There are no results</div>
                @endif
            </div>
        </div>
    </article>
@endsection
