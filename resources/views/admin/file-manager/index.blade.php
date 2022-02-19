@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Attachments')

@section('title-page')
    <span class="icon"><svg viewBox="1 -40 511.999 511" xmlns="http://www.w3.org/2000/svg"><path d="M481.27 54.832H305.19a.613.613 0 0 1-.558-.336l-18.16-36.836C281.348 7.234 270.527.5 258.903.5H152.456c-16.945 0-30.73 13.79-30.73 30.738v30.13H91.586c-16.941 0-30.727 13.784-30.727 30.73v30.129H30.73c-16.945 0-30.73 13.785-30.73 30.73v248.672c0 16.945 13.785 30.73 30.73 30.73h328.817c16.945 0 30.73-13.785 30.73-30.73v-30.133h30.133c16.945 0 30.73-13.785 30.73-30.726v-30.13h30.13c16.945 0 30.73-13.785 30.73-30.73V85.57c0-16.949-13.785-30.738-30.73-30.738zm-121.723 347.41H30.73a.614.614 0 0 1-.613-.613V152.957c0-.34.278-.613.613-.613h106.454c.101 0 .199.035.285.082.011.008.027.004.039.012.035.023.055.066.086.093.05.051.11.094.14.157l18.168 36.847c5.215 10.57 15.778 17.14 27.563 17.14h176.082a.615.615 0 0 1 .61.613c0 106.204.003 193.372.003 194.34 0 .34-.273.614-.613.614zm61.476-61.472a.61.61 0 0 1-.609.609h-30.137v-134.09c0-16.95-13.789-30.734-30.734-30.734H183.465a.62.62 0 0 1-.547-.344l-18.172-36.848c-5.21-10.558-15.77-17.136-27.558-17.136H90.977v-30.13c0-.34.273-.613.609-.613h106.457c.234 0 .445.13.55.348l18.173 36.848c5.218 10.57 15.777 17.136 27.558 17.136h176.09c.336 0 .61.274.61.614zm60.86-60.86c0 .34-.274.613-.613.613h-30.13V146.43c0-16.946-13.78-30.73-30.726-30.73h-176.09a.623.623 0 0 1-.55-.348l-18.169-36.836c-5.207-10.578-15.77-17.149-27.562-17.149h-46.2V31.238c0-.343.274-.62.61-.62h106.445c.23 0 .446.128.551.343l18.172 36.86c5.215 10.562 15.777 17.128 27.57 17.128H481.27c.335 0 .609.278.609.625V279.91zm0 0"/><path d="M267.602 336.766c-8.317 0-15.059 6.742-15.059 15.058v8.707c0 8.317 6.742 15.059 15.059 15.059 8.316 0 15.058-6.742 15.058-15.059v-8.707c0-8.316-6.742-15.058-15.058-15.058zM311.484 336.766c-8.316 0-15.058 6.742-15.058 15.058v8.707c0 8.317 6.742 15.059 15.058 15.059s15.059-6.742 15.059-15.059v-8.707c0-8.316-6.742-15.058-15.059-15.058zm0 0"/></svg></span>
    <span class="text">All Attachments</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Attachments))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row">
                                <div class="col-10">
                                    <span class="widget-title">All Attachments</span>
                                </div>
                                <div class="col-2">
                                    <a href="{{ url('dashboard/file-manager/create') }}" class="submit-form-btn">Upload</a>
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
                                        <th>File Name</th>
                                        <th>Type</th>
                                        <th>User</th>
                                        <th>Created Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Attachments as $item)
                                        <tr>
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="text-capitalize">{{ $item->orgname }}</td>
                                            <td class="text-capitalize">{{ $item->type }}</td>
                                            <td class="text-capitalize">{{ $item->user_tbl->first_name .' '. $item->user_tbl->last_name }}</td>
                                            <td class="num-fa">{{ $item->created_at }}</td>
                                            <td class="center">
                                                @if(isset($item->directory))
                                                    <a target="_blank" href="{{ url('storage' .'/'. $item->directory .'/'. $item->path ) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-eye"></i></a>
                                                @endif
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
                                        <th>File Name</th>
                                        <th>Type</th>
                                        <th>User</th>
                                        <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="8">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Attachments->firstItem() }} to {{ $Attachments->lastItem() }} from {{ $Attachments->total() }} item (pages {{ $Attachments->currentPage() }} from {{ $Attachments->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$Attachments->links('vendor.pagination.default')}}
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
