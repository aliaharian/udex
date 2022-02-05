@extends('layouts.admin.dashboard.master')

@section('page-title', 'Edit Service')

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/user.svg"></span>
    <span class="text">Edit Service</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ url('dashboard/trade-person/services/'.$service->id) }}" method="POST">
            <div class="row">
                <div class="col-12">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <div class="row">
                                <div class="col-9">
                                    <span class="widget-title">Edit Service</span>
                                </div>
                                <div class="col-3 left">
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-padding">
                            @csrf
                            @method('put')
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('name'))
                                    <span class="col-12 message-show">{{ $errors->first('name') }}</span>
                                @endif
                                {!! Form::text('name',$service->name,[ 'id'=>'name' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter Service Name']) !!}
                                {!! Form::label('name','Service Name:',['class'=>'col-12']) !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit-form-btn create-btn">Edit</button>
                </div>
            </div>
        </form>
    </section>

@endsection
