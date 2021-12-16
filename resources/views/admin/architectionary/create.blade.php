@extends('layouts.admin.dashboard.master')

@section('page-title', 'Create Architectionary')

@section('lib')
    <script src="{{ url('') }}/app/lib/ckeditor/ckeditor.js"></script>
    <script src="{{ url('') }}/app/lib/ckeditor/config.js"></script>
@endsection

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/architectionary.svg"></span>
    <span class="text">Create Architectionary</span>
@endsection

@section('content')
    <section class="form-section">
        {!! Form::open(['route'=>'architectionary.store', 'id'=>'form', 'enctype' => 'multipart/form-data']) !!}
        <div class="row">
            <div class="col-9">
                <div class="row">
                    {{-- Content --}}
                    <div class="col-12">
                        <div class="widget-block widget-item widget-style">
                            <div class="heading-widget">
                                <span class="widget-title">Architectionary Content</span>
                            </div>

                            <div class="widget-content widget-content-padding">
                                <div class="form-group row no-gutters g-0">
                                    @if($errors->has('title'))
                                        <span class="col-12 message-show">{{ $errors->first('title') }}</span>
                                    @endif
                                    {!! Form::text('title',null,[ 'required', 'id'=>'title' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter the Architectionary title']) !!}
                                    <div class="col-12">{!! Form::label('title',"Title") !!}
                                        <span class="required">(Required)</span></div>
                                </div>

                                <div class="form-group">
                                    <div style="margin-bottom: 10px;">{!! Form::label('content_text','Architectionary Content') !!}
                                        <span class="required">(Required)</span></div>
                                    <textarea class="field-style input-text" id="content_text" name="content_text" placeholder="Enter the Architectionary content">{{ old('content_text') }}</textarea>
                                    @if($errors->has('content_text'))
                                        <span class="col-12 message-show">{{ $errors->first('content_text') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div style="margin-bottom: 10px;">{!! Form::label('excerpt','Excerpt') !!}
                                        <span class="required">(Required)</span></div>
                                    <textarea required class="field-style input-text" id="excerpt" name="excerpt" placeholder="Enter the Architectionary excerpt">{{ old('excerpt') }}</textarea>
                                    @if($errors->has('excerpt'))
                                        <span class="col-12 message-show">{{ $errors->first('excerpt') }}</span>
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
                        <span class="widget-title">Architectionary Options</span>
                    </div>

                    <div class="widget-content widget-content-padding widget-content-padding-side">
                        {{-- Status --}}
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
                        <button type="submit" class="submit-form-btn create-btn">Create Architectionary</button>
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
