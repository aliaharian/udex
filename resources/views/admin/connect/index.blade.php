@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Architectionary')

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.944.145c1.261-.063 2.786-.14 3.695.671.89.788.805 2.143.731 3.312-.015.243-.03.478-.035.698 0 .25-.222.468-.474.468-.387 0-.778.004-1.17.008-.39.004-.782.008-1.169.008.064 2.684.065 5.367.066 8.051.001 2.013.002 4.026.03 6.039 0 .25-.222.468-.475.468-1.948.031-3.897.031-5.845 0a.483.483 0 01-.474-.468c-.007-1.028-.03-2.06-.054-3.09a163 163 0 01-.057-3.713c.008-1.21.02-2.423.032-3.636s.024-2.426.031-3.636c-.853 0-1.69 0-2.543-.015a.472.472 0 01-.474-.468L3.71 3.016c0 .094-.015-.094-.015-.265 0-.25.031-.5.079-.734C4.21.092 6.365.142 8.075.182c.271.006.531.012.771.01.253 0 .474.218.474.468v1.467h1.264V.644c0-.14.047-.234.126-.312l.032-.03c.063-.079.174-.126.316-.126.27 0 .57-.015.886-.03zM5.29 1.378c-.458.265-.632.749-.647 1.232 0 .012 0 .04.002.072.004.094.01.236-.002.225 0 .062.004.125.008.187.003.063.007.125.007.187a24 24 0 01.016.546c.004.184.008.367.016.547 2.856.025 5.713.01 8.57-.005l2.142-.011.009-.114c.08-.958.186-2.248-.452-2.773-.332-.28-.774-.359-1.2-.374-.743-.031-1.486-.016-2.228 0v1.482c0 .25-.221.468-.474.468H8.846a.483.483 0 01-.474-.468V1.112c-.26.008-.517.012-.774.016a52.04 52.04 0 00-.774.016l-.259.004c-.434.004-.892.009-1.274.23zm2.386 12.56a.451.451 0 00.237-.062c1.58-.874 3.16-1.747 4.74-2.637v2.2c-.822.453-1.643.91-2.465 1.365-.821.457-1.643.913-2.465 1.366a104.9 104.9 0 00-.019-.724c-.014-.5-.028-1.003-.028-1.507zm-.016-.998l4.977-2.762v-2.09c-.79.436-1.576.873-2.361 1.31h-.001c-.786.437-1.572.874-2.362 1.31a.45.45 0 01-.237.063c-.016.609-.016 1.217-.016 1.826v.343zm.11 5.992c0-.563-.014-1.11-.03-1.672v-.045l.028-.009c.042-.013.09-.028.13-.053 1.579-.874 3.159-1.748 4.739-2.637 0 1.467 0 2.933.015 4.4-1.61.047-3.254.047-4.881.016zm-.094-9.175c1.643-.905 3.286-1.81 4.93-2.73 0-.563-.016-1.11-.031-1.673l-.001-.044c-.806 0-1.616.004-2.425.008-.81.004-1.62.007-2.426.007l-.047 4.432z" fill="#8A8A8A"></path></svg></span>
    <span class="text">All Messages</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Connects))
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
                            <form action="{{ url('dashboard/connect/destroy') }}" method="post" onsubmit="return confirm('<?php echo "Are you sure you want to delete the selected items?";?>');">
                                @csrf
                                <table class="table align-items-center">
                                    <thead>
                                    <tr>
                                        @can('isAdmin')
                                            <th class="delete-col">
                                                <input class="select-all" type="checkbox">
                                            </th>
                                        @endcan
                                        <th>User</th>
                                        <th>Type</th>
                                        <th>Service</th>
                                        <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Connects as $item)
                                        <tr>
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="text-capitalize">{{ $item->user_tbl->first_name .' '. $item->user_tbl->last_name }}</td>
                                            <td class="num-fa text-capitalize">{{ str_replace('-', ' ', $item->type) }}</td>
                                            <td class="num-fa text-uppercase">@if($item->type == 'connect-service'){{ str_replace('_', ' ', json_decode($item->connect_meta, true)['service_are_you_looking']) }}@else{{ str_replace('_', ' ', json_decode($item->connect_meta, true)['what_type_of_property_is_this']) }}@endif</td>
                                            <td class="num-fa">{{ $item->updated_at }}</td>
                                            <td class="center">
                                                <a href="{{ route('ConnectEdit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-eye"></i></a>
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
                                        <th>User</th>
                                        <th>Type</th>
                                        <th>Service</th>
                                        <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="8">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Connects->firstItem() }} to {{ $Connects->lastItem() }} from {{ $Connects->total() }} item (pages {{ $Connects->currentPage() }} from {{ $Connects->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$Connects->links('vendor.pagination.default')}}
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
                <div class="create-item"><a href="{{ url()->current() }}/create">Add New Item</a></div>
            </div>
        @endif
    </section>
@endsection
