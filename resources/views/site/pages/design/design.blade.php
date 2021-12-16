@extends('layouts.site.pages-master')

@section('page-title', 'Design & Planning')

@section('content')
    <div class="container container-padding">
        <div class="page-info">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="page-icon">
                        <svg id="SVGDoc" width="68" height="120" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 120">
                            <path d="M67.8128,41.156c-0.3279,-0.704 -1.034,-1.1559 -1.8119,-1.1559h-23.7v0l23.3899,-36.93002c0.39,-0.61594 0.4139,-1.39594 0.0621,-2.03391c-0.352,-0.64008 -1.0242,-1.03617 -1.7522,-1.03617h-31.9999c-0.758,0 -1.4501,0.42797 -1.7899,1.10602l-30.00001,59.99998c-0.31008,0.6181 -0.27609,1.354 0.08789,1.9439c0.36609,0.5899 1.00805,0.9499 1.70203,0.9499h20.56589v0l-22.40995,53.2242c-0.38203,0.91 -0.04195,1.966 0.79992,2.482c0.32391,0.198 0.68391,0.294 1.04203,0.294c0.57399,0 1.14001,-0.246 1.53211,-0.71l64.00009,-76.0002c0.5018,-0.5958 0.6098,-1.4278 0.2819,-2.1338z" fill="#000000" fill-opacity="1"></path>
                        </svg>
                    </div>
                </div>
                <div class="col">
                    <div class="heading-title">Let's get a<br> <span class="base-color text-color">quick quote!</span>
                    </div>
                    <div class="heading-desc">It only takes two minutes to get an idea of how much your architectural designs and planning will cost using our handy tool.</div>
                </div>
            </div>
        </div>

        <div class="form-block">
            {!! Form::open(['route'=>'design.store', 'id'=>'form', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-heading">
                <div class="heading-title">Tell us about your property...</div>
                <div class="heading-desc">Please answer a few quick questions about your project to retrieve your quote.</div>
            </div>

            {{-- What type of property is this? --}}
            <div class="field-block ">
                <div class="filed-block-label">What type of property is this?</div>
                <div class="inputs">
                    <div class="row">
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="detached" @if(old('what_type_of_property_is_this') == 'detached'){{ 'checked' }}@endif id="what_type_of_property_is_this_1" type="radio" name="what_type_of_property_is_this">
                            <label for="what_type_of_property_is_this_1"> <span class="icon"><svg id="SVGDoc" width="59" height="49" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 49"><path d="M45.6495,40.26432v0l-15.1995,8.56658v0l28.1935,-6.96059v0l-12.994,-7.30031v0z" fill="#5f5f5f"></path><path d="M8.39428,0v0l-8.39428,11.7182v0l30.447,17.1574v0l7.6057,-12.8352v0z" fill="#ed5d00"></path><path d="M30.45,28.8752v0v19.958v0l15.1741,-8.5495v0v-19.98165v0l-7.5673,-4.26205v0z" fill="#ed3f00"></path><path d="M0,31.678v0l30.447,17.1568v0v-19.9574v0l-30.447,-17.1574v0z" fill="#ed7b00"></path><path d="M0,31.678v0l30.447,17.1568v0v-19.9574v0l-30.447,-17.1574v0z" fill="#ed7b00"></path><path d="M30.45,28.8752v0v19.958v0l15.1741,-8.5495v0v-19.98165v0l-7.5673,-4.26205v0z" fill="#ed3f00"></path><path d="M8.39428,0v0l-8.39428,11.7182v0l30.447,17.1574v0l7.6057,-12.8352v0z" fill="#ed5d00"></path><path d="M45.6495,40.26432v0l-15.1995,8.56658v0l28.1935,-6.96059v0l-12.994,-7.30031v0z" fill="#5f5f5f"></path><path d="M0,31.678v0l30.447,17.1568v0v-19.9574v0l-30.447,-17.1574v0z" fill="#ed7b00"></path><path d="M30.45,28.8752v0v19.958v0l15.1741,-8.5495v0v-19.98165v0l-7.5673,-4.26205v0z" fill="#ed3f00"></path><path d="M8.39428,0v0l-8.39428,11.7182v0l30.447,17.1574v0l7.6057,-12.8352v0z" fill="#ed5d00"></path><path d="M45.6495,40.26432v0l-15.1995,8.56658v0l28.1935,-6.96059v0l-12.994,-7.30031v0z" fill="#5f5f5f"></path><path d="M0,31.678v0l30.447,17.1568v0v-19.9574v0l-30.447,-17.1574v0z" fill="#ed7b00"></path><path d="M30.45,28.8752v0v19.958v0l15.1741,-8.5495v0v-19.98165v0l-7.5673,-4.26205v0z" fill="#ed3f00"></path><path d="M8.39428,0v0l-8.39428,11.7182v0l30.447,17.1574v0l7.6057,-12.8352v0z" fill="#ed5d00"></path><path d="M45.6495,40.26432v0l-15.1995,8.56658v0l28.1935,-6.96059v0l-12.994,-7.30031v0z" fill="#5f5f5f"></path></svg></span><span class="label">Detached</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="semi_detached" @if(old('what_type_of_property_is_this') == 'semi detached'){{ 'checked' }}@endif id="what_type_of_property_is_this_2" type="radio" name="what_type_of_property_is_this">
                            <label for="what_type_of_property_is_this_2"> <span class="icon"><svg id="SVGDoc" width="60" height="41" viewBox="0 0 60 41"><path d="M11.4019,0v0l-11.4019,13.3511v0l22.804,12.7509v0l11.3666,-15.0238v0z" fill="#ed5d00"></path><path d="M22.8,26.1037v0v14.8322v0l11.1427,-5.485v0l0.2239,-15.25139v0v-9.11951v0z" fill="#ed3f00"></path><path d="M0,28.1822v0l22.804,12.7504v0v-14.8317v0l-22.804,-12.7509v0z" fill="#ed7b00"></path><path d="M34.17235,19.73237v0l-0.22235,15.71853v0l11.1426,-5.4851v0v-14.03574v0l-10.9186,-4.85006v0z" fill="#414141"></path><path d="M22.8,40.932v0l36.5428,-9.01483v0l-14.2576,-5.81717v0z" fill="#5f5f5f"></path><path d="M22.8,40.932v0l36.5428,-9.01483v0l-14.2576,-5.81717v0z" fill="#5f5f5f"></path><path d="M22.8,40.932v0l36.5428,-9.01483v0l-14.2576,-5.81717v0z" fill="#5f5f5f"></path><path d="M34.17235,19.73237v0l-0.22235,15.71853v0l11.1426,-5.4851v0v-14.03574v0l-10.9186,-4.85006v0z" fill="#414141"></path><path d="M0,28.1822v0l22.804,12.7504v0v-14.8317v0l-22.804,-12.7509v0z" fill="#ed7b00"></path><path d="M22.8,26.1037v0v14.8322v0l11.1427,-5.485v0l0.2239,-15.25139v0v-9.11951v0z" fill="#ed3f00"></path><path d="M11.4019,0v0l-11.4019,13.3511v0l22.804,12.7509v0l11.3666,-15.0238v0z" fill="#ed5d00"></path><path d="M22.8,40.932v0l36.5428,-9.01483v0l-14.2576,-5.81717v0z" fill="#5f5f5f"></path><path d="M34.17235,19.73237v0l-0.22235,15.71853v0l11.1426,-5.4851v0v-14.03574v0l-10.9186,-4.85006v0z" fill="#414141"></path><path d="M0,28.1822v0l22.804,12.7504v0v-14.8317v0l-22.804,-12.7509v0z" fill="#ed7b00"></path><path d="M22.8,26.1037v0v14.8322v0l11.1427,-5.485v0l0.2239,-15.25139v0v-9.11951v0z" fill="#ed3f00"></path><path d="M11.4019,0v0l-11.4019,13.3511v0l22.804,12.7509v0l11.3666,-15.0238v0z" fill="#ed5d00"></path><path d="M22.8,40.932v0l36.5428,-9.01483v0l-14.2576,-5.81717v0z" fill="#5f5f5f"></path><path d="M34.17235,19.73237v0l-0.22235,15.71853v0l11.1426,-5.4851v0v-14.03574v0l-10.9186,-4.85006v0z" fill="#414141"></path><path d="M0,28.1822v0l22.804,12.7504v0v-14.8317v0l-22.804,-12.7509v0z" fill="#ed7b00"></path><path d="M22.8,26.1037v0v14.8322v0l11.1427,-5.485v0l0.2239,-15.25139v0v-9.11951v0z" fill="#ed3f00"></path><path d="M11.4019,0v0l-11.4019,13.3511v0l22.804,12.7509v0l11.3666,-15.0238v0z" fill="#ed5d00"></path></svg></span><span class="label">Semi Detached</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="end_of_terrace" @if(old('what_type_of_property_is_this') == 'end of terrace'){{ 'checked' }}@endif id="what_type_of_property_is_this_3" type="radio" name="what_type_of_property_is_this">
                            <label for="what_type_of_property_is_this_3"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="59" height="43" viewBox="0 0 59 43"><path fill="#c9c9c9" d="M19.6 21.617l20.056 11.301V19.772L19.6 8.47z"/><path d="M39.66 19.775V32.92l9.995-5.631V14.127l-4.984-2.807z"/><path fill="#414141" d="M24.61 0L19.6 8.47l20.056 11.302 5.01-8.454z"/><path fill="#5f5f5f" d="M49.672 27.27L39.66 32.915l18.572-4.585-8.56-4.809z"/><g><path fill="#c9c9c9" d="M9.8 26.477l20.056 11.301V24.632L9.8 13.33z"/><path d="M30.056 23.85l-.196 13.93 9.8-4.861.227-13.31-5.016-3.43z"/><path fill="#414141" d="M14.81 4.86L9.8 13.33l20.056 11.302 5.01-8.455z"/><path fill="#5f5f5f" d="M29.86 37.785L48.432 33.2l-1.79-3.7z"/></g><g><path fill="#ed7b00" d="M0 31.337l20.056 11.301V29.492L0 18.19z"/><path fill="#ed3f00" d="M20.06 29.495V42.64l9.8-4.861.197-13.518-4.986-3.222z"/><path fill="#ed5d00" d="M5.01 9.72L0 18.19l20.056 11.302 5.01-8.455z"/><path fill="#5f5f5f" d="M20.06 42.644l18.572-4.586-4.43-2.338z"/></g></svg></span><span class="label">End Of Terrace</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="terrace" @if(old('what_type_of_property_is_this') == 'terrace'){{ 'checked' }}@endif id="what_type_of_property_is_this_4" type="radio" name="what_type_of_property_is_this">
                            <label for="what_type_of_property_is_this_4"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="58" height="43" viewBox="0 0 59 43"><path fill="#c9c9c9" d="M19.45 21.617l19.9 11.301V19.772L19.45 8.47z"/><path d="M39.35 19.775V32.92l9.917-5.631V14.127l-4.945-2.807z"/><path fill="#414141" d="M24.422 0L19.45 8.47l19.9 11.302 4.97-8.454z"/><path fill="#5f5f5f" d="M49.284 27.27l-9.934 5.644 18.427-4.585-8.493-4.809z"/><g><path fill="#c9c9c9" d="M9.72 26.477l19.9 11.301V24.632L9.72 13.33z"/><path fill="#ed3f00" d="M29.814 23.85l-.194 13.93 9.723-4.861.226-13.31-4.977-3.43z"/><path fill="#ed5d00" d="M14.692 4.86L9.72 13.33l19.9 11.302 4.97-8.455z"/><path fill="#5f5f5f" d="M29.62 37.785L48.047 33.2l-1.776-3.7z"/></g><g><path fill="#1d1d1d" d="M0 31.337l19.9 11.301V29.492L0 18.19z"/><path d="M19.9 29.495V42.64l9.723-4.861.196-13.518-4.947-3.222z"/><path fill="#414141" d="M4.972 9.72L0 18.19l19.9 11.302 4.97-8.455z"/><path fill="#5f5f5f" d="M19.9 42.644l18.427-4.586-4.395-2.338z"/></g></svg></span><span class="label">Terrace</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="flat" @if(old('what_type_of_property_is_this') == 'flat'){{ 'checked' }}@endif id="what_type_of_property_is_this_5" type="radio" name="what_type_of_property_is_this">
                            <label for="what_type_of_property_is_this_5"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="59" height="49" viewBox="0 0 59 49"><path fill="#1d1d1d" d="M0 31.678l30.447 17.157V28.877L0 11.72z"/><path fill="#ed7b00" d="M0 31.672L30.447 48.83v-9.692L0 21.98z"/><path d="M30.45 28.875v19.958l15.174-8.55v-19.98l-7.567-4.262z"/><path fill="#414141" d="M8.394 0L0 11.718l30.447 17.158 7.606-12.836z"/><path fill="#5f5f5f" d="M45.65 40.264l-15.2 8.567 28.194-6.96L45.65 34.57z"/><g><path fill="#ed3f00" d="M30.45 39.139l7.606-4.569v9.944l-7.606 4.317z"/></g></svg></span><span class="label">Flat</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="bungalow" @if(old('what_type_of_property_is_this') == 'bungalow'){{ 'checked' }}@endif id="what_type_of_property_is_this_6" type="radio" name="what_type_of_property_is_this">
                            <label for="what_type_of_property_is_this_6"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="58" height="33" viewBox="0 0 58 33"><path fill="#5f5f5f" d="M42.21 21.435L23.8 32.187l34.15-8.736-15.34-6.541z"/><path fill="#ed7b00" d="M0 18.662L23.801 32.18V21.848L0 8.33z"/><path fill="#ed3f00" d="M23.8 21.848V32.18l25.637-8.992v-8.465l-11.92-4.493z"/><path fill="#ed5d00" d="M15.078 0L0 8.334l23.801 13.518L37.52 10.234z"/></svg></span><span class="label">Bungalow</span></label>
                        </div>
                    </div>
                </div>
                <div class="under-block-link">Looking for new builds? <a href="#">Click here</a></div>
            </div>

            {{-- Which specific parts of the property? --}}
            <div class="field-block ">
                <div class="filed-block-label">
                    Which specific parts of the property?
                    <div class="filed-block-subtitle">Select as many items as required.</div>
                </div>
                <div class="inputs">
                    <div class="row justify-content-center">
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="46" viewBox="0 0 57 46"><path fill="gray" d="M43.669 27.66l12.99 7.478L24.99 45.623l18.679-10.8z"/><path fill="#1d1d1d" d="M6.21 10.82l24.998 14.431v16.79L6.21 27.61z"/><path d="M31.21 25.245l6.246-10.795 6.214 3.586v16.808l-12.46 7.19z"/><path fill="#ed3f00" d="M31.2 34.36v7.683l-6.21 3.582V37.95z"/><path fill="#ed5d00" d="M6.21 19.98l24.988 14.38-6.21 3.587L0 23.567z"/><path fill="#ed7b00" d="M0 23.57l24.989 14.386v7.674L0 31.276z"/><path fill="#414141" d="M31.208 25.249l6.246-10.795L12.456 0 6.21 10.818z"/></svg></span><span class="label">Ground</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="ground_side_infill" @if(old('which_specific_parts_of_the_property') == 'ground_side_infill'){{ 'checked' }}@endif id="child_option_specific_parts_ground_side_infill" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_ground_side_infill">
                                                <span class="icon">
                                                    <svg width="134" height="100" viewBox="0 0 134 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.36 21.97l50.77 29.31v34.09L25.36 56.06V21.97z" fill="#1D1D1D"/><path d="M76.13 51.28l12.68-21.93 12.62 7.28v34.14l-25.3 14.6V51.28z" fill="#000"/><path d="M76.13 51.28l12.68-21.93L38.05 0 25.36 21.97l50.77 29.31z" fill="#414141"/><path d="M1.94 37.73l33.49 23.95v29.59L1.94 71.83v-34.1z" fill="#1D1D1D"/><path d="M60.73 47.03v29.63l-25.3 14.61V61.68l25.3-14.65z" fill="#000"/><path d="M35.43 61.68l25.3-14.65-35.37-25.06L1.94 37.63l33.49 24.05z" fill="#414141"/><path d="M76.13 69.78v15.6L50.79 100V84.4l25.34-14.62z" fill="#ED3F00"/><path d="M60.77 60.96l15.36 8.82L50.79 84.4l-15.37-8.81 25.35-14.63z" fill="#ED5D00"/><path d="M35.42 75.58l15.37 8.82V100l-15.37-8.75V75.58z" fill="#ED7B00"/><path d="M101.47 60.96l32.26 18.57L50.79 100l50.68-29.31v-9.73z" fill="gray"/></svg>
                                                </span><span class="label">Side Infill</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="ground_side" @if(old('which_specific_parts_of_the_property') == 'ground_side'){{ 'checked' }}@endif id="child_option_specific_parts_ground_side" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_ground_side">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.96 23.32l53.88 31.11v36.18L4.96 59.5V23.32z" fill="#1D1D1D"/><path d="M58.84 54.43l13.47-23.28 13.39 7.73v36.23l-26.86 15.5V54.43z" fill="#000"/><path d="M58.84 54.43l13.47-23.28L18.43 0 4.96 23.32l53.88 31.11z" fill="#414141"/><path d="M102.04 67.92v16.57L75.14 100V83.44l26.9-15.52z" fill="#ED3F00"/><path d="M85.73 58.56l16.31 9.36-26.9 15.52-16.3-9.35 26.89-15.53z" fill="#ED5D00"/><path d="M58.84 74.08l16.3 9.36V100l-16.3-9.29V74.08z" fill="#ED7B00"/><path d="M102.04 74.11l23 13.24-49.9 12.62 26.9-15.53V74.11z" fill="gray"/></svg>
                                                </span><span class="label">Side</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="ground_side_and_rear" @if(old('which_specific_parts_of_the_property') == 'ground_side_and_rear'){{ 'checked' }}@endif id="child_option_specific_parts_ground_side_and_rear" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_ground_side_and_rear">
                                                <span class="icon">
                                                    <svg width="139" height="100" viewBox="0 0 139 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M74.54 93.69l-18.68 4.72 13.42-7.74 5.26 3.02z" fill="gray"/><path d="M15.39 23.32l53.88 31.11v36.18L15.39 59.5V23.32z" fill="#1D1D1D"/><path d="M69.27 54.43l13.46-23.28 13.4 7.73v36.23l-26.86 15.5V54.43z" fill="#000"/><path d="M69.25 74.07v16.55l-13.39 7.72V81.8l13.39-7.73z" fill="#ED3F00"/><path d="M15.39 43.07l53.86 31-13.39 7.73L2 50.8l13.39-7.73z" fill="#ED5D00"/><path d="M2 50.79L55.86 81.8v16.54L2 67.41V50.79z" fill="#ED7B00"/><path d="M69.27 54.43l13.46-23.28L28.85 0 15.39 23.32l53.88 31.11z" fill="#414141"/><path d="M112.47 67.92v16.57L85.57 100V83.44l26.9-15.52z" fill="#ED3F00"/><path d="M96.16 58.56l16.31 9.36-26.9 15.52-16.31-9.35 26.9-15.53z" fill="#ED5D00"/><path d="M69.26 74.08l16.31 9.36V100l-16.31-9.29V74.08z" fill="#ED7B00"/><path d="M112.47 74.11l22.99 13.24-49.89 12.62 26.9-15.53V74.11z" fill="gray"/></svg>
                                                </span><span class="label">Side And Rear</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="ground_rear" @if(old('which_specific_parts_of_the_property') == 'ground_rear'){{ 'checked' }}@endif id="child_option_specific_parts_ground_rear" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_ground_rear">
                                                <span class="icon">
                                                    <svg width="187" height="150" viewBox="0 0 187 150" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M143.567 90.945l42.704 24.585L82.157 150l61.41-35.505v-23.55z" fill="gray"/><path d="M20.415 35.565L102.6 83.01v55.2L20.415 90.765v-55.2z" fill="#1D1D1D"/><path d="M102.598 83.01l20.535-35.49 20.43 11.79v55.26l-40.965 23.64v-55.2z" fill="#000"/><path d="M102.572 112.965v25.26L82.157 150v-25.23l20.415-11.805z" fill="#ED3F00"/><path d="M20.415 65.7l82.155 47.28-20.415 11.79L0 77.49 20.415 65.7z" fill="#ED5D00"/><path d="M0 77.475l82.155 47.295V150L0 102.81V77.475z" fill="#ED7B00"/><path d="M102.6 83.01l20.535-35.49L40.95 0 20.415 35.565 102.6 83.01z" fill="#414141"/></svg>
                                                </span><span class="label">Rear</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="ground_wraparound" @if(old('which_specific_parts_of_the_property') == 'ground_wraparound'){{ 'checked' }}@endif id="child_option_specific_parts_ground_wraparound" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_ground_wraparound">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.91 21.65l50.02 28.88v33.6L13.91 55.24V21.65z" fill="#1D1D1D"/><path d="M63.93 50.53l12.5-21.61 12.43 7.18v33.63l-24.93 14.4v-33.6z" fill="#000"/><path d="M1.48 47.15l65.16 37.49V100L1.48 62.58V47.15z" fill="#ED7B00"/><path d="M63.93 50.53l12.5-21.61L26.4 0 13.91 21.65l50.02 28.88z" fill="#414141"/><path d="M104.03 63.06v15.38L66.64 100V84.63l37.39-21.57z" fill="#ED3F00"/><path d="M88.89 54.37l15.14 8.69-24.97 14.41-15.14-8.68 24.97-14.42z" fill="#ED5D00"/><path d="M104.03 68.81l24.49 14.09L66.64 100l37.39-21.61v-9.58z" fill="gray"/><path d="M13.91 39.99l65.15 37.48-12.43 7.17L1.48 47.17l12.43-7.18z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Wraparound</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194v16.511L0 27.152z"/><path d="M24.58 24.837l6.146-10.617 6.109 3.522v16.535L24.58 41.349z"/><path fill="#414141" d="M24.583 24.834l6.14-10.617L6.142 0 0 10.64z"/><path fill="gray" d="M36.853 29.55l10.494 6.04-22.767 5.76 12.273-7.09z"/><path fill="#ed7b00" d="M17.27 20.59l7.314 4.28v7.792l-7.314-4.28z"/><path fill="#ed3f00" d="M24.58 24.871l6.146-10.621 6.109 3.527v7.815L24.58 32.664z"/><path fill="#ed5d00" d="M24.584 24.88l6.14-10.622-7.313-4.298L17.27 20.6z"/></svg>
                                </span><span class="label">First</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="first_rear_over_outrigger" @if(old('which_specific_parts_of_the_property') == 'first_rear_over_outrigger'){{ 'checked' }}@endif id="child_option_specific_parts_first_rear_over_outrigger" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_first_rear_over_outrigger">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.6 26.81l53.89 31.11v36.19L25.6 63V26.81z" fill="#1D1D1D"/><path d="M79.49 57.92l13.46-23.28 13.39 7.73V78.6L79.49 94.11V57.92z" fill="#000"/><path d="M79.49 57.92l13.46-23.28L39.07 3.49 25.6 26.81l53.89 31.11z" fill="#414141"/><path d="M106.39 68.25l22.99 13.23-49.89 12.63 26.9-15.54V68.25z" fill="gray"/><path d="M.62 54.94l33.49 23.94v17.63L.62 77.07V54.94z" fill="#1D1D1D"/><path d="M59.41 64.02V81.9l-25.3 14.61V78.67l25.3-14.65z" fill="#000"/><path d="M34.11 79l25.3-14.65-35.37-25.06L.62 54.95 34.11 79z" fill="#414141"/><path d="M10.98 35.4l39.8 20.99-.24 13.34-39.56-21.66V35.4z" fill="#ED7B00"/><path d="M59.41 46.35v18.39l-8.87 4.99.24-13.34 8.63-10.04z" fill="#ED3F00"/><path d="M50.78 56.39l8.63-10.04L25.6 26.81 10.98 35.4l39.8 20.99z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Rear Over Outrigger</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="first_rear_over_ground_floor" @if(old('which_specific_parts_of_the_property') == 'first_rear_over_ground_floor'){{ 'checked' }}@endif id="child_option_specific_parts_first_rear_over_ground_floor" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_first_rear_over_ground_floor">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.86 26.01l53.89 31.11v36.19L24.86 62.2V26.01z" fill="#1D1D1D"/><path d="M78.75 57.12l13.46-23.28 13.39 7.73V77.8L78.75 93.31V57.12z" fill="#000"/><path d="M78.75 57.12l13.46-23.28L38.33 2.69 24.86 26.01l53.89 31.11z" fill="#414141"/><path d="M105.65 67.45l22.99 13.24-49.89 12.62 26.9-15.54V67.45z" fill="gray"/><path d="M1.36 43.77l33.49 23.95v29.59L1.36 77.87v-34.1z" fill="#1D1D1D"/><path d="M60.15 53.08V82.7l-25.3 14.61V67.72l25.3-14.64z" fill="#000"/><path d="M34.85 67.72l25.3-14.64-35.37-25.07L1.36 43.67l33.49 24.05z" fill="#414141"/><path d="M1.36 43.77l33.49 23.95v11.05L1.36 59.33V43.77z" fill="#ED7B00"/><path d="M46.27 61.26v11.08l-11.42 6.43V67.72l11.42-6.46z" fill="#ED3F00"/><path d="M34.85 67.72l11.42-6.61-34.48-24.44-10.43 7 33.49 24.05z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Rear Over Ground Floor</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="first_side" @if(old('which_specific_parts_of_the_property') == 'first_side'){{ 'checked' }}@endif id="child_option_specific_parts_first_side" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_first_side">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"/><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"/><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"/><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"/><path d="M50.96 49.83l16.03 9.38v36.1l-16.03-9.38v-36.1z" fill="#ED7B00"/><path d="M66.99 59.21l13.47-23.28 13.39 7.73v36.15l-26.86 15.5v-36.1z" fill="#ED3F00"/><path d="M66.99 59.21l13.46-23.28-16.03-9.42-13.46 23.32 16.03 9.38z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Side</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="first_side_and_rear" @if(old('which_specific_parts_of_the_property') == 'first_side_and_rear'){{ 'checked' }}@endif id="child_option_specific_parts_first_side_and_rear" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_first_side_and_rear">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.22 28.01L74.1 59.12v36.19L20.22 64.2V28.01z" fill="#1D1D1D"/><path d="M74.1 59.12l13.46-23.27 13.39 7.72v36.24L74.1 95.31V59.12z" fill="#000"/><path d="M74.1 59.12l13.46-23.27L33.68 4.69 20.22 28.01 74.1 59.12z" fill="#414141"/><path d="M101 69.45l23 13.24-49.9 12.62L101 79.77V69.45zM47.48 79.94l-19.94 5.04 14.22-8.33 5.72 3.29z" fill="gray"/><path d="M58.07 49.83l16.03 9.38v17.08l-16.03-9.38V49.83z" fill="#ED7B00"/><path d="M74.1 59.21l13.46-23.28 13.39 7.73v17.13L74.1 76.29V59.21z" fill="#ED3F00"/><path d="M74.1 59.21l13.46-23.28-16.03-9.42-13.46 23.32 16.03 9.38z" fill="#ED5D00"/><path d="M6 53.23L27.54 65.7v19.16L6 72.39V53.23z" fill="#1D1D1D"/><path d="M20.22 44.92l21.54 12.55-14.22 8.32L6 53.23l14.22-8.31z" fill="#1D1D1D"/><path d="M41.76 57.47v19.18l-14.22 8.21V65.7l14.22-8.23z" fill="#000"/><path d="M6 36.29l21.54 12.55v16.95L6 53.32V36.29z" fill="#ED7B00"/><path d="M20.22 27.97l21.54 12.48-14.22 8.39L6 36.29l14.22-8.32z" fill="#ED5D00"/><path d="M41.76 40.45v17.13l-14.22 8.21V48.84l14.22-8.39z" fill="#ED3F00"/></svg>
                                                </span><span class="label">Side And Rear</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="first_rear" @if(old('which_specific_parts_of_the_property') == 'first_rear'){{ 'checked' }}@endif id="child_option_specific_parts_first_rear" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_first_rear">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.22 28.01L74.1 59.12v36.19L20.22 64.2V28.01z" fill="#1D1D1D"/><path d="M74.1 59.12l13.46-23.27 13.39 7.72v36.24L74.1 95.31V59.12z" fill="#000"/><path d="M74.1 59.12l13.46-23.27L33.68 4.69 20.22 28.01 74.1 59.12z" fill="#414141"/><path d="M101 69.45l23 13.24-49.9 12.62L101 79.77V69.45zM47.48 79.94l-19.94 5.04 14.22-8.33 5.72 3.29z" fill="gray"/><path d="M6 53.23L27.54 65.7v19.16L6 72.39V53.23z" fill="#1D1D1D"/><path d="M20.22 44.92l21.54 12.55-14.22 8.32L6 53.23l14.22-8.31z" fill="#1D1D1D"/><path d="M41.76 57.47v19.18l-14.22 8.21V65.7l14.22-8.23z" fill="#000"/><path d="M6 36.29l21.54 12.55v16.95L6 53.32V36.29z" fill="#ED7B00"/><path d="M20.22 27.97l21.54 12.48-14.22 8.39L6 36.29l14.22-8.32z" fill="#ED5D00"/><path d="M41.76 40.45v17.13l-14.22 8.21V48.84l14.22-8.39z" fill="#ED3F00"/></svg>
                                                </span><span class="label">Rear</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194v16.511L0 27.152z"/><path d="M24.58 24.837l6.146-10.617 6.109 3.522v16.535L24.58 41.349z"/><path d="M24.583 24.834l6.14-10.617L6.142 0 0 10.64z"/><path fill="gray" d="M36.853 29.55l10.494 6.04-22.767 5.76 12.273-7.09z"/><path fill="#ed7b00" d="M1.14 2.86l23.374 13.487v7.117L1.14 9.982z"/><path fill="#ed5d00" d="M29.578 14.437L6.2.95 1.14 2.857l23.374 13.487z"/><path fill="#ed3f00" d="M29.584 14.44l-5.064 9.025v-7.118z"/></svg></span><span class="label">Loft</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft_l_shaped_dormer" @if(old('which_specific_parts_of_the_property') == 'loft_l_shaped_dormer'){{ 'checked' }}@endif id="child_option_specific_parts_loft_l_shaped_dormer" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_loft_l_shaped_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.73 26.34l53.88 31.11v36.19L24.73 62.53V26.34z" fill="#1D1D1D"/><path d="M78.61 57.45l13.47-23.27 13.39 7.73v36.23l-26.86 15.5V57.45z" fill="#000"/><path d="M78.61 57.45l13.46-23.27L38.19 3.03 24.73 26.34l53.88 31.11z" fill="#414141"/><path d="M105.51 67.78l23 13.24-49.9 12.62 26.9-15.53V67.78z" fill="gray"/><path d="M1.49 43.44l33.49 23.95v29.58L1.49 77.54v-34.1z" fill="#1D1D1D"/><path d="M60.29 52.74v29.63l-25.31 14.6V67.39l25.31-14.65z" fill="#000"/><path d="M34.98 67.39l25.31-14.65-35.37-25.06L1.49 43.34l33.49 24.05z" fill="#414141"/><path d="M27.24 9.28l51.23 29.56v15.61L27.24 24.89V9.28z" fill="#ED7B00"/><path d="M89.57 34.66L38.33 5.11 27.24 9.28l51.23 29.56 11.1-4.18z" fill="#ED5D00"/><path d="M89.57 34.66l-11.1 19.79v-15.6l11.1-4.19z" fill="#ED3F00"/><path d="M11.14 22.82l21.54 12.56v16.94L11.14 37.37V22.82z" fill="#ED7B00"/><path d="M25.36 14.51L46.9 26.98l-14.22 8.4-21.54-12.56 14.22-8.31z" fill="#ED5D00"/><path d="M46.9 26.98v17.14l-14.22 8.2V35.38l14.22-8.4z" fill="#ED3F00"/></svg>
                                                </span><span class="label">L Shaped Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft_outrigger_dormer" @if(old('which_specific_parts_of_the_property') == 'loft_outrigger_dormer'){{ 'checked' }}@endif id="child_option_specific_parts_loft_outrigger_dormer" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_loft_outrigger_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.86 26.01l53.89 31.11v36.19L24.86 62.2V26.01z" fill="#1D1D1D"/><path d="M78.75 57.12l13.46-23.28 13.39 7.73V77.8L78.75 93.31V57.12z" fill="#000"/><path d="M78.75 57.12l13.46-23.28L38.33 2.69 24.86 26.01l53.89 31.11z" fill="#414141"/><path d="M105.65 67.45l22.99 13.24-49.89 12.62 26.9-15.54V67.45z" fill="gray"/><path d="M1.36 43.77l33.49 23.95v29.59L1.36 77.87v-34.1z" fill="#1D1D1D"/><path d="M60.15 53.08V82.7l-25.3 14.61V67.72l25.3-14.64z" fill="#000"/><path d="M34.85 67.72l25.3-14.64-35.37-25.07L1.36 43.67l33.49 24.05z" fill="#414141"/><path d="M11.28 22.49l21.54 12.55v16.95L11.28 37.04V22.49z" fill="#ED7B00"/><path d="M25.49 14.17l21.54 12.48-14.21 8.39-21.54-12.55 14.21-8.32z" fill="#ED5D00"/><path d="M47.03 26.65v17.13l-14.21 8.21V35.04l14.21-8.39z" fill="#ED3F00"/></svg>
                                                </span><span class="label">Outrigger Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft_main_dormer" @if(old('which_specific_parts_of_the_property') == 'loft_main_dormer'){{ 'checked' }}@endif id="child_option_specific_parts_loft_main_dormer" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_loft_main_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"/><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"/><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"/><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"/><path d="M15.62 10.95l51.23 29.56v15.6L15.62 26.56V10.95z" fill="#ED7B00"/><path d="M77.95 36.33L26.71 6.77l-11.09 4.18 51.23 29.56 11.1-4.18z" fill="#ED5D00"/><path d="M77.95 36.33l-11.1 19.78v-15.6l11.1-4.18z" fill="#ED3F00"/></svg>
                                                </span><span class="label">Main Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft_hip_to_gable_with_no_dormer" @if(old('which_specific_parts_of_the_property') == 'loft_hip_to_gable_with_no_dormer'){{ 'checked' }}@endif id="child_option_specific_parts_loft_hip_to_gable_with_no_dormer" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_loft_hip_to_gable_with_no_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"/><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"/><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"/><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"/><path d="M66.99 59.21l13.47-23.28 13.39 7.73-26.86 15.55z" fill="#ED3F00"/><path d="M66.99 59.21l13.46-23.28-16.03-9.42 2.57 32.7z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Hip To Gable With No Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft_hip_to_gable_with_main_dormer" @if(old('which_specific_parts_of_the_property') == 'loft_hip_to_gable_with_main_dormer'){{ 'checked' }}@endif id="child_option_specific_parts_loft_hip_to_gable_with_main_dormer" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_loft_hip_to_gable_with_main_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"/><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"/><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#ED5D00"/><path d="M66.99 59.12l13.46-23.27L26.57 4.69l-1.61 2.8 42.03 48.62v3.01z" fill="#ED5D00"/><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"/><path d="M15.76 10.95l51.23 29.56v15.6L15.76 26.56V10.95z" fill="#ED7B00"/><path d="M78.09 36.33L26.85 6.77l-11.09 4.18 51.23 29.56 11.1-4.18z" fill="#ED5D00"/><path d="M78.09 36.33l-11.1 19.78v-15.6l11.1-4.18zM67.03 59.12l13.46-23.27 13.39 7.72-26.85 15.55z" fill="#ED3F00"/></svg>
                                                </span><span class="label">Hip To Gable With Main Dormer</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48"><path fill="#ed7b00" d="M0 27.15l24.97 14.194v6.46L0 33.61z"/><path fill="#ed3f00" d="M37.418 34.25v6.483L24.97 47.805V41.34z"/><path fill="#1d1d1d" d="M0 10.64l24.97 14.194V41.34L0 27.147z"/><path d="M24.97 24.831l6.242-10.621 6.206 3.527v16.53L24.97 41.338z"/><path fill="#414141" d="M24.97 24.834l6.238-10.622L6.238 0 0 10.64z"/><path fill="gray" d="M37.436 36.01l10.66 6.04-23.126 5.76 12.466-7.086z"/></svg></span><span class="label">Basement</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="basement_main_house" @if(old('which_specific_parts_of_the_property') == 'basement_main_house'){{ 'checked' }}@endif id="child_option_specific_parts_basement_main_house" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_basement_main_house">
                                                <span class="icon">
                                                    <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.73 62.12l53.89 31.11v14.16L24.73 76.28V62.12z" fill="#ED7B00"/><path d="M105.47 77.68v14.21l-26.85 15.5V93.22l26.85-15.54z" fill="#ED3F00"/><path d="M24.73 25.93l53.89 31.11v36.18L24.73 62.11V25.93z" fill="#1D1D1D"/><path d="M78.62 57.04l13.46-23.28 13.39 7.73v36.23l-26.85 15.5V57.04z" fill="#000"/><path d="M78.62 57.04l13.46-23.28L38.2 2.61 24.73 25.93l53.89 31.11z" fill="#414141"/><path d="M105.52 81.53l22.99 13.24-49.89 12.62 26.9-15.53V81.53z" fill="gray"/><path d="M1.49 43.24l33.49 23.95v29.58L1.49 77.33V43.24z" fill="#1D1D1D"/><path d="M60.28 52.54v29.63l-25.3 14.6V67.19l25.3-14.65z" fill="#000"/><path d="M34.98 67.19l25.3-14.65-35.37-25.07L1.49 43.14l33.49 24.05z" fill="#414141"/></svg>
                                                </span><span class="label">Main House</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="basement_outrigger" @if(old('which_specific_parts_of_the_property') == 'basement_outrigger'){{ 'checked' }}@endif id="child_option_specific_parts_basement_outrigger" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_basement_outrigger">
                                                <span class="icon">
                                                    <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M63.67 80.41v14.21l-25.3 15.03V94.98l25.3-14.57z" fill="#ED3F00"/><path d="M28.12 23.66l53.89 31.11v36.19L28.12 59.85V23.66z" fill="#1D1D1D"/><path d="M82.01 54.77L95.47 31.5l13.39 7.73v36.23l-26.85 15.5V54.77z" fill="#000"/><path d="M82.01 54.77L95.47 31.5 34.8.35l-6.68 23.31 53.89 31.11z" fill="#414141"/><path d="M108.91 64.93l16.21 13.23-43.11 12.62 26.9-15.53V64.93z" fill="gray"/><path d="M4.88 41.48l33.49 23.94v29.59L4.88 75.57V41.48z" fill="#1D1D1D"/><path d="M63.67 50.78v29.63l-25.3 14.6V65.42l25.3-14.64z" fill="#000"/><path d="M38.37 65.43l25.3-14.65L28.3 25.71 4.88 41.38l33.49 24.05z" fill="#414141"/><path d="M38.37 95.01v14.64L4.88 90.24V75.57l33.49 19.44z" fill="#ED7B00"/></svg>
                                                </span><span class="label">Outrigger Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="basement_part_house" @if(old('which_specific_parts_of_the_property') == 'basement_part_house'){{ 'checked' }}@endif id="child_option_specific_parts_basement_part_house" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_basement_part_house">
                                                <span class="icon">
                                                <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 69.21l27.88 16.08v14.16L13.11 83.36V69.21z" fill="#ED7B00"/><path d="M67.84 69.74v14.21l-26.85 15.5V85.28l26.85-15.54z" fill="#ED3F00"/><path d="M13.11 33.01l53.88 31.11v36.19L13.11 69.2V33.01z" fill="#1D1D1D"/><path d="M66.99 64.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V64.12z" fill="#000"/><path d="M66.99 64.12l13.46-23.27L26.57 9.69 13.11 33.01l53.88 31.11z" fill="#414141"/><path d="M93.89 74.45l23 13.24-49.9 12.62 26.9-15.54V74.45z" fill="gray"/></svg>
                                                </span><span class="label">Part House</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="basement_whole_house" @if(old('which_specific_parts_of_the_property') == 'basement_whole_house'){{ 'checked' }}@endif id="child_option_specific_parts_basement_whole_house" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_basement_whole_house">
                                                <span class="icon">
                                                    <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 62.12l53.88 31.11v14.16L13.11 76.28V62.12z" fill="#ED7B00"/><path d="M93.85 77.68v14.21l-26.86 15.5V93.22l26.86-15.54z" fill="#ED3F00"/><path d="M13.11 25.93l53.88 31.11v36.18L13.11 62.11V25.93z" fill="#1D1D1D"/><path d="M66.99 57.04l13.47-23.28 13.39 7.73v36.23l-26.86 15.5V57.04z" fill="#000"/><path d="M66.99 57.04l13.46-23.28L26.57 2.61 13.11 25.93l53.88 31.11z" fill="#414141"/><path d="M93.89 81.53l23 13.24-49.9 12.62 26.9-15.53V81.53z" fill="gray"/></svg>
                                                </span><span class="label">Whole House</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194v16.511L0 27.152z"/><path fill="#9ca6ab" d="M24.58 24.837l6.146-10.617 6.109 3.522v16.535L24.58 41.349z"/><path fill="#414141" d="M24.583 24.834l6.14-10.617L6.142 0 0 10.64z"/><path fill="gray" d="M36.853 29.55l10.494 6.04-22.767 5.76 12.273-7.09z"/><path fill="#ed7b00" d="M17.27 20.59l7.314 4.28v16.47l-7.314-4.28z"/><path fill="#ed3f00" d="M24.58 24.871l6.146-10.621 6.109 3.527V34.27L24.58 41.342z"/><path fill="#ed5d00" d="M24.584 24.88l6.14-10.622-7.313-4.298L17.27 20.6z"/></svg></span><span class="label">Two Storey</span></div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="two_storey_side" @if(old('which_specific_parts_of_the_property') == 'two_storey_side'){{ 'checked' }}@endif id="child_option_specific_parts_two_storey_side" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_two_storey_side">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"/><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"/><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"/><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"/><path d="M50.96 49.83l16.03 9.38v36.1l-16.03-9.38v-36.1z" fill="#ED7B00"/><path d="M66.99 59.21l13.47-23.28 13.39 7.73v36.15l-26.86 15.5v-36.1z" fill="#ED3F00"/><path d="M66.99 59.21l13.46-23.28-16.03-9.42-13.46 23.32 16.03 9.38z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Side</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="two_storey_rear" @if(old('which_specific_parts_of_the_property') == 'two_storey_rear'){{ 'checked' }}@endif id="child_option_specific_parts_two_storey_rear" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_two_storey_rear">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.15 25.69L71.03 56.8v36.18L17.15 61.87V25.69z" fill="#1D1D1D"/><path d="M71.03 56.8L84.5 33.52l13.39 7.73v36.23l-26.86 15.5V56.8z" fill="#000"/><path d="M71.03 56.8L84.5 33.52 30.61 2.37 17.15 25.69 71.03 56.8z" fill="#414141"/><path d="M97.93 67.13l23 13.23-49.9 12.62 26.9-15.53V67.13z" fill="gray"/><path d="M9.07 30.54l53.88 31.11v35.98L9.07 66.52V30.54z" fill="#ED7B00"/><path d="M71.03 57.02v35.96l-8.08 4.65V61.65l8.08-4.63z" fill="#ED3F00"/><path d="M71.03 57.02L48.6 12.77 26.36 20l36.59 41.65 8.08-4.63z" fill="#ED3F00"/><path d="M9.07 30.54L26.36 20l36.59 41.65L9.07 30.54z" fill="#ED5D00"/></svg>
                                                </span><span class="label">Rear</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="59" height="46" viewBox="0 0 59 46"><path fill="#1b1b1b" d="M20.465 18.47v3.892L0 33.992v-3.87z"/><path fill="#ed7b00" d="M.59 27.65l19.742 11.31v6.1L.59 33.782z"/><path fill="#ed5d00" d="M8.765 22.84l19.742 11.278-8.175 4.841L.59 27.65z"/><path fill="#ed3f00" d="M28.515 34.12v6.168l-8.175 4.773v-6.1z"/><path fill="#1d1d1d" d="M20.42 8.75l20.535 11.67v13.574L20.42 22.324z"/><path d="M40.95 20.413l5.13-8.733 5.103 2.902v13.591L40.95 33.986z"/><path fill="#3c3c3c" d="M40.955 30.1v3.892L20.49 45.622v-3.87z"/><path fill="#515151" d="M20.488 41.736v3.887L0 33.99v-3.87z"/><path fill="#414141" d="M40.955 20.417l5.13-8.732L25.55 0l-5.13 8.746z"/><path fill="gray" d="M51.206 24.29l7.457 4.23L20.49 45.623l30.716-17.46z"/></svg></span><span class="label">Garden</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="garden_annex" @if(old('which_specific_parts_of_the_property') == 'garden_annex'){{ 'checked' }}@endif id="child_option_specific_parts_garden_annex" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_garden_annex">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="46" viewBox="0 0 59 46"><path fill="#1b1b1b" d="M20.465 18.47v3.892L0 33.992v-3.87z"></path><path fill="#ed7b00" d="M.59 27.65l19.742 11.31v6.1L.59 33.782z"></path><path fill="#ed5d00" d="M8.765 22.84l19.742 11.278-8.175 4.841L.59 27.65z"></path><path fill="#ed3f00" d="M28.515 34.12v6.168l-8.175 4.773v-6.1z"></path><path fill="#1d1d1d" d="M20.42 8.75l20.535 11.67v13.574L20.42 22.324z"></path><path d="M40.95 20.413l5.13-8.733 5.103 2.902v13.591L40.95 33.986z"></path><path fill="#3c3c3c" d="M40.955 30.1v3.892L20.49 45.622v-3.87z"></path><path fill="#515151" d="M20.488 41.736v3.887L0 33.99v-3.87z"></path><path fill="#414141" d="M40.955 20.417l5.13-8.732L25.55 0l-5.13 8.746z"></path><path fill="gray" d="M51.206 24.29l7.457 4.23L20.49 45.623l30.716-17.46z"></path></svg>
                                                </span><span class="label">Annex</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 field-item field-hast-children checkbox-item center">
                            <label class="parent-option"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="46" viewBox="0 0 55 46"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194V41.34L0 27.147z"/><path d="M24.58 24.831l6.146-10.621 6.109 3.527v16.53L24.58 41.338z"/><path fill="#414141" d="M24.583 24.834l6.145-10.622L6.146 0 0 10.64z"/><path fill="#ed3f00" d="M44.293 33.12v5.425L32.02 45.62V40.2z"/><path fill="#ed5d00" d="M36.849 28.85l7.44 4.266-12.272 7.08-7.437-4.26z"/><path fill="#ed7b00" d="M24.58 35.93l7.437 4.27v5.42l-7.437-4.238z"/><path fill="#ffa200" d="M24.8 40.72l6.917 3.992v.192l-6.917-3.96zM24.8 40.2l6.917 3.997v.191l-6.917-3.96zM24.8 39.68l6.917 3.992v.192l-6.917-3.96zM24.8 39.16l6.917 3.992v.192l-6.917-3.96zM24.8 38.64l6.917 3.997v.191l-6.917-3.96zM24.8 38.12l6.917 3.992v.192l-6.917-3.96zM24.8 37.6l6.917 3.992v.192l-6.917-3.96zM24.8 37.08l6.917 3.997v.191l-6.917-3.96zM24.8 36.57l6.917 3.992v.192l-6.917-3.96z"/><path fill="gray" d="M44.293 33.81l10.494 6.04-22.767 5.76 12.273-7.086z"/></svg></span><span class="label">Garage</span></label>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="garage_conversion" @if(old('which_specific_parts_of_the_property') == 'garage_conversion'){{ 'checked' }}@endif id="child_option_specific_parts_garage_conversion" type="radio" name="which_specific_parts_of_the_property">
                                            <label for="child_option_specific_parts_garage_conversion">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="46" viewBox="0 0 55 46"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194V41.34L0 27.147z"/><path d="M24.58 24.831l6.146-10.621 6.109 3.527v16.53L24.58 41.338z"/><path fill="#414141" d="M24.583 24.834l6.145-10.622L6.146 0 0 10.64z"/><path fill="#ed3f00" d="M44.293 33.12v5.425L32.02 45.62V40.2z"/><path fill="#ed5d00" d="M36.849 28.85l7.44 4.266-12.272 7.08-7.437-4.26z"/><path fill="#ed7b00" d="M24.58 35.93l7.437 4.27v5.42l-7.437-4.238z"/><path fill="#ffa200" d="M24.8 40.72l6.917 3.992v.192l-6.917-3.96zM24.8 40.2l6.917 3.997v.191l-6.917-3.96zM24.8 39.68l6.917 3.992v.192l-6.917-3.96zM24.8 39.16l6.917 3.992v.192l-6.917-3.96zM24.8 38.64l6.917 3.997v.191l-6.917-3.96zM24.8 38.12l6.917 3.992v.192l-6.917-3.96zM24.8 37.6l6.917 3.992v.192l-6.917-3.96zM24.8 37.08l6.917 3.997v.191l-6.917-3.96zM24.8 36.57l6.917 3.992v.192l-6.917-3.96z"/><path fill="gray" d="M44.293 33.81l10.494 6.04-22.767 5.76 12.273-7.086z"/></svg>
                                                </span><span class="label">Conversion</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- How many bedrooms does this property have? --}}
            <div class="field-block ">
                <div class="filed-block-label">
                    How many bedrooms does this property have?
                    <div class="filed-block-subtitle">This will give us an idea of the property's size.</div>
                </div>
                <div class="inputs">
                    <div class="row">
                        <div class="col field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="1" @if(old('how_many_bedrooms_does_this_property_have') == '1'){{ 'checked' }}@endif id="how_many_bedrooms_does_this_property_have_1" type="radio" name="how_many_bedrooms_does_this_property_have">
                            <label for="how_many_bedrooms_does_this_property_have_1"><span class="label">1</span></label>
                        </div>
                        <div class="col field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="2" @if(old('how_many_bedrooms_does_this_property_have') == '2'){{ 'checked' }}@endif  id="how_many_bedrooms_does_this_property_have_2" type="radio" name="how_many_bedrooms_does_this_property_have">
                            <label for="how_many_bedrooms_does_this_property_have_2"><span class="label">2</span></label>
                        </div>
                        <div class="col field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="3" @if(old('how_many_bedrooms_does_this_property_have') == '3'){{ 'checked' }}@endif  id="how_many_bedrooms_does_this_property_have_3" type="radio" name="how_many_bedrooms_does_this_property_have">
                            <label for="how_many_bedrooms_does_this_property_have_3"><span class="label">3</span></label>
                        </div>
                        <div class="col field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="4" @if(old('how_many_bedrooms_does_this_property_have') == '4'){{ 'checked' }}@endif  id="how_many_bedrooms_does_this_property_have_4" type="radio" name="how_many_bedrooms_does_this_property_have">
                            <label for="how_many_bedrooms_does_this_property_have_4"><span class="label">4</span></label>
                        </div>
                        <div class="col field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="5" @if(old('how_many_bedrooms_does_this_property_have') == '5'){{ 'checked' }}@endif  id="how_many_bedrooms_does_this_property_have_5" type="radio" name="how_many_bedrooms_does_this_property_have">
                            <label for="how_many_bedrooms_does_this_property_have_5"><span class="label">5</span></label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- When are you hoping to select an architect? --}}
            <div class="field-block ">
                <div class="filed-block-label">When are you hoping to select an architect?</div>
                <div class="inputs">
                    <div class="row">
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="asap" @if(old('When_are_you_hoping_to_select_an_architect') == 'asap'){{ 'checked' }}@endif id="When_are_you_hoping_to_select_an_architect_1" type="radio" name="When_are_you_hoping_to_select_an_architect">
                            <label for="When_are_you_hoping_to_select_an_architect_1"><span class="label">ASAP</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="3-months" @if(old('When_are_you_hoping_to_select_an_architect') == '3-months'){{ 'checked' }}@endif id="When_are_you_hoping_to_select_an_architect_2" type="radio" name="When_are_you_hoping_to_select_an_architect">
                            <label for="When_are_you_hoping_to_select_an_architect_2"><span class="label">3 Months</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="6-months" @if(old('When_are_you_hoping_to_select_an_architect') == '6-months'){{ 'checked' }}@endif id="When_are_you_hoping_to_select_an_architect_3" type="radio" name="When_are_you_hoping_to_select_an_architect">
                            <label for="When_are_you_hoping_to_select_an_architect_3"><span class="label">6 Months</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="12-months" @if(old('When_are_you_hoping_to_select_an_architect') == '12-months'){{ 'checked' }}@endif id="When_are_you_hoping_to_select_an_architect_4" type="radio" name="When_are_you_hoping_to_select_an_architect">
                            <label for="When_are_you_hoping_to_select_an_architect_4"><span class="label">12-months</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="plus-18-month" @if(old('When_are_you_hoping_to_select_an_architect') == 'plus-18-month'){{ 'checked' }}@endif id="When_are_you_hoping_to_select_an_architect_5" type="radio" name="When_are_you_hoping_to_select_an_architect">
                            <label for="When_are_you_hoping_to_select_an_architect_5"><span class="label">18 Months +</span></label>
                        </div>
                        <div class="col-4 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="i-m-not-sure" @if(old('When_are_you_hoping_to_select_an_architect') == 'i-m-not-sure'){{ 'checked' }}@endif id="When_are_you_hoping_to_select_an_architect_6" type="radio" name="When_are_you_hoping_to_select_an_architect">
                            <label for="When_are_you_hoping_to_select_an_architect_6"><span class="label">I'm not sure</span></label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- When are you hoping to select an architect? --}}
            <div class="field-block ">
                <div class="filed-block-label">Would you like to add Building Regulation drawings?
                    <div class="filed-block-subtitle">All quotes include planning drawings but you can optionally add technical drawings that will be used by your Contractor and Building Control Inspector..</div>
                </div>
                <div class="inputs">
                    <div class="row">
                        <div class="col-6 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="planning_only" @if(old('Would_you_like_to_add_Building_Regulation_drawings') == 'planning_only'){{ 'checked' }}@endif id="Would_you_like_to_add_Building_Regulation_drawings_1" type="radio" name="Would_you_like_to_add_Building_Regulation_drawings">
                            <label for="Would_you_like_to_add_Building_Regulation_drawings_1"><span class="label">Planning Only</span></label>
                        </div>
                        <div class="col-6 field-item checkbox-item center">
                            <input class="required-field" onchange="RequiredCheckbox(this)" required value="planning_and_building_regulations" @if(old('Would_you_like_to_add_Building_Regulation_drawings') == 'planning_and_building_regulations'){{ 'checked' }}@endif id="Would_you_like_to_add_Building_Regulation_drawings_2" type="radio" name="Would_you_like_to_add_Building_Regulation_drawings">
                            <label for="Would_you_like_to_add_Building_Regulation_drawings_2"><span class="label">Planning & Building Regulations</span></label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- A few details about you... --}}
            <div class="field-block ">
                <div class="filed-block-label">A few details about you...</div>
                <div class="inputs">
                    <div class="row">
                        @if(!auth()->check())
                            <div class="col-6 field-item text-field">
                                <div class="row g-0">
                                    <input value="{{ old('first_name') }}" id="first-name" class="col-12 order-1 text-uppercase" type="text" name="first_name" required>
                                    <label for="first-name" class="col-12 order-0">First name</label>
                                </div>
                            </div>
                            <div class="col-6 field-item text-field">
                                <div class="row g-0">
                                    <input value="{{ old('last_name') }}" id="last-name" class="col-12 order-1 text-uppercase" type="text" name="last_name" required>
                                    <label for="last-name" class="col-12 order-0">Last name</label>
                                </div>
                            </div>
                        @endif
                        <div class="col-6 field-item text-field">
                            <div class="row g-0">
                                <input value="{{ old('address') }}" id="address" class="col-12 order-1" type="text" name="address" required>
                                <label for="address" class="col-12 order-0">1st line of address</label>
                            </div>
                        </div>
                        <div class="col-6 field-item text-field">
                            <div class="row g-0">
                                <input value="{{ old('postcode') }}" id="postcode" class="col-12 order-1" type="text" name="postcode" required>
                                <label for="postcode" class="col-12 order-0">Project postcode</label>
                            </div>
                        </div>
                        @if(!auth()->check())
                            <div class="col-6 field-item text-field">
                                <div class="row g-0">
                                    <input value="{{ old('email') }}" id="email" class="col-12 order-1" type="email" name="email" required>
                                    <label for="email" class="col-12 order-0">Email</label>
                                    @error('email')
                                    <span class="col-12 order-2 error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 field-item text-field">
                                <div class="row g-0">
                                    <input value="{{ old('phone') }}" id="phone" class="col-12 order-1" type="text" name="phone" required>
                                    <label for="phone" class="col-12 order-0">Phone</label>
                                    @error('phone')
                                    <span class="col-12 order-2 error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 field-item text-field">
                                <div class="row g-0">
                                    <input value="{{ old('password') }}" id="password" class="col-12 order-1" type="password" name="password" required>
                                    <label for="password" class="col-12 order-0">Password</label>
                                    @error('password')
                                    <span class="col-12 order-2 error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 field-item text-field">
                                <div class="row g-0">
                                    <input value="{{ old('password_confirmation') }}" id="password_confirmation" class="col-12 order-1" type="password" name="password_confirmation" required>
                                    <label for="password_confirmation" class="col-12 order-0">Confirm Password</label>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="submit-form center">
                <input type="submit" class="submit-btn" value="Reveal Estimate">
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <script>
        $('.child-option input:checked').parent().parent().parent().parent().parent().addClass('selected-option');

        function CheckBoxChild(element) {
            $('.selected-option').removeClass('selected-option');
            $(element).parent().parent().parent().parent().parent().addClass('selected-option');
            $('.child-option').removeClass('show-children');
        }

        $(window).click(function () {
            $('.child-option').removeClass('show-children');
        });

        $('.field-hast-children').click(function (event) {
            $('.child-option').removeClass('show-children');
            event.stopPropagation();
            $(this).find('.child-option').addClass('show-children');
        });
    </script>

    {{-- Check Box Required --}}
    <script type="text/javascript">
        function RequiredCheckbox(element) {
            const checkboxes = $(element).parent().parent().parent().parent().find('input');
            console.log($(element).parent().parent().parent().parent().find('input:checked'));

            if ($(element).parent().parent().parent().parent().find('input:checked').length > 0) {
                checkboxes.removeAttr('required');
            } else {
                checkboxes.attr('required', 'required');
            }
        }
    </script>

@endsection
