@extends('layouts.profile.master')

@section('page-title', 'Messages')

@section('content')
    <article class="content-inner">
        <div class="heading-text">Messages</div>

        <div class="page-content-body">
            <div class="messages-body">
                <div class="message-of-day">
                    <div class="message-items">
                        <!-- Message Item -->
                        @if(count($Messages))
                            @foreach(json_decode($Messages[0]['messages'], true) as $item)
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
<<<<<<< HEAD
=======
                                    <div class="right message-time-responsive d-none">{{ date("D, d M Y - h:i A", $item['date']) }}</div>
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="message-send-form">
                        {!! Form::open(['route'=>'message.store', 'id'=>'form', 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">
                            <div class="col-12">
                                <div class="field-block">
                                    <textarea required name="message" placeholder="Write your message here..."></textarea>
                                </div>
                            </div>

<<<<<<< HEAD
                            <div class="col-9">
=======
                            <div class="col-md-9 col-5">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="field-block file-field">
                                    <input name="attach" id="attach-file" type="file">
                                    <label for="attach-file"><span class="icon-attachment"></span>Attach</label>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col-3 right">
=======
                            <div class="col-md-3 col-7 right">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                                <div class="field-block submit-field">
                                    <input type="submit" value="Send">
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </article>
@endsection
