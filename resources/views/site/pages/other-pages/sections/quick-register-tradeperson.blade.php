<section class="quote-form" id="quick-register">
    <div class="container">
        <div class="heading-block center">Register your interest in becoming a Connect tradesperson</div>
        <div class="excerpt-block center">Fill out the form below and our team will get in touch with more details,
            or call them today on (+44)203 488 9822
        </div>
        <div class="quote-form-block">
            <div class="form-block">
                <form method="post" action="{{route('becomeUdexTradesperson.Store')}}">
                    @csrf
                    <div class="field-block mb-0">
                        <div class="inputs">
                            <div class="row">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-6 field-item text-field">
                                            <div class="row g-0">
                                                <input value="{{ old('first_name') }}" id="first-name"
                                                       class="col-12 order-1 text-uppercase" type="text"
                                                       name="first_name" required>
                                                <label for="first-name" class="col-12 order-0">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-6 field-item text-field">
                                            <div class="row g-0">
                                                <input value="{{ old('last_name') }}" id="last-name"
                                                       class="col-12 order-1 text-uppercase" type="text"
                                                       name="last_name" required>
                                                <label for="last-name" class="col-12 order-0">Last name</label>
                                            </div>
                                        </div>
                                        <div class="col-6 field-item text-field">
                                            <div class="row g-0">
                                                <input value="{{ old('email') }}" id="email" class="col-12 order-1"
                                                       type="email" name="email" required>
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
                                                <input value="{{ old('phone') }}" id="phone" class="col-12 order-1"
                                                       type="text" name="phone" required>
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
                                                <input value="{{ old('company_name') }}" id="company-name"
                                                       class="col-12 order-1 text-uppercase" type="text"
                                                       name="company_name" required>
                                                <label for="company-name" class="col-12 order-0">Company
                                                    name</label>
                                            </div>
                                        </div>
                                        <div class="col-6 field-item text-field">
                                            <div class="row g-0">
                                                <input value="{{ old('company_website') }}" id="company-website"
                                                       class="col-12 order-1 text-uppercase" type="text"
                                                       name="company_website" required>
                                                <label for="company-website" class="col-12 order-0">Company
                                                    website</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="field-item text-field h-100 field-style custom-select-field">
                                        <label for="service" class="bold-label">
                                            The service my company provides
                                        </label>
                                        <div class="custom-select" style="width:100%;">
                                            <select onchange="getSelectedOptions(this)" class="custom-select-inner"
                                                    style="width:100%" name="service[]"
                                                    multiple id="service">
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach
                                            </select>
                                            <textarea style="display: none" class="describe" placeholder="enter your note"></textarea>
                                            <script>
                                                function getSelectedOptions(sel) {
                                                    var opts = [],

                                                        opt;
                                                    let flag = false;
                                                    var len = sel.options.length;
                                                    for (var i = 0; i < len; i++) {
                                                        opt = sel.options[i];

                                                        if (opt.selected) {
                                                            opts.push(opt);
                                                            if (opt.innerText == 'Other Supplier') {
                                                                flag = true;
                                                            }
                                                        }
                                                    }
                                                    if (flag) {
                                                        $('.describe').css('display', 'block')
                                                    } else {
                                                        $('.describe').css('display', 'none')

                                                    }
                                                    console.log(opts)
                                                }

                                            </script>
                                        </div>
                                        @error('service')
                                        <span class="error">
                                             <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-form center">
                        <input type="submit" class="submit-btn" value="Submit Details">

                        <div class="login-link center">
                            <a href="{{ url('login') }}">Already Registered?</a>
                        </div>
                        <div class="tradeperson-form-p">
                            <p>
                                By submitting this form, you consent to representatives of UDEX Ltd contacting you.
                                To update your
                                details, retract your interest or request for us to delete your details, please
                                email info@udex.co.uk
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
