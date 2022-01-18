@extends('layouts.admin.dashboard.master')

@section('page-title', 'Connect Options')

@section('title-page')
    <span class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.944.145c1.261-.063 2.786-.14 3.695.671.89.788.805 2.143.731 3.312-.015.243-.03.478-.035.698 0 .25-.222.468-.474.468-.387 0-.778.004-1.17.008-.39.004-.782.008-1.169.008.064 2.684.065 5.367.066 8.051.001 2.013.002 4.026.03 6.039 0 .25-.222.468-.475.468-1.948.031-3.897.031-5.845 0a.483.483 0 01-.474-.468c-.007-1.028-.03-2.06-.054-3.09a163 163 0 01-.057-3.713c.008-1.21.02-2.423.032-3.636s.024-2.426.031-3.636c-.853 0-1.69 0-2.543-.015a.472.472 0 01-.474-.468L3.71 3.016c0 .094-.015-.094-.015-.265 0-.25.031-.5.079-.734C4.21.092 6.365.142 8.075.182c.271.006.531.012.771.01.253 0 .474.218.474.468v1.467h1.264V.644c0-.14.047-.234.126-.312l.032-.03c.063-.079.174-.126.316-.126.27 0 .57-.015.886-.03zM5.29 1.378c-.458.265-.632.749-.647 1.232 0 .012 0 .04.002.072.004.094.01.236-.002.225 0 .062.004.125.008.187.003.063.007.125.007.187a24 24 0 01.016.546c.004.184.008.367.016.547 2.856.025 5.713.01 8.57-.005l2.142-.011.009-.114c.08-.958.186-2.248-.452-2.773-.332-.28-.774-.359-1.2-.374-.743-.031-1.486-.016-2.228 0v1.482c0 .25-.221.468-.474.468H8.846a.483.483 0 01-.474-.468V1.112c-.26.008-.517.012-.774.016a52.04 52.04 0 00-.774.016l-.259.004c-.434.004-.892.009-1.274.23zm2.386 12.56a.451.451 0 00.237-.062c1.58-.874 3.16-1.747 4.74-2.637v2.2c-.822.453-1.643.91-2.465 1.365-.821.457-1.643.913-2.465 1.366a104.9 104.9 0 00-.019-.724c-.014-.5-.028-1.003-.028-1.507zm-.016-.998l4.977-2.762v-2.09c-.79.436-1.576.873-2.361 1.31h-.001c-.786.437-1.572.874-2.362 1.31a.45.45 0 01-.237.063c-.016.609-.016 1.217-.016 1.826v.343zm.11 5.992c0-.563-.014-1.11-.03-1.672v-.045l.028-.009c.042-.013.09-.028.13-.053 1.579-.874 3.159-1.748 4.739-2.637 0 1.467 0 2.933.015 4.4-1.61.047-3.254.047-4.881.016zm-.094-9.175c1.643-.905 3.286-1.81 4.93-2.73 0-.563-.016-1.11-.031-1.673l-.001-.044c-.806 0-1.616.004-2.425.008-.81.004-1.62.007-2.426.007l-.047 4.432z" fill="#8A8A8A"></path></svg></span>
    <span class="text">Connect Options</span>
@endsection

@section('content')

