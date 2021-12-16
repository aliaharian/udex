@extends('layouts.admin.dashboard.master')

@section('page-title', 'Create News')

@section('lib')
    <script src="{{ url('') }}/app/lib/ckeditor/ckeditor.js"></script>
    <script src="{{ url('') }}/app/lib/ckeditor/config.js"></script>
@endsection

@section('title-page')
    <span class="icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 49.94 49.94" xml:space="preserve"><path d="M48.856 22.731a3.56 3.56 0 0 0 .906-3.671 3.56 3.56 0 0 0-2.892-2.438l-12.092-1.757a1.58 1.58 0 0 1-1.19-.865L28.182 3.043a3.56 3.56 0 0 0-3.212-1.996 3.56 3.56 0 0 0-3.211 1.996L16.352 14c-.23.467-.676.79-1.191.865L3.069 16.623A3.557 3.557 0 0 0 .178 19.06a3.56 3.56 0 0 0 .906 3.671l8.749 8.528c.373.364.544.888.456 1.4L8.224 44.702a3.559 3.559 0 0 0 1.424 3.502 3.552 3.552 0 0 0 3.772.273l10.814-5.686a1.583 1.583 0 0 1 1.472 0l10.815 5.686a3.568 3.568 0 0 0 3.772-.273 3.559 3.559 0 0 0 1.424-3.502L39.651 32.66a1.582 1.582 0 0 1 .456-1.4l8.749-8.529zM37.681 32.998l2.065 12.042a1.553 1.553 0 0 1-.629 1.547 1.558 1.558 0 0 1-1.665.121l-10.815-5.687a3.588 3.588 0 0 0-3.334.001L12.49 46.708a1.56 1.56 0 0 1-1.666-.121 1.554 1.554 0 0 1-.629-1.547l2.065-12.042a3.581 3.581 0 0 0-1.03-3.17l-8.75-8.529a1.55 1.55 0 0 1-.4-1.621c.19-.586.667-.988 1.276-1.077l12.091-1.757a3.576 3.576 0 0 0 2.697-1.959l5.407-10.957a1.551 1.551 0 0 1 1.418-.881c.616 0 1.146.329 1.419.881l5.407 10.957a3.575 3.575 0 0 0 2.696 1.959l12.092 1.757a1.552 1.552 0 0 1 1.276 1.077c.19.585.041 1.191-.4 1.621l-8.749 8.528a3.58 3.58 0 0 0-1.029 3.171z"/></svg></span>
    <span class="text">Create News</span>
@endsection

@section('content')
    <section class="form-section">
        {!! Form::open(['route'=>'whats-news.store', 'id'=>'form', 'enctype' => 'multipart/form-data']) !!}
        <div class="row">
            <div class="col-9">
                <div class="row">
                    {{-- Content --}}
                    <div class="col-12">
                        <div class="widget-block widget-item widget-style">
                            <div class="heading-widget">
                                <span class="widget-title">News Content</span>
                            </div>

                            <div class="widget-content widget-content-padding">
                                <div class="form-group row no-gutters g-0">
                                    @if($errors->has('title'))
                                        <span class="col-12 message-show">{{ $errors->first('title') }}</span>
                                    @endif
                                    {!! Form::text('title',null,[ 'required', 'id'=>'title' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter the News title']) !!}
                                    <div class="col-12">{!! Form::label('title',"Title") !!}
                                        <span class="required">(Required)</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div style="margin-bottom: 10px;">{!! Form::label('content_text','News Content') !!}
                                        <span class="required">(Required)</span>
                                    </div>
                                    <textarea class="field-style input-text" id="content_text" name="content_text" placeholder="Enter the News content">{{ old('content_text') }}</textarea>
                                    @if($errors->has('content_text'))
                                        <span class="col-12 message-show">{{ $errors->first('content_text') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                {{-- Options --}}
                <div class="widget-block widget-item widget-style">
                    <div class="heading-widget">
                        <span class="widget-title">News Options</span>
                    </div>

                    <div class="widget-content widget-content-padding widget-content-padding-side">
                        {{-- Publish Status --}}
                        <div class="form-group row no-gutters g-0">
                            @if($errors->has('status'))
                                <span class="message-show">{{ $errors->first('status') }}</span>
                            @endif
                            <div class="col-12 field-style custom-select-field">
                                <select class="form-control" name="status" id="status">
                                    <option value="">Select a item...</option>
                                    <option selected value="published" {{ old('status') === "published" ? "selected" : "" }}>Publish</option>
                                    <option value="draft" {{ old('status') === "draft" ? "selected" : "" }}>Draft</option>
                                </select>
                            </div>

                            {{-- Publish --}}
                            {!! Form::label('status','Status',['class'=>'col-12']) !!}
                        </div>
                        <button type="submit" class="submit-form-btn create-btn">Create News</button>
                    </div>
                </div>

                {{-- Thumbnail --}}
                <div class="widget-block widget-item widget-style">
                    <div class="heading-widget">
                        <span class="widget-title">Thumbnail</span>
                    </div>

                    <div class="widget-content widget-content-padding widget-content-padding-side">
                        <div class="form-group row no-gutters">
                            @if($errors->has('thumbnail'))
                                <span class="message-show">{{ $errors->first('thumbnail') }}</span>
                            @endif
                            <div class="col-12 field-style custom-select-field">
                                <div class="thumbnail-image-upload">
                                    <div>
                                        <label for="thumbnail-image" id="thumbnail-label" class="thumbnail-label">
                                            <img id="thumbnail-preview" src="{{ asset('public/assets/admin/img/base/icons/image.svg') }}">
                                        </label>
                                        <input required onchange="readURL(this)" name="thumbnail" type="file" class="thumbnail-image" id="thumbnail-image" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
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

    {{-- Thumbnail Preview --}}
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(input).prev().find('img').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
    </script>
@endsection
