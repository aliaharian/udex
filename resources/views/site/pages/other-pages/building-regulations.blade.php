@extends('layouts.site.pages-master')

@section('page-title',  'Building regulations')

@section('page-style',  'pages/pages.min.css')

@section('content')
    <article class="container">
        <section class="page-info">
            <div class="row align-items-center">
<<<<<<< HEAD
                <div class="col-auto">
                    <div class="page-icon">
=======
                <div class="col-md-auto text-md-start text-center md-md-0 mb-3">
                    <div class="page-icon d-inline-block">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                        <svg width="52" height="81" xmlns="http://www.w3.org/2000/svg">
                            <path d="M48.8398 2.8961c4.3445 3.8972 2.939 11.1805 2.8111 16.4194 0 1.0222-.8944 1.9167-1.9166 1.9167-3.1306 0-6.325.0638-9.4555.0638.4472 19.2305.1277 38.461.3833 57.6915 0 1.0222-.8945 1.9167-1.9167 1.9167a728.7785 728.7785 0 0 1-23.6388 0c-1.0222 0-1.9166-.8945-1.9166-1.9167-.0639-9.2638-.4473-18.5916-.4473-27.8554.064-9.9028.1917-19.8694.2556-29.7722-3.45 0-6.836 0-10.286-.0639-1.0862 0-1.9167-.8944-1.9167-1.9166l-.1917-7.475c0 .3833-.0639-.3833-.0639-1.0861 0-1.0222.1278-2.0444.3194-3.0028C2.904-1.3205 14.2761.4045 21.3677.3405c1.0222 0 1.9167.8945 1.9167 1.9167v6.0055h5.1111V2.1933c0-.575.1916-.9583.5111-1.2777l.0639-.064.0638-.0638c.2556-.3195.7028-.5111 1.2778-.5111 5.4306 0 13.9278-1.5334 18.5277 2.6194zM4.3733 11.4572c0 .5111.064 1.0222.064 1.5333.0638 1.4695.0638 3.0028.1277 4.4722 14.4388.1278 28.8777 0 43.3165-.0639.3194-3.9611.8944-9.5833-1.7889-11.8194-1.3416-1.15-3.1305-1.4694-4.8555-1.5333-3.0028-.1278-6.0055-.0639-9.0083 0v6.0694c0 1.0222-.8945 1.9167-1.9167 1.9167h-8.9444c-1.0222 0-1.9167-.8945-1.9167-1.9167V4.11c-2.1083.0639-4.1527.0639-6.261.1278-2.0445.0639-4.3445-.1278-6.1972.9583C5.14 6.2822 4.4372 8.2628 4.3733 10.2433c0 .1917.064 1.2778 0 1.2139zM16.64 56.6265c0 3.0666.1278 6.1333.1917 9.1361 6.6444-3.7056 13.2889-7.475 19.9333-11.1806v-9.0083c-6.3889 3.6417-12.7778 7.2195-19.1666 10.7972-.3195.1917-.6389.2556-.9584.2556zm20.061-23.9583c-6.3889 3.5778-12.7139 7.1556-19.1027 10.7333-.3195.1917-.6389.2556-.9584.2556-.0638 2.4916-.0638 4.9833-.0638 7.475v1.4055L36.701 41.2293v-8.5611zm.0639 44.3388c-.0639-6.0056-.0639-12.0111-.0639-18.0166-6.3889 3.6416-12.7777 7.2194-19.1666 10.7971-.1917.1278-.4472.1917-.6389.2556.0639 2.3639.1278 4.6639.1278 7.0278 6.5805.1277 13.2249.1277 19.7416-.0639zm-.3195-55.711c-6.5166 0-13.0971.0639-19.6138.0639-.0639 6.0056-.1278 12.075-.1917 18.1444 6.6445-3.7055 13.2889-7.4111 19.9333-11.1805 0-2.3639-.0639-4.6639-.1278-7.0278z" fill="#ed7b00"/>
                        </svg>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="col-8">
