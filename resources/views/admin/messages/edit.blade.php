@extends('layouts.admin.dashboard.master')

@section('lib')
    <script src="{{ url('') }}/app/lib/ckeditor/ckeditor.js"></script>
    <script src="{{ url('') }}/app/lib/ckeditor/config.js"></script>
@endsection

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/architectionary.svg"></span>
    <span class="text">View Message</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('messages.update' , $Messages->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        {{-- محتوای شغل --}}
                        <div class="col-12">
                            <div class="widget-block widget-item widget-style">
                                <div class="heading-widget">
                                    <span class="widget-title">All Messages</span>
                                </div>

                                <div class="widget-content widget-content-padding">
                                    <div class="message-list">
                                        @forelse(json_decode($Messages['messages'], true) as $item)
                                            <div class="message-item @if($item['role'] == 'user'){{ 'my-message' }}@endif">
                                                <div class="message-inner">
                                                    <div class="message-owner-name">
                                                        <div class="row align-items-center">
                                                            <div class="col-8 name">{{ $item['name'] }}</div>
                                                            <div class="col-4 right message-time">{{ date("D, d M Y - h:i A", $item['date']) }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="message-content">{{ $item['message'] }}</div>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    {{-- تنظیمات --}}
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Message Options</span>
                        </div>

                        <div class="widget-content widget-content-padding widget-content-padding-side">
                            <div class="form-group full-border">
                                {!! Form::textarea('message',null,[ 'required', 'id'=>'message' , 'class'=>'field-style input-text', 'placeholder'=>'Write your message here...']) !!}
                            </div>

                            {{-- وضعیت انتشار --}}
                            <button type="submit" class="submit-form-btn">Submit Message</button>
                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </form>
    </section>

@endsection

@section('footer')
@endsection
