@extends('layouts.admin.dashboard.master')

@section('page-title', 'All Projects')

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.078 3.79l-9.232.016c-.621 0-.621.958 0 .958l9.232-.016c.606 0 .622-.958 0-.958zM7.846 7.478l9.232-.016c.622 0 .606.958 0 .958l-9.232.016c-.621 0-.621-.958 0-.958zm9.232 3.64l-9.232.015c-.621 0-.621.958 0 .958l9.232-.016c.606 0 .622-.957 0-.957zm-9.232 3.671l9.232-.016c.622 0 .606.958 0 .958l-9.232.016c-.621 0-.621-.958 0-.958z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M19.852 3.982c.004-.263.011-.526.018-.79.02-.795.042-1.596-.018-2.387a.49.49 0 00-.478-.479l-3.508.016L8.74.39 5.056.422A.47.47 0 004.578.9c0 1.136-.017 2.272-.034 3.412-.012.766-.023 1.533-.03 2.303v1.788l-3.284.032H.72a.47.47 0 00-.479.478 259.048 259.048 0 000 7.04l.004.21c.01.826.023 1.733.522 2.424.447.623 1.244.99 2.025 1.022a.384.384 0 00.24.064c2.439 0 4.878-.016 7.318-.032h.046c1.197-.016 2.409-.032 3.605-.064.269-.004.54-.001.811.002.855.008 1.718.016 2.553-.177.877-.208 1.674-.687 2.057-1.517.366-.782.414-1.628.414-2.458a371.16 371.16 0 01-.032-7.296c.022-.927.029-1.847.036-2.77l.012-1.38zM1.31 17.55a3.7 3.7 0 01-.112-1.102 259.107 259.107 0 010-7.04l3.013-.032.303-.016v3.896a76.15 76.15 0 01-.064 3.304c0 .367-.047.732-.143 1.085-.064.32-.255.607-.51.799-.558.35-1.42.255-1.977-.128a1.294 1.294 0 01-.51-.766zM18.864 7.015c0-1.182.015-2.379.031-3.576 0-.283.006-.568.01-.851.008-.422.016-.84.006-1.24h-.78l-6.171.032-3.22.024-3.221.023c0 1.076-.016 2.156-.032 3.237a221.515 221.515 0 00-.032 3.26l.002 1.748v.002c.003 1.753.006 3.51-.018 5.259l-.048 1.724a5.868 5.868 0 01-.175 1.293 2.14 2.14 0 01-.367.798c2.073 0 4.146-.016 6.218-.048.387-.005.775-.014 1.164-.023a64.385 64.385 0 012.344-.025c.16 0 .321.003.485.005.885.013 1.817.026 2.624-.324.032-.016.175-.096.223-.128a.314.314 0 00.088-.051l.04-.029c0-.016.015-.032.031-.032.08-.063.144-.127.208-.191l.095-.096c0-.016 0-.016.016-.032l.144-.24a.323.323 0 01.032-.063c.012-.02.024-.04.032-.064 0-.016.015-.032.015-.032.016-.016.016-.016.016-.032a2.24 2.24 0 00.144-.463c.028-.1.044-.211.058-.314l.004-.025.002-.012c-.01.04-.008.024-.005.003a.346.346 0 00.005-.035l.016-.16c.016-.191.032-.383.032-.574.009-.316.001-.632-.006-.948-.006-.211-.01-.422-.01-.633a535.175 535.175 0 010-7.167z" fill="#000"/></svg></span>
    <span class="text">All Projects</span>
@endsection

@section('content')
    <section class="report-table">
        @if(count($Projects))
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">All Projects</span>
                        </div>

                        <div class="widget-content">
                            <form action="{{ url('dashboard/projects/destroy') }}" method="post" onsubmit="return confirm('<?php echo "Are you sure you want to delete the selected items?";?>');">
                                @csrf
                                <table class="table align-items-center">
                                    <thead>
                                    <tr>
                                        @can('isAdmin')
                                            <th class="delete-col">
                                                <input class="select-all" type="checkbox">
                                            </th>
                                        @endcan
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Register Date</th>
                                        @can('isAdmin')
                                            <th width="80px" class="center">Actions</th>
                                        @endcan
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Projects as $item)
                                        <tr>
                                            @can('isAdmin')
                                                <td class="delete-col">
                                                    <input class="delete-checkbox" type="checkbox" name="delete_item[{{ $item->id }}]" value="1">
                                                </td>
                                            @endcan
                                            <td class="num-fa">{{ $item->id }}</td>
                                            <td>{{ \App\User::find($item->uid)->first_name .' '. \App\User::find($item->uid)->last_name }}</td>
                                            <td class="num-fa">{{ $item->created_at }}</td>
                                            @can('isAdmin')
                                                <td class="center">
                                                    <a href="{{ route('projects.edit', $item->id) }}" class="table-btn table-btn-icon table-btn-icon-edit"><i class="zmdi zmdi-edit"></i></a>
                                                </td>
                                            @endcan
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Register Date</th>
                                        @can('isAdmin')
                                            <th width="80px" class="center">Actions</th>
                                        @endcan
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;" colspan="8">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    Show items {{ $Projects->firstItem() }} to {{ $Projects->lastItem() }} from {{ $Projects->total() }} item (pages {{ $Projects->currentPage() }} from {{ $Projects->lastPage() }})
                                                </div>
                                                <div class="col-8 left">
                                                    <div class="pagination-table">
                                                        {{$Projects->links('vendor.pagination.default')}}
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
            </div>
        @endif
    </section>
@endsection