=======
                <div class="col-md text-md-start text-center">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                    <div class="heading-title">Building regulations</div>
                    <div class="heading-desc">Create a safe and healthy home environment for your loved ones with these technical drawings.</div>
                </div>
            </div>
        </section>

        {{-- What are building regulations? --}}
        <section class="section-content pt-5" style="margin: 0 0 100px">
            <div class="row align-items-center gx-5">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_are_building_regulations.png" alt="What are building regulations?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">What are building regulations?</div>
                    <div class="text-block">
                        <p>They’re a set of statutory requirements that all buildings must meet in order to create a safe and healthy environment to inhabit.</p>
                        <p>They cover everything from the structure, thermal performance, sound-proofing, drainage, all the way to fire safety - to name just a few!</p>
                        <p>To ensure your project is in line with UK building regulations, we recommend you commission a set of technical drawings of your proposed build, so your contractor has detailed instruction on meeting all legal requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- What are building regulations --}}
        <section class="section-content pt-5" style="margin: 0 0 100px">
            <div class="row align-items-center gx-5">
                <div class="col">
                    <div class="text-block">
                        <p>This drawing package will be prepared by a UDEX technician, but will also need input from other specialist professionals, such as a structural engineer, party wall surveyor, and CCTV drainage surveyor.</p>
                        <p>At UDEX, we can help you find trusted professionals and then consolidate their work into a building regulations package. We will also help you through the application process, dealing with either your local authority or approved building control inspector.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_are_building_regulations_2.png" alt="What are building regulations?">
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ Items --}}
        <div class="section-content mb-5 pb-3">
            <div class="heading-block center mb-5">The details</div>
            <section class="faq-section">
                <div class="faq-list">
                    <div class="accordion" id="accordionPanelsFAQ">
                        <div class="accordion-item">
                            <div class="accordion-header collapsed" id="panelsStayOpen-heading-1" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-1" aria-expanded="true" aria-controls="panelsStayOpen-collapse-1">Who's involved?</div>
                            <div id="panelsStayOpen-collapse-1" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-1">
                                <div class="content-inner">
                                    <ul>
                                        <li>A member of our surveying team will be the one to visit your property, and get everything measured up.</li>
                                        <li>In areas we’re unable to reach, we’ll either use one of our trusted third parties, or help you source your own local surveyor.</li>
                                        <li>Once your survey has been completed, we’ll match you with a designer who's perfectly suited to your project.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed" id="panelsStayOpen-heading-2" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-2" aria-expanded="true" aria-controls="panelsStayOpen-collapse-2">Is the work that UDEX completes insured?</div>
                            <div id="panelsStayOpen-collapse-2" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-2">
                                <div class="content-inner">This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed" id="panelsStayOpen-heading-3" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-3" aria-expanded="true" aria-controls="panelsStayOpen-collapse-3">Is the work that UDEX completes insured?</div>
                            <div id="panelsStayOpen-collapse-3" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-2">
                                <div class="content-inner">This is a low cost exercise as the level of detail that we need to produce is much less than full planning. It gives the council a chance to give feedback on your project and issue guidance on the likelihood of you gaining their approval.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Stages of measured surveys --}}
        <div class="service-list-horizontal">
            <div class="heading-block center mb-5">Stages of measured surveys</div>

            <div class="list-items">
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="icon">
                                <svg width="97" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M24.5203.4692C34.5959.069 44.7524-.1723 54.8264.1485c4.7194.1603 9.596.4001 14.3138.9591 2.9584.3207 5.9168 1.1195 7.835 3.6793 2.1596 2.798 2.1596 6.3963 2.2406 9.6754.2398 4.6384.3207 9.2752.4001 13.9136 0 1.28 0 2.5582.0795 3.8381 4.5574.0794 9.9946 0 13.5135 2.4788 5.1164 3.5983 3.5189 12.7942 3.36 18.152-.0809 4.478-.1619 9.0354-.4017 13.5134-.1588 2.879.1604 6.7171-1.2783 9.3562-1.7595 3.2776-5.5975 3.6778-9.1164 3.5983.4001 3.4365.8003 6.957 1.1989 10.3948.2398 2.1581-2.7186 2.9584-4.0779 1.68-2.4788-2.3199-4.8782-4.6384-7.357-6.9583a4191.6218 4191.6218 0 0 1-4.4765-4.2367c-.4001-.3208-.8797-1.1195-1.3593-1.2799l-.0809-.081c-.2398.2414-1.7594.4811-1.7594.4811-4.6369.559-9.6755 0-14.3933 0-3.5173 0-7.6762.6384-11.0347-.6414-6.0771-2.3979-5.7579-10.7934-5.6769-16.7117-1.4403-.0794-2.9584-.0794-4.3987-.0794-5.9976 5.2768-11.9129 10.6345-17.9121 15.913-1.6785 1.5195-4.7957.0793-3.9969-2.3186 1.4387-4.478 2.8774-9.037 4.3177-13.515-5.2784.081-11.0347-.4796-12.6338-6.3963-1.121-4.3177-.8797-9.3577-1.0401-13.7533C.8518 36.4523.7709 31.0945.7709 25.6573c0-4.878-.1589-9.8357.4001-14.633.3207-2.7995 1.28-5.3577 3.519-7.1966C9.7269-.25 18.4432.7075 24.5203.4677zm55.4943 36.5421c.1603 6.3168.0809 12.9545-1.8389 18.552-2.7186 7.835-12.1542 6.3169-18.6315 6.3169-5.9961.0794-11.9129.0794-17.9121.0794-.1588 3.5983-.3986 8.8767 1.5197 11.1951 2.239 2.6392 9.1164 1.2799 12.4749 1.2799h12.394c1.9992 0 3.5189-.2398 5.1164.9591 2.9599 2.3184 5.758 5.1164 8.4765 7.8366-.2397-2.0787-.4795-4.2383-.7178-6.3964-.1604-1.2798 1.1989-2.3993 2.3979-2.3993 1.1195 0 2.3184.0794 3.5189 0 3.6777-.1604 4.3176-1.2799 4.5574-4.8782.4001-5.2768.559-10.6346.559-15.9129 0-3.9969 1.6006-14.3123-3.0393-15.7525-2.7186-.7988-5.9152-.7988-8.8736-.8797zm-32.145-32.145c-7.5158-.0794-15.0332.0794-22.549.4001-3.2791.1604-6.6376.3208-9.9152.4796-2.5597.1604-6.0786.1604-8.0763 2.1596-2.32 2.3184-1.5991 7.1172-1.68 10.0756-.0795 3.5983-.0795 7.1966-.0795 10.7949 0 7.4364.3207 14.8728.7988 22.3092.1604 2.1596.1604 4.2382 2.239 5.3577 1.4402.7988 3.1997.64 4.7988.64 1.599.0794 3.1187.0794 4.8781.0794 1.5182 0 2.7981 1.5991 2.3185 3.0393-.9592 2.8774-1.8389 5.6769-2.7186 8.4765 3.9985-3.5189 8.0763-7.1172 12.0748-10.7155.3986-.4811.9591-.7209 1.7579-.7209 7.9969.0809 16.0733 0 24.1496 0 3.7571 0 7.5968.1604 11.3539.0809 2.7995-.0809 5.4372-.5605 6.5582-3.5983.7178-2.0007.7178-4.5589.8797-6.6376.559-6.9568.3192-13.9931.1589-20.9499-.0794-3.8381-.1589-7.7571-.3208-11.5952-.1588-3.6777 0-7.1966-4.1573-8.3956-3.5173-.959-7.9159-.8003-11.5937-.959-3.6792-.1605-7.2775-.2414-10.8743-.3208zm4.6384 25.4294c1.2798-1.2004 3.1981-1.2004 4.3986.1589 1.0385 1.1195.9591 2.7186.0794 3.919-.0809.1589-.1604.2398-.2398.3192-.0809.1604-.2398.1604-.3207.2398-1.2784.8797-3.0393.8003-4.0779-.559-1.0385-1.2004-1.0386-2.9599.1604-4.0779zm-13.3547-.4001c1.2799-1.2005 3.1997-1.2005 4.3986.1588 1.0386 1.1195.9592 2.7186.0794 3.9191-.0794.1588-.1588.2397-.2397.3207-.0795.1588-.2398.1588-.3208.2383-1.2783.8797-3.0378.8003-4.0779-.559-1.0385-1.2005-1.0385-2.9584.1604-4.0779zm-13.2722-.3207c1.2784-1.199 3.1982-1.199 4.3971.1603 1.0386 1.1195.9591 2.7186.0794 3.9175-.0794.1604-.1588.2398-.2398.3208-.0794.1588-.2398.1588-.3207.2397-1.2783.8798-3.0378.7194-4.0779-.4795-1.0385-1.2799-1.0385-3.0393.1604-4.1588z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Introduction</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">This first conversation between you and your assigned UDEX technician will be an opportunity to ask us any questions you have on the whole process, and shouldn't take longer than 15 minutes.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="icon">
                                <svg width="96" height="76" xmlns="http://www.w3.org/2000/svg"><path d="M38.3006 36.2588c35.5273 0 37.4252 36.8179 37.4252 37.1974 0 .6073-.2278 1.2146-.6073 1.6701-.3796.4555-.9869.6833-1.5942.6833H2.2418c-.6073 0-1.2146-.2278-1.6701-.7592s-.6832-1.0628-.6073-1.6701c0-.3795 2.8847-37.1215 38.3362-37.1215zm.0759 4.5548c-13.0571 0-22.6981 5.4657-28.6193 16.1695-3.1124 5.5416-4.403 11.1592-4.9344 14.2717h66.1963c-.9868-7.5914-6.1489-30.4412-32.6426-30.4412zM79.2937 19.482c16.5491 0 16.7009 16.4731 16.7009 16.7009.0759 1.2146-.9869 2.2774-2.2015 2.2774H64.6424c-.6073 0-1.2146-.2278-1.5941-.6833-.4555-.4554-.6833-.9868-.6833-1.6701.076-5.7694 3.7957-16.6249 16.9287-16.6249zm0 4.5547c-8.8819 0-11.387 6.3008-12.0702 9.8688h23.9886c-.2278-1.1387-.6074-2.5811-1.3665-4.0234-1.9737-3.8716-5.5416-5.8454-10.5519-5.8454zM38.3765.2c4.4029 0 8.73 1.8978 12.1461 5.3898 3.1883 3.1884 5.0862 7.1359 5.0862 10.7038 0 8.2745-4.5548 17.1564-17.2323 17.1564-12.0702 0-17.6878-10.1724-17.6878-17.0046C20.6887 8.3986 26.7617.2 38.3765.2zm0 4.5548c-10.4001 0-13.133 7.6672-13.133 11.6906 0 5.0103 4.1752 12.4498 13.133 12.4498 3.7956 0 12.6775-1.2146 12.6775-12.6016 0-4.5548-5.6935-11.5388-12.6775-11.5388zM79.1418.2759c4.5548 0 8.1987 3.492 8.1987 7.7432 0 4.7825-3.4161 8.3504-8.2746 8.3504-5.1621 0-7.819-4.1752-7.819-8.3504 0-4.403 3.4161-7.7432 7.8949-7.7432zm0 4.4789c-2.2773 0-3.3401 1.67-3.3401 3.1883 0 .6073.1518 3.7957 3.2642 3.7957 3.492 0 3.7198-2.8847 3.7198-3.7957 0-1.9737-1.8219-3.1883-3.6439-3.1883z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Choosing your professional consultants</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">If you haven’t already got the rest of your professionals in place, we’ll introduce you to our trusted partners. This includes: structural engineers, party wall surveyors, and CCTV drainage surveyors.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="icon">
                                <svg width="96" height="82" xmlns="http://www.w3.org/2000/svg"><path d="M43.9019 0c21.8515 0 36.7744 15.4559 38.9063 40.3528.5329 5.9388.8375 19.1867.8375 29.0084h6.9285c2.4364 0 4.416 1.9034 4.6444 4.2637l.3807 5.9387c.1522 1.2182-.7614 2.3603-2.0558 2.4364h-.1522c-1.2182 0-2.208-.9137-2.2842-2.1319l-.4568-5.7864-7.0046-.0761v1.5989c-.0762 3.5023-2.9694 6.3194-6.4717 6.3194-.2219 0-23.651-.3593-32.5276-.3798l-.7445-.0009c-3.2739 0-6.3955-.4569-9.441-1.1421-2.3603 0-21.2423.4568-24.973.6091H9.107c-3.1977 0-6.2432-1.5989-7.6898-4.0353-1.1421-1.9795-1.1421-4.3398.0761-6.4716.533-.9898 1.2943-2.1319 2.1318-3.4262 1.3705-2.1319 3.883-6.0149 4.1876-7.3854-3.0455-5.6341-4.7205-12.1058-4.7205-18.9582C3.0923 18.273 21.3653 0 43.9019 0zm0 4.4921c-20.0241 0-36.3175 16.2173-36.3937 36.2414 0 20.0242 16.2935 36.2414 36.2415 36.2414 8.0618 0 31.7149.3593 33.2693.3798l.0789.0009c1.0659 0 1.9034-.8375 1.9034-1.9034.2284-9.2888-.1523-27.5618-.7614-34.7948-1.9034-22.6128-14.7706-36.1653-34.338-36.1653zm-33.272 59.844c-.8375 1.4466-1.9035 3.1217-3.1978 5.1774-.7614 1.2182-1.5227 2.3602-2.0557 3.2739-.3807.6852-.4568 1.2182-.0761 1.8273.6852 1.142 2.3602 1.9034 3.9591 1.8273 2.0557-.0762 8.4513-.2284 14.3139-.3807-5.1013-2.8932-9.5172-6.9285-12.9434-11.7252zm33.6527-39.5914c8.9081 0 16.1412 7.3092 16.1412 16.1411 0 8.9081-7.2331 16.1411-16.1412 16.1411-8.908 0-16.1411-7.233-16.1411-16.1411 0-8.8319 7.2331-16.1411 16.1411-16.1411zm0 4.5682c-6.3955 0-11.5729 5.1774-11.5729 11.5729 0 6.3955 5.1774 11.5729 11.5729 11.5729 6.3956 0 11.5729-5.1774 11.5729-11.5729 0-6.3955-5.1773-11.5729-11.5729-11.5729z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Initial specialist work</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">Your selected professionals will carry out their specialised assessment of both your home and our proposed design. They will most likely require a home visit, in order to inform their work, which will then get passed on to UDEX.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="icon">
                                <svg width="96" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M95.2064 89.3962c.0789 1.2625-1.1046 2.3671-2.3671 2.3671-6.3911.0789-12.7032.2367-19.0154.2367-1.2624 0-2.3671-1.1046-2.3671-2.3671 0-2.8405 0-5.7598-.0789-8.6003a849.2625 849.2625 0 0 0-44.8164.9468c0 2.3671-.0789 4.7341-.0789 7.1012 0 1.2624-1.1047 2.3671-2.3671 2.3671-6.5489-.0789-13.0978 0-19.6467-.2367-.5523-.0789-1.0257-.2367-1.4202-.5523-.5523-.3945-.9468-.9469-.9468-1.8148 0-6.1544-.079-12.3087-.079-18.4631 0-1.3413 1.1047-2.2882 2.3671-2.3671 1.4992-.0789 3.0772-.1578 4.5764-.2367-.079-15.3859-.079-30.693-.079-46.0789H2.733c-1.4202 0-2.2093-1.1046-2.367-2.3671C-.2654 13.6501.1291 8.048.0502 2.367.0503 1.1047 1.155 0 2.4173 0c6.3912 0 12.7033 0 19.0155.0789 1.2624 0 2.3671 1.1046 2.3671 2.367v6.1544c15.0703-.1578 30.0617-.3156 45.1321-.4734 0-1.8936.0789-3.8662 0-5.7598C68.932 1.1046 70.0366 0 71.299 0c6.3911 0 12.7033 0 19.0155.0789 1.2624 0 2.367 1.1046 2.367 2.367-.0789 5.6021 0 11.2042-.2367 16.8062-.0789.4735-.1578.868-.3945 1.1836-.3156.6312-.9468 1.1835-1.9725 1.1835h-6.0755c.3945 15.2281.7101 30.4563 1.0257 45.6844 2.446-.0789 4.813-.0789 7.259-.1578 1.4203 0 2.2093 1.1046 2.3671 2.3671.6312 6.6277.3945 13.1766.5523 19.8833zM76.2699 87.187c4.7341 0 9.4682-.0789 14.2024-.1578-.1578-5.0498 0-10.0206-.3945-15.0704-4.6553.0789-9.3105.2367-13.9657.3156-.0789 4.9709.0789 9.9417.1578 14.9126zm11.5197-70.223c.1578-4.1029.1578-8.127.1578-12.151-4.7341-.0789-9.4683-.0789-14.2024-.0789 0 4.103-.1578 8.127.0789 12.2299a412.0295 412.0295 0 0 1 13.9657 0zm-68.8028 0c.1578-4.1029.1578-8.127.1578-12.151-4.7341-.0789-9.4682-.0789-14.2023-.0789 0 4.103-.1579 8.127.0789 12.2299a412.0266 412.0266 0 0 1 13.9656 0zm2.8405 55.5472c-5.0497 0-10.0206-.1579-15.0703.0788.0789 4.6553.0789 9.3105.0789 13.9657 5.0497.1578 10.0206.1578 14.9914.1578a426.1076 426.1076 0 0 0 0-14.2023zm49.5506 3.7873a84.195 84.195 0 0 1 0-6.3122c0-.7101.2367-1.1836.6312-1.5781.0789-.0789.0789-.1578.1578-.1578.3946-.3945.868-.6312 1.5781-.6312 2.2093-.0789 4.3396-.0789 6.5489-.1578-.3945-15.2281-.7101-30.5352-1.0257-45.7633h-7.6536c-1.4202 0-2.2092-1.1046-2.367-2.3671-.2367-2.1303-.3156-4.3396-.3156-6.4699-15.0704.1578-30.0618.3156-45.1321.4734 0 1.9725-.0789 3.9451-.1578 5.9176 0 .4735-.0789.868-.3156 1.1836-.3945.6312-1.0258 1.1835-2.0515 1.1835h-7.5746c.0789 15.3859.0789 30.693.0789 46.0789 3.4717 0 6.9434.0789 10.494 0 1.2624 0 2.3671 1.1046 2.3671 2.3671v7.1801a846.2774 846.2774 0 0 1 44.7375-.9468z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">UDEX drawings</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">When all the information has been supplied to UDEX by your selected consultants, our technician will get to work consolidating everything into a set of highly detailed architectural drawings.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="icon">
                                <svg width="97" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M28.1556 45.8471c1.4523-1.0701 3.4397.3822 3.4397 1.9874 0 2.1402.0764 4.3569.0764 6.5735 20.7908-.4586 41.5815.1529 62.2958.4586 1.2994 0 2.2931 1.0702 2.2931 2.2931.0764 7.7201.2293 15.4402.3058 23.3132 0 1.2994-1.0702 2.2931-2.2931 2.2931-20.9437.6115-41.8873.4586-62.8309.3057-.0764 2.2167-.1529 4.3569-.2293 6.5736-.0764 1.6051-1.9109 3.0574-3.4397 1.9873-8.2551-5.962-17.1982-12.0005-24.7654-18.9562-2.5988-2.6753-4.739-4.8155-1.1465-7.5673 2.981-2.2931 6.1149-4.5097 9.1723-6.8028 5.7328-4.204 11.3891-8.3316 17.1218-12.4592zm-1.0701 6.5736c-3.5161 2.4459-6.9557 4.9683-10.3954 7.4908-3.1339 2.2166-6.2678 4.5097-9.3252 6.8028-.3058.3058-1.223 1.1466-1.9874 1.7581.3058.3057.535.6879.8408.9936l1.4635 1.3123c5.9201 5.2074 12.6067 9.9239 19.098 14.5101.0764-1.5287.0764-3.0575.1528-4.5862.0765-1.223.9937-2.2931 2.2931-2.2931 20.9437.1529 41.8873.3058 62.8309-.0764-.0764-6.2678-.2293-12.4592-.3058-18.727-20.7143-.3822-41.505-.9172-62.2958-.3822-1.2229 0-2.293-1.0701-2.293-2.2931-.0765-1.5287-.0765-3.0574-.0765-4.5097zM65.686 2.3547C65.7624.7496 67.5969-.7027 69.1256.3674c8.1787 5.8091 16.8925 11.6948 24.3069 18.4976 2.4459 2.5224 4.739 4.6627 1.2994 7.3379-2.9811 2.2931-6.0385 4.5098-9.096 6.7264-5.5798 4.0512-11.1597 8.1788-16.816 12.2299-1.4523 1.0701-3.4397-.3822-3.4397-1.9874 0-2.1402-.0764-4.2804-.0764-6.4206-20.2557.4586-40.5878-.1529-60.92-.4586-1.2994-.0765-2.293-1.0702-2.3695-2.1403-.1529-7.6436-.2293-15.2108-.3822-22.7781 0-1.2994 1.0701-2.293 2.2931-2.293 20.5615-.6115 41.0465-.4587 61.5315-.3058zm4.4333 4.204c-.0764 1.4523-.0764 2.9046-.1529 4.3569-.0764 1.223-.9936 2.2931-2.2931 2.2931-20.4085-.1529-40.8935-.3822-61.302.2293.0763 6.1149.2292 12.1534.3056 18.2684 20.2557.3821 40.5879.9172 60.92.3821 1.223 0 2.2931 1.0702 2.2931 2.2931.0764 1.4523.0764 2.8282.0764 4.2805l10.0897-7.3379c3.1339-2.2931 6.3442-4.5862 9.4781-6.9557.3057-.1529.9172-.7644 1.5287-1.2995-.3057-.3822-.6115-.6879-.8408-.9936l-.0764-.0765c-6.1149-5.5798-13.2235-10.6247-20.0264-15.4402z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Revisions and feedback</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">We present our work back to both yourself, your structural engineer, and (if in use) your approved building control inspector, making any revisions from the feedback we receive.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="icon">
                                <svg width="78" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M34.8132 20.3656c15.3511-1.9551 31.2816 6.0101 38.0882 20.1303 6.4446 13.396 4.1999 29.3265-6.2997 39.9709-11.0789 11.1513-28.0955 14.627-42.5778 8.6169-.0724 0-.1448-.0724-.2172-.0724-.1448-.0724-.2172-.0724-.362-.1448C7.7315 81.915-1.5372 64.8984 2.8799 47.9542c3.8378-14.6994 17.0166-25.6335 31.9333-27.5886zm31.9333 18.2476c-7.748-11.5858-22.8095-16.6545-36.1331-12.9616C17.7242 29.2722 7.297 40.6407 6.2108 54.254c-1.0861 13.5409 7.0963 25.2715 19.189 30.7747 14.3373 5.7929 30.9919 1.8103 40.695-10.4996 8.11-10.2824 7.8928-25.1991.6517-35.9159zm-12.5996 5.2136c2.1-1.8827 5.1412 1.231 3.0413 3.1137-8.7617 7.748-17.5959 15.3511-26.5748 22.8819-1.0138.8689-2.6793.8689-3.4034-.4345-2.3895-4.3447-4.7067-8.6169-7.0963-12.8892-1.3033-2.4619 2.3896-4.6343 3.7654-2.1723 1.9551 3.5481 3.9102 7.0239 5.8653 10.572 8.1825-6.9514 16.2925-13.9753 24.4025-21.0716zm20.1303-30.7747c1.8827-2.0999 4.9964 1.0137 3.0413 3.0413-2.8965 3.186-5.7205 6.4445-8.6169 9.6306-1.8103 2.1-4.924-.9413-3.0413-3.0412 2.8965-3.1861 5.7205-6.4446 8.6169-9.6307zM.8524 15.9485c-1.8827-2.0275 1.1586-5.1411 3.0413-3.0412 2.8964 3.1861 5.7205 6.4446 8.6169 9.6306 1.8827 2.1-1.1586 5.1412-3.0413 3.0413C6.573 22.3931 3.749 19.1346.8524 15.9485zM37.1303 2.118c.0725-2.824 4.4171-2.824 4.3447 0 0 4.2723-.0724 8.6169-.1448 12.8892-.0724 2.824-4.4171 2.824-4.3447 0 0-4.2723.0724-8.617.1448-12.8892z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Finalising</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">Once edits have been made, we package up our drawings, ready for submission. This gives you a comprehensive drawing and specification package, which will ensure your project is built to the correct and approved standards laid out in UK building regulations.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto center">
