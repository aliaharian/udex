@extends('layouts.admin.dashboard.master')

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/user.svg"></span>
    <span class="text">trade person request detail</span>
@endsection

@section('content')
    <section class="form-section">
        <div class="row">
            <div class="col-12">
                <div class="widget-block widget-item widget-style">
                    <div class="heading-widget">
                        <div class="row">
                            <div class="col-9">
                                <span class="widget-title">trade person request detail</span>
                            </div>
                            <div class="col-3 left">
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-padding row g-0">
                        <div class="form-group row col-6 no-gutters g-0 ">
                            <label class="col-12">First Name</label>
                            <p>{{$tradePerson->name}}</p>
                        </div>
                        <div class="form-group row col-6 no-gutters g-0 ">
                            <p>{{$tradePerson->last_name}}</p>
                            <label class="col-12">Last Name</label>
                        </div>
                        <div class="form-group row col-6 no-gutters g-0 ">
                            <label class="col-12">Email</label>
                            <p>{{$tradePerson->email}}</p>
                        </div>
                        <div class="form-group row col-6 no-gutters g-0 ">
                            <p>{{$tradePerson->phone}}</p>
                            <label class="col-12">Phone</label>
                        </div>
                        <div class="form-group row col-6 no-gutters g-0 ">
                            <p>{{$tradePerson->company_name}}</p>
                            <label class="col-12">Company Name</label>
                        </div>
                        <div class="form-group row col-6 no-gutters g-0 ">
                            <p>{{$tradePerson->company_website}}</p>
                            <label class="col-12">Company Website</label>
                        </div>
                        <div class="form-group row col-12 no-gutters g-0 ">
                            @php
                                $json = explode( ',' , $tradePerson->meta )
                            @endphp
                            <p>

                                @if(count($json)>0)
                                    @for($i = 0 ; $i<count($json);$i++)

                                        {{ @\App\Service::findOrFail($json[$i])->name}},&nbsp;
                                    @endfor
                                @endif
                            </p>
                            <label class="col-12">Services</label>
                        </div>
                        <div class="form-group row col-12 no-gutters g-0 ">
                            <p>{{$tradePerson->note}}</p>
                            <label class="col-12">Note</label>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
