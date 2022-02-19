@extends('layouts.site.pages-master')

@section('page-title',  'Privacy Policy')

@section('page-style',  'pages/pages.min.css')

@section('heading-lib')
    <link rel="stylesheet" href="{{ asset('public/assets/site/styles/swiper-bundle.min.css') }}">
    <script src="{{ asset('public/assets/site/js/swiper-bundle.min.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <section class="page-info">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="page-icon w-auto">
                        <img
                            src="{{ asset('public/assets/site/images/example') }}/Find_an_approved_inspector_for_your_project.png"
                            alt="Find an approved inspector for your project">
                    </div>
                </div>
                <div class="col-8">
                    <div class="heading-title">Privacy Policy</div>
                    <div class="heading-desc">We are committed to protecting and respecting your privacy.</div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        {{-- terms body --}}
        <section class="section-content terms-body">
            <div class="row align-items-center max-970">
                <div class="col-12 term-section">
                    <div class="heading-block">Introduction</div>
                    <div class="text-block">
                        <p>
                            We are committed to protecting and respecting your privacy.
                        </p>
                        <p>
                            This privacy policy (together with our <a href="url('terms-of-use')">terms of use</a> and any other documents referred to in
                            them) sets out the basis on which any personal data we collect from you, or that you provide
                            to us, will be processed by us. Please read the following carefully to understand our views
                            and practices regarding your personal data and how we will treat it. By visiting our website
                            located at udex.co.uk (our site), you are accepting and consenting to the practices
                            described in this policy.
                        </p>
                        <p>
                            For the purpose of the Data Protection Act 1998 (the Act), the data controller is UDEX Ltd.
                            (we, us or UDEX). We are a limited company registered in England and Wales with company
                            registration number 13733362. Our registered office address International House, 185 Tower
                            Bridge Road, London, SE1 2UF and our main trading address is 33 Cavendish Square, London W1G
                            0PW.
                        </p>
                        <p>
                            We may use non-identifiable information about you to create remarketing ads. This helps us
                            give you the best Udex experience, by showing you the best messaging related to your
                            searches and activity on the Udex site.
                        </p>
                        <p>
                            We may display these ads using various mediums including but not limited to Google,
                            Facebook, Instagram.
                        </p>
                        <p>
                            As stressed before, there is no sharing of personally identifiable information with these
                            companies. These companies use ‘cookies’ to mark that you are a visitor of our site, which
                            enables us to advertise to you. Should you wish to opt-out, you can do so here:
                            http://optout.networkadvertising.org/?c=1.
                        </p>
                    </div>
                </div>

                <div class="col-12 term-section">
                    <div class="heading-block">Information we may collect from you</div>
                    <div class="text-block">
                        <p>
                            We may collect and process the following data about you:
                        </p>
                        <ul>
                            <li><b>Information you give to us.</b></li>
                            <ul>
                                <li>
                                    This is information about you that you give to us by filling in forms on our site or
                                    by corresponding with us by phone, email or otherwise. It includes information you
                                    provide when you register to use our site, use our service, place an order with us,
                                    enter a competition, take part in a promotion or survey, and when you report a
                                    problem with our site. The information you give us may include your name, address,
                                    email address, phone number, financial and credit card information and other
                                    personal information.
                                </li>
                                <li>
                                    If you contact us, we may keep a record of that correspondence.
                                </li>
                                <li>
                                    We may record inbound and outbound phone calls for training and monitoring purposes.
                                </li>
                            </ul>
                            <li><b>Information we collect about you.</b></li>
                            <ul>
                                <li>With regard to each of your visits to our site, we may automatically collect certain
                                    technical information (this is data about our users’ browsing actions), as well as
                                    certain information about your visit to our site (including items you viewed or
                                    searched for, page response times, download errors, length of visits to certain
                                    pages and page interaction information).
                                </li>
                                <li>
                                    For customers that purchase a Measured Survey we will collect detailed measurements
                                    of your property in the form of hand sketches or a 3D point cloud. We will also take
                                    high definition photos of the inside and outside of the property. This data will be
                                    used to complete the design services you purchase from us and may be shared with
                                    relevant third parties as part of this work.
                                </li>
                            </ul>
                            <li><b>Information we receive from other sources.</b></li>
                            <ul>
                                <li>
                                    We may receive information about you if you use any of the other websites we
                                    operate, or the other services we provide, from time to time. In this case, we will
                                    have informed you when we collected the data that it may be shared internally and
                                    combined with data collected on our site.
                                </li>
                                <li>
                                    We also work closely with third parties (including, for example, business partners,
                                    sub-contractors in technical, payment and delivery services, advertising networks,
                                    analytics providers and search information providers) and may receive information
                                    about you from them.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class="col-12 term-section">
                    <div class="heading-block">Cookies</div>
                    <div class="text-block">
                        <p>
                            Our website uses cookies to distinguish you from other users of our site. This helps us to
                            provide you with a good experience when you use our site and also allows us to improve our
                            site. For detailed information on the cookies we use and the purposes for which we use them,
                            see our Cookie Policy.
                        </p>
                    </div>
                </div>

                <div class="col-12 term-section">
                    <div class="heading-block">Uses made of the information</div>
                    <div class="text-block">
                        <p>
                            We may use information held about you in the following ways:
                        </p>
                        <ul>
                            <li>
                                <b>Information you give to us.</b> We may use this information:
                            </li>
                            <ul>
                                <li>
                                    To carry out our obligations arising from any contracts entered into between you and
                                    us and to provide you with the information, products and services that you request
                                    from us.
                                </li>
                                <li>
                                    To provide you with information about us and to send you newsletters and other
                                    relevant information.
                                </li>
                                <li>
                                    To provide you with information about other products and/or services we may offer
                                    that are similar to those that you have already purchased or enquired about.
                                </li>
                                <li>
                                    To provide you, or permit selected third parties to provide you, with information
                                    about products and/or services which we feel may interest you. If you do not want us
                                    to use your data in this way, or to pass your details on to third parties for
                                    marketing purposes, please contact us at info@udex.co.uk.
                                </li>
                                <li>
                                    To notify you about changes to our service.
                                </li>
                                <li>
                                    To ensure that content from our site is presented in the most effective manner for
                                    you and for your computer.
                                </li>
                            </ul>
                            <li>
                                <b>Information we collect about you.</b> We may use this information:
                            </li>
                            <ul>
                                <li>
                                    To administer our site and for internal operations, including troubleshooting, data
                                    analysis, testing, research, statistical and survey purposes.
                                </li>
                                <li>
                                    To improve our site and to ensure that content is presented in the most effective
                                    manner for you and for your computer.
                                </li>
                                <li>
                                    As part of our efforts to keep our site safe and secure.
                                </li>
                                <li>
                                    To make suggestions and recommendations to you and other users of our site about
                                    products and/or services that may interest you or them.
                                </li>
                            </ul>
                            <li>
                                <b>
                                    Information we receive from other sources.
                                </b>
                                We may combine this information with information you give to us and information we
                                collect about you. We may use this information and the combined information for the
                                purposes set out above (depending on the types of information we receive).

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 term-section">
                    <div class="heading-block">Legal basis for processing personal data</div>
                    <div class="text-block">
                        <p>
                            The legal bases upon which we will process your personal data are:
                        </p>
                        <ul>
                            <li>Your explicit consent to the processing of data under the terms of this policy; and/or
                            </li>
                            <li>Our legitimate interests, namely:</li>
                            <ul>
                                <li>To carry out our obligations arising from any contracts entered into between you and
                                    us; and
                                </li>
                                <li>To provide you with marketing updates from time to time.</li>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class="col-12 term-section">
                    <div class="heading-block">Disclosure of your information</div>
                    <div class="text-block">
                        <p>
                            We may share your personal information with any member of our group from time to time, which
                            means our subsidiaries, our ultimate holding company and its subsidiaries, in each case as
                            defined in section 1159 of the UK Companies Act 2006 (as amended from time to time).
                        </p>
                        <p>
                            We may share your personal information with selected third parties, including:
                        </p>
                        <ul>
                            <li>Business partners, suppliers and sub-contractors for the performance of any contract we
                                enter into with them or you.
                            </li>
                            <li>Analytics and search engine providers that assist us in the improvement and optimisation
                                of our site.
                            </li>
                        </ul>
                        <p>
                            We may disclose your personal information to third parties:
                        </p>
                        <ul>
                            <li>If udex or substantially all of its assets are acquired by a third party, in which case
                                personal data held by it about its customers will be one of the transferred assets.
                            </li>
                            <li>If we are under a duty to disclose or share your personal data in order to comply with
                                any legal obligation or request, or in order to enforce or apply our Website Terms of
                                Use or our Terms and Conditions or any other agreements; or to protect the rights,
                                property, or safety of udex, our customers or others. This includes exchanging
                                information with other companies and organisations for the purposes of fraud protection
                                and credit risk reduction and with law enforcement agencies.
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-12 term-section">
                    <div class="heading-block">Where we store your personal data</div>
                    <div class="text-block">
                        <p>
                            The data that we collect from you may be transferred to, and stored at, a destination
                            outside the European Economic Area (EEA). It may also be processed by staff operating
                            outside the EEA who work for us or for one of our suppliers. This includes staff engaged in,
                            among other things, the fulfilment of your order, the processing of your payment details and
                            the provision of support services. By submitting your personal data, you agree to this
                            transfer, storing or processing. We will take all steps reasonably necessary to ensure that
                            your data is treated securely and in accordance with this privacy policy.
                        </p>
                        <p>
                            All information you provide to us is stored on our secure servers. Any payment transactions
                            made through our site will be encrypted using SSL technology. Where we have given you (or
                            where you have chosen) a password which enables you to access certain parts of our site, you
                            are responsible for keeping this password confidential. We ask you not to share a password
                            with anyone.
                        </p>
                        <p>
                            Unfortunately, the transmission of information via the internet is not completely secure.
                            Although we will do our best to protect your personal data, we cannot guarantee the security
                            of your data transmitted to our site and any transmission is at your own risk. Once we have
                            received your information, we will use strict procedures and security features to try to
                            prevent unauthorised access.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Retention of your personal data</div>
                    <div class="text-block">
                        <p>
                            We shall not keep your personal data for longer than is necessary for the purposes for which
                            it is processed and will in any event not retain your personal data for longer than 3 years.
                            However, we may retain your personal data for a longer period where necessary for compliance
                            with any legal obligations to which we are subject (including, without limitation,
                            compliance with all relevant tax legislation), or in order to protect your vital interests
                            or the vital interests of another person.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Your rights</div>
                    <div class="text-block">
                        <p>
                            You have the right to ask us not to process your personal data for marketing purposes. We
                            will usually inform you (before collecting your data) if we intend to use your data for such
                            purposes or if we intend to disclose your information to any third party for such purposes.
                            You can exercise your right to prevent such processing at any time by contacting us at
                            info@udex.co.uk or by clicking on the ‘unsubscribe’ link (if any) in any marketing email or
                            newsletter you receive from us.
                        </p>
                        <p>
                            Our site may, from time to time, contain links to and from the websites of our partner
                            networks, advertisers and affiliates. If you follow a link to any of these websites, please
                            note that these websites have their own privacy policies and that we do not accept any
                            responsibility or liability for these policies. Please check these policies before you
                            submit any personal data to these websites.
                        </p>
                        <p>
                            You have the right to have any inaccurate personal data that we store about you rectified
                            and to have any incomplete personal data about you completed.
                        </p>
                        <p>
                            Subject to certain exceptions you have the right under specified circumstances to the
                            erasure of your personal data, for example where the data is no longer necessary in relation
                            to the purposes for which it is processed or where you have withdrawn your consent (where
                            consent is the sole basis for processing). However, this right does not apply where, for
                            example, processing is necessary for our compliance with a legal obligation.
                        </p>
                        <p>
                            You have the right to restrict our processing of your personal data, for example where you
                            might contest the accuracy of the data or where we no longer need the data for the purposes
                            of processing but you require it for the establishment, exercise or defence of legal claims.
                            Where processing has been so restricted, we may continue to store your data, but will only
                            process it with your consent, for the establishment, exercise or defence of legal claims,
                            for the protection of the rights of another person, or for reasons of public interest.
                        </p>
                        <p>
                            If you think that our processing of your personal information infringes data protection
                            laws, you have a right to lodge a complaint with the ICO (in the UK) or with an equivalent
                            supervisory authority responsible for data protection.
                        </p>
                        <p>
                            Where the legal basis for our processing of your personal data is consent, you have the
                            right to withdraw that consent at any time.
                        </p>
                        <p>
                            You may exercise any of your rights in relation to your personal data by contacting us at
                            info@udex.co.uk.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Access to information</div>
                    <div class="text-block">
                        <p>
                            The Act gives you the right to access information held about you. Your right of access can
                            be exercised in accordance with the Act. Your first access request shall be dealt with free
                            of charge. Any subsequent access requests may be subject to a fee of £10 to meet our costs
                            in providing you with details of the information we hold about you. You have the right to
                            receive your personal data in an electronic and commonly used format.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Changes to this privacy policy</div>
                    <div class="text-block">
                        <p>
                            Any changes or updates we make to this privacy policy in the future will be posted on this
                            page and, where appropriate, we may also notify you by email. Please check back frequently
                            to see any changes or updates to this privacy policy.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Contact</div>
                    <div class="text-block">
                        <p>
                            Questions, comments and requests regarding this privacy policy are welcomed and should be
                            addressed to info@udex.co.uk.
                        </p>
                        <p>
                            This privacy policy was most recently updated on 26 April 2021.
                        </p>
                    </div>
                </div>


            </div>
        </section>
    </div>

    {{-- Review Section --}}
    @include('site.pages.other-pages.sections.review')
@endsection