=======
                        <div class="col-md-auto center col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <span class="step">Next step:</span>
                            <div class="icon">
                                <svg width="102" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M99.16 17.3139c1.338 0 2.44.787 2.44 2.1249 0 1.3379-1.023 2.361-2.3613 2.361H76.4945v6.296c0 2.2823-1.8101 4.0924-4.0924 4.0924h-3.7776v4.1711c0 1.2592-.551 2.4397-1.574 3.2267-1.0231.7083-2.2823.9444-3.5415.6296l-.3148-.0787c-1.574-.4722-4.5646-1.3379-6.6895-1.4953-3.3054-.3148-9.6013-.3935-14.6381 1.7314-.4722 2.1249 0 3.6989.5509 5.4303.3148.9444.6296 1.8887.7083 2.9118.236 2.2823-1.338 4.3285-3.5415 4.6433H33.367c-.4722 3.6202-.1574 7.083 1.1018 9.5227 1.023 2.0462 2.597 3.3054 4.722 3.7776 4.171.8657 7.7126.8657 10.5457.787 3.2267 0 5.509-.0787 7.2404 1.3379.9444.8657 2.7545 2.2823 2.2823 19.124C59.1805 90.1899 57.3704 92 55.088 92H4.8777C2.674 92 .7853 90.2686.7066 88.065c0-.1574-.8657-18.1009.787-26.5218 1.2592-6.3747 3.8563-11.9624 5.8238-16.0547.9444-1.8888 2.0462-4.2498 2.2036-5.1942-.6296-.3935-2.2823-.8657-3.2267-1.1018-2.5184-.6296-5.1155-1.3379-5.4303-3.8563-.2361-1.6527.1574-18.0223.5509-31.4012C1.4936 1.7314 3.225 0 5.4286 0H64.532c2.2036 0 4.0137 1.81 4.0137 4.0137V6.532h3.7776c2.2823 0 4.0924 1.81 4.0924 4.0924v6.6894zM38.325 48.9512c-.0787-.3935-.2361-.8657-.3935-1.4166-.3148-1.0231-.7083-2.2035-.8657-3.5414-.7083.787-1.3379 1.7314-1.8101 2.7545-.3148.7082-.6296 1.4952-.8657 2.2035zM63.9025 35.651a41.0858 41.0858 0 0 0-.0787-.0239v.0239zm-.0787-.0239V4.8007H6.0582c-.3935 15.1103-.6296 26.3644-.551 29.355.551.2361 1.4167.4722 2.0463.6296 2.597.7083 5.509 1.4953 6.4534 4.0137.8657 2.1249-.3935 4.6433-2.361 8.893-1.9675 4.0137-4.3285 9.0505-5.509 14.953-1.2592 6.296-.9444 19.5962-.7083 24.8691h49.1873c.2361-9.5227-.3935-13.7724-.787-14.8742-.6296-.2361-2.5184-.1574-4.0137-.1574-2.9118 0-6.9255.0787-11.6475-.9444-3.5415-.7083-6.296-2.9119-7.9487-6.2173-2.7545-5.2729-2.4397-13.3003.7083-20.4619 2.0462-4.5646 8.0274-11.9624 25.9709-10.6245 2.327.1551 5.1128.8455 6.9256 1.3927zm4.8007-24.373v16.4482h3.0693V11.2541zM22.5851 9.5227c3.3841 0 6.1386 2.7545 6.1386 6.1385 0 3.3841-2.7545 6.1386-6.1386 6.1386s-6.1385-2.7545-6.1385-6.1386c0-3.384 2.7544-6.1385 6.1385-6.1385zm0 4.722c-.787 0-1.4166.6296-1.4166 1.4165 0 .787.6296 1.4166 1.4166 1.4166s1.4166-.6296 1.4166-1.4166a1.4107 1.4107 0 0 0-1.4166-1.4165z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Connect</div>
                        </div>
<<<<<<< HEAD
                        <div class="col">
=======
                        <div class="col-md col-12">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            <div class="excerpt">
                                Drawings in hand, your next step will be to put your project out for tender. This is when you’ll select the contractor who’ll construct your project.
                                <br><br>
                                It is useful to note at this stage that your home improvement may require further decision making when you get to site. If, for example, you have any external finishes requiring specialist input or any complex junction details, your contractor can make adjustments to your design.
                                <br><br>
                                This also gives you the freedom to make minor changes on site with the agreement and approval of your contractor.
                                <br><br>
                                At UDEX, we offer a complimentary Connect service, whereby you’re introduced to vetted contractors in your area. This ensures you're in safe hands for the rest of your home journey.
                                <br><br>
                                If you do not need planning permission, then this exercise will help you get ready for the build, which could include building regulations and more.
                            </div>
                            <div class="read-more"><a href="{{ url('find-a-builder-for-your-project') }}" >Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
