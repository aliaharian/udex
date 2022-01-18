@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Architectionary')

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.584 7.71a.08.08 0 00-.024.015c-.263.18-.625.164-.838-.115a.596.596 0 01.033-.839c.263-.246.657-.246.904.033.214.23.197.56.017.806-.017.033-.033.049-.05.065-.01.021-.027.029-.042.036zM8.814 7.643a.079.079 0 01.023-.015c.015-.006.032-.014.043-.035.016-.016.032-.033.049-.066.18-.246.197-.575-.017-.805-.246-.28-.641-.28-.904-.033a.596.596 0 00-.033.838c.214.28.576.296.839.116zM6.107 7.563a.633.633 0 01-.862-.085c-.214-.263-.214-.624.033-.855.263-.246.658-.246.904.033.214.23.198.56.017.806-.017.033-.033.05-.05.066-.01.02-.027.028-.042.035z" fill="#8A8A8A"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.525 7.169c.898.013 1.923.029 2.601.506.887.623.793 2.063.722 3.16-.013.205-.026.398-.031.572v.024c-.017.913-.033 1.842-.082 2.754-.007.13-.01.268-.012.411-.01.514-.02 1.088-.251 1.512-.362.674-1.152.757-1.875.74l.123 1.068v.001l.123 1.068c.05.444-.559.608-.838.345-.255-.238-.506-.476-.757-.715a621.825 621.825 0 01-1.676-1.585l-.002-.001c-.03-.025-.064-.064-.099-.104-.057-.067-.119-.139-.18-.159l-.017-.016c-.05.049-.362.098-.362.098-.637.077-1.312.051-1.979.026-.33-.013-.66-.026-.981-.026-.178 0-.363.008-.552.016-.581.025-1.196.051-1.718-.147-1.21-.478-1.187-2.113-1.17-3.32v-.001l.002-.115c-.296-.016-.608-.016-.904-.016A348.69 348.69 0 004.768 14.9a344.27 344.27 0 01-1.842 1.636c-.346.312-.987.016-.823-.477l.444-1.389.444-1.389c-1.085.016-2.27-.099-2.598-1.315-.178-.683-.19-1.455-.2-2.186C.19 9.56.186 9.346.179 9.138a74.052 74.052 0 01-.066-3.32L.111 5.27C.106 4.446.1 3.617.195 2.81c.066-.576.263-1.102.724-1.48C1.756.653 3.085.651 4.224.65c.272 0 .533 0 .774-.01C7.07.558 9.159.508 11.232.574c.97.033 1.973.082 2.944.197.608.066 1.217.23 1.611.756.427.554.444 1.259.459 1.911v.002l.002.076a83 83 0 01.082 2.86c0 .264 0 .527.017.79l.178.003zM2.57 12.279h.142c.329.016.641.016 1.003.016.312 0 .576.329.477.624-.197.592-.378 1.167-.56 1.743.823-.723 1.662-1.463 2.484-2.203.083-.099.198-.148.362-.148 1.096.011 2.2.008 3.305.004h.002c.553-.002 1.107-.004 1.66-.004.309 0 .62.005.932.01.47.009.94.017 1.404.007.575-.017 1.118-.115 1.348-.74.119-.329.143-.731.164-1.098.006-.092.01-.181.017-.267.105-1.302.074-2.619.042-3.924l-.009-.382v-.048a113.015 113.015 0 00-.071-2.486c-.027-.7-.051-1.346-.85-1.576-.559-.152-1.225-.168-1.848-.182a26.265 26.265 0 01-.537-.015 104.63 104.63 0 00-2.236-.066 87.304 87.304 0 00-5.658.131 1754.727 1754.727 0 00-1.171.058c-.507.028-1.137.063-1.51.436-.38.38-.364 1.085-.35 1.663.004.146.008.285.004.408C1.1 4.98 1.1 5.72 1.1 6.459c0 1.529.066 3.058.164 4.586l.007.09c.028.41.055.797.454 1.012.254.14.557.137.845.133zm16.293-.708c0 1.085-.033 2.187-.115 3.272-.05.74-.181.97-.938 1.002a5.475 5.475 0 01-.492.004c-.078-.002-.156-.004-.231-.004-.247 0-.526.23-.494.494l.148 1.315c-.559-.56-1.134-1.134-1.743-1.611-.28-.21-.55-.206-.877-.2a9.83 9.83 0 01-.176.002h-2.55c-.158 0-.356.015-.572.031-.72.055-1.639.124-1.993-.294-.394-.475-.346-1.556-.313-2.295v-.006c1.234 0 2.451 0 3.685-.016.18 0 .371.005.569.011 1.262.038 2.78.083 3.263-1.31.395-1.15.411-2.515.378-3.814l.176.005c.558.013 1.144.027 1.65.176.784.243.702 1.718.647 2.692a10.7 10.7 0 00-.022.546z" fill="#8A8A8A"/></svg></span>
    <span class="text">All Messages</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Messages))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <span class="widget-title">All Messages</span>
                                </div>
                                <div class="col-2 left">
                                    <a href="{{ url('dashboard/messages/create') }}" class="submit-form-btn">Create Architectionary</a>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <form action="{{ url('dashboard/messages/destroy') }}" method="post" onsubmit="return confirm('<?php echo "Are you sure you want to delete the selected items?";?>');">
                                @csrf
                                <table class="table align-items-center">
                                    <thead>
                                    <tr>
                                        @can('isAdmin')
                                            <th class="delete-col">
                                                <input class="select-all" type="checkbox">
                                            </th>
                                        @endcan
                                        <th>Name</th>
                                        <th>Last Message</th>
                                        <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Messages as $item)
                                        <?php $LastMessage = json_decode($item->messages, true); ?>
                                        <tr class="@if(end($LastMessage)['role'] == 'user'){{'new-message'}}@endif">
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="num-fa"><a href="{{ route('architectionary.edit', $item->id) }}">{{ $item->user_tbl->first_name .' '. $item->user_tbl->last_name}}</a></td>
                                            <td class="num-fa">{{ end($LastMessage)['message'] }}</td>
                                            <td class="num-fa">{{ $item->updated_at }}</td>
                                            <td class="center">
                                                <a href="{{ route('messages.edit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-eye"></i></a>
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
                                        <th>Name</th>
                                            <th>Last Message</th>
                                            <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="8">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Messages->firstItem() }} to {{ $Messages->lastItem() }} from {{ $Messages->total() }} item (pages {{ $Messages->currentPage() }} from {{ $Messages->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$Messages->links('vendor.pagination.default')}}
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
                <div class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/no-item.svg"></div>
                <h2>No item found!</h2>
            </div>
        @endif
    </section>
@endsection
