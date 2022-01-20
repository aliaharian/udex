@if(!auth()->check())
    <section class="quote-form" id="quick-register">
        <div class="container">
            <div class="heading-block center">Get quotes from Building Contractors</div>
            <div class="excerpt-block center">Provide a few details about your project to receive accurate quotations</div>
            <div class="quote-form-block">
                <div class="form-block">
                    {!! Form::open(['url'=>'apply-quick-register?service='.request()->get('service')]) !!}
                    <div class="field-block mb-0">
                        <div class="inputs">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
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
                                        <div class="field-block">
                                            <div class="filed-block-label">
                                                Describe the requirements of your project
                                                <div class="filed-block-subtitle">What should we know about your project?</div>
                                            </div>

                                            <div class="textarea-input">
                                                <textarea style="height:300px" name="describe_the_requirements_of_your_project"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="field-block check-box-field">
                                                <input type="checkbox" id="conditions" name="conditions">
                                                <label for="conditions">I accept the terms and conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="field-block check-box-field" style="padding-left: 50px">
                                                <input type="checkbox" id="newsletter" name="newsletter">
                                                <label for="newsletter">Yes, please keep me updated on UDEX news, events and offers.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-form center">
                        <input type="submit" class="submit-btn" value="Start search">

                        <div class="login-link center">
                            <a href="{{ url('login') }}">Already Registered?</a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>


@else
    <section class="quote-form" id="quick-register">
        <div class="container">
            <div class="heading-block center">Get quotes from Building Contractors</div>
            <div class="excerpt-block center">Provide a few details about your project to receive accurate quotations</div>
            <div class="quote-form-block">
                <div class="form-block">
                    {!! Form::open(['url'=>'apply-quick-register?service='.request()->get('service')]) !!}
                    <div class="field-block mb-0">
                        <div class="inputs">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
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
                                        <div class="field-block">
                                            <div class="filed-block-label">
                                                Describe the requirements of your project
                                                <div class="filed-block-subtitle">What should we know about your project?</div>
                                            </div>

                                            <div class="textarea-input">
                                                <textarea style="height:300px" name="describe_the_requirements_of_your_project"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="field-block check-box-field">
                                                <input type="checkbox" id="conditions" name="conditions">
                                                <label for="conditions">I accept the terms and conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="field-block check-box-field" style="padding-left: 50px">
                                                <input type="checkbox" id="newsletter" name="newsletter">
                                                <label for="newsletter">Yes, please keep me updated on UDEX news, events and offers.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-form center">
                        <input type="submit" class="submit-btn" value="Start search">

{{--                        <div class="login-link center">--}}
{{--                            <a href="{{ url('login') }}">Already Registered?</a>--}}
{{--                        </div>--}}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>


@endif
