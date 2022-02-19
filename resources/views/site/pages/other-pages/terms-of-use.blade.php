@extends('layouts.site.pages-master')

@section('page-title',  'Terms Of Use')

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
                    <div class="heading-title">Terms Of Use</div>
                    <div class="heading-desc">Please read these terms carefully before using our site</div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        {{-- terms body --}}
        <section class="section-content terms-body">
            <div class="row align-items-center max-970">
                <div class="col-12 term-section">
                    <div class="heading-block">What's in these terms of use?</div>
                    <div class="text-block">
                        <p>
                            These terms of use (together with any other documents referred to in them) tell you the
                            rules for using our website located at www.udex.co.uk (our site), whether as a guest or a
                            registered user. Use of our site includes accessing, browsing or registering to use our
                            site.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Who we are and how to contact us</div>
                    <div class="text-block">
                        <p>
                            udex.co.uk or UDEX Ltd. is a limited company registered in England and Wales with company
                            registration number 13733362. Our registered office is International House, 185 Tower Bridge
                            Road, London, SE1 2UF
                        </p>
                        <p>
                            To contact us, please email us at info@udex.co.uk or telephone us on (+44)203 488 9822
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">By using our site you accept these terms of use</div>
                    <div class="text-block">
                        <p>
                            By using our site, you confirm that you have read and accept these terms of use and that you
                            agree to comply with and be bound by them. If you do not agree to these terms of use, you
                            must not use our site.
                        </p>
                        <p>
                            We recommend that you print a copy of these terms of use or save them to your computer for
                            future reference.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">There are other terms that may apply to you</div>
                    <div class="text-block">
                        <p>
                            These terms of use refer to the following additional terms, which also apply to your use of
                            our site:
                        </p>
                        <ul>
                            <li>
                                Our <a href="url('privacy-policy')">Privacy Policy</a>, which sets out the terms on which we process any personal data we
                                collect from you or that you provide to us. By using our site, you consent to such
                                processing and you warrant that all data provided by you is accurate.
                            </li>
                            <li>
                                Our Cookie Policy, which sets out information about the cookies on our site.
                            </li>
                        </ul>
                        <p>
                            If you purchase services from our site, our <a href="#">Terms and Conditions</a> will apply
                            to such purchase.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">We may make changes to these terms of use</div>
                    <div class="text-block">
                        <p>
                            We amend these terms of use from time to time. Every time you wish to use our site, please
                            check these terms of use to ensure you understand the terms that apply at that time. These
                            terms of use were most recently updated on 18 May 2021.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">We may make changes to our site</div>
                    <div class="text-block">
                        <p>
                            We may update our site, or change the content on it, from time to time, including to reflect
                            changes to our services (including the packages we offer). However, please note that any of
                            the content on our site may be out of date at any given time and we are under no obligation
                            to update it.
                        </p>
                        <p>
                            We do not guarantee that our site, or any content on it, will be free from errors or
                            omissions.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">We may suspend or withdraw our site</div>
                    <div class="text-block">
                        <p>
                            Access to, and use of, our site is made available free of charge. However, if you choose to
                            purchase any services from us, you will obviously be required to pay for them.
                        </p>
                        <p>
                            We do not guarantee that our site, or any content on it, will always be available or be
                            uninterrupted. We may suspend or withdraw or restrict the availability of all or any part of
                            our site for business and/or operational reasons.
                        </p>
                        <p>
                            You are responsible for making all arrangements necessary for you to have access to our
                            site, including configuring your information technology, computer programmes and platform in
                            order to access our site.
                        </p>
                        <p>
                            You agree that you will only use our site in a manner consistent with these terms of use and
                            any and all local and national laws and regulations.
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Our site is only for use in relation to UK properties</div>
                    <div class="text-block">
                        <p>
                            Whilst our site can be accessed from locations outside the United Kingdom, it is directed to
                            people requiring our services in relation to properties located within the United Kingdom.
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Registration</div>
                    <div class="text-block">
                        <p>
                            Use of, and access to, certain parts of our site may require you to register with us. If you
                            wish to register, you must complete all of the fields on the registration page.
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">You must keep your account details safe</div>
                    <div class="text-block">
                        <p>
                            If you choose, or you are provided with, a username, password or any other piece of
                            information as part of our security procedures, you must treat such information as
                            confidential and you must not disclose it to any third party.
                        </p>
                        <p>
                            We have the right to disable any username or password (if applicable and whether chosen by
                            you or allocated by us) at any time if, in our reasonable opinion, you have failed to comply
                            with any of the provisions of these terms of use.
                        </p>
                        <p>
                            You may not authorise others to access our site using your username and password (if
                            applicable) and you may not assign or otherwise transfer your account to any other person or
                            entity. If you know or suspect that anyone other than you knows or has obtained your
                            username or password (if applicable), you must immediately notify us at info@udex.co.uk and
                            change your password.
                        </p>
                        <p>
                            You are responsible for the acts and omissions of any third parties who use your username or
                            password (if applicable) to access our site, whether fraudulently or not, and you agree to
                            reimburse us on demand for any loss we may suffer as a result of such use
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">How you may use material on our site</div>
                    <div class="text-block">
                        <p>
                            We are the owner or the licensee of all intellectual property rights in our site, and in the
                            material published on it. Those works are protected by copyright laws and treaties around
                            the world. All such rights are reserved.
                        </p>
                        <p>
                            You may print off one copy, and may download extracts, of any page(s) from our site for your
                            personal use and, if applicable, you may draw the attention of others within your
                            organisation to content posted on our site.
                        </p>
                        <p>
                            You must not modify the paper or digital copies of any materials you have printed off or
                            downloaded from our site in any way and you must not use any illustrations, photographs,
                            video or audio sequences or any graphics separately from any accompanying text.
                        </p>
                        <p>
                            Our status (and that of any identified contributors) as the authors of content on our site
                            must always be acknowledged.
                        </p>
                        <p>
                            You must not use any part of the content on our site for commercial purposes without
                            obtaining a licence or other written consent to do so from us or our licensors.
                        </p>
                        <p>
                            If you use any part of our site in breach of these terms of use, your right to use our site
                            will cease immediately and you must, at our option, return or destroy any copies of the
                            materials you have made.
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Do not rely on information on our site</div>
                    <div class="text-block">
                        <p>
                            The content on our site is provided on an ‘as is’ basis for general information only. It is
                            not intended to amount to advice on which you should rely. You must obtain professional or
                            specialist advice before taking, or refraining from, any action on the basis of the content
                            on our site.
                        </p>
                        <p>
                            Although we make reasonable efforts to update the information and content provided on our
                            site, we make no representations and give no warranties or guarantees, whether express or
                            implied, that such information and content is accurate, complete or up-to-date.
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Our responsibility for loss or damage suffered by you</div>
                    <div class="text-block">
                        <p>
                            Whether you are a consumer or a business user:
                        </p>
                        <ul>
                            <li>
                                We do not exclude or limit in any way our liability to you where it would be unlawful
                                to do so. This includes liability for death or personal injury caused by our negligence
                                or the negligence of our employees, agents or subcontractors and for fraud or fraudulent
                                misrepresentation.
                            </li>
                            <li>
                                Different limitations and exclusions of liability will apply to liability arising as a
                                result of the supply of any services by us to you, which will be set out in our Terms
                                and Conditions

                            </li>
                        </ul>
                        <p>
                            If you are a business user:
                        </p>
                        <ul>
                            <li>
                                We exclude all implied conditions, warranties, representations or other terms that may
                                apply to
                                our site or any content on it.
                            </li>
                            <li>
                                We will not be liable to you for any loss or damage, whether in contract, tort
                                (including
                                negligence), breach of statutory duty or otherwise, even if foreseeable, arising under
                                or in
                                connection with: (i) use of, or inability to use, our site; or (ii) use of, or reliance
                                on, any
                                content displayed on our site.
                            </li>
                            <li>
                                In particular, we will not be liable for: (i) loss of profits, sales, business or
                                revenue; (ii)
                                business interruption; (iii) loss of anticipated savings or interest; (iv) loss of
                                business
                                opportunity; (v) loss of or damage to data; (vi) loss of or damage to reputation or
                                goodwill; or
                                (vii) any indirect, special or consequential damages, loss, costs, claims or expenses of
                                any
                                kind.
                            </li>
                        </ul>
                        <p>
                            If you are a consumer user, please note that we only provide our site for domestic and
                            private
                            use. You agree not to use our site for any commercial or business purposes and, if you do,
                            we
                            will have no liability to you for any loss of profit, loss of business, business
                            interruption or
                            loss of business opportunity.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Prohibited uses</div>
                    <div class="text-block">
                        <p>
                            You may use our site only for lawful purposes. You may not use our site:
                        </p>
                        <ul>
                            <li>
                                In any way that is unlawful or fraudulent, or has any unlawful or fraudulent purpose or
                                effect.
                            </li>
                            <li>
                                To send, knowingly receive, upload, download, use or re-use any material which does not
                                comply with our content standards set out below.
                            </li>
                            <li>
                                To transmit, or procure the sending of, any unsolicited or unauthorised advertising or
                                promotional material or any other form of similar solicitation (spam).
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Uploading content to our site</div>
                    <div class="text-block">
                        <p>
                            Whenever you make use of a feature that allows you to upload content to our site, such
                            content must be accurate (where it states facts) and be genuinely held (where it states
                            opinions) and must not:
                        </p>
                        <ul>
                            <li>
                                Contain any material which is defamatory or inaccurate of any person.
                            </li>
                            <li>
                                Contain any material which is obscene, offensive, hateful or inflammatory.
                            </li>
                            <li>
                                Promote indecent or sexually explicit material.
                            </li>
                            <li>
                                Promote violence.
                            </li>
                            <li>
                                Promote discrimination based on race, sex, religion, nationality, disability, sexual
                                orientation or age.
                            </li>
                            <li>
                                Infringe or violate any copyright, database right or trade mark of any other person.
                            </li>
                            <li>
                                Be made in breach of any legal duty owed to a third party, such as a contractual duty or
                                a duty of confidence.
                            </li>
                            <li>
                                Promote any illegal activity or intend to defraud, swindle or deceive other users of our
                                site.
                            </li>
                            <li>
                                Be in contempt of court.
                            </li>
                            <li>
                                Be threatening, abuse or invade another’s privacy or cause annoyance, inconvenience or
                                needless anxiety.
                            </li>
                            <li>
                                Be likely to harass, upset, embarrass, alarm or annoy any other person.
                            </li>
                            <li>
                                Be used to impersonate any person or to misrepresent your identity or affiliation with
                                any person.
                            </li>
                            <li>
                                Give the impression that they emanate from us if this is not the case.
                            </li>
                            <li>
                                Relate to commercial activities (including, without limitation, sales, competitions and
                                advertising, links to other websites or premium rate telephone numbers).
                            </li>
                            <li>
                                Disseminate or otherwise disclose another person's personal information without his or
                                her prior permission, or collect or solicit another person's personal information for
                                commercial or unlawful purposes.
                            </li>
                        </ul>
                        <p>
                            You warrant that any content you upload to our site complies with the content standards set
                            out above and you will be liable to us and indemnify us for any breach of that warranty.
                            This means that you will be responsible for any loss or damage we suffer as a result of your
                            breach of warranty.
                        </p>
                        <p>
                            Any content you upload to our site will be considered non-confidential and non-proprietary.
                            You retain all of your ownership rights in your content, but you are required to grant us
                            (and other users of our site, if appropriate) an irrevocable, perpetual, worldwide,
                            royalty-free licence to use, store and copy that content in providing any services to you.
                            We may also use such content for marketing purposes, unless you have asked us not to.
                        </p>
                        <p>
                            We also have the right to disclose your identity to any third party who is claiming that any
                            content uploaded by you to our site constitutes a violation of their intellectual property
                            rights or of their right to privacy.
                        </p>
                        <p>
                            We have the right to remove any content you upload to our site if, in our opinion, it does
                            not comply with the content standards set out above.
                        </p>
                        <p>
                            You are solely responsible for securing and backing up your content.
                        </p>


                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">We are not responsible for viruses and you must not introduce them</div>
                    <div class="text-block">
                        <p>
                            We do not guarantee that our site will be secure or free from bugs or viruses and you should
                            use your own virus protection software.
                        </p>
                        <p>
                            We will not be liable for any loss or damage caused by a virus, distributed
                            denial-of-service attack or other technologically harmful material that may infect your
                            computer equipment, computer programs, data or other proprietary material due to your use of
                            our site or to your downloading of any content on it, or on any website linked to it.
                        </p>
                        <p>
                            You must not misuse our site by knowingly introducing viruses, trojans, worms, logic bombs
                            or other material that is malicious or technologically harmful and you must not attempt to
                            gain unauthorised access to, interfere with, damage or disrupt our site, the equipment or
                            network on which our site is stored, any software used in the provision of our site or any
                            server, computer or database connected to our site. You must not attack our site via a
                            denial-of-service attack or a distributed denial-of service attack. By breaching this
                            provision, you would commit a criminal offence under the Computer Misuse Act 1990. We will
                            report any such breach to the relevant law enforcement authorities and we will co-operate
                            with those authorities by disclosing your identity to them. In the event of any such breach,
                            your right to use our site will cease immediately.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Rules about linking to our site</div>
                    <div class="text-block">
                        <p>
                            You may link to our site, provided you do so in a way that is fair and legal and does not
                            damage our reputation or take advantage of it.
                        </p>
                        <p>
                            You must not establish a link to our site in any website that is not owned by you or in such
                            a way as to suggest any form of association, approval or endorsement on our part where none
                            exists.
                        </p>
                        <p>
                            Our site must not be framed on any other site and the website in which you are linking must
                            comply in all respects with the content standards set out above.
                        </p>
                        <p>
                            We reserve the right to withdraw linking permission without notice. If you wish to link to
                            our site or make any use of any content on our site other than as set out above, please
                            contact us at info@udex.co.uk.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">We are not responsible for websites we link to</div>
                    <div class="text-block">
                        <p>
                            Our site may contain links to other websites and resources provided by third parties,
                            including, without limitation, advertisers.
                        </p>
                        <p>
                            We have no control over the contents of those websites or resources or their availability
                            and any links to them are provided for your information only. You will need to make your own
                            independent judgement regarding your interaction with any such websites or resources,
                            including the purchase and use of any products and/or services accessible through them. We
                            are not responsible for, and do not endorse, their content or their privacy policies (if
                            any) and we will not be liable for any loss or damage that may arise from your use of them.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Breach of these terms of use</div>
                    <div class="text-block">
                        <p>

                            If we consider that you have failed to comply with, or have otherwise breached, these terms
                            of use, we may take such action as we deem appropriate, including all or any of the
                            following actions:
                        </p>
                        <ul>
                            <li>
                                Immediate, temporary or permanent withdrawal of your right to use our site.
                            </li>
                            <li>
                                Immediate, temporary or permanent removal of any content uploaded by you to our site.

                            </li>
                            <li>
                                Issue of a warning to you.

                            </li>
                            <li>
                                Legal proceedings against you for reimbursement of all costs on an indemnity basis
                                (including, but not limited to, reasonable administrative and legal costs) resulting
                                from the breach.
                            </li>
                            <li>
                                Further legal action against you.

                            </li>
                            <li>
                                Disclosure of such information to law enforcement authorities as we reasonably feel is
                                necessary or as required by law.

                            </li>
                        </ul>
                        <p>
                            We exclude our liability for all action we may take in response to breaches of these terms
                            of use. The actions we may take are not limited to those described above and we may take any
                            other action we reasonably deem appropriate.
                        </p>

                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Which country's laws apply to any disputes?</div>
                    <div class="text-block">
                        <p>
                            If you are a consumer user, please note that these terms of use are governed by English law
                            and you can bring legal proceedings in connection with them in the English courts. If you
                            live in Scotland, you can bring legal proceedings in either the Scottish or the English
                            courts. If you live in Northern Ireland, you can bring legal proceedings in either the
                            Northern Irish or the English courts.
                        </p>
                        <p>
                            If you are a business user, any dispute or claim arising out of, or in connection with,
                            these terms of use or their subject matter or formation (including non-contractual disputes
                            or claims) shall be governed by, and construed in accordance with, the laws of England and
                            Wales and the courts of England and Wales shall have exclusive jurisdiction to settle any
                            such dispute or claim.
                        </p>
                    </div>
                </div>
                <div class="col-12 term-section">
                    <div class="heading-block">Our trade mark</div>
                    <div class="text-block">
                        <p>
                            “udex” is the trade mark of BuildPathOne Limited. We reserve all rights in this trade mark,
                            the udex.co.uk domain name and all related domains and sub-domains and any other logos,
                            service marks, brand names, trading names and/or trade marks appearing anywhere on our site.
                        </p>
                        <p>
                            Other trade marks, products and company or brand names mentioned on our site may be the
                            trade marks of their respective owners or licensors and all rights in such trade marks are
                            reserved to their respective owners or licensors.
                        </p>
                        <p>
                            Save as otherwise set out herein, nothing in these terms of use should be construed as
                            granting any licence or right to use any of the trade marks or domain names referred to
                            above.
                        </p>
                        <p>
                            Thank you for visiting our site.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Review Section --}}
    @include('site.pages.other-pages.sections.review')
@endsection
