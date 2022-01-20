@extends('layouts.admin.dashboard.master')

@section('page-title', 'Upload Attachments')

@section('title-page')
    <span class="icon"><svg viewBox="1 -40 511.999 511" xmlns="http://www.w3.org/2000/svg"><path d="M481.27 54.832H305.19a.613.613 0 0 1-.558-.336l-18.16-36.836C281.348 7.234 270.527.5 258.903.5H152.456c-16.945 0-30.73 13.79-30.73 30.738v30.13H91.586c-16.941 0-30.727 13.784-30.727 30.73v30.129H30.73c-16.945 0-30.73 13.785-30.73 30.73v248.672c0 16.945 13.785 30.73 30.73 30.73h328.817c16.945 0 30.73-13.785 30.73-30.73v-30.133h30.133c16.945 0 30.73-13.785 30.73-30.726v-30.13h30.13c16.945 0 30.73-13.785 30.73-30.73V85.57c0-16.949-13.785-30.738-30.73-30.738zm-121.723 347.41H30.73a.614.614 0 0 1-.613-.613V152.957c0-.34.278-.613.613-.613h106.454c.101 0 .199.035.285.082.011.008.027.004.039.012.035.023.055.066.086.093.05.051.11.094.14.157l18.168 36.847c5.215 10.57 15.778 17.14 27.563 17.14h176.082a.615.615 0 0 1 .61.613c0 106.204.003 193.372.003 194.34 0 .34-.273.614-.613.614zm61.476-61.472a.61.61 0 0 1-.609.609h-30.137v-134.09c0-16.95-13.789-30.734-30.734-30.734H183.465a.62.62 0 0 1-.547-.344l-18.172-36.848c-5.21-10.558-15.77-17.136-27.558-17.136H90.977v-30.13c0-.34.273-.613.609-.613h106.457c.234 0 .445.13.55.348l18.173 36.848c5.218 10.57 15.777 17.136 27.558 17.136h176.09c.336 0 .61.274.61.614zm60.86-60.86c0 .34-.274.613-.613.613h-30.13V146.43c0-16.946-13.78-30.73-30.726-30.73h-176.09a.623.623 0 0 1-.55-.348l-18.169-36.836c-5.207-10.578-15.77-17.149-27.562-17.149h-46.2V31.238c0-.343.274-.62.61-.62h106.445c.23 0 .446.128.551.343l18.172 36.86c5.215 10.562 15.777 17.128 27.57 17.128H481.27c.335 0 .609.278.609.625V279.91zm0 0"/><path d="M267.602 336.766c-8.317 0-15.059 6.742-15.059 15.058v8.707c0 8.317 6.742 15.059 15.059 15.059 8.316 0 15.058-6.742 15.058-15.059v-8.707c0-8.316-6.742-15.058-15.058-15.058zM311.484 336.766c-8.316 0-15.058 6.742-15.058 15.058v8.707c0 8.317 6.742 15.059 15.058 15.059s15.059-6.742 15.059-15.059v-8.707c0-8.316-6.742-15.058-15.059-15.058zm0 0"/></svg></span>
    <span class="text">Upload Attachments</span>
@endsection

@section('content')
    <section class="form-section">
        {!! Form::open(['route'=>'file-manager.store', 'id'=>'form', 'enctype' => 'multipart/form-data']) !!}
        <div class="row">
            <div class="col-9">
                <div class="row">
                    {{-- Page Template --}}
                    <div class="col-12">
                        <div class="widget-block widget-item widget-style">
                            <div class="heading-widget">
                                <span class="widget-title">File Attachment</span>
                            </div>

                            <div class="widget-content widget-content-padding">
                                <div class="form-group row no-gutters g-0">
                                    @if($errors->has('file'))
                                        <span class="col-12 message-show">{{ $errors->first('file') }}</span>
                                    @endif
                                    {!! Form::file('file',null,[ 'required', 'id'=>'file' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter the Page title']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                {{-- Page Option --}}
                <div class="widget-block widget-item widget-style">
                    <div class="heading-widget">
                        <span class="widget-title">Upload Options</span>
                    </div>

                    <div class="widget-content widget-content-padding widget-content-padding-side">
                        {{-- Page Template --}}
                        <div class="form-group row no-gutters g-0">
                            @if($errors->has('for_user'))
                                <span class="message-show">{{ $errors->first('for_user') }}</span>
                            @endif
                            <div class="col-12 field-style custom-select-field">
                                <select class="form-control" name="for_user" id="for_user">
                                    <option value="">Choose a User</option>
                                    @forelse($Users as $item)
                                        <option value="{{ $item->id }}" {{ old('for_user') === $item->id ? "selected" : "" }}>{{ $item->first_name . ' ' . $item->last_name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                            {{-- Publish --}}
                            {!! Form::label('template','Page Template',['class'=>'col-12']) !!}
                        </div>
                        <button type="submit" class="submit-form-btn create-btn">Create Page</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection

@section('footer')
    {{-- CKEditor Config --}}
    <script type="text/javascript">
        CKEDITOR.replace('content_text', {
            language: 'en',
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['path' => 'product','_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form',
            width: '100%',
            height: '282',
            uiColor: '#fdfdfd',
        });
    </script>
@endsection
