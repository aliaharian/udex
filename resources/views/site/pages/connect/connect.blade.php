@extends('layouts.site.pages-master')

@section('page-title', 'Connect')

@section('content')
    <div class="container container-padding">
        <div class="page-info">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="page-icon">
                        <svg width="133" height="112" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M126.298 68.254l-30.902.769a47.4 47.4 0 00-1.172-16.156h32.074v15.387zm-7.441 23.052H87.209a47.358 47.358 0 007.027-15.57l24.621-.612v16.184-.002zM59.485 6.684l66.281.08v15.518H70.32A47.663 47.663 0 0059.485 18.1V6.684zm58.754 39.5h-26.22a47.853 47.853 0 00-12.18-17.22h38.397v17.22h.003zm10.787 0h-4.087v-17.22h2.791c2.612 0 4.738-2.12 4.738-4.723V4.808a4.734 4.734 0 00-4.732-4.725L57.528 0h-.006a4.728 4.728 0 00-4.74 4.724v12.192a48.09 48.09 0 00-4.967-.258C21.45 16.658 0 38.042 0 64.328 0 90.615 21.45 112 47.815 112c13.199 0 25.165-5.36 33.826-14.01h39.068c2.676 0 4.85-2.169 4.85-4.836V74.957l3.568-.09a3.974 3.974 0 002.754-1.191 3.917 3.917 0 001.119-2.77V50.144a3.947 3.947 0 00-1.163-2.796 4 4 0 00-2.811-1.164z" fill="#000"/>
                        </svg>
                    </div>
                </div>
                <div class="col">
                    <div class="heading-title">Let's estimate the<br>
                        <span class="base-color text-color text-capitalize">construction costs!</span>
                    </div>
                    <div class="heading-desc">Answer a few quick questions below and we'll estimate the costs involved from our extensive experience working with projects like yours</div>
                </div>
            </div>
        </div>

        <div class="form-block">
            {!! Form::open(['route'=>'connect.store']) !!}
            <div class="form-heading">
                <div class="heading-title">Construction cost estimator</div>
                <div class="heading-desc">The three main factors are extension type, the size and your location</div>
            </div>

            {{-- What type of property is this? --}}
            <div class="field-block ">
                <div class="filed-block-label">
                    What type of property is this?
                    <div class="filed-block-subtitle">Select a part of your house to choose an extension type</div>
                </div>
                <div class="inputs">
                    <div class="row">
                        <div class="col field-item checkbox-item field-hast-children center">
                            <div class="parent-option">
                                <span class="icon"><svg width="49" height="42" viewBox="0 0 49 42" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.943 10.64l24.555 14.194v16.511L.943 27.151V10.64z" fill="#1D1D1D"/><path d="M25.498 24.834l6.139-10.617 6.102 3.522v16.534l-12.241 7.072V24.834z" fill="#000"/><path d="M25.498 24.834l6.134-10.617L7.077 0 .943 10.64l24.555 14.194z" fill="#000"/><path d="M37.757 29.547l10.482 6.04-22.741 5.758 12.26-7.09v-4.709z" fill="gray"/><path d="M2.088 2.856l23.347 13.487v7.117L2.088 9.978V2.856z" fill="#ED7B00"/><path d="M30.494 14.436L7.142.949 2.088 2.856l23.347 13.487 5.059-1.907z" fill="#ED5D00"/><path d="M30.492 14.436l-5.058 9.024v-7.117l5.058-1.907z" fill="#ED3F00"/></svg></span><span class="label">Loft</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft mansard_roof" @if(old('what_type_of_property_is_this') == 'loft_mansard_roof'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_mansard_roof" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_mansard_roof">
                                                <span class="icon">
                                                    <svg width="252" height="252" viewBox="0 0 252 252" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.782 156.389l128.35 72.894V144.49L4.782 71.593v84.796z" fill="#1D1D1D"/><path fill-rule="evenodd" clip-rule="evenodd" d="M133.133 144.489v84.796l63.966-36.324v-84.897l-63.966 36.425z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.348 36.344L4.782 71.594l128.35 72.896 6.601-47.548L26.347 36.344z" fill="#ED7B00"/><path fill-rule="evenodd" clip-rule="evenodd" d="M197.206 192.887l-64.073 36.397 118.85-29.574-54.777-31.016v24.193z" fill="gray"/><path fill-rule="evenodd" clip-rule="evenodd" d="M133.133 144.493l6.6-47.547 43.68-21.01 13.686 32.132-63.966 36.425z" fill="#ED3F00"/><path fill-rule="evenodd" clip-rule="evenodd" d="M139.733 96.944l43.681-21.01L68.958 22.88l-42.61 13.467 113.385 60.598z" fill="#ED5D00"/></svg>
                                                </span> <span class="label">Mansard Roof</span> </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required value="loft l_shaped_dormer" @if(old('what_type_of_property_is_this') == 'loft_l_shaped_dormer'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_l_shaped_dormer" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_l_shaped_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.73 26.34l53.88 31.11v36.19L24.73 62.53V26.34z" fill="#1D1D1D"></path><path d="M78.61 57.45l13.47-23.27 13.39 7.73v36.23l-26.86 15.5V57.45z" fill="#000"></path><path d="M78.61 57.45l13.46-23.27L38.19 3.03 24.73 26.34l53.88 31.11z" fill="#414141"></path><path d="M105.51 67.78l23 13.24-49.9 12.62 26.9-15.53V67.78z" fill="gray"></path><path d="M1.49 43.44l33.49 23.95v29.58L1.49 77.54v-34.1z" fill="#1D1D1D"></path><path d="M60.29 52.74v29.63l-25.31 14.6V67.39l25.31-14.65z" fill="#000"></path><path d="M34.98 67.39l25.31-14.65-35.37-25.06L1.49 43.34l33.49 24.05z" fill="#414141"></path><path d="M27.24 9.28l51.23 29.56v15.61L27.24 24.89V9.28z" fill="#ED7B00"></path><path d="M89.57 34.66L38.33 5.11 27.24 9.28l51.23 29.56 11.1-4.18z" fill="#ED5D00"></path><path d="M89.57 34.66l-11.1 19.79v-15.6l11.1-4.19z" fill="#ED3F00"></path><path d="M11.14 22.82l21.54 12.56v16.94L11.14 37.37V22.82z" fill="#ED7B00"></path><path d="M25.36 14.51L46.9 26.98l-14.22 8.4-21.54-12.56 14.22-8.31z" fill="#ED5D00"></path><path d="M46.9 26.98v17.14l-14.22 8.2V35.38l14.22-8.4z" fill="#ED3F00"></path></svg>
                                                </span><span class="label">L Shaped Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="loft outrigger_dormer" @if(old('what_type_of_property_is_this') == 'loft_l_shaped_dormer'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_outrigger_dormer" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_outrigger_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.86 26.01l53.89 31.11v36.19L24.86 62.2V26.01z" fill="#1D1D1D"></path><path d="M78.75 57.12l13.46-23.28 13.39 7.73V77.8L78.75 93.31V57.12z" fill="#000"></path><path d="M78.75 57.12l13.46-23.28L38.33 2.69 24.86 26.01l53.89 31.11z" fill="#414141"></path><path d="M105.65 67.45l22.99 13.24-49.89 12.62 26.9-15.54V67.45z" fill="gray"></path><path d="M1.36 43.77l33.49 23.95v29.59L1.36 77.87v-34.1z" fill="#1D1D1D"></path><path d="M60.15 53.08V82.7l-25.3 14.61V67.72l25.3-14.64z" fill="#000"></path><path d="M34.85 67.72l25.3-14.64-35.37-25.07L1.36 43.67l33.49 24.05z" fill="#414141"></path><path d="M11.28 22.49l21.54 12.55v16.95L11.28 37.04V22.49z" fill="#ED7B00"></path><path d="M25.49 14.17l21.54 12.48-14.21 8.39-21.54-12.55 14.21-8.32z" fill="#ED5D00"></path><path d="M47.03 26.65v17.13l-14.21 8.21V35.04l14.21-8.39z" fill="#ED3F00"></path></svg>
                                                </span><span class="label">Outrigger Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="loft main_dormer" @if(old('what_type_of_property_is_this') == 'loft_main_dormer'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_main_dormer" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_main_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"></path><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"></path><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"></path><path d="M15.62 10.95l51.23 29.56v15.6L15.62 26.56V10.95z" fill="#ED7B00"></path><path d="M77.95 36.33L26.71 6.77l-11.09 4.18 51.23 29.56 11.1-4.18z" fill="#ED5D00"></path><path d="M77.95 36.33l-11.1 19.78v-15.6l11.1-4.18z" fill="#ED3F00"></path></svg>
                                                </span><span class="label">Main Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="loft hip_to_gable_with_no_dormer" @if(old('what_type_of_property_is_this') == 'loft_hip_to_gable_with_no_dormer'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_hip_to_gable_with_no_dormer" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_hip_to_gable_with_no_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"></path><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"></path><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"></path><path d="M66.99 59.21l13.47-23.28 13.39 7.73-26.86 15.55z" fill="#ED3F00"></path><path d="M66.99 59.21l13.46-23.28-16.03-9.42 2.57 32.7z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Hip To Gable With No Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="loft hip_to_gable_with_main_dormer" @if(old('what_type_of_property_is_this') == 'loft_hip_to_gable_with_main_dormer'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_hip_to_gable_with_main_dormer" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_hip_to_gable_with_main_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"></path><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#ED5D00"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69l-1.61 2.8 42.03 48.62v3.01z" fill="#ED5D00"></path><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"></path><path d="M15.76 10.95l51.23 29.56v15.6L15.76 26.56V10.95z" fill="#ED7B00"></path><path d="M78.09 36.33L26.85 6.77l-11.09 4.18 51.23 29.56 11.1-4.18z" fill="#ED5D00"></path><path d="M78.09 36.33l-11.1 19.78v-15.6l11.1-4.18zM67.03 59.12l13.46-23.27 13.39 7.72-26.85 15.55z" fill="#ED3F00"></path></svg>
                                                </span><span class="label">Hip To Gable With Main Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="loft no_dormer" @if(old('what_type_of_property_is_this') == 'loft_no_dormer'){{ 'checked' }}@endif id="what_type_of_property_is_this_loft_no_dormer" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_loft_no_dormer">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"></path><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"></path><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"></path><path d="M66.99 59.21l13.47-23.28 13.39 7.73-26.86 15.55z" fill="#ED3F00"></path><path d="M66.99 59.21l13.46-23.28-16.03-9.42 2.57 32.7z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">No Dormer</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="46" viewBox="0 0 57 46"><path fill="gray" d="M43.669 27.66l12.99 7.478L24.99 45.623l18.679-10.8z"></path><path fill="#1d1d1d" d="M6.21 10.82l24.998 14.431v16.79L6.21 27.61z"></path><path d="M31.21 25.245l6.246-10.795 6.214 3.586v16.808l-12.46 7.19z"></path><path fill="#ed3f00" d="M31.2 34.36v7.683l-6.21 3.582V37.95z"></path><path fill="#ed5d00" d="M6.21 19.98l24.988 14.38-6.21 3.587L0 23.567z"></path><path fill="#ed7b00" d="M0 23.57l24.989 14.386v7.674L0 31.276z"></path><path fill="#414141" d="M31.208 25.249l6.246-10.795L12.456 0 6.21 10.818z"></path></svg></span><span class="label">Ground</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="ground side_infill" id="what_type_of_property_is_this_ground_side_infill" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_ground_side_infill">
                                                <span class="icon">
                                                    <svg width="134" height="100" viewBox="0 0 134 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.36 21.97l50.77 29.31v34.09L25.36 56.06V21.97z" fill="#1D1D1D"></path><path d="M76.13 51.28l12.68-21.93 12.62 7.28v34.14l-25.3 14.6V51.28z" fill="#000"></path><path d="M76.13 51.28l12.68-21.93L38.05 0 25.36 21.97l50.77 29.31z" fill="#414141"></path><path d="M1.94 37.73l33.49 23.95v29.59L1.94 71.83v-34.1z" fill="#1D1D1D"></path><path d="M60.73 47.03v29.63l-25.3 14.61V61.68l25.3-14.65z" fill="#000"></path><path d="M35.43 61.68l25.3-14.65-35.37-25.06L1.94 37.63l33.49 24.05z" fill="#414141"></path><path d="M76.13 69.78v15.6L50.79 100V84.4l25.34-14.62z" fill="#ED3F00"></path><path d="M60.77 60.96l15.36 8.82L50.79 84.4l-15.37-8.81 25.35-14.63z" fill="#ED5D00"></path><path d="M35.42 75.58l15.37 8.82V100l-15.37-8.75V75.58z" fill="#ED7B00"></path><path d="M101.47 60.96l32.26 18.57L50.79 100l50.68-29.31v-9.73z" fill="gray"></path></svg>
                                                </span><span class="label">Side Infill</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="ground side" id="what_type_of_property_is_this_ground_side" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_ground_side">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.96 23.32l53.88 31.11v36.18L4.96 59.5V23.32z" fill="#1D1D1D"></path><path d="M58.84 54.43l13.47-23.28 13.39 7.73v36.23l-26.86 15.5V54.43z" fill="#000"></path><path d="M58.84 54.43l13.47-23.28L18.43 0 4.96 23.32l53.88 31.11z" fill="#414141"></path><path d="M102.04 67.92v16.57L75.14 100V83.44l26.9-15.52z" fill="#ED3F00"></path><path d="M85.73 58.56l16.31 9.36-26.9 15.52-16.3-9.35 26.89-15.53z" fill="#ED5D00"></path><path d="M58.84 74.08l16.3 9.36V100l-16.3-9.29V74.08z" fill="#ED7B00"></path><path d="M102.04 74.11l23 13.24-49.9 12.62 26.9-15.53V74.11z" fill="gray"></path></svg>
                                                </span><span class="label">Side</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="ground side_and_rear" id="what_type_of_property_is_this_ground_side_and_rear" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_ground_side_and_rear">
                                                <span class="icon">
                                                    <svg width="139" height="100" viewBox="0 0 139 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M74.54 93.69l-18.68 4.72 13.42-7.74 5.26 3.02z" fill="gray"></path><path d="M15.39 23.32l53.88 31.11v36.18L15.39 59.5V23.32z" fill="#1D1D1D"></path><path d="M69.27 54.43l13.46-23.28 13.4 7.73v36.23l-26.86 15.5V54.43z" fill="#000"></path><path d="M69.25 74.07v16.55l-13.39 7.72V81.8l13.39-7.73z" fill="#ED3F00"></path><path d="M15.39 43.07l53.86 31-13.39 7.73L2 50.8l13.39-7.73z" fill="#ED5D00"></path><path d="M2 50.79L55.86 81.8v16.54L2 67.41V50.79z" fill="#ED7B00"></path><path d="M69.27 54.43l13.46-23.28L28.85 0 15.39 23.32l53.88 31.11z" fill="#414141"></path><path d="M112.47 67.92v16.57L85.57 100V83.44l26.9-15.52z" fill="#ED3F00"></path><path d="M96.16 58.56l16.31 9.36-26.9 15.52-16.31-9.35 26.9-15.53z" fill="#ED5D00"></path><path d="M69.26 74.08l16.31 9.36V100l-16.31-9.29V74.08z" fill="#ED7B00"></path><path d="M112.47 74.11l22.99 13.24-49.89 12.62 26.9-15.53V74.11z" fill="gray"></path></svg>
                                                </span><span class="label">Side And Rear</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="ground rear" id="what_type_of_property_is_this_ground_rear" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_ground_rear">
                                                <span class="icon">
                                                    <svg width="187" height="150" viewBox="0 0 187 150" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M143.567 90.945l42.704 24.585L82.157 150l61.41-35.505v-23.55z" fill="gray"></path><path d="M20.415 35.565L102.6 83.01v55.2L20.415 90.765v-55.2z" fill="#1D1D1D"></path><path d="M102.598 83.01l20.535-35.49 20.43 11.79v55.26l-40.965 23.64v-55.2z" fill="#000"></path><path d="M102.572 112.965v25.26L82.157 150v-25.23l20.415-11.805z" fill="#ED3F00"></path><path d="M20.415 65.7l82.155 47.28-20.415 11.79L0 77.49 20.415 65.7z" fill="#ED5D00"></path><path d="M0 77.475l82.155 47.295V150L0 102.81V77.475z" fill="#ED7B00"></path><path d="M102.6 83.01l20.535-35.49L40.95 0 20.415 35.565 102.6 83.01z" fill="#414141"></path></svg>
                                                </span><span class="label">Rear</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="ground wraparound" id="what_type_of_property_is_this_ground_wraparound" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_ground_wraparound">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.91 21.65l50.02 28.88v33.6L13.91 55.24V21.65z" fill="#1D1D1D"></path><path d="M63.93 50.53l12.5-21.61 12.43 7.18v33.63l-24.93 14.4v-33.6z" fill="#000"></path><path d="M1.48 47.15l65.16 37.49V100L1.48 62.58V47.15z" fill="#ED7B00"></path><path d="M63.93 50.53l12.5-21.61L26.4 0 13.91 21.65l50.02 28.88z" fill="#414141"></path><path d="M104.03 63.06v15.38L66.64 100V84.63l37.39-21.57z" fill="#ED3F00"></path><path d="M88.89 54.37l15.14 8.69-24.97 14.41-15.14-8.68 24.97-14.42z" fill="#ED5D00"></path><path d="M104.03 68.81l24.49 14.09L66.64 100l37.39-21.61v-9.58z" fill="gray"></path><path d="M13.91 39.99l65.15 37.48-12.43 7.17L1.48 47.17l12.43-7.18z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Wraparound</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194v16.511L0 27.152z"></path><path d="M24.58 24.837l6.146-10.617 6.109 3.522v16.535L24.58 41.349z"></path><path fill="#414141" d="M24.583 24.834l6.14-10.617L6.142 0 0 10.64z"></path><path fill="gray" d="M36.853 29.55l10.494 6.04-22.767 5.76 12.273-7.09z"></path><path fill="#ed7b00" d="M17.27 20.59l7.314 4.28v7.792l-7.314-4.28z"></path><path fill="#ed3f00" d="M24.58 24.871l6.146-10.621 6.109 3.527v7.815L24.58 32.664z"></path><path fill="#ed5d00" d="M24.584 24.88l6.14-10.622-7.313-4.298L17.27 20.6z"></path></svg>
                                </span><span class="label">First</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="first rear_over_outrigger" id="what_type_of_property_is_this_first_rear_over_outrigger" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_first_rear_over_outrigger">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.6 26.81l53.89 31.11v36.19L25.6 63V26.81z" fill="#1D1D1D"></path><path d="M79.49 57.92l13.46-23.28 13.39 7.73V78.6L79.49 94.11V57.92z" fill="#000"></path><path d="M79.49 57.92l13.46-23.28L39.07 3.49 25.6 26.81l53.89 31.11z" fill="#414141"></path><path d="M106.39 68.25l22.99 13.23-49.89 12.63 26.9-15.54V68.25z" fill="gray"></path><path d="M.62 54.94l33.49 23.94v17.63L.62 77.07V54.94z" fill="#1D1D1D"></path><path d="M59.41 64.02V81.9l-25.3 14.61V78.67l25.3-14.65z" fill="#000"></path><path d="M34.11 79l25.3-14.65-35.37-25.06L.62 54.95 34.11 79z" fill="#414141"></path><path d="M10.98 35.4l39.8 20.99-.24 13.34-39.56-21.66V35.4z" fill="#ED7B00"></path><path d="M59.41 46.35v18.39l-8.87 4.99.24-13.34 8.63-10.04z" fill="#ED3F00"></path><path d="M50.78 56.39l8.63-10.04L25.6 26.81 10.98 35.4l39.8 20.99z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Rear Over Outrigger</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="first rear_over_ground_floor" id="what_type_of_property_is_this_first_rear_over_ground_floor" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_first_rear_over_ground_floor">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.86 26.01l53.89 31.11v36.19L24.86 62.2V26.01z" fill="#1D1D1D"></path><path d="M78.75 57.12l13.46-23.28 13.39 7.73V77.8L78.75 93.31V57.12z" fill="#000"></path><path d="M78.75 57.12l13.46-23.28L38.33 2.69 24.86 26.01l53.89 31.11z" fill="#414141"></path><path d="M105.65 67.45l22.99 13.24-49.89 12.62 26.9-15.54V67.45z" fill="gray"></path><path d="M1.36 43.77l33.49 23.95v29.59L1.36 77.87v-34.1z" fill="#1D1D1D"></path><path d="M60.15 53.08V82.7l-25.3 14.61V67.72l25.3-14.64z" fill="#000"></path><path d="M34.85 67.72l25.3-14.64-35.37-25.07L1.36 43.67l33.49 24.05z" fill="#414141"></path><path d="M1.36 43.77l33.49 23.95v11.05L1.36 59.33V43.77z" fill="#ED7B00"></path><path d="M46.27 61.26v11.08l-11.42 6.43V67.72l11.42-6.46z" fill="#ED3F00"></path><path d="M34.85 67.72l11.42-6.61-34.48-24.44-10.43 7 33.49 24.05z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Rear Over Ground Floor</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="first side" id="what_type_of_property_is_this_first_side" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_first_side">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"></path><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"></path><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"></path><path d="M50.96 49.83l16.03 9.38v36.1l-16.03-9.38v-36.1z" fill="#ED7B00"></path><path d="M66.99 59.21l13.47-23.28 13.39 7.73v36.15l-26.86 15.5v-36.1z" fill="#ED3F00"></path><path d="M66.99 59.21l13.46-23.28-16.03-9.42-13.46 23.32 16.03 9.38z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Side</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="first side_and_rear" id="what_type_of_property_is_this_first_side_and_rear" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_first_side_and_rear">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.22 28.01L74.1 59.12v36.19L20.22 64.2V28.01z" fill="#1D1D1D"></path><path d="M74.1 59.12l13.46-23.27 13.39 7.72v36.24L74.1 95.31V59.12z" fill="#000"></path><path d="M74.1 59.12l13.46-23.27L33.68 4.69 20.22 28.01 74.1 59.12z" fill="#414141"></path><path d="M101 69.45l23 13.24-49.9 12.62L101 79.77V69.45zM47.48 79.94l-19.94 5.04 14.22-8.33 5.72 3.29z" fill="gray"></path><path d="M58.07 49.83l16.03 9.38v17.08l-16.03-9.38V49.83z" fill="#ED7B00"></path><path d="M74.1 59.21l13.46-23.28 13.39 7.73v17.13L74.1 76.29V59.21z" fill="#ED3F00"></path><path d="M74.1 59.21l13.46-23.28-16.03-9.42-13.46 23.32 16.03 9.38z" fill="#ED5D00"></path><path d="M6 53.23L27.54 65.7v19.16L6 72.39V53.23z" fill="#1D1D1D"></path><path d="M20.22 44.92l21.54 12.55-14.22 8.32L6 53.23l14.22-8.31z" fill="#1D1D1D"></path><path d="M41.76 57.47v19.18l-14.22 8.21V65.7l14.22-8.23z" fill="#000"></path><path d="M6 36.29l21.54 12.55v16.95L6 53.32V36.29z" fill="#ED7B00"></path><path d="M20.22 27.97l21.54 12.48-14.22 8.39L6 36.29l14.22-8.32z" fill="#ED5D00"></path><path d="M41.76 40.45v17.13l-14.22 8.21V48.84l14.22-8.39z" fill="#ED3F00"></path></svg>
                                                </span><span class="label">Side And Rear</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="first rear" id="what_type_of_property_is_this_first_rear" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_first_rear">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.22 28.01L74.1 59.12v36.19L20.22 64.2V28.01z" fill="#1D1D1D"></path><path d="M74.1 59.12l13.46-23.27 13.39 7.72v36.24L74.1 95.31V59.12z" fill="#000"></path><path d="M74.1 59.12l13.46-23.27L33.68 4.69 20.22 28.01 74.1 59.12z" fill="#414141"></path><path d="M101 69.45l23 13.24-49.9 12.62L101 79.77V69.45zM47.48 79.94l-19.94 5.04 14.22-8.33 5.72 3.29z" fill="gray"></path><path d="M6 53.23L27.54 65.7v19.16L6 72.39V53.23z" fill="#1D1D1D"></path><path d="M20.22 44.92l21.54 12.55-14.22 8.32L6 53.23l14.22-8.31z" fill="#1D1D1D"></path><path d="M41.76 57.47v19.18l-14.22 8.21V65.7l14.22-8.23z" fill="#000"></path><path d="M6 36.29l21.54 12.55v16.95L6 53.32V36.29z" fill="#ED7B00"></path><path d="M20.22 27.97l21.54 12.48-14.22 8.39L6 36.29l14.22-8.32z" fill="#ED5D00"></path><path d="M41.76 40.45v17.13l-14.22 8.21V48.84l14.22-8.39z" fill="#ED3F00"></path></svg>
                                                </span><span class="label">Rear</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48"><path fill="#ed7b00" d="M0 27.15l24.97 14.194v6.46L0 33.61z"></path><path fill="#ed3f00" d="M37.418 34.25v6.483L24.97 47.805V41.34z"></path><path fill="#1d1d1d" d="M0 10.64l24.97 14.194V41.34L0 27.147z"></path><path d="M24.97 24.831l6.242-10.621 6.206 3.527v16.53L24.97 41.338z"></path><path fill="#414141" d="M24.97 24.834l6.238-10.622L6.238 0 0 10.64z"></path><path fill="gray" d="M37.436 36.01l10.66 6.04-23.126 5.76 12.466-7.086z"></path></svg></span><span class="label">Basement</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="basement main_house" id="what_type_of_property_is_this_basement_main_house" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_basement_main_house">
                                                <span class="icon">
                                                    <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.73 62.12l53.89 31.11v14.16L24.73 76.28V62.12z" fill="#ED7B00"></path><path d="M105.47 77.68v14.21l-26.85 15.5V93.22l26.85-15.54z" fill="#ED3F00"></path><path d="M24.73 25.93l53.89 31.11v36.18L24.73 62.11V25.93z" fill="#1D1D1D"></path><path d="M78.62 57.04l13.46-23.28 13.39 7.73v36.23l-26.85 15.5V57.04z" fill="#000"></path><path d="M78.62 57.04l13.46-23.28L38.2 2.61 24.73 25.93l53.89 31.11z" fill="#414141"></path><path d="M105.52 81.53l22.99 13.24-49.89 12.62 26.9-15.53V81.53z" fill="gray"></path><path d="M1.49 43.24l33.49 23.95v29.58L1.49 77.33V43.24z" fill="#1D1D1D"></path><path d="M60.28 52.54v29.63l-25.3 14.6V67.19l25.3-14.65z" fill="#000"></path><path d="M34.98 67.19l25.3-14.65-35.37-25.07L1.49 43.14l33.49 24.05z" fill="#414141"></path></svg>
                                                </span><span class="label">Main House</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="basement outrigger" id="what_type_of_property_is_this_basement_outrigger" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_basement_outrigger">
                                                <span class="icon">
                                                    <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M63.67 80.41v14.21l-25.3 15.03V94.98l25.3-14.57z" fill="#ED3F00"></path><path d="M28.12 23.66l53.89 31.11v36.19L28.12 59.85V23.66z" fill="#1D1D1D"></path><path d="M82.01 54.77L95.47 31.5l13.39 7.73v36.23l-26.85 15.5V54.77z" fill="#000"></path><path d="M82.01 54.77L95.47 31.5 34.8.35l-6.68 23.31 53.89 31.11z" fill="#414141"></path><path d="M108.91 64.93l16.21 13.23-43.11 12.62 26.9-15.53V64.93z" fill="gray"></path><path d="M4.88 41.48l33.49 23.94v29.59L4.88 75.57V41.48z" fill="#1D1D1D"></path><path d="M63.67 50.78v29.63l-25.3 14.6V65.42l25.3-14.64z" fill="#000"></path><path d="M38.37 65.43l25.3-14.65L28.3 25.71 4.88 41.38l33.49 24.05z" fill="#414141"></path><path d="M38.37 95.01v14.64L4.88 90.24V75.57l33.49 19.44z" fill="#ED7B00"></path></svg>
                                                </span><span class="label">Outrigger Dormer</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="basement part_house" id="what_type_of_property_is_this_basement_part_house" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_basement_part_house">
                                                <span class="icon">
                                                <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 69.21l27.88 16.08v14.16L13.11 83.36V69.21z" fill="#ED7B00"></path><path d="M67.84 69.74v14.21l-26.85 15.5V85.28l26.85-15.54z" fill="#ED3F00"></path><path d="M13.11 33.01l53.88 31.11v36.19L13.11 69.2V33.01z" fill="#1D1D1D"></path><path d="M66.99 64.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V64.12z" fill="#000"></path><path d="M66.99 64.12l13.46-23.27L26.57 9.69 13.11 33.01l53.88 31.11z" fill="#414141"></path><path d="M93.89 74.45l23 13.24-49.9 12.62 26.9-15.54V74.45z" fill="gray"></path></svg>
                                                </span><span class="label">Part House</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="basement whole_house" id="what_type_of_property_is_this_basement_whole_house" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_basement_whole_house">
                                                <span class="icon">
                                                    <svg width="130" height="110" viewBox="0 0 130 110" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 62.12l53.88 31.11v14.16L13.11 76.28V62.12z" fill="#ED7B00"></path><path d="M93.85 77.68v14.21l-26.86 15.5V93.22l26.86-15.54z" fill="#ED3F00"></path><path d="M13.11 25.93l53.88 31.11v36.18L13.11 62.11V25.93z" fill="#1D1D1D"></path><path d="M66.99 57.04l13.47-23.28 13.39 7.73v36.23l-26.86 15.5V57.04z" fill="#000"></path><path d="M66.99 57.04l13.46-23.28L26.57 2.61 13.11 25.93l53.88 31.11z" fill="#414141"></path><path d="M93.89 81.53l23 13.24-49.9 12.62 26.9-15.53V81.53z" fill="gray"></path></svg>
                                                </span><span class="label">Whole House</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col field-item field-hast-children checkbox-item center">
                            <div class="parent-option"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42"><path fill="#1d1d1d" d="M0 10.64l24.583 14.194v16.511L0 27.152z"></path><path fill="#9ca6ab" d="M24.58 24.837l6.146-10.617 6.109 3.522v16.535L24.58 41.349z"></path><path fill="#414141" d="M24.583 24.834l6.14-10.617L6.142 0 0 10.64z"></path><path fill="gray" d="M36.853 29.55l10.494 6.04-22.767 5.76 12.273-7.09z"></path><path fill="#ed7b00" d="M17.27 20.59l7.314 4.28v16.47l-7.314-4.28z"></path><path fill="#ed3f00" d="M24.58 24.871l6.146-10.621 6.109 3.527V34.27L24.58 41.342z"></path><path fill="#ed5d00" d="M24.584 24.88l6.14-10.622-7.313-4.298L17.27 20.6z"></path></svg></span><span class="label">Two Storey</span>
                            </div>
                            <div class="child-option">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="two_storey side" id="what_type_of_property_is_this_two_storey_side" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_two_storey_side">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.11 28.01l53.88 31.11v36.19L13.11 64.2V28.01z" fill="#1D1D1D"></path><path d="M66.99 59.12l13.47-23.27 13.39 7.72v36.24l-26.86 15.5V59.12z" fill="#000"></path><path d="M66.99 59.12l13.46-23.27L26.57 4.69 13.11 28.01l53.88 31.11z" fill="#414141"></path><path d="M93.89 69.45l23 13.24-49.9 12.62 26.9-15.54V69.45z" fill="gray"></path><path d="M50.96 49.83l16.03 9.38v36.1l-16.03-9.38v-36.1z" fill="#ED7B00"></path><path d="M66.99 59.21l13.47-23.28 13.39 7.73v36.15l-26.86 15.5v-36.1z" fill="#ED3F00"></path><path d="M66.99 59.21l13.46-23.28-16.03-9.42-13.46 23.32 16.03 9.38z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Side</span></label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="child-item">
                                            <input class="required-field" onchange="RequiredCheckbox(this); CheckBoxChild(this)" required="" value="two_storey rear" id="what_type_of_property_is_this_two_storey_rear" type="radio" name="what_type_of_property_is_this">
                                            <label for="what_type_of_property_is_this_two_storey_rear">
                                                <span class="icon">
                                                    <svg width="130" height="100" viewBox="0 0 130 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.15 25.69L71.03 56.8v36.18L17.15 61.87V25.69z" fill="#1D1D1D"></path><path d="M71.03 56.8L84.5 33.52l13.39 7.73v36.23l-26.86 15.5V56.8z" fill="#000"></path><path d="M71.03 56.8L84.5 33.52 30.61 2.37 17.15 25.69 71.03 56.8z" fill="#414141"></path><path d="M97.93 67.13l23 13.23-49.9 12.62 26.9-15.53V67.13z" fill="gray"></path><path d="M9.07 30.54l53.88 31.11v35.98L9.07 66.52V30.54z" fill="#ED7B00"></path><path d="M71.03 57.02v35.96l-8.08 4.65V61.65l8.08-4.63z" fill="#ED3F00"></path><path d="M71.03 57.02L48.6 12.77 26.36 20l36.59 41.65 8.08-4.63z" fill="#ED3F00"></path><path d="M9.07 30.54L26.36 20l36.59 41.65L9.07 30.54z" fill="#ED5D00"></path></svg>
                                                </span><span class="label">Rear</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- How big is the area being changed in square metres? --}}
            <div class="parent">
                <div class="parent">
                    <div class="parent">
                        <div class="field-block ">
                            <div class="filed-block-label">
                                How big is the area being changed in square metres?
                                <div class="filed-block-subtitle">The total of the new area being added, and existing area impacted</div>
                            </div>
                            <div class="inputs sizes-item">
                                <div class="row">
                                    <div class="col field-item checkbox-item center">
                                        <input class="required-field" onchange="RequiredCheckbox(this)" required value="25" @if(old('square_metres_25') == '25'){{ 'checked' }}@endif id="square_metres_25" type="radio" name="square_metres">
                                        <label for="square_metres_25"> <span class="icon"><svg width="45" height="40" viewBox="0 0 45 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.442 34.785c-.035-.592-.463-1.11-1.07-1.11-.695.019-1.39.028-2.085.037-.696.01-1.392.019-2.087.037l-.214-4.882c-.045-.952-.08-1.915-.114-2.884-.159-4.413-.321-8.946-1.491-13.132C34.741 3.42 25.648-1.462 16.554.387c-4.137.85-8.131 2.996-10.949 6.288-2.96 3.44-4.172 7.767-4.244 12.28-.035 3.143.393 6.102 1.391 8.876 0 .074 0 .185.036.26.307 1.319-.513 2.75-1.342 4.196-1.192 2.081-2.403 4.194-.299 6.049 1.338 1.171 3.394 1.11 5.157 1.056.352-.01.692-.02 1.013-.02.961 0 1.923-.013 2.886-.025 1.93-.025 3.865-.05 5.816.024h.036c2.904.56 5.808.524 8.726.488 1.13-.014 2.263-.028 3.399-.007 1.248.019 2.487.046 3.726.074 1.24.028 2.48.055 3.727.074.107 0 .179 0 .25-.037 1.462-.185 2.746-.999 3.245-2.552.143-.444.179-.925.179-1.406.517 0 1.025-.009 1.533-.018.508-.01 1.017-.019 1.534-.019.018.5.044.99.071 1.48.027.49.054.98.071 1.48.072 1.405 2.212 1.442 2.14 0-.071-1.406-.142-2.775-.214-4.143zM2.395 36.412c-.635-1.018.366-2.472 1.073-3.5.166-.241.317-.46.425-.642.048-.09.095-.176.142-.26.13-.234.253-.458.357-.702.286.518.607.999.963 1.48a15.49 15.49 0 004.672 4.327H9.35c-.27.007-.647.036-1.089.07-1.954.153-5.168.404-5.866-.773zm30.98 1.312c.753.02 1.505.04 2.258.057 1.685-.159 1.58-1.82 1.495-3.175a17.358 17.358 0 01-.032-.635c-.036-.665-.063-1.331-.09-1.997-.026-.666-.053-1.332-.089-1.997-.107-2.515-.25-5.067-.392-7.62-.321-4.993-.713-10.356-3.852-14.425C27.323 1.052 17.338.72 10.491 5.27c-3.245 2.146-5.635 5.364-6.526 9.247-.892 3.995-.785 8.84.748 12.687.018.037.027.064.036.092a6.122 6.122 0 00.25.573c1.783 3.847 4.386 6.917 8.274 8.434 3.887 1.516 8.095 1.479 12.196 1.368 2.636-.086 5.27-.016 7.906.054z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.878 15.662c2.211-3.292 6.919-4.364 10.093-2.626 3.78 2.035 5.028 6.769 3.138 10.615a.407.407 0 01-.107.26c-.018.036-.045.073-.071.11a.753.753 0 00-.072.111c-2.39 3.514-6.918 4.735-10.592 2.442-3.601-2.257-4.814-7.25-2.389-10.912zm1.855 1.11c-1.89 2.626-.999 6.214 1.604 7.878 2.711 1.702 6.135.814 7.846-1.886 1.463-2.7.607-6.325-2.175-7.767-2.425-1.258-5.67-.481-7.275 1.775z" fill="#000"/></svg></span><span class="label">Small</span><span class="value">(30 sqm)</span></label>
                                    </div>
                                    <div class="col field-item checkbox-item center">
                                        <input class="required-field" onchange="RequiredCheckbox(this)" required value="35" @if(old('square_metres_35') == '35'){{ 'checked' }}@endif id="square_metres_35" type="radio" name="square_metres">
                                        <label for="square_metres_35"> <span class="icon"><svg width="45" height="40" viewBox="0 0 45 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.442 34.785c-.035-.592-.463-1.11-1.07-1.11-.695.019-1.39.028-2.085.037-.696.01-1.392.019-2.087.037l-.214-4.882c-.045-.952-.08-1.915-.114-2.884-.159-4.413-.321-8.946-1.491-13.132C34.741 3.42 25.648-1.462 16.554.387c-4.137.85-8.131 2.996-10.949 6.288-2.96 3.44-4.172 7.767-4.244 12.28-.035 3.143.393 6.102 1.391 8.876 0 .074 0 .185.036.26.307 1.319-.513 2.75-1.342 4.196-1.192 2.081-2.403 4.194-.299 6.049 1.338 1.171 3.394 1.11 5.157 1.056.352-.01.692-.02 1.013-.02.961 0 1.923-.013 2.886-.025 1.93-.025 3.865-.05 5.816.024h.036c2.904.56 5.808.524 8.726.488 1.13-.014 2.263-.028 3.399-.007 1.248.019 2.487.046 3.726.074 1.24.028 2.48.055 3.727.074.107 0 .179 0 .25-.037 1.462-.185 2.746-.999 3.245-2.552.143-.444.179-.925.179-1.406.517 0 1.025-.009 1.533-.018.508-.01 1.017-.019 1.534-.019.018.5.044.99.071 1.48.027.49.054.98.071 1.48.072 1.405 2.212 1.442 2.14 0-.071-1.406-.142-2.775-.214-4.143zM2.395 36.412c-.635-1.018.366-2.472 1.073-3.5.166-.241.317-.46.425-.642.048-.09.095-.176.142-.26.13-.234.253-.458.357-.702.286.518.607.999.963 1.48a15.49 15.49 0 004.672 4.327H9.35c-.27.007-.647.036-1.089.07-1.954.153-5.168.404-5.866-.773zm30.98 1.312c.753.02 1.505.04 2.258.057 1.685-.159 1.58-1.82 1.495-3.175a17.358 17.358 0 01-.032-.635c-.036-.665-.063-1.331-.09-1.997-.026-.666-.053-1.332-.089-1.997-.107-2.515-.25-5.067-.392-7.62-.321-4.993-.713-10.356-3.852-14.425C27.323 1.052 17.338.72 10.491 5.27c-3.245 2.146-5.635 5.364-6.526 9.247-.892 3.995-.785 8.84.748 12.687.018.037.027.064.036.092a6.122 6.122 0 00.25.573c1.783 3.847 4.386 6.917 8.274 8.434 3.887 1.516 8.095 1.479 12.196 1.368 2.636-.086 5.27-.016 7.906.054z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.878 15.662c2.211-3.292 6.919-4.364 10.093-2.626 3.78 2.035 5.028 6.769 3.138 10.615a.407.407 0 01-.107.26c-.018.036-.045.073-.071.11a.753.753 0 00-.072.111c-2.39 3.514-6.918 4.735-10.592 2.442-3.601-2.257-4.814-7.25-2.389-10.912zm1.855 1.11c-1.89 2.626-.999 6.214 1.604 7.878 2.711 1.702 6.135.814 7.846-1.886 1.463-2.7.607-6.325-2.175-7.767-2.425-1.258-5.67-.481-7.275 1.775z" fill="#000"/></svg></span><span class="label">Medium</span><span class="value">(45 sqm)</span></label>
                                    </div>
                                    <div class="col field-item checkbox-item center">
                                        <input class="required-field" onchange="RequiredCheckbox(this)" required value="45" @if(old('square_metres_45') == '45'){{ 'checked' }}@endif id="square_metres_45" type="radio" name="square_metres">
                                        <label for="square_metres_45"> <span class="icon"><svg width="45" height="40" viewBox="0 0 45 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.442 34.785c-.035-.592-.463-1.11-1.07-1.11-.695.019-1.39.028-2.085.037-.696.01-1.392.019-2.087.037l-.214-4.882c-.045-.952-.08-1.915-.114-2.884-.159-4.413-.321-8.946-1.491-13.132C34.741 3.42 25.648-1.462 16.554.387c-4.137.85-8.131 2.996-10.949 6.288-2.96 3.44-4.172 7.767-4.244 12.28-.035 3.143.393 6.102 1.391 8.876 0 .074 0 .185.036.26.307 1.319-.513 2.75-1.342 4.196-1.192 2.081-2.403 4.194-.299 6.049 1.338 1.171 3.394 1.11 5.157 1.056.352-.01.692-.02 1.013-.02.961 0 1.923-.013 2.886-.025 1.93-.025 3.865-.05 5.816.024h.036c2.904.56 5.808.524 8.726.488 1.13-.014 2.263-.028 3.399-.007 1.248.019 2.487.046 3.726.074 1.24.028 2.48.055 3.727.074.107 0 .179 0 .25-.037 1.462-.185 2.746-.999 3.245-2.552.143-.444.179-.925.179-1.406.517 0 1.025-.009 1.533-.018.508-.01 1.017-.019 1.534-.019.018.5.044.99.071 1.48.027.49.054.98.071 1.48.072 1.405 2.212 1.442 2.14 0-.071-1.406-.142-2.775-.214-4.143zM2.395 36.412c-.635-1.018.366-2.472 1.073-3.5.166-.241.317-.46.425-.642.048-.09.095-.176.142-.26.13-.234.253-.458.357-.702.286.518.607.999.963 1.48a15.49 15.49 0 004.672 4.327H9.35c-.27.007-.647.036-1.089.07-1.954.153-5.168.404-5.866-.773zm30.98 1.312c.753.02 1.505.04 2.258.057 1.685-.159 1.58-1.82 1.495-3.175a17.358 17.358 0 01-.032-.635c-.036-.665-.063-1.331-.09-1.997-.026-.666-.053-1.332-.089-1.997-.107-2.515-.25-5.067-.392-7.62-.321-4.993-.713-10.356-3.852-14.425C27.323 1.052 17.338.72 10.491 5.27c-3.245 2.146-5.635 5.364-6.526 9.247-.892 3.995-.785 8.84.748 12.687.018.037.027.064.036.092a6.122 6.122 0 00.25.573c1.783 3.847 4.386 6.917 8.274 8.434 3.887 1.516 8.095 1.479 12.196 1.368 2.636-.086 5.27-.016 7.906.054z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.878 15.662c2.211-3.292 6.919-4.364 10.093-2.626 3.78 2.035 5.028 6.769 3.138 10.615a.407.407 0 01-.107.26c-.018.036-.045.073-.071.11a.753.753 0 00-.072.111c-2.39 3.514-6.918 4.735-10.592 2.442-3.601-2.257-4.814-7.25-2.389-10.912zm1.855 1.11c-1.89 2.626-.999 6.214 1.604 7.878 2.711 1.702 6.135.814 7.846-1.886 1.463-2.7.607-6.325-2.175-7.767-2.425-1.258-5.67-.481-7.275 1.775z" fill="#000"/></svg></span><span class="label">Large</span><span class="value">(60 sqm)</span></label>
                                    </div>
                                    <div class="col field-item custom-numeric-input center">
                                        <div class="item-inner">
                                            <div class="label">Or a specific size (sqm)</div>

                                            <div class="number-input">
                                                <input class="quantity required-field" onkeyup="QuantityField(this)" value="0" min="0" name="square_metres_custom" type="number" placeholder="0">
                                                <div class="arrows">
                                                    <div class="arrow-btn btn-plus">
                                                        <img alt="top" src="{{ url('public/assets/site/images/base/icon/arrow-top.svg') }}">
                                                    </div>
                                                    <div class="arrow-btn btn-minus">
                                                        <img alt="bottom" src="{{ url('public/assets/site/images/base/icon/arrow-bottom.svg') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- Number btn --}}
    <script>
        $('.btn-plus, .btn-minus').on('click', function (e) {
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.field-item').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
            QuantityField(this, clicked = 1)
        })
    </script>

    {{-- Check Box Required --}}
    <script type="text/javascript">
        function RequiredCheckbox(element) {
            const checkboxes = $(element).parent().parent().parent().parent().parent().parent().find('input');
            console.log($(element).parent().parent().parent().parent().find('input:checked'));

            if ($(element).parent().parent().parent().parent().parent().parent().find('input:checked').length > 0) {
                checkboxes.removeAttr('required');
            } else {
                checkboxes.attr('required', 'required');
            }
        }
    </script>

@endsection
