@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Pages')

@section('title-page')
    <span class="icon"><svg height="28" viewBox="-78 -18 560 560.0019" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m260.7227 3.879-.129-.125c-2.3554-2.4298-5.6054-3.7892-8.996-3.75-.418-.0196-.8399.0194-1.25.1288H58.3945C23.8906.1406-4.0742 28.1094-4.0898 62.6172v399.8984c.0156 34.504 27.9804 62.4727 62.4843 62.4844h278.3086c34.504-.0117 62.4727-27.9805 62.4844-62.4844V147.3398a12.8865 12.8865 0 0 0-3.625-8.8671zm3.371 38.742 92.7266 92.4767H301.586c-20.6796-.0625-37.4336-16.8125-37.4921-37.4883zm72.7344 457.2618H58.3945c-20.6797-.0586-37.4258-16.8125-37.4922-37.4922V62.4883C20.9687 41.8125 37.7148 25.0586 58.3945 25h180.707v72.6094c.0118 34.5 27.9805 62.4687 62.4844 62.4843h72.6094v302.297c.039 20.6718-16.6953 37.4648-37.3672 37.4921zm0 0"/><path d="M76.0156 241.1953h135.0938c6.8984 0 12.5-5.5937 12.5-12.496 0-6.9024-5.6016-12.4962-12.5-12.4962H76.0156c-6.9023 0-12.496 5.5938-12.496 12.4961 0 6.9024 5.5937 12.4961 12.496 12.4961zm243.1914 69.4844H76.0156c-6.9023 0-12.496 5.5937-12.496 12.496 0 6.8985 5.5937 12.4962 12.496 12.4962H319.207c6.8985 0 12.5-5.5977 12.5-12.4961 0-6.9024-5.6015-12.4961-12.5-12.4961zm0 94.6016H76.0156c-6.9023 0-12.496 5.5937-12.496 12.496s5.5937 12.4961 12.496 12.4961H319.207c6.8985 0 12.5-5.5937 12.5-12.496s-5.6015-12.4962-12.5-12.4962zm0 0"/></svg></span>
    <span class="text">All Pages</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Pages))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <span class="widget-title">All Pages</span>
                                </div>
                                <div class="col-2 left">
                                    <a href="{{ url('dashboard/pages/create') }}" class="submit-form-btn">Create Page</a>
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
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Template</th>
                                        <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Pages as $item)
                                        <tr>
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="text-capitalize">{{ $item->title }}</td>
                                            <td class="text-capitalize">{{ $item->user_tbl->first_name .' '. $item->user_tbl->last_name }}</td>
                                            <td class="num-fa text-uppercase">{{ str_replace('-', ' ', $item->template) }}</td>
                                            <td class="num-fa">{{ $item->updated_at }}</td>
                                            <td class="center">
                                                <a href="{{ route('pages.edit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-edit"></i></a>
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
                                        <th>User</th>
                                        <th>Template</th>
                                        <th>Updated Date</th>
                                        <th width="80px" class="center">Actions</th>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="8">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Pages->firstItem() }} to {{ $Pages->lastItem() }} from {{ $Pages->total() }} item (pages {{ $Pages->currentPage() }} from {{ $Pages->lastPage() }})
                                                </div>
                                                <div class="col-8">
                                                    <div class="pagination-table">
                                                        {{$Pages->links('vendor.pagination.default')}}
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
