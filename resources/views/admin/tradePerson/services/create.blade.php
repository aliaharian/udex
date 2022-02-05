@extends('layouts.admin.dashboard.master')

@section('page-title', 'Create Service')

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/user.svg"></span>
    <span class="text">Create Service</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ url('dashboard/trade-person/services') }}" method="POST">
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row">
                                <div class="col-9">
                                    <span class="widget-title">Create Service</span>
                                </div>
                                <div class="col-3 left">
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-padding">
                            @csrf
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('name'))
                                    <span class="col-12 message-show">{{ $errors->first('name') }}</span>
                                @endif
                                {!! Form::text('name',null,[ 'id'=>'name' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter Service Name']) !!}
                                {!! Form::label('name','Service Name:',['class'=>'col-12']) !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit-form-btn create-btn">Create</button>
                </div>
            </div>
        </form>
    </section>

@endsection
