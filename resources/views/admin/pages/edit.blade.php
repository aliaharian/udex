@extends('layouts.admin.dashboard.master')

@section('page-title', 'Edit Page')

@section('lib')
    <script src="{{ url('') }}/app/lib/ckeditor/ckeditor.js"></script>
    <script src="{{ url('') }}/app/lib/ckeditor/config.js"></script>
@endsection

@section('title-page')
    <span class="icon"><svg height="28" viewBox="-78 -18 560 560.0019" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m260.7227 3.879-.129-.125c-2.3554-2.4298-5.6054-3.7892-8.996-3.75-.418-.0196-.8399.0194-1.25.1288H58.3945C23.8906.1406-4.0742 28.1094-4.0898 62.6172v399.8984c.0156 34.504 27.9804 62.4727 62.4843 62.4844h278.3086c34.504-.0117 62.4727-27.9805 62.4844-62.4844V147.3398a12.8865 12.8865 0 0 0-3.625-8.8671zm3.371 38.742 92.7266 92.4767H301.586c-20.6796-.0625-37.4336-16.8125-37.4921-37.4883zm72.7344 457.2618H58.3945c-20.6797-.0586-37.4258-16.8125-37.4922-37.4922V62.4883C20.9687 41.8125 37.7148 25.0586 58.3945 25h180.707v72.6094c.0118 34.5 27.9805 62.4687 62.4844 62.4843h72.6094v302.297c.039 20.6718-16.6953 37.4648-37.3672 37.4921zm0 0"/><path d="M76.0156 241.1953h135.0938c6.8984 0 12.5-5.5937 12.5-12.496 0-6.9024-5.6016-12.4962-12.5-12.4962H76.0156c-6.9023 0-12.496 5.5938-12.496 12.4961 0 6.9024 5.5937 12.4961 12.496 12.4961zm243.1914 69.4844H76.0156c-6.9023 0-12.496 5.5937-12.496 12.496 0 6.8985 5.5937 12.4962 12.496 12.4962H319.207c6.8985 0 12.5-5.5977 12.5-12.4961 0-6.9024-5.6015-12.4961-12.5-12.4961zm0 94.6016H76.0156c-6.9023 0-12.496 5.5937-12.496 12.496s5.5937 12.4961 12.496 12.4961H319.207c6.8985 0 12.5-5.5937 12.5-12.496s-5.6015-12.4962-12.5-12.4962zm0 0"/></svg></span>
    <span class="text">Edit Page</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('pages.update' , $Page->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        {{-- Page Template --}}
                        <div class="col-12">
                            <div class="widget-block widget-item widget-style">
                                <div class="heading-widget">
                                    <span class="widget-title">Page Content</span>
                                </div>

                                <div class="widget-content widget-content-padding">
                                    <div class="form-group row no-gutters g-0">
                                        @if($errors->has('title'))
                                            <span class="col-12 message-show">{{ $errors->first('title') }}</span>
                                        @endif
                                        {!! Form::text('title',$Page->title,[ 'required', 'id'=>'title' , 'class'=>'col-12 field-style input-text', 'placeholder'=>'Enter the Page title']) !!}
                                        <div class="col-12">{!! Form::label('title',"Title") !!}
                                            <span class="required">(Required)</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div style="margin-bottom: 10px;">{!! Form::label('content_text','Page Content') !!}
                                            <span class="required">(Required)</span>
                                        </div>
                                        <textarea class="field-style input-text" id="content_text" name="content_text" placeholder="Enter the Page content">{{ $Page->content_text }}</textarea>
                                        @if($errors->has('content_text'))
                                            <span class="col-12 message-show">{{ $errors->first('content_text') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @if($Page->template == 'faq')
                                @include('admin.pages.section.faq')
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    {{-- Page Options --}}
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Page Options</span>
                        </div>

                        <div class="widget-content widget-content-padding widget-content-padding-side">
                            {{-- Page Template --}}
                            <div class="form-group row no-gutters g-0">
                                @if($errors->has('template'))
                                    <span class="message-show">{{ $errors->first('template') }}</span>
                                @endif
                                <div class="col-12 field-style custom-select-field">
                                    <select class="form-control" name="template" id="template">
                                        <option value="">Select a item...</option>
                                        <option @if(old('template') == 'faq') selected @else @if($Page->template == 'faq') selected @endif @endif value="faq">FAQ</option>
                                    </select>
                                </div>

                                {{-- Publish --}}
                                {!! Form::label('template','Template',['class'=>'col-12']) !!}
                            </div>
                            <button type="submit" class="submit-form-btn">Update Page</button>
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
@endsection
