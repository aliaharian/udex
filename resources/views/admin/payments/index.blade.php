@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Payments')

@section('title-page')
    <span class="icon"><svg id="Layer_1" enable-background="new 0 0 124 124" height="28" viewBox="0 0 124 124" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m118.052 26.953-88.813-15.842c-3.892-.7-7.673 2.023-8.348 5.894l-5.72 32.814h-8.171c-3.86 0-7 3.141-7 7v49.18c0 3.859 3.14 7 7 7h90.587c3.86 0 7-3.141 7-7v-17.293c2.595.463 5.1 1.009 7.499-.426 1.8-1.077 3.091-2.934 3.452-5.003l8.352-47.916c.687-3.941-1.932-7.713-5.838-8.408zm-93.22-9.261c.3-1.719 1.968-2.954 3.705-2.644l88.813 15.842c1.743.311 2.909 2.008 2.6 3.783l-1.378 7.91-95.122-16.966zm75.755 88.307c0 1.654-1.346 3-3 3h-90.587c-1.654 0-3-1.346-3-3v-49.18c0-1.654 1.346-3 3-3h90.587c1.654 0 3 1.346 3 3zm11.011-23.409c-.622 3.557-4.572 2.488-7.011 2.053v-27.824c0-3.859-3.14-7-7-7h-78.355l3.531-20.262 5.794 1.033 89.327 15.933z"/><path d="m47.119 101.003h-11.5c-1.104 0-2-.896-2-2s.896-2 2-2h11.5c1.104 0 2 .896 2 2s-.895 2-2 2z"/><path d="m25.271 101.003h-11.5c-1.104 0-2-.896-2-2s.896-2 2-2h11.5c1.104 0 2 .896 2 2s-.896 2-2 2z"/><path d="m68.967 101.003h-11.5c-1.104 0-2-.896-2-2s.896-2 2-2h11.5c1.104 0 2 .896 2 2s-.895 2-2 2z"/><path d="m90.816 101.003h-11.5c-1.104 0-2-.896-2-2s.896-2 2-2h11.5c1.104 0 2 .896 2 2s-.896 2-2 2z"/><path d="m30.438 90.627h-14.486c-2.757 0-5-2.243-5-5v-5.744c0-2.757 2.243-5 5-5h14.486c2.757 0 5 2.243 5 5v5.744c0 2.756-2.244 5-5 5zm-14.486-11.745c-.551 0-1 .448-1 1v5.744c0 .552.449 1 1 1h14.486c.551 0 1-.448 1-1v-5.744c0-.552-.449-1-1-1z"/></svg></span>
    <span class="text">All Payments</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Payments))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">All Payments</span>
                        </div>

                        <div class="widget-content">
                            <form action="{{ url('dashboard/architectionary/destroy') }}" method="post" onsubmit="return confirm('<?php echo "Are you sure you want to delete the selected items?";?>');">
                                @csrf
                                <table class="table align-items-center">
                                    <thead>
                                    <tr>
                                        @can('isAdmin')
                                            <th class="delete-col">
                                                <input class="select-all" type="checkbox">
                                            </th>
                                        @endcan
                                        <td>Code</td>
                                        <td>Amount</td>
                                        <td>Owner</td>
                                        <td width="300">Date</td>
                                        <td>Status</td>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Payments as $item)
<<<<<<< HEAD
                                        <tr>
=======
                                        <tr style="@if($item->bt_transfer == 1 && $item->status != 'paid') background-color: #fff4e9; font-weight: bold; @endif">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td style="font-weight: 500">{{ $item->id }} @if($item->payment_step == 1)
                                                    <span style="font-size:10px; font-weight: 500; color: #888888;">(Deposit)</span> @endif</td>
                                            <td>{{ number_format($item->amount, 2) }} £</td>
                                            <td class="text-capitalize">{{ $item->user_tbl->first_name .' '. $item->user_tbl->last_name }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="text-capitalize">
<<<<<<< HEAD
                                                <span style="@if($item->status == 'paid'){{ 'color: #268d31;' }}@else{{ 'color: #ff3333;' }}@endif">{{ $item->status }}</span>
=======
                                                @if($item->bt_transfer != 1 && $item->status != 'paid')
                                                    <span style="@if($item->status == 'paid'){{ 'color: #268d31;' }}@else{{ 'color: #ff3333;' }}@endif">{{ $item->status }}</span>
                                                @else
                                                    <span style="color: #ff7617;">Pay By Transfer</span>
                                                @endif
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                            </td>
                                            <td class="center">
                                                <a href="{{ route('payments.edit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot class="num-fa">
                                    <tr class="titles">
                                        @can('isAdmin')
                                            <th class="delete-col">
                                                <button class="table-btn table-btn-icon table-btn-icon-delete">
                                                    <span><img src="{{ asset('public/assets/admin/img/base/icons') }}/trash.svg" alt="ID" title="Delete"></span>
                                                </button>
                                            </th>
                                        @endcan
                                        <th>Code</th>
                                        <th>Amount</th>
                                        <th>Owner</th>
                                        <th width="300">Date</th>
                                        <th>Status</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="20">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Payments->firstItem() }} to {{ $Payments->lastItem() }} from {{ $Payments->total() }} item (pages {{ $Payments->currentPage() }} from {{ $Payments->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$Payments->links('vendor.pagination.default')}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="widget-block widget-item widget-style center no-item">
                <div class="icon">
                    <img src="{{ asset('public/assets/admin/img/base/icons') }}/no-item.svg">
                </div>
                <h2>No item found!</h2>
                <div class="create-item"><a href="{{ url()->current() }}/create">Add New Item</a></div>
            </div>
        @endif
    </section>
@endsection