{{--    <form method="post" action="{{ route('ConnectExcelUpdate') }}" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <input type="file" name="file"/>--}}
{{--        <input type="submit" name="submit_file" value="Submit"/>--}}
{{--    </form>--}}


    @php $InputValue = '' @endphp

    <section class="form-section price-options">
        <div class="excel-importer">
            <form action="{{ route('ConnectExcelUpload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <input required type="file" name="tmp_name" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >
                    </div>
                    <div class="col-4 right">
                        <input type="submit" value="Upload and Import Data">
                    </div>
                </div>
                {!! Form::close() !!}
            </form>
        </div>


        <form action="{{ route('ConnectOptions.update') }}" method="POST">
            @csrf
            <div class="title-option-group"><span>Loft</span></div>
            <div class="widget-block widget-item widget-style">
                <div class="widget-content widget-content-padding">
                    <div class="price-section">
                        <div class="size-block">
                            <div class="size-title">Small</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['loft']['small']['avg_final']; @endphp
                                        {!! Form::text('part[loft][small][avg_final]', $InputValue,[ 'id'=>'loft_small_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('loft_small_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['loft']['small']['range_avg']; @endphp
                                        {!! Form::text('part[loft][small][range_avg]',$InputValue,[ 'id'=>'loft_small_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('loft_small_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Medium</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['loft']['medium']['avg_final']; @endphp
                                        {!! Form::text('part[loft][medium][avg_final]', $InputValue,[ 'id'=>'loft_medium_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('loft_medium_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['loft']['medium']['range_avg']; @endphp
                                        {!! Form::text('part[loft][medium][range_avg]',$InputValue,[ 'id'=>'loft_medium_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('loft_medium_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Large</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['loft']['large']['avg_final']; @endphp
                                        {!! Form::text('part[loft][large][avg_final]', $InputValue,[ 'id'=>'loft_large_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('loft_large_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['loft']['large']['range_avg']; @endphp
                                        {!! Form::text('part[loft][large][range_avg]',$InputValue,[ 'id'=>'loft_large_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('loft_large_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="title-option-group"><span>Ground</span></div>
            <div class="widget-block widget-item widget-style">
                <div class="widget-content widget-content-padding">
                    <div class="price-section">
                        <div class="size-block">
                            <div class="size-title">Small</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['ground']['small']['avg_final']; @endphp
                                        {!! Form::text('part[ground][small][avg_final]', $InputValue,[ 'id'=>'ground_small_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('ground_small_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['ground']['small']['range_avg']; @endphp
                                        {!! Form::text('part[ground][small][range_avg]',$InputValue,[ 'id'=>'ground_small_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('ground_small_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Medium</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['ground']['medium']['avg_final']; @endphp
                                        {!! Form::text('part[ground][medium][avg_final]', $InputValue,[ 'id'=>'ground_medium_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('ground_medium_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['ground']['medium']['range_avg']; @endphp
                                        {!! Form::text('part[ground][medium][range_avg]',$InputValue,[ 'id'=>'ground_medium_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('ground_medium_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Large</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['ground']['large']['avg_final']; @endphp
                                        {!! Form::text('part[ground][large][avg_final]', $InputValue,[ 'id'=>'ground_large_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('ground_large_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['ground']['large']['range_avg']; @endphp
                                        {!! Form::text('part[ground][large][range_avg]',$InputValue,[ 'id'=>'ground_large_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('ground_large_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="title-option-group"><span>First</span></div>
            <div class="widget-block widget-item widget-style">
                <div class="widget-content widget-content-padding">
                    <div class="price-section">
                        <div class="size-block">
                            <div class="size-title">Small</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['first']['small']['avg_final']; @endphp
                                        {!! Form::text('part[first][small][avg_final]', $InputValue,[ 'id'=>'first_small_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('first_small_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['first']['small']['range_avg']; @endphp
                                        {!! Form::text('part[first][small][range_avg]',$InputValue,[ 'id'=>'first_small_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('first_small_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Medium</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['first']['medium']['avg_final']; @endphp
                                        {!! Form::text('part[first][medium][avg_final]', $InputValue,[ 'id'=>'first_medium_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('first_medium_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['first']['medium']['range_avg']; @endphp
                                        {!! Form::text('part[first][medium][range_avg]',$InputValue,[ 'id'=>'first_medium_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('first_medium_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Large</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['first']['large']['avg_final']; @endphp
                                        {!! Form::text('part[first][large][avg_final]', $InputValue,[ 'id'=>'first_large_IndividualContractor' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('first_large_IndividualContractor','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['first']['large']['range_avg']; @endphp
                                        {!! Form::text('part[first][large][range_avg]',$InputValue,[ 'id'=>'first_large_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('first_large_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="title-option-group"><span>Basement</span></div>
            <div class="widget-block widget-item widget-style">
                <div class="widget-content widget-content-padding">
                    <div class="price-section">
                        <div class="size-block">
                            <div class="size-title">Small</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['basement']['small']['avg_final']; @endphp
                                        {!! Form::text('part[basement][small][avg_final]', $InputValue,[ 'id'=>'basement_main_house_small_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('basement_main_house_small_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['basement']['small']['range_avg']; @endphp
                                        {!! Form::text('part[basement][small][range_avg]',$InputValue,[ 'id'=>'basement_small_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('basement_small_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Medium</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['basement']['medium']['avg_final']; @endphp
                                        {!! Form::text('part[basement][medium][avg_final]', $InputValue,[ 'id'=>'basement_medium_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('basement_medium_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['basement']['medium']['range_avg']; @endphp
                                        {!! Form::text('part[basement][medium][range_avg]',$InputValue,[ 'id'=>'basement_medium_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('basement_medium_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Large</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['basement']['large']['avg_final']; @endphp
                                        {!! Form::text('part[basement][large][avg_final]', $InputValue,[ 'id'=>'basement_large_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('basement_large_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['basement']['large']['range_avg']; @endphp
                                        {!! Form::text('part[basement][large][range_avg]',$InputValue,[ 'id'=>'basement_large_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('basement_large_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="title-option-group"><span>Two Storey</span></div>
            <div class="widget-block widget-item widget-style">
                <div class="widget-content widget-content-padding">
                    <div class="price-section">
                        <div class="size-block">
                            <div class="size-title">Small</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['two_storey']['small']['avg_final']; @endphp
                                        {!! Form::text('part[two_storey][small][avg_final]', $InputValue,[ 'id'=>'two_storey_small_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('two_storey_small_avg_final','Average Final:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['two_storey']['small']['range_avg']; @endphp
                                        {!! Form::text('part[two_storey][small][range_avg]',$InputValue,[ 'id'=>'two_storey_small_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('two_storey_small_range_avg','Range Average:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Medium</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['two_storey']['medium']['avg_final']; @endphp
                                        {!! Form::text('part[two_storey][medium][avg_final]', $InputValue,[ 'id'=>'two_storey_medium_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('two_storey_medium_avg_final','Small:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['two_storey']['medium']['range_avg']; @endphp
                                        {!! Form::text('part[two_storey][medium][range_avg]',$InputValue,[ 'id'=>'two_storey_medium_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('two_storey_medium_range_avg','Medium:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-block">
                            <div class="size-title">Large</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['two_storey']['large']['avg_final']; @endphp
                                        {!! Form::text('part[two_storey][large][avg_final]', $InputValue,[ 'id'=>'two_storey_large_avg_final' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('two_storey_large_avg_final','Small:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row no-gutters g-0">
                                        @php $InputValue = json_decode($ConnectOption->connect_meta, true)['two_storey']['large']['range_avg']; @endphp
                                        {!! Form::text('part[two_storey][large][range_avg]',$InputValue,[ 'id'=>'two_storey_large_range_avg' , 'class'=>'col-12 field-style input-text']) !!}
                                        {!! Form::label('two_storey_large_range_avg','Medium:',['class'=>'col-12']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit --}}
            <div class="widget-block widget-item widget-style">
                <div class="widget-content widget-content-padding widget-content-padding-side">
                    <button type="submit" class="submit-form-btn">Update</button>
                </div>
            </div>
        </form>
    </section>
@endsection
