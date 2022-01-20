@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Architectionary')

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/architectionary.svg"></span>
    <span class="text">All Architectionary</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Architectionary))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <span class="widget-title">All Architectionary</span>
                                </div>
                                <div class="col-2 left">
                                    <a href="{{ url('dashboard/architectionary/create') }}" class="submit-form-btn">Create Architectionary</a>
                                </div>
                            </div>
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
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Architectionary as $item)
                                        <tr>
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="num-fa">{{ $item->title }}</td>
                                            <td class="num-fa">{{ $item->created_at }}</td>
                                            <td class="center">
                                                <a href="{{ route('architectionary.edit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-edit"></i></a>
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
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="8">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Architectionary->firstItem() }} to {{ $Architectionary->lastItem() }} from {{ $Architectionary->total() }} item (pages {{ $Architectionary->currentPage() }} from {{ $Architectionary->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$Architectionary->links('vendor.pagination.default')}}
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
