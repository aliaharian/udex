@extends('layouts.site.pages-master')

@section('page-title',  'Planning')

@section('page-style',  'pages/pages.min.css')

@section('content')
    <article class="container">
        <section class="page-info">
            <div class="row align-items-center">
                <div class="col-md-auto text-md-start text-center md-md-0 mb-3">
                    <div class="page-icon d-inline-block">
                        <svg width="70" height="93" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.9843 24.379c-6.0183 5.2484-12.0367 10.4238-18.2018 15.5264 1.1743.1458 2.2752.2916 3.4496.4373l-4.844-8.7472c-1.3946-2.4784-5.211-.2916-3.8166 2.1868l4.844 8.7473c.734 1.312 2.422 1.312 3.4496.4373 6.0917-5.1025 12.1834-10.278 18.2018-15.5264 2.2018-1.8223-.9542-4.8838-3.0826-3.0615z" fill="#ff6400"/>
                            <path d="M66.7811 83.4939c-4.2568-1.2392-8.5871-2.4784-12.844-3.7176-1.5412 3.7176-3.0091 7.4352-4.5504 11.1528-.8807 2.1139-3.3761 2.041-4.2569 0-3.3761-8.1641-6.6788-16.4011-10.2017-24.4923-.0734 0-.2202-.0729-.2936-.0729-3.3762 8.237-6.8257 16.4011-10.2752 24.5652-.8807 2.041-3.3762 2.1139-4.2569 0-1.5413-3.7176-3.0091-7.4352-4.5504-11.1528-4.2569 1.2392-8.5872 2.4784-12.844 3.7176-1.9817.5832-3.2294-1.6036-2.4954-3.2073C4.2493 71.102 8.506 61.9903 12.763 52.9514 6.7447 47.4115 2.7814 39.7576 2.4878 31.3748 2.0474 17.9624 11.3685 6.0078 23.9923 1.78 36.1024-2.3021 50.0473.6865 58.561 10.2356c8.9541 10.0594 10.422 24.3466 3.6697 35.9367-1.5413 2.4784-3.4495 4.6652-5.578 6.6333 4.2569 9.1118 8.5138 18.2235 12.6239 27.4081.7339 1.6766-.4404 3.8634-2.4955 3.2802zM29.7905 56.669c11.3027 2.041 22.6054-3.1344 28.6237-12.6835 6.6055-11.2257 3.9633-25.2942-6.0917-33.677-18.055-15.089-49.688.5832-45.064 24.6381 2.1284 11.1528 11.5228 19.7543 22.532 21.7224zm-7.5596 27.9183c3.2293-7.7267 6.532-15.4534 9.6146-23.1802-2.6422-.2187-5.2844-.8018-7.9266-1.7494-2.7156-1.0206-5.2844-2.3326-7.633-3.9363-3.4495 7.4352-6.899 14.7974-10.2752 22.2326 3.4496-1.0205 6.8257-1.9681 10.2018-2.9886 1.2477-.3645 2.2752.4373 2.7156 1.5307zm31.0457-9.6948c3.3761 1.0934 6.7523 2.041 10.1284 2.9886-3.3761-7.4352-6.8257-14.7974-10.2752-22.2326-4.6238 3.2073-10.055 5.1755-15.633 5.6857 3.3762 7.6539 6.6055 15.4535 9.7615 23.1803 1.1009-2.6971 2.2018-5.3213 3.3027-8.0184.4404-1.0934 1.4679-1.8952 2.7156-1.6036z" fill="#ff6400"/>
                            <path d="M66.7811 83.4939c-4.2568-1.2392-8.5871-2.4784-12.844-3.7176-1.5412 3.7176-3.0091 7.4352-4.5504 11.1528-.8807 2.1139-3.3761 2.041-4.2569 0-3.3761-8.1641-6.6788-16.4011-10.2017-24.4923-.0734 0-.2202-.0729-.2936-.0729-3.3762 8.237-6.8257 16.4011-10.2752 24.5652-.8807 2.041-3.3762 2.1139-4.2569 0-1.5413-3.7176-3.0091-7.4352-4.5504-11.1528-4.2569 1.2392-8.5872 2.4784-12.844 3.7176-1.9817.5832-3.2294-1.6036-2.4954-3.2073C4.2493 71.102 8.506 61.9903 12.763 52.9514 6.7447 47.4115 2.7814 39.7576 2.4878 31.3748 2.0474 17.9624 11.3685 6.0078 23.9923 1.78 36.1024-2.3021 50.0473.6865 58.561 10.2356c8.9541 10.0594 10.422 24.3466 3.6697 35.9367-1.5413 2.4784-3.4495 4.6652-5.578 6.6333 4.2569 9.1118 8.5138 18.2235 12.6239 27.4081.7339 1.6766-.4404 3.8634-2.4955 3.2802zM29.7905 56.669c11.3027 2.041 22.6054-3.1344 28.6237-12.6835 6.6055-11.2257 3.9633-25.2942-6.0917-33.677-18.055-15.089-49.688.5832-45.064 24.6381 2.1284 11.1528 11.5228 19.7543 22.532 21.7224zm-7.5596 27.9183c3.2293-7.7267 6.532-15.4534 9.6146-23.1802-2.6422-.2187-5.2844-.8018-7.9266-1.7494-2.7156-1.0206-5.2844-2.3326-7.633-3.9363-3.4495 7.4352-6.899 14.7974-10.2752 22.2326 3.4496-1.0205 6.8257-1.9681 10.2018-2.9886 1.2477-.3645 2.2752.4373 2.7156 1.5307zm31.0457-9.6948c3.3761 1.0934 6.7523 2.041 10.1284 2.9886-3.3761-7.4352-6.8257-14.7974-10.2752-22.2326-4.6238 3.2073-10.055 5.1755-15.633 5.6857 3.3762 7.6539 6.6055 15.4535 9.7615 23.1803 1.1009-2.6971 2.2018-5.3213 3.3027-8.0184.4404-1.0934 1.4679-1.8952 2.7156-1.6036z" fill="#ff6400"/>
                            <path d="M44.9843 24.379c-6.0183 5.2484-12.0367 10.4238-18.2018 15.5264 1.1743.1458 2.2752.2916 3.4496.4373l-4.844-8.7472c-1.3946-2.4784-5.211-.2916-3.8166 2.1868l4.844 8.7473c.734 1.312 2.422 1.312 3.4496.4373 6.0917-5.1025 12.1834-10.278 18.2018-15.5264 2.2018-1.8223-.9542-4.8838-3.0826-3.0615z" fill="#ff6400"/>
                        </svg>
                    </div>
                </div>
                <div class="col-md text-md-start text-center">
                    <div class="heading-title">Planning and Support</div>
                    <div class="heading-desc">With our in-house planning agents, UDEX gives your project the best chance of first-time success.</div>
                </div>
            </div>
        </section>

        {{-- What is proposed design --}}
        <section class="section-content pt-5" style="margin: 0 0 100px">
            <div class="row align-items-center gx-5">
                <div class="col-auto">
                    <div class="image-block">
                        <img src="{{ asset('public/assets/site/images/example') }}/What_is_proposed_design_planning.png" alt="What is proposed design?">
                    </div>
                </div>
                <div class="col">
                    <div class="heading-block">What is proposed design?</div>
                    <div class="text-block">
                        <p>During planning we’ll help you apply for one of two things: planning permission or a lawful development certificate.</p>
                        <p>A lawful development certificate is recommended if your project comes under your permitted development rights. It’s proof to both your local authority and future buyers that your build was legal at the point of construction.</p>
                        <p>If your project doesn’t come under permitted development rights, you are legally required to obtain planning permission, whereby your local authority will assess your proposed design.</p>
                        <p>In both scenarios, we’ll help put together a planning package that includes: your existing drawings, proposed designs, plus the verifying information required by your planning authority. Applications typically take 8 weeks to reach a decision. During this time, our planning agents will liaise with the council on your behalf, ensuring you have the best chance of first time approval.</p>
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
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="96" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M89.4645 0c3.4819 0 6.2674 2.863 6.19 6.2675v70.4121C95.6545 84.1077 91.8631 92 84.8219 92H14.5645C4.0415 92 .25 86.2742.25 80.8579V44.5685c0-3.1724 2.6308-5.8032 5.8032-5.8032h15.4752c.2321-14.7014.4642-28.7838.5416-33.968C22.07 2.1665 24.3139 0 26.9447 0zM6.0532 43.4853c-.619 0-1.1606.5416-1.1606 1.1606v36.2893c0 5.6485 6.0353 6.4996 9.6719 6.4996 5.8806 0 6.3449-4.6425 6.3449-6.0353 0-2.0892.3095-19.8856.5416-37.9142zM27.0221 4.6426c-.1548 0-.2322.0773-.2322.232-.2321 12.0707-1.1606 72.5013-1.1606 76.4475 0 2.0892-.5416 4.2557-1.7023 6.0353h60.9723c4.1783 0 6.1901-6.3448 6.1901-10.6778h.0773V6.2675c0-.9286-.7737-1.625-1.6249-1.625zm56.0202 64.4541c1.238 0 2.2439 1.0059 2.2439 2.3213s-1.0059 2.3213-2.3213 2.3213H38.319c-1.3154 0-2.3213-1.0059-2.3213-2.3213s1.0059-2.3213 2.3213-2.3213zm0-17.7191c1.238 0 2.2439 1.0059 2.2439 2.3213s-1.0059 2.3213-2.3213 2.3213H38.319c-1.3154 0-2.3213-1.0059-2.3213-2.3213s1.0059-2.3213 2.3213-2.3213zm0-17.7191c1.238 0 2.2439 1.0059 2.2439 2.3213s-1.0059 2.3213-2.3213 2.3213H38.319c-1.3154 0-2.3213-1.0059-2.3213-2.3213s1.0059-2.3213 2.3213-2.3213zm0-17.7964c1.238 0 2.2439 1.0059 2.2439 2.3212 0 1.3154-1.0059 2.3213-2.3213 2.3213H38.319c-1.3154 0-2.3213-1.0059-2.3213-2.3213 0-1.3153 1.0059-2.3212 2.3213-2.3212z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Preparation</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">Our planning team will work with your designer to package up your project, ready for submission.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="110" height="92" xmlns="http://www.w3.org/2000/svg"><path d="m103.753 56.0659-25.3077.6322a39.2259 39.2259 0 0 0 .1921-3.8559c0-3.2466-.4034-6.399-1.1526-9.4169h26.2682zm-6.0933 18.9372H71.7399c2.6382-3.8284 4.6114-8.1481 5.7559-12.7906l20.1639-.5041zm-58.181 11.5081c-18.5658 0-33.67-15.1032-33.67-33.669 0-18.5658 15.1042-33.6708 33.67-33.6708 18.5658 0 33.6699 15.105 33.6699 33.6708s-15.1041 33.669-33.6699 33.669zm9.5578-81.0206 54.2815.0659v12.7467H57.9082a38.85 38.85 0 0 0-8.8717-3.435zm48.1154 32.4459H75.6817c-2.2458-5.4357-5.6772-10.2603-9.9758-14.1445h31.446zm5.4891 0V23.792h2.285c2.14 0 3.88-1.7409 3.88-3.8806V3.9501c0-2.1388-1.739-3.8788-3.876-3.8806L47.4338 0h-.0055c-1.0356 0-2.0098.4025-2.7417 1.1343-.7346.7328-1.1389 1.708-1.1389 2.7463v10.0142a39.3518 39.3518 0 0 0-4.069-.2122C17.8868 13.6826.32 31.2494.32 52.8422.32 74.4341 17.8868 92 39.4787 92c10.8092 0 20.6085-4.402 27.7018-11.5081h31.9959c2.1906 0 3.9716-1.7811 3.9716-3.972V61.5721l2.922-.0741c1.78-.0448 3.172-1.4747 3.172-3.253V41.1905c0-1.7949-1.46-3.254-3.255-3.254z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Planning fee</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">We’ll let you know when and how to pay your planning authority’s application fee - this is separate to the cost of our package.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="111" height="93" xmlns="http://www.w3.org/2000/svg"><path d="M110.292 83.5855c-.085 4.0806.087 8.6722-5.186 9.1821-7.0568.6799-14.7091-.34-21.767-.4244-15.3045-.2555-30.6935-.3411-45.9991-.4255H14.723c-4.676 0-12.0728 1.7009-13.4337-4.3361v-.0855c-.0855-.17-.0855-.4255-.0855-.5955-.5089-16.4944-.2544-33.0743 0-49.6553l.2555-12.7538c.0855-3.1451-.68-7.9067.8499-10.7974 2.2108-4.1671 9.3531-2.6363 13.0093-2.6363 6.6324.0856 13.1793.17 19.7261.17 2.8063 0 6.8868-.6799 9.0132 1.6153 1.0199 1.1054 1.4454 2.8063 1.8698 4.2517.0855.1699.1699.5954.2555.8499 0-.0845.0855-.0845.2555 0 .5099.1699 1.3598 0 1.9553 0h8.5021C66.8446 12.5032 77.2176 6.8062 86.4852.3449c1.1054-.7655 2.8063-.17 3.4862.9354a2820.6982 2820.6982 0 0 0 9.4376 16.4099c3.656-.3399 9.098-.8509 10.544 2.1253.85 1.7853.424 4.1661.424 6.1214.086 3.7417.17 7.3978.17 11.054.086 15.4745-.084 31.0346-.255 46.5946zM93.6276 17.7747h-.0006a.0625.0625 0 0 0 .0006.0011zm-.0006 0c-2.2106-3.827-4.5057-7.737-6.7163-11.6484-6.2069 4.1661-12.7538 8.0778-19.3862 11.7339 8.672 0 17.4305-.0855 26.1025-.0855zm11.395 61.6436.254-19.4706V39.6261c0-3.4007 0-6.8013-.084-10.203 0-1.6998-.681-4.846 0-6.5469-.34.0855-.596.0855-.936.0855-1.191.34-3.146 0-4.336 0h-9.0132c-4.9315 0-9.9486.0845-14.9645.0845-8.2478.0855-16.4955.0855-24.7422.0855-2.8062 0-6.8879.7654-8.9287-1.6153-.7644-.9355-1.0199-1.8709-1.3598-2.9763-.5944-1.7008-.34-1.7008-1.7853-2.1252-1.191-.34-3.1463 0-4.4216 0-2.2953 0-4.6771-.0856-6.9724-.0856-6.1214-.0844-12.3283 0-18.4508-.17-.4244 0-1.7853-.3399-2.1263-.0844-.8488.5099-.5089 4.1661-.5089 5.016l-.2555 10.203-.2555 18.7063c-.0844 12.0738-.17 24.2322.171 36.3905 1.2755 1.6164 21.1716.4255 23.4668.4255 7.3123 0 14.5391 0 21.7659.0844 14.5402.0856 28.9938.3411 43.5339.5955 1.8698 0 9.1831 1.0209 10.0331-.17.85-1.2754.086-6.3769-.084-7.9078z" fill="#ff6400"/><path d="M92.6031 33.2445c-7.1413 0-14.2836-.0845-21.426-.0845-3.3161 0-3.3161 5.1015 0 5.1015 7.1424 0 14.2847.0845 21.426.0845 3.3162 0 3.3162-5.1015 0-5.1015z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Application submission</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">Fee paid, we’ll upload your application and ensure the planning authority has everything they need going forward.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="78" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M34.8132 20.3656c15.3511-1.9551 31.2816 6.0101 38.0882 20.1303 6.4446 13.396 4.1999 29.3265-6.2997 39.9709-11.0789 11.1513-28.0955 14.627-42.5778 8.6169-.0724 0-.1448-.0724-.2172-.0724-.1448-.0724-.2172-.0724-.362-.1448C7.7315 81.915-1.5372 64.8984 2.8799 47.9542c3.8378-14.6994 17.0166-25.6335 31.9333-27.5886zm31.9333 18.2476c-7.748-11.5858-22.8095-16.6545-36.1331-12.9616C17.7242 29.2722 7.297 40.6407 6.2108 54.254c-1.0861 13.5409 7.0963 25.2715 19.189 30.7747 14.3373 5.7929 30.9919 1.8103 40.695-10.4996 8.11-10.2824 7.8928-25.1991.6517-35.9159zm-12.5996 5.2136c2.1-1.8827 5.1412 1.231 3.0413 3.1137-8.7617 7.748-17.5959 15.3511-26.5748 22.8819-1.0138.8689-2.6793.8689-3.4034-.4345-2.3895-4.3447-4.7067-8.6169-7.0963-12.8892-1.3033-2.4619 2.3896-4.6343 3.7654-2.1723 1.9551 3.5481 3.9102 7.0239 5.8653 10.572 8.1825-6.9514 16.2925-13.9753 24.4025-21.0716zm20.1303-30.7747c1.8827-2.0999 4.9964 1.0137 3.0413 3.0413-2.8965 3.186-5.7205 6.4445-8.6169 9.6306-1.8103 2.1-4.924-.9413-3.0413-3.0412 2.8965-3.1861 5.7205-6.4446 8.6169-9.6307zM.8524 15.9485c-1.8827-2.0275 1.1586-5.1411 3.0413-3.0412 2.8964 3.1861 5.7205 6.4446 8.6169 9.6306 1.8827 2.1-1.1586 5.1412-3.0413 3.0413C6.573 22.3931 3.749 19.1346.8524 15.9485zM37.1303 2.118c.0725-2.824 4.4171-2.824 4.3447 0 0 4.2723-.0724 8.6169-.1448 12.8892-.0724 2.824-4.4171 2.824-4.3447 0 0-4.2723.0724-8.617.1448-12.8892z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Validation</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">Your local planning authority will confirm the application is suitable for review.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="74" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M10.7883 64.0089c9.8792-9.7295 24.9225-13.3219 38.0948-8.6817 7.4094 2.6195 13.771 7.5591 18.1118 14.0704 3.2931 5.0144 8.9063 15.5672 4.4157 21.1056-.3742.449-.8232.6735-1.2723.7484-1.1975.449-2.6943.449-3.8169.5239C63.4025 92 60.4836 92 57.5648 92c-5.9874 0-11.8999-.1497-17.8873-.2245-10.7025-.0749-21.405-.1497-32.1074-.0749-1.946 0-4.266.5988-5.9126-.5987C-.8123 89.3057.0858 85.339.535 82.8692c1.3471-7.0352 5.164-13.8458 10.2533-18.8603zm25.5961-6.137c-12.349.1497-23.8747 7.6339-29.1137 18.8603-.8232 1.7962-1.4968 3.6672-2.0207 5.5383-.2246.6736-1.3472 4.5654-.8981 5.0144.2245.2994 2.6194 0 3.5176 0 4.1163-.0748 8.2326 0 12.3489 0 8.5321 0 17.0641 0 25.5961.1497 4.79.0749 9.505.1497 14.2201.0749 1.9459-.0749 6.5113.3742 8.2327-.2994.8232-1.422-.5239-5.0893-.8982-6.4365-.6735-2.1704-1.5716-4.3408-2.6943-6.3616-1.9459-3.5176-4.4157-6.6609-7.4842-9.2056-5.7629-4.7899-13.322-7.4094-20.8062-7.3345zm-14.6691-30.386c4.0415-7.7836 13.9207-11.1515 21.854-7.5591 7.6339 3.4427 11.5257 12.8729 8.6068 20.2074-3.4427 8.6817-13.8458 12.4239-22.2281 9.1308-.0749 0-.1497-.0748-.2246-.0748-.0748-.0749-.2245-.0749-.2993-.1497-8.2327-3.817-11.9748-13.3968-7.7088-21.5546zm20.5816-3.2183c-5.9873-3.0685-13.6961-.5239-16.6898 5.4635-3.0685 6.1371 0 12.4239 5.7629 15.3427 6.0622 2.1705 13.6961.2246 16.4653-6.0622 2.3949-5.5383-.2994-12.0496-5.5384-14.744zm14.744-15.1181c1.8711-2.1704 5.0893.9729 3.1434 3.1434-1.9459 2.1704-3.8918 4.4157-5.8377 6.5861s-5.0893-1.0478-3.1434-3.1434c1.9459-2.2453 3.8918-4.4157 5.8377-6.5861zM12.7342 12.218c-1.9459-2.0956 1.1975-5.3138 3.1434-3.1434 1.9459 2.2453 3.8918 4.4157 5.8377 6.5862 1.9459 2.0956-1.1975 5.3138-3.1434 3.1433-1.9459-2.2452-3.8918-4.4157-5.8377-6.5861zM34.3637 2.1891c0-2.9188 4.4905-2.9188 4.4905 0-.0748 2.9937-.1497 5.9126-.1497 8.8314 0 2.9189-4.4905 2.9189-4.4905 0 .0748-2.9937.1497-5.9125.1497-8.8314z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Planning officer assigned</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">Once your application has been given the go-ahead, your local authority will assign their own planning officer to work with our own team.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="97" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M24.5203.4692C34.5959.069 44.7524-.1723 54.8264.1485c4.7194.1603 9.596.4001 14.3138.9591 2.9584.3207 5.9168 1.1195 7.835 3.6793 2.1596 2.798 2.1596 6.3963 2.2406 9.6754.2398 4.6384.3207 9.2752.4001 13.9136 0 1.28 0 2.5582.0795 3.8381 4.5574.0794 9.9946 0 13.5135 2.4788 5.1164 3.5983 3.5189 12.7942 3.36 18.152-.0809 4.478-.1619 9.0354-.4017 13.5134-.1588 2.879.1604 6.7171-1.2783 9.3562-1.7595 3.2776-5.5975 3.6778-9.1164 3.5983.4001 3.4365.8003 6.957 1.1989 10.3948.2398 2.1581-2.7186 2.9584-4.0779 1.68-2.4788-2.3199-4.8782-4.6384-7.357-6.9583a4191.6218 4191.6218 0 0 1-4.4765-4.2367c-.4001-.3208-.8797-1.1195-1.3593-1.2799l-.0809-.081c-.2398.2414-1.7594.4811-1.7594.4811-4.6369.559-9.6755 0-14.3933 0-3.5173 0-7.6762.6384-11.0347-.6414-6.0771-2.3979-5.7579-10.7934-5.6769-16.7117-1.4403-.0794-2.9584-.0794-4.3987-.0794-5.9976 5.2768-11.9129 10.6345-17.9121 15.913-1.6785 1.5195-4.7957.0793-3.9969-2.3186 1.4387-4.478 2.8774-9.037 4.3177-13.515-5.2784.081-11.0347-.4796-12.6338-6.3963-1.121-4.3177-.8797-9.3577-1.0401-13.7533C.8518 36.4523.7709 31.0945.7709 25.6573c0-4.878-.1589-9.8357.4001-14.633.3207-2.7995 1.28-5.3577 3.519-7.1966C9.7269-.25 18.4432.7075 24.5203.4677zm55.4943 36.5421c.1603 6.3168.0809 12.9545-1.8389 18.552-2.7186 7.835-12.1542 6.3169-18.6315 6.3169-5.9961.0794-11.9129.0794-17.9121.0794-.1588 3.5983-.3986 8.8767 1.5197 11.1951 2.239 2.6392 9.1164 1.2799 12.4749 1.2799h12.394c1.9992 0 3.5189-.2398 5.1164.9591 2.9599 2.3184 5.758 5.1164 8.4765 7.8366-.2397-2.0787-.4795-4.2383-.7178-6.3964-.1604-1.2798 1.1989-2.3993 2.3979-2.3993 1.1195 0 2.3184.0794 3.5189 0 3.6777-.1604 4.3176-1.2799 4.5574-4.8782.4001-5.2768.559-10.6346.559-15.9129 0-3.9969 1.6006-14.3123-3.0393-15.7525-2.7186-.7988-5.9152-.7988-8.8736-.8797zm-32.145-32.145c-7.5158-.0794-15.0332.0794-22.549.4001-3.2791.1604-6.6376.3208-9.9152.4796-2.5597.1604-6.0786.1604-8.0763 2.1596-2.32 2.3184-1.5991 7.1172-1.68 10.0756-.0795 3.5983-.0795 7.1966-.0795 10.7949 0 7.4364.3207 14.8728.7988 22.3092.1604 2.1596.1604 4.2382 2.239 5.3577 1.4402.7988 3.1997.64 4.7988.64 1.599.0794 3.1187.0794 4.8781.0794 1.5182 0 2.7981 1.5991 2.3185 3.0393-.9592 2.8774-1.8389 5.6769-2.7186 8.4765 3.9985-3.5189 8.0763-7.1172 12.0748-10.7155.3986-.4811.9591-.7209 1.7579-.7209 7.9969.0809 16.0733 0 24.1496 0 3.7571 0 7.5968.1604 11.3539.0809 2.7995-.0809 5.4372-.5605 6.5582-3.5983.7178-2.0007.7178-4.5589.8797-6.6376.559-6.9568.3192-13.9931.1589-20.9499-.0794-3.8381-.1589-7.7571-.3208-11.5952-.1588-3.6777 0-7.1966-4.1573-8.3956-3.5173-.959-7.9159-.8003-11.5937-.959-3.6792-.1605-7.2775-.2414-10.8743-.3208zm4.6384 25.4294c1.2798-1.2004 3.1981-1.2004 4.3986.1589 1.0385 1.1195.9591 2.7186.0794 3.919-.0809.1589-.1604.2398-.2398.3192-.0809.1604-.2398.1604-.3207.2398-1.2784.8797-3.0393.8003-4.0779-.559-1.0385-1.2004-1.0386-2.9599.1604-4.0779zm-13.3547-.4001c1.2799-1.2005 3.1997-1.2005 4.3986.1588 1.0386 1.1195.9592 2.7186.0794 3.9191-.0794.1588-.1588.2397-.2397.3207-.0795.1588-.2398.1588-.3208.2383-1.2783.8797-3.0378.8003-4.0779-.559-1.0385-1.2005-1.0385-2.9584.1604-4.0779zm-13.2722-.3207c1.2784-1.199 3.1982-1.199 4.3971.1603 1.0386 1.1195.9591 2.7186.0794 3.9175-.0794.1604-.1588.2398-.2398.3208-.0794.1588-.2398.1588-.3207.2397-1.2783.8798-3.0378.7194-4.0779-.4795-1.0385-1.2799-1.0385-3.0393.1604-4.1588z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Neighbour consultation</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">During this 2-3 week window, your neighbours will be able to feedback on your proposed project.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="83" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M9.9572 10.3636C19.5643.604 34.7375-2.8271 47.4708 2.5102c12.6571 5.4135 19.9005 18.9093 18.7568 32.405 0 .2288 0 .3813-.0762.5338-.1525 1.6774-.4575 3.3548-.8387 4.956-1.22 4.6511-3.4312 8.9972-6.2523 12.7333 3.3549 3.8886 6.5573 7.9297 9.8359 11.8183 3.2024 3.8886 6.4048 7.701 9.6071 11.5134 1.9062 2.2874 4.1174 5.261 3.7362 8.3109-.2288 3.4311-2.6687 6.2523-6.0236 7.0148-3.2786.6862-6.7097-.3813-8.9972-2.8212l-.9149-1.1437c-.0763-.0763.2287.305.1525.2287l-.0763-.0762c-.1525-.1525-.305-.3812-.4575-.5337L54.4093 73.4963l-8.1584-9.9121c-2.8974 1.4487-6.0236 2.4399-9.226 3.0499-1.7536.305-3.5836.5337-5.3373.5337-.8387 0-1.7536 0-2.5924-.0762-.3812 0-.8387-.0763-1.2962-.1525-.1525 0-.4574-.0763-.5337-.0763-.1525-.0762-.3812-.0762-.61-.1525-3.3549-.6862-6.5572-1.9062-9.5309-3.5074-5.871-3.2023-10.6746-8.0822-13.6482-14.1057-6.2523-12.8095-3.5074-28.5927 6.481-38.7336zm46.0533 46.3583c-1.7537 1.6775-3.5836 3.2024-5.6423 4.5749 2.8212 3.3548 5.5661 6.8622 8.3872 10.2933l10.5984 12.8858c.4575.7625 1.0674 1.3725 1.7537 1.9825 1.7536 1.3724 4.4985 1.6774 6.0235-.1525.61-.6863.8387-1.6775.61-2.5162-.4575-1.2962-1.22-2.5162-2.135-3.5836-.3049-.4575-.6862-.8387-.9912-1.22L63.254 65.4141zM41.676 5.3313c-2.8974-.7625-5.871-1.0674-8.8446-.8387-1.4487.0762-2.8212.305-4.1936.61-1.4487.3812-2.8974.7624-4.3461 1.2962-2.7449 1.0674-5.2611 2.4399-7.6248 4.1936a27.616 27.616 0 0 0-3.2023 2.7449c-1.0675.9912-1.9825 2.0586-2.8212 3.2023-3.7361 4.9561-5.7948 10.9796-5.9473 17.1557-.1525 6.0235 1.6775 11.9708 5.1086 16.9269 1.6012 2.2874 3.5836 4.2698 5.7185 6.0235 2.2875 1.8299 4.8799 3.2024 7.6248 4.2698 1.4487.5338 2.8974.9912 4.4223 1.2962.305.0763.5337.0763.7625.1525.0762 0 .2287.0763.3812.0763.2287 0 .4575.0762.6862.0762.7625.0763 1.525.0763 2.2874.0763 2.9737-.0763 5.8711-.5338 8.7685-1.6012 5.6423-1.83 10.5983-5.1848 14.4107-9.7597 3.8124-4.651 6.176-10.3696 6.786-16.3931v-.305c.1525-1.4487.1525-2.9736.0763-4.4986-.2288-2.9736-.8388-5.871-1.9062-8.6159-.5338-1.22-1.1437-2.4399-1.83-3.6599-.305-.61-.6862-1.1437-1.1437-1.8299-.4575-.6863-.8387-1.1437-1.1437-1.525C52.1219 9.9061 47.2421 6.78 41.676 5.3313zM35.5 45.285c2.9736 0 2.9736 4.5748 0 4.5748H18.3444c-2.9737 0-2.9737-4.5748 0-4.5748zm14.2582-7.6248c2.8974 0 2.8974 4.5749 0 4.5749H18.3444c-2.9737 0-2.9737-4.5749 0-4.5749zM35.5 26.3755c2.9736 0 2.9736 4.5749 0 4.5749H18.3444c-2.9737 0-2.9737-4.5749 0-4.5749zm14.2582-7.6247c2.8974 0 2.8974 4.5749 0 4.5749H18.3444c-2.9737 0-2.9737-4.5749 0-4.5749z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Application assessment</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">This is the final stage before a verdict is given. At this point, we do our best to provide any extra information the planning officer might need.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <div class="icon">
                                <svg width="69" height="92" xmlns="http://www.w3.org/2000/svg"><path d="M44.6685 24.246c-5.9458 5.2208-11.8916 10.3689-17.9824 15.4446 1.1602.1451 2.2478.2901 3.408.4351l-4.7857-8.7012c-1.3777-2.4653-5.1482-.29-3.7705 2.1753l4.7857 8.7012c.725 1.3052 2.3928 1.3052 3.408.435 6.0182-5.0756 12.0365-10.2238 17.9823-15.4445 2.1753-1.8128-.9426-4.8582-3.0454-3.0454z" fill="#ff6400"/><path d="M66.1963 83.054c-4.2055-1.2327-8.4836-2.4653-12.6892-3.698-1.5227 3.698-2.9728 7.396-4.4956 11.094-.8701 2.1028-3.3354 2.0303-4.2055 0-3.3355-8.1211-6.5984-16.3147-10.0789-24.3633-.0725 0-.2175-.0725-.29-.0725-3.3355 8.1936-6.7434 16.3147-10.1514 24.4358-.8701 2.0303-3.3354 2.1028-4.2055 0-1.5227-3.698-2.9729-7.396-4.4956-11.094-4.2056 1.2327-8.4837 2.4653-12.6893 3.698C.9376 83.6341-.295 81.4588.43 79.8636c3.988-9.1363 8.1936-18.2 12.3992-27.1912-5.9458-5.5107-9.8613-13.1243-10.1514-21.4629-.435-13.3418 8.7737-25.2334 21.2454-29.439C35.8873-2.29 49.6641.683 58.0753 10.1818 66.9215 20.1881 68.3716 34.4 61.7008 45.929c-1.5228 2.4653-3.408 4.6406-5.5108 6.5984 4.2056 9.0637 8.4111 18.1274 12.4717 27.2637.7251 1.6677-.4351 3.843-2.4654 3.2629zM29.6514 56.3704c11.1665 2.0303 22.333-3.1179 28.2788-12.6167 6.5259-11.1665 3.9156-25.1609-6.0183-33.4995-17.8374-15.0095-49.089.5801-44.521 24.5083 2.1028 11.094 11.3841 19.6501 22.2605 21.6079zm-7.4685 27.7712c3.1905-7.686 6.4534-15.372 9.4988-23.0581-2.6103-.2175-5.2207-.7976-7.831-1.7402-2.6829-1.0151-5.2207-2.3203-7.541-3.9155-3.408 7.396-6.816 14.7195-10.1514 22.1155 3.408-1.0152 6.7434-1.9578 10.0788-2.9729 1.2327-.3626 2.2478.435 2.6829 1.5227zm30.6717-9.6438c3.3354 1.0877 6.6709 2.0303 10.0063 2.9729-3.3354-7.3959-6.7434-14.7194-10.1514-22.1154-4.5681 3.1904-9.9338 5.1482-15.4445 5.6557 3.3354 7.6136 6.5258 15.3721 9.6438 23.0581 1.0876-2.6828 2.1753-5.2932 3.2629-7.976.4351-1.0877 1.4502-1.8853 2.6829-1.5953z" fill="#ff6400"/><path d="M66.1963 83.054c-4.2055-1.2327-8.4836-2.4653-12.6892-3.698-1.5227 3.698-2.9728 7.396-4.4956 11.094-.8701 2.1028-3.3354 2.0303-4.2055 0-3.3355-8.1211-6.5984-16.3147-10.0789-24.3633-.0725 0-.2175-.0725-.29-.0725-3.3355 8.1936-6.7434 16.3147-10.1514 24.4358-.8701 2.0303-3.3354 2.1028-4.2055 0-1.5227-3.698-2.9729-7.396-4.4956-11.094-4.2056 1.2327-8.4837 2.4653-12.6893 3.698C.9376 83.6341-.295 81.4588.43 79.8636c3.988-9.1363 8.1936-18.2 12.3992-27.1912-5.9458-5.5107-9.8613-13.1243-10.1514-21.4629-.435-13.3418 8.7737-25.2334 21.2454-29.439C35.8873-2.29 49.6641.683 58.0753 10.1818 66.9215 20.1881 68.3716 34.4 61.7008 45.929c-1.5228 2.4653-3.408 4.6406-5.5108 6.5984 4.2056 9.0637 8.4111 18.1274 12.4717 27.2637.7251 1.6677-.4351 3.843-2.4654 3.2629zM29.6514 56.3704c11.1665 2.0303 22.333-3.1179 28.2788-12.6167 6.5259-11.1665 3.9156-25.1609-6.0183-33.4995-17.8374-15.0095-49.089.5801-44.521 24.5083 2.1028 11.094 11.3841 19.6501 22.2605 21.6079zm-7.4685 27.7712c3.1905-7.686 6.4534-15.372 9.4988-23.0581-2.6103-.2175-5.2207-.7976-7.831-1.7402-2.6829-1.0151-5.2207-2.3203-7.541-3.9155-3.408 7.396-6.816 14.7195-10.1514 22.1155 3.408-1.0152 6.7434-1.9578 10.0788-2.9729 1.2327-.3626 2.2478.435 2.6829 1.5227zm30.6717-9.6438c3.3354 1.0877 6.6709 2.0303 10.0063 2.9729-3.3354-7.3959-6.7434-14.7194-10.1514-22.1154-4.5681 3.1904-9.9338 5.1482-15.4445 5.6557 3.3354 7.6136 6.5258 15.3721 9.6438 23.0581 1.0876-2.6828 2.1753-5.2932 3.2629-7.976.4351-1.0877 1.4502-1.8853 2.6829-1.5953z" fill="#ff6400"/><path d="M44.6685 24.246c-5.9458 5.2208-11.8916 10.3689-17.9824 15.4446 1.1602.1451 2.2478.2901 3.408.4351l-4.7857-8.7012c-1.3777-2.4653-5.1482-.29-3.7705 2.1753l4.7857 8.7012c.725 1.3052 2.3928 1.3052 3.408.435 6.0182-5.0756 12.0365-10.2238 17.9823-15.4445 2.1753-1.8128-.9426-4.8582-3.0454-3.0454z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Decision</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">Whether your project faces approval or rejection, we’ll guide you through the next steps of your project.</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-md col-12-auto center">
                            <span class="step">Next step:</span>
                            <div class="icon">
                                <svg width="53" height="83" xmlns="http://www.w3.org/2000/svg"><path d="M52.3439 19.6772c0 1.0435-.913 1.9565-1.9565 1.9565-3.1957 0-6.4565.0652-9.6522.0652.4565 19.6305.1305 39.2609.3913 58.8913 0 1.0435-.913 1.9566-1.9565 1.9566a744.2639 744.2639 0 0 1-24.1304 0c-1.0435 0-1.9566-.9131-1.9566-1.9566-.0652-9.4565-.4565-18.9782-.4565-28.4347.0652-10.1087.1957-20.2826.2609-30.3913-3.5217 0-6.9783 0-10.5-.0653-1.1087 0-1.9565-.913-1.9565-1.9565L.2352 12.112c0 .3913-.0652-.3913-.0652-1.1087 0-1.0435.1304-2.087.326-3.0652C2.583-1.388 14.1918.3729 21.431.3076c1.0434 0 1.9565.913 1.9565 1.9566v6.1304h5.2174V2.1989c0-.587.1956-.9782.5217-1.3043l.0652-.0652.0653-.0652c.2608-.3261.7173-.5218 1.3043-.5218 5.5435 0 14.2174-1.5652 18.913 2.674 4.4348 3.9782 3.0001 11.413 2.8696 16.7608zM4.083 11.6555c0 .5217.0653 1.0434.0653 1.5652.0652 1.5.0652 3.0652.1304 4.5652 14.7391.1304 29.4783 0 44.2174-.0652.3261-4.0435.913-9.7826-1.8261-12.0652-1.3696-1.174-3.1957-1.5-4.9565-1.5652-3.0652-.1305-6.1305-.0653-9.1957 0v6.1956c0 1.0435-.913 1.9565-1.9565 1.9565h-9.1304c-1.0435 0-1.9566-.913-1.9566-1.9565V4.1555c-2.1521.0652-4.2391.0652-6.3913.1304-2.0869.0652-4.4347-.1304-6.326.9783-1.8914 1.1087-2.6087 3.1304-2.674 5.1521 0 .1957.0653 1.3044 0 1.2392zm12.7174 55.4347c6.7826-3.7826 13.5653-7.6304 20.3479-11.413v-9.1956c-6.5218 3.7173-13.0435 7.3695-19.5653 11.0217-.326.1956-.6521.2609-.9782.2609 0 3.1304.1304 6.2608.1956 9.326zM37.083 33.3076c-6.5217 3.6522-12.9782 7.3044-19.5 10.9566-.326.1956-.6521.2608-.9782.2608-.0652 2.5435-.0652 5.087-.0652 7.6305v1.4347L37.083 42.0468v-8.7392zm.0653 45.2609c-.0653-6.1304-.0653-12.2609-.0653-18.3913-6.5217 3.7174-13.0434 7.3696-19.5652 11.0217-.1956.1305-.4565.1957-.6521.2609.0652 2.4131.1304 4.7609.1304 7.1739 6.7174.1305 13.5.1305 20.1522-.0652zm-.3261-56.8696c-6.6522 0-13.3696.0653-20.0218.0653-.0652 6.1304-.1304 12.326-.1956 18.5217 6.7826-3.7826 13.5652-7.5652 20.3478-11.413 0-2.4131-.0652-4.7609-.1304-7.174z" fill="#ff6400"/></svg>
                            </div>
                            <div class="name">Building regulations</div>
                        </div>
                        <div class="col-md col-12">
                            <div class="excerpt">Once you’ve secured planning approval, your next step will be to get your project in line with UK building regulations. These are a set of statutory requirements that all buildings must meet in order to create a safe and healthy environment to inhabit.<br><br> Because of the level of technical detail required, plus the number of professionals involved, it’s best to wait until you’ve received planning approval before moving onto this step. Once you are ready, UDEX can help get this stage of your journey under way.</div>
                            <div class="read-more"><a href="{{ url('building-regulations') }}" >Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
