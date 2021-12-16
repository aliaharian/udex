@extends('layouts.admin.dashboard.master')

@section('page-title', 'Edit News')

@section('lib')
    <script src="{{ url('') }}/app/lib/ckeditor/ckeditor.js"></script>
    <script src="{{ url('') }}/app/lib/ckeditor/config.js"></script>
@endsection

@section('title-page')
    <span class="icon"><img src="{{ asset('public/assets/admin/img/base/icons') }}/architectionary.svg"></span>
    <span class="text">Edit News</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('whats-news.update' , $WhatsNews->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        {{-- Content Fields --}}
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
                                        {!! Form::text('title',$WhatsNews->title,[ 'required', 'id'=>'title' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter the Architectionary title']) !!}
                                        <div class="col-12">{!! Form::label('title',"Title") !!}
                                            <span class="required">(Required)</span></div>
                                    </div>

                                    <div class="form-group">
                                        <div style="margin-bottom: 10px;">{!! Form::label('content_text','Architectionary Content') !!}
                                            <span class="required">(Required)</span></div>
                                        <textarea class="field-style input-text" id="content_text" name="content_text" placeholder="Enter the Architectionary content">{{ $WhatsNews->content_text }}</textarea>
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
                            <span class="widget-title">Architectionary Options</span>
                        </div>

                        <div class="widget-content widget-content-padding widget-content-padding-side">
                            {{-- Publish --}}
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('status'))
                                    <span class="message-show">{{ $errors->first('status') }}</span>
                                @endif
                                <div class="col-12 field-style custom-select-field">
                                    <select class="form-control" name="status" id="status">
                                        <option value="">Select a item...</option>
                                        <option @if(old('status') == 'published') selected @else @if($WhatsNews->status == 'published') selected @endif @endif value="published">Publish</option>
                                        <option @if(old('status') == 'draft') selected @else @if($WhatsNews->status == 'draft') selected @endif @endif value="draft">Draft</option>
                                    </select>
                                </div>

                                {{-- Submit --}}
                                {!! Form::label('status','Status',['class'=>'col-12']) !!}
                            </div>
                            <button type="submit" class="submit-form-btn">Update Architectionary</button>
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
                                            <label for="thumbnail-image" id="thumbnail-label" class="thumbnail-label"><img id="thumbnail-preview" src="@if($WhatsNews->thumbnail && isset(\App\Model\Attachments::find($WhatsNews->thumbnail)->path)) {{asset('storage/app/news/thumbnail/170').'/'.\App\Model\Attachments::find($WhatsNews->thumbnail)->path}} @else{{ asset('public/assets/admin/img/base/icons/image.svg') }}@endif"></label>
                                            <input onchange="readURL(this)" name="thumbnail" type="file" class="thumbnail-image" id="thumbnail-image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </form>
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
