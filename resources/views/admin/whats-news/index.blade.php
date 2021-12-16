@extends('layouts.admin.dashboard.master')

@section('page-title', 'All News')

@section('title-page')
    <span class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 49.94 49.94" xml:space="preserve"><path d="M48.856 22.731a3.56 3.56 0 0 0 .906-3.671 3.56 3.56 0 0 0-2.892-2.438l-12.092-1.757a1.58 1.58 0 0 1-1.19-.865L28.182 3.043a3.56 3.56 0 0 0-3.212-1.996 3.56 3.56 0 0 0-3.211 1.996L16.352 14c-.23.467-.676.79-1.191.865L3.069 16.623A3.557 3.557 0 0 0 .178 19.06a3.56 3.56 0 0 0 .906 3.671l8.749 8.528c.373.364.544.888.456 1.4L8.224 44.702a3.559 3.559 0 0 0 1.424 3.502 3.552 3.552 0 0 0 3.772.273l10.814-5.686a1.583 1.583 0 0 1 1.472 0l10.815 5.686a3.568 3.568 0 0 0 3.772-.273 3.559 3.559 0 0 0 1.424-3.502L39.651 32.66a1.582 1.582 0 0 1 .456-1.4l8.749-8.529zM37.681 32.998l2.065 12.042a1.553 1.553 0 0 1-.629 1.547 1.558 1.558 0 0 1-1.665.121l-10.815-5.687a3.588 3.588 0 0 0-3.334.001L12.49 46.708a1.56 1.56 0 0 1-1.666-.121 1.554 1.554 0 0 1-.629-1.547l2.065-12.042a3.581 3.581 0 0 0-1.03-3.17l-8.75-8.529a1.55 1.55 0 0 1-.4-1.621c.19-.586.667-.988 1.276-1.077l12.091-1.757a3.576 3.576 0 0 0 2.697-1.959l5.407-10.957a1.551 1.551 0 0 1 1.418-.881c.616 0 1.146.329 1.419.881l5.407 10.957a3.575 3.575 0 0 0 2.696 1.959l12.092 1.757a1.552 1.552 0 0 1 1.276 1.077c.19.585.041 1.191-.4 1.621l-8.749 8.528a3.58 3.58 0 0 0-1.029 3.171z"/></svg></span>
    <span class="text">All News</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($WhatsNews))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <span class="widget-title">All News</span>
                                </div>
                                <div class="col-2 left">
                                    <a href="{{ url('dashboard/whats-news/create') }}" class="submit-form-btn">Create News</a>
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
                                    @foreach ($WhatsNews as $item)
                                        <tr>
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="num-fa">{{ $item->title }}</td>
                                            <td class="num-fa">{{ $item->created_at }}</td>
                                            <td class="center">
                                                <a href="{{ route('whats-news.edit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-edit"></i></a>
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
                                                    Show items {{ $WhatsNews->firstItem() }} to {{ $WhatsNews->lastItem() }} from {{ $WhatsNews->total() }} item (pages {{ $WhatsNews->currentPage() }} from {{ $WhatsNews->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$WhatsNews->links('vendor.pagination.default')}}
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
