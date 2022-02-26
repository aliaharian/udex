@extends('layouts.admin.dashboard.master')

@section('page-title', 'Manage Connect' )

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.944.145c1.261-.063 2.786-.14 3.695.671.89.788.805 2.143.731 3.312-.015.243-.03.478-.035.698 0 .25-.222.468-.474.468-.387 0-.778.004-1.17.008-.39.004-.782.008-1.169.008.064 2.684.065 5.367.066 8.051.001 2.013.002 4.026.03 6.039 0 .25-.222.468-.475.468-1.948.031-3.897.031-5.845 0a.483.483 0 01-.474-.468c-.007-1.028-.03-2.06-.054-3.09a163 163 0 01-.057-3.713c.008-1.21.02-2.423.032-3.636s.024-2.426.031-3.636c-.853 0-1.69 0-2.543-.015a.472.472 0 01-.474-.468L3.71 3.016c0 .094-.015-.094-.015-.265 0-.25.031-.5.079-.734C4.21.092 6.365.142 8.075.182c.271.006.531.012.771.01.253 0 .474.218.474.468v1.467h1.264V.644c0-.14.047-.234.126-.312l.032-.03c.063-.079.174-.126.316-.126.27 0 .57-.015.886-.03zM5.29 1.378c-.458.265-.632.749-.647 1.232 0 .012 0 .04.002.072.004.094.01.236-.002.225 0 .062.004.125.008.187.003.063.007.125.007.187a24 24 0 01.016.546c.004.184.008.367.016.547 2.856.025 5.713.01 8.57-.005l2.142-.011.009-.114c.08-.958.186-2.248-.452-2.773-.332-.28-.774-.359-1.2-.374-.743-.031-1.486-.016-2.228 0v1.482c0 .25-.221.468-.474.468H8.846a.483.483 0 01-.474-.468V1.112c-.26.008-.517.012-.774.016a52.04 52.04 0 00-.774.016l-.259.004c-.434.004-.892.009-1.274.23zm2.386 12.56a.451.451 0 00.237-.062c1.58-.874 3.16-1.747 4.74-2.637v2.2c-.822.453-1.643.91-2.465 1.365-.821.457-1.643.913-2.465 1.366a104.9 104.9 0 00-.019-.724c-.014-.5-.028-1.003-.028-1.507zm-.016-.998l4.977-2.762v-2.09c-.79.436-1.576.873-2.361 1.31h-.001c-.786.437-1.572.874-2.362 1.31a.45.45 0 01-.237.063c-.016.609-.016 1.217-.016 1.826v.343zm.11 5.992c0-.563-.014-1.11-.03-1.672v-.045l.028-.009c.042-.013.09-.028.13-.053 1.579-.874 3.159-1.748 4.739-2.637 0 1.467 0 2.933.015 4.4-1.61.047-3.254.047-4.881.016zm-.094-9.175c1.643-.905 3.286-1.81 4.93-2.73 0-.563-.016-1.11-.031-1.673l-.001-.044c-.806 0-1.616.004-2.425.008-.81.004-1.62.007-2.426.007l-.047 4.432z" fill="#8A8A8A"></path></svg></span>
    <span class="text">Show Connect</span>
@endsection

@section('content')
    <section class="form-section">
        <form action="{{ route('ConnectUpdate', $Connect->id) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Connect Details</span>
                        </div>

                        <div class="widget-content widget-content-padding">
                            @csrf
                            {{ method_field('PUT') }}

                            @php $ConnectMeta = json_decode($Connect->connect_meta, true); @endphp
                            <div class="details-items">
                                <div class="row gx-5 gy-3">
                                    <div class="col-6">
                                        <div class="item-inner">
                                            <div class="label">Address</div>
                                            <div class="value text-capitalize">{{ $ConnectMeta['address'] }}</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-inner">
                                            <div class="label">Postcode</div>
                                            <div class="value text-capitalize">{{ $ConnectMeta['postcode'] }}</div>
                                        </div>
                                    </div>
                                    @if(isset($ConnectMeta['square_metres']))
                                        <div class="col-6">
                                            <div class="item-inner">
                                                <div class="label">How big is the area being changed in square metres?</div>
                                                <div class="value text-capitalize">{{ $ConnectMeta['square_metres'] }}sqm</div>
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($ConnectMeta['what_type_of_property_is_this']))
                                        <div class="col-6">
                                            <div class="item-inner">
                                                <div class="label">What type of property is this?</div>
                                                <div class="value text-capitalize">{{ str_replace('_' ,' ', $ConnectMeta['what_type_of_property_is_this']) }}sqm</div>
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($ConnectMeta['service_are_you_looking']))
                                        <div class="col-12">
                                            <div class="item-inner">
                                                <div class="label">What service are you looking for?</div>
                                                <div class="value text-uppercase">{{ str_replace('_', ' ', $ConnectMeta['service_are_you_looking']) }}</div>
                                            </div>
                                        </div>
                                    @endif

                                    @if(isset($ConnectMeta['upload_your_architectural_drawings']) && $ConnectMeta['upload_your_architectural_drawings'] != null)
                                        <div class="col-12">
                                            <div class="item-inner">
                                                <div class="label">Upload your architectural drawings</div>
                                                <div class="value text-uppercase">
                                                    <a href="{{ url('storage/app/connect-service/file') . '/' . \App\Model\Attachments::find($ConnectMeta['upload_your_architectural_drawings'])->path }}" download="">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($ConnectMeta['describe_the_requirements_of_your_project']))
                                        <div class="col-12">
                                            <div class="item-inner">
                                                <div class="label">Describe the requirements of your project</div>
                                                <div class="value">{{ str_replace('_', ' ', $ConnectMeta['describe_the_requirements_of_your_project']) }}</div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-block widget-item widget-style">
                        <div class="heading-widget">
                            <span class="widget-title">Attachments Details</span>
                        </div>

                        <div class="widget-content widget-content-padding">
                           @foreach($filesData as $data)
                               <a class="download-attachments" href="/app/public/{{$data}}" target="_blank">download file</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if($Connect->type == 'connect-service')
                    <div class="col-3">
                        <div class="widget-block widget-item widget-style">
                            <div class="heading-widget">
                                <span class="widget-title">Submit Information</span>
                            </div>

                            <div class="widget-content widget-content-padding widget-content-padding-side">
                                <div class="form-group row no-gutters g-0">
                                    @if($errors->has('status'))
                                        <span class="message-show">{{ $errors->first('status') }}</span>
                                    @endif
                                    <div class="col-12 field-style custom-select-field">
                                        <select class="form-control" name="role" id="role">
                                            <option value="">Select a item</option>
                                            <option value="Requested" {{ isset($Connect) && $Connect->status == 'Requested' || $Connect->status == null ? 'selected': '' }}>Requested</option>
                                            <option value="In Review" {{ isset($Connect) && $Connect->status == 'In Review' ? 'selected': '' }}>In Review</option>
                                            <option value="Introduced" {{ isset($Connect) && $Connect->status == 'Introduced' ? 'selected': '' }}>Introduced</option>
                                            <option value="Connected" {{ isset($Connect) && $Connect->status == 'Connected' ? 'selected': '' }}>Connected</option>
                                        </select>
                                    </div>
                                    {!! Form::label('role','Role:',['class'=>'col-12']) !!}
                                </div>
                                <button type="submit" class="submit-form-btn">Update</button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </section>

@endsection
