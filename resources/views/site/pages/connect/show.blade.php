@extends('layouts.site.pages-master')


@section('page-title',  str_replace('_',' ', json_decode($Connect->connect_meta, true)['what_type_of_property_is_this']))

@section('content')
    <article class="container container-padding">
        <div class="page-info">
            <div class="row align-items-center">
                <div class="col-md-auto text-md-start text-center md-md-0 mb-3">
                    <div class="page-icon d-inline-block">
                        <svg width="133" height="112" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M126.298 68.254l-30.902.769a47.4 47.4 0 00-1.172-16.156h32.074v15.387zm-7.441 23.052H87.209a47.358 47.358 0 007.027-15.57l24.621-.612v16.184-.002zM59.485 6.684l66.281.08v15.518H70.32A47.663 47.663 0 0059.485 18.1V6.684zm58.754 39.5h-26.22a47.853 47.853 0 00-12.18-17.22h38.397v17.22h.003zm10.787 0h-4.087v-17.22h2.791c2.612 0 4.738-2.12 4.738-4.723V4.808a4.734 4.734 0 00-4.732-4.725L57.528 0h-.006a4.728 4.728 0 00-4.74 4.724v12.192a48.09 48.09 0 00-4.967-.258C21.45 16.658 0 38.042 0 64.328 0 90.615 21.45 112 47.815 112c13.199 0 25.165-5.36 33.826-14.01h39.068c2.676 0 4.85-2.169 4.85-4.836V74.957l3.568-.09a3.974 3.974 0 002.754-1.191 3.917 3.917 0 001.119-2.77V50.144a3.947 3.947 0 00-1.163-2.796 4 4 0 00-2.811-1.164z" fill="#000"></path>
                        </svg>
                    </div>
                </div>
                <div class="col-md text-md-start text-center">
                    <div class="heading-title">Let's estimate the<br>
                        <span class="base-color text-color text-capitalize">construction costs!</span>
                    </div>
                    <div class="heading-desc">Answer a few quick questions below and we'll estimate the costs involved from our extensive experience working with projects like yours</div>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="block-bordered">
                <div class="heading-block text-md-start text-center">Here's your estimate!</div>
                <div class="block-desc text-md-start text-center">From the information you have entered we have calculated construction cost estimates for three different types of contractors. The right type of contractor for your project will depend on your own personal risk appetite and willingness to be personally involved in the construction process.</div>

                <div class="connect-details text-md-start text-center">
                    <div class="icon">
                        <img src="{{ asset('public/assets/site/images/base/design/designs-icons') . "/" . str_replace(' ', '_', json_decode($Connect->connect_meta, true)['what_type_of_property_is_this']) . '.svg' }}" alt="">
                    </div>
                    <div class="connect-details-text">
                        <div class="title text-capitalize">{{ str_replace('_',' ', json_decode($Connect->connect_meta, true)['what_type_of_property_is_this']) }}</div>
                        <div class="size text-capitalize">{{ json_decode($Connect->connect_meta, true)['square_metres'] }}sqm</div>
                        <div class="address">in
                            <span class="base-color text-color text-capitalize">{{ json_decode($Connect->connect_meta, true)['address'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="block-info">
                    <div class="heading-block">
                        <div class="row">
                            <div class="col-md-6 col-12 text-md-start text-center">
                                <div class="title">
                                    Individual Contractor<br> Sole trader working with sub-contractors
                                </div>
                            </div>
                            <div class="col-md-6 col-12 text-md-end text-center">
                                <div class="price">£{{ number_format(json_decode($Connect->connect_meta, true)['values']['small']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'] - (json_decode($Connect->connect_meta, true)['values']['small']['range_avg'] / 100) * json_decode($Connect->connect_meta, true)['values']['small']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'], 2) }} to £{{ number_format(json_decode($Connect->connect_meta, true)['values']['small']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'] + (json_decode($Connect->connect_meta, true)['values']['small']['range_avg'] / 100) * json_decode($Connect->connect_meta, true)['values']['small']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'], 2) }}</div>
                                <div class="opt">(ex. VAT)</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>These are smaller teams that tend to sit below the VAT threshold through using sub-contractors or other techniques. This type of contractor will typically be slower as they do not have access to additional resources or strong business relationships with suppliers. They will rely on their "contacts" rather than employees to complete the works. This can break the rhythm when on site and expose you to risk as a client.</p>
                        <p>Smaller teams generally have less information available relating to their finances, they have limited cashflow and often avoid using formal contracts, which can be a risk. The business owner would usually complete the works themselves on site and the aforementioned structure can mean that they're generally more competitive as they have lower overheads (no office, vans, admin team). However, this can result in poorer communication, lack of paperwork or accountability should problems arise.</p>
                        <p>If the right team is found, they can deliver a great service and final product, but they will typically need careful management. As a client you will likely need to be much more "hands-on" and involved with the construction phase of your project. Our UDEX Connect service doesn't typically suggest this type of building contractor due to the difficulties in vetting them thoroughly, their reliability of labour, work and communication.</p>
                    </div>

                    <div class="heading-block">
                        <div class="row">
                            <div class="col-md-6 col-12 text-md-start text-center">
                                <div class="title">
                                    Small/Medium Company<br> Typically 5 - 10 Full Time Employees
                                </div>
                            </div>
                            <div class="col-md-6 col-12 text-md-end text-center">
                                <div class="price">£{{ number_format(json_decode($Connect->connect_meta, true)['values']['medium']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'] - (json_decode($Connect->connect_meta, true)['values']['medium']['range_avg'] / 100) * json_decode($Connect->connect_meta, true)['values']['medium']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'], 2) }} to £{{ number_format(json_decode($Connect->connect_meta, true)['values']['medium']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'] + (json_decode($Connect->connect_meta, true)['values']['medium']['range_avg'] / 100) * json_decode($Connect->connect_meta, true)['values']['medium']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'], 2) }}</div>
                                <div class="opt">(ex. VAT)</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>A medium sized team who are established locally, with an online presence and can easily provide positive references. These types of companies will generally have made their financial situation accessible through Companies House and have a stronger credit score.</p>
                        <p>They may also offer administrative support and utilise contracts, which will typically result in the project running smoothly, with a clearer level of communication and paper trail.</p>
                        <p>The costs for this type of contractor will typically reflect the support what they offer through utilising their back office, admin support, vans and employees on payroll.</p>
                    </div>

                    <div class="heading-block">
                        <div class="row">
                            <div class="col-md-6 col-12 text-md-start text-center">
                                <div class="title">
                                    Large Company<br> Typically 10 - 20+ Full Time Employees
                                </div>
                            </div>
                            <div class="col-md-6 col-12 text-md-end text-center">
                                <div class="price">£{{ number_format(json_decode($Connect->connect_meta, true)['values']['large']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'] - (json_decode($Connect->connect_meta, true)['values']['large']['range_avg'] / 100) * json_decode($Connect->connect_meta, true)['values']['large']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'], 2) }} to £{{ number_format(json_decode($Connect->connect_meta, true)['values']['large']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'] + (json_decode($Connect->connect_meta, true)['values']['large']['range_avg'] / 100) * json_decode($Connect->connect_meta, true)['values']['large']['avg_final'] * json_decode($Connect->connect_meta, true)['square_metres'], 2) }}</div>
                                <div class="opt">(ex. VAT)</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>A larger company will usually be well established locally and perhaps across a wider area.<br> They should have a strong online presence, several projects on site at any one time and a large quantity of reviews. They often provide a dedicated project manager, which can be costly, a high level of insurance, are fully up to speed with contracts and document all of the relevant paperwork effectively.
                        </p>

                        <p>You would expect them to have an office, admin team, all trades, such as electricians, plumbers, roofers, decorators etc. on payroll and deliver to an agreed programme. They can often pull on resource to get a project back on track if it starts to fall behind, for example.</p>
                        <p>You should expect to pay VAT in full.</p>
                    </div>

                    <div class="heading-block">
                        <div class="title">What is included in the estimate?</div>
                    </div>
                    <div class="block-content">
                        <p> It is important to note that all of the ranges above are high level estimates and refer only to the construction element of the build. You will find a more detailed list of exclusions at the bottom of this page:</p>
                        <p> Note that the proposed range in costs does not include key fit out items, such as kitchens, glazing, landscaping, bathrooms. It also excludes high specifications such as underfloor heating, bespoke items and luxury finishes. The cost of these items is driven by personal preference and can be adjusted according to overall budget.</p>
                        <p> The estimate includes standard electrical wiring, plumbing and pipework, but not the actual fittings. Plastering and painting the new areas are allowed for but the existing rooms impacted/connected to the new space are assumed to require decoration only. There is no allowance for new heating systems such as boilers/megaflo, rewiring the existing electrics and more. </p>
                        <p> Clients should also consider that refurbishing existing rooms outside the scope of the project is not included. This is hard to quantify at this stage, therefore the total SQM may not include everything that will need to be completed as it will be project specific. The numbers provided are based on an assumption that the existing property, soil, drainage and foundations are in good condition/adequate. </p>
                        <p> A more accurate costing summary can be carried out once the design has been completed and is ready for planning submission. At UDEX we can help our clients calculate a more detailed estimate either by using an online Quantity Surveying tool (typical cost about £250 - £300) or through a more detailed Schedule of Works (typical cost about £850 - £1200). </p>
                        <p> When completing a project, you should always allow for a contingency to cover works which are not known. For example, when exposing the structure. Changes to the design will also result in an additional costs.</p>
                    </div>

                    <div class="heading-block">
                        <div class="title">Where would you like to go next?</div>
                    </div>
                    <div class="block-content">
                        <p>How did the estimate look? Ready to explore a project or want to try again?</p>
                    </div>
                </div>

                <div class="links center">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <a href="{{ url('design-quote') }}" class="item-inner">
                                <div class="icon"><svg width="90" height="90" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M67.908 36.873c1.742-.018 3.485-.035 5.245-.035 1.48 0 2.747 1.907 1.902 3.18a5406.258 5406.258 0 00-6.391 8.85C58.842 62.495 48.995 76.152 38.579 89.33c-1.339 1.696-4.155-.141-3.521-2.048.334-1.051.67-2.102 1.006-3.153 1.788-5.591 3.579-11.192 5.12-16.841.588-2.132 1.086-4.293 1.583-6.457.575-2.498 1.15-5 1.867-7.461-1.987-.092-3.971-.194-5.954-.296-7.145-.368-14.256-.733-21.368-.623-1.549 0-2.746-1.836-1.83-3.18 3.685-5.368 7.315-10.777 10.946-16.185C33.688 22.269 40.949 11.45 48.648.948 49.986-.89 53.225.1 52.521 2.573c-2.112 7.536-4.037 15.134-5.962 22.733-.958 3.8-1.928 7.597-2.91 11.39l19.013.212c1.76 0 3.503-.017 5.246-.035zM36.94 48.795c3.5.182 7.005.363 10.51.477 1.268 0 2.535 1.343 1.972 2.614-1.213 3.427-2.025 6.968-2.838 10.515-.461 2.01-.923 4.023-1.458 6.017a178.898 178.898 0 01-2.535 8.76c7.399-9.741 14.56-19.674 21.717-29.601 1.563-2.168 3.125-4.335 4.69-6.5-2.112.07-4.225.07-6.337.07-7.183-.141-14.436-.211-21.69-.282-1.408 0-2.394-1.342-2.041-2.685.78-3.037 1.554-6.074 2.324-9.114 1.387-5.468 2.777-10.943 4.224-16.39-5.41 7.702-10.67 15.526-15.916 23.332-2.742 4.08-5.481 8.154-8.237 12.204 5.185.042 10.395.313 15.615.583z" fill="#ED7B00"/></svg></div>
                                <div class="title">Get a quick quote</div>
                                <div class="desc">Get a quote for our architectural design services to start your project</div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="#" class="item-inner">
                                <div class="icon"><svg width="90" height="90" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.85 64.963a12.27 12.27 0 01-7.535-2.504 10.9 10.9 0 01-3.508-4.921 14.406 14.406 0 01-.402-1.589c0-.117-.044-.227-.059-.344.044.308 0-.08 0-.117 0-.315-.044-.63-.051-.945a8.72 8.72 0 01.417-3.112c.688-2.285 2.07-4.299 3.954-5.763a12.316 12.316 0 017.198-2.555c2.82-.066 2.827-4.46 0-4.394A16.528 16.528 0 003.846 49.205a14.645 14.645 0 003.969 16 16.616 16.616 0 0011.064 4.152c2.826 0 2.826-4.394 0-4.394h-.03z" fill="#ED7B00"/><path d="M17.305 64.487c0 2.138.06 4.225 1.729 5.785a6.63 6.63 0 003.932 1.647 46.68 46.68 0 006.238-.124 2.242 2.242 0 002.197-2.197c0-8.501.154-17.003.088-25.504 0-2.146-.095-4.291-.088-6.437a2.197 2.197 0 00-2.197-2.196c-1.325-.052-2.643-.11-3.968-.14-1.853-.043-3.662-.058-5.331.982-3.01 1.925-2.592 5.39-2.614 8.538v12.016c0 2.548.044 5.126 0 7.63 0 2.834 4.393 2.834 4.393 0 0-5.455-.05-10.91 0-16.373v-5.646-1.274a3.363 3.363 0 010-.469v-.05c0-.381-.066.168.095-.257.04-.08.087-.156.14-.227-.315.512 0-.08.08-.051.08.029.293-.25 0 0-.293.249 0 0 .088-.051l.447-.242c-.388.212-.147.066.102 0 .25-.066.3-.066.447-.103.454-.124-.564 0 0 0h1.37c1.537 0 3.075.088 4.612.147l-2.196-2.197c0 8.882.131 17.764.08 26.647 0 1.764-.088 3.53-.08 5.294l2.196-2.197c-1.977.066-3.954.102-5.93.154a1.329 1.329 0 00-.235 0c-.264.087.512.117.293.044-.08 0-.169 0-.25-.051-.08-.052-.395-.118-.585-.162-.417-.095.293.162.08 0l-.322-.168c-.16-.08-.402-.359-.058 0-.044-.044-.169-.198-.227-.212-.132-.154-.147-.169-.044 0 .102.168.095.117 0-.052 0-.051-.227-.498-.125-.234.103.264-.066-.315-.066-.308.074.323 0-.058 0-.197V64.56c.088-2.9-4.305-2.9-4.29-.073zM71.616 42.293a12.242 12.242 0 017.528 2.497 10.868 10.868 0 013.507 4.957c.169.52.305 1.052.41 1.589 0 .117.044.234.059.351-.044-.315 0 .074 0 .117 0 .315.051.63.058.945a8.86 8.86 0 01-.417 3.105 11.487 11.487 0 01-3.954 5.77 12.362 12.362 0 01-7.198 2.548c-2.82.073-2.834 4.467 0 4.394a16.527 16.527 0 0015.026-10.479 14.643 14.643 0 00-3.962-16 16.615 16.615 0 00-11.064-4.151c-2.827 0-2.834 4.393 0 4.393l.007-.036z" fill="#ED7B00"/><path d="M73.16 42.761c0-2.13-.059-4.225-1.728-5.785A6.7 6.7 0 0067.5 35.33a47.972 47.972 0 00-6.24.132 2.197 2.197 0 00-2.196 2.196c0 8.495-.161 16.996-.088 25.504 0 2.146.088 4.292.088 6.437a2.24 2.24 0 002.197 2.197c1.318.044 2.643.11 3.969.139 1.852.044 3.66.051 5.323-.989 3.017-1.925 2.6-5.396 2.614-8.53 0-4.005.044-8.055 0-12.024 0-2.54-.044-5.082 0-7.63 0-2.826-4.393-2.826-4.393 0 0 5.455.05 10.918 0 16.373v7.396c0-.117-.037-.337-.037.051s.066-.168-.095.257a1.117 1.117 0 01-.14.22c.316-.513 0 .087-.087.058-.088-.03-.286.249 0 0 .286-.25 0 0-.088.05l-.454.235c.396-.205.154-.065-.102 0-.257.066-.293.074-.447.11-.454.117.564 0-.037 0h-1.362c-1.538 0-3.075-.095-4.613-.146l2.197 2.197c0-8.883-.132-17.765-.088-26.654 0-1.765.088-3.523.088-5.287l-2.197 2.197c1.977-.074 3.954-.11 5.931-.154h.235c.256-.08-.52-.11-.3 0 .08 0 .175 0 .256.044.19.058.388.124.586.168.41.088-.293-.161-.081-.044l.322.176c.11.058.403.359.051 0 .052.051.169.198.235.22.132.153.146.16 0 0-.147-.162-.088-.118 0 .058 0 .051.22.498.124.234-.095-.263.066.315.059.3-.066-.314 0 .06 0 .206v1.684c.051 2.878 4.445 2.885 4.43.051z" fill="#ED7B00"/><path d="M75.746 65.431v5.859a9.383 9.383 0 01-.41 3.17 8.65 8.65 0 01-2.527 3.83 8.932 8.932 0 01-6.231 2.094H54.305c-2.826 0-2.834 4.394 0 4.394h12.236c3 .096 5.948-.812 8.377-2.578a13.1 13.1 0 005.22-10.383V65.41c0-2.827-4.392-2.834-4.392 0v.022zM14.684 41.392c0-3.881-.044-7.835.622-11.672A26.777 26.777 0 0119.37 19.35a30.388 30.388 0 0114.074-11.27 34.503 34.503 0 014.584-1.405 29.613 29.613 0 014.393-.732 35.333 35.333 0 019.11.366 38.4 38.4 0 014.78 1.208c.733.249 1.531.527 2.278.827.088.037.49.22.044 0 .22.096.55.198.784.308.424.205.849.476 1.26.732a32.572 32.572 0 018.105 6.84 28.277 28.277 0 015.858 10.72c1.274 4.627 1.091 9.475 1.091 14.227 0 2.827 4.394 2.834 4.394 0 0-4.606.095-9.248-.857-13.78a30.846 30.846 0 00-5.25-11.556 37.476 37.476 0 00-8.721-8.684 32.959 32.959 0 00-2.402-1.56c-.366-.22-.732-.432-1.113-.63a6.945 6.945 0 00-.923-.417c-.322-.146-.352-.154-.095 0l-.535-.198a37.041 37.041 0 00-5.067-1.691C41.594-.83 26.253 3.41 17.43 14.599a30.93 30.93 0 00-6.07 12.492c-1.033 4.694-1.07 9.52-1.07 14.308 0 2.827 4.394 2.834 4.394 0v-.007z" fill="#ED7B00"/><path d="M51.852 83.167c-.087.142-.182.28-.285.41l.344-.44c-.205.25-.436.479-.689.681l.447-.344c-.278.21-.58.388-.9.527l.527-.22c-.35.142-.717.24-1.091.294l.578-.081c-.345.04-.694.04-1.04 0l.586.073a4.577 4.577 0 01-1.128-.3l.528.22a4.154 4.154 0 01-.938-.557l.44.344a4.399 4.399 0 01-.732-.732l.344.447a4.291 4.291 0 01-.513-.886l.22.527a4.214 4.214 0 01-.256-.981l.073.585a3.95 3.95 0 010-.93l-.073.587c.043-.317.124-.626.241-.923l-.22.52a4.41 4.41 0 01.557-.945l-.344.447c.203-.252.434-.48.688-.681l-.446.344c.277-.21.58-.384.9-.52l-.527.22c.35-.143.717-.244 1.09-.3l-.585.08a4.422 4.422 0 011.245 0l-.586-.08c.387.058.765.161 1.128.307l-.527-.22c.197.103.425.176.637.264l-.528-.22c.198.11.389.235.58.366l-.447-.344c.27.216.516.462.732.733l-.345-.447c.23.293.42.616.564.959l-.22-.52c.125.314.214.64.264.974l-.08-.586c.044.336.044.675 0 1.01l.08-.578c-.05.313-.134.62-.248.916l.22-.527a4.12 4.12 0 01-.272.534 2.198 2.198 0 002.46 3.33 2.204 2.204 0 001.333-1.133 6.022 6.022 0 00.579-4.877 6.307 6.307 0 00-3.61-3.888l.52.22a6.597 6.597 0 00-5.683 0 6.036 6.036 0 00-3.324 4.02 6.156 6.156 0 001.391 5.447 6.324 6.324 0 005.297 2.107 6.325 6.325 0 004.837-3.014 2.198 2.198 0 00-.79-3.003 2.242 2.242 0 00-3.003.784z" fill="#ED7B00"/></svg></div>
                                <div class="title">Book a free advice call</div>
                                <div class="desc">Discuss your project aspirations with one of our experts at a time that best suits you</div>
                            </a>
                        </div>
                        <div class="col-md-4 col-12">
                            <a href="{{ url('project-cost-estimates') }}" class="item-inner">
                                <div class="icon"><svg width="90" height="90" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M85.025 53.241l-20.684.517c.36-3.64.096-7.315-.785-10.866h21.469v10.35zm-4.98 15.505H58.86a31.933 31.933 0 004.704-10.472l16.48-.412v10.885-.001zm-47.551 9.423c-15.174 0-27.519-12.366-27.519-27.567S17.32 23.034 32.494 23.034c15.173 0 27.518 12.367 27.518 27.568S47.667 78.168 32.494 78.168zm7.811-66.337l44.364.054v10.436H47.556a31.812 31.812 0 00-7.251-2.812v-7.678zm39.326 26.565H62.08a32.184 32.184 0 00-8.153-11.58h25.7v11.58h.003zm7.22 0h-2.735v-11.58h1.867a3.179 3.179 0 003.172-3.177V10.57a3.177 3.177 0 00-3.167-3.177l-46.993-.056h-.005c-.845 0-1.642.33-2.24.928a3.164 3.164 0 00-.93 2.25v8.198a31.985 31.985 0 00-3.326-.173C14.846 18.54.489 32.922.489 50.602c0 17.679 14.358 32.061 32.005 32.061 8.834 0 16.843-3.605 22.64-9.422h26.15a3.253 3.253 0 003.247-3.253V57.75l2.388-.06a2.648 2.648 0 002.592-2.664V41.06a2.665 2.665 0 00-2.66-2.664z" fill="#ED7B00"/></svg></div>
                                <div class="title">Try this again?</div>
                                <div class="desc">Trying out a few ideas? Why not run another project type through the calculator?</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
