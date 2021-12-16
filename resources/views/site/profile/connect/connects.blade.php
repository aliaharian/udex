@extends('layouts.profile.master')

@section('page-title', 'Designs')

@section('content')
    <article class="content-inner">
        <div class="heading-dashboard">
            <div class="row align-items-center">
                <div class="col-auto">
                    <svg width="184" height="184" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M104.607 29.302c7.984-.407 17.637-.898 23.393 4.298 5.63 5.05 5.09 13.735 4.625 21.228-.097 1.556-.191 3.062-.225 4.472 0 1.6-1.4 3-3 3-2.45 0-4.925.025-7.4.05-2.475.025-4.95.05-7.4.05.4 17.2.408 34.4.416 51.599.006 12.9.012 25.801.184 38.701 0 1.6-1.4 3-3 3-12.3.2-24.6.2-37 0-1.6 0-3-1.4-3-3-.046-6.588-.194-13.197-.343-19.808-.178-7.939-.357-15.88-.357-23.792.05-7.75.125-15.525.2-23.3.075-7.775.15-15.55.2-23.3-5.4 0-10.7 0-16.1-.1-1.7 0-3-1.4-3-3l-.3-11.7c0 .6-.1-.6-.1-1.7 0-1.6.2-3.2.5-4.7 2.762-12.342 16.4-12.02 27.219-11.766 1.716.04 3.36.08 4.88.066 1.6 0 3 1.4 3 3V42h8v-9.5c0-.9.3-1.5.8-2l.2-.2c.4-.5 1.1-.8 2-.8 1.706 0 3.605-.097 5.608-.198zM62.5 37.2c-2.9 1.7-4 4.8-4.1 7.9 0 .078.007.25.015.459.023.6.059 1.515-.015 1.441 0 .4.025.8.05 1.2.025.4.05.8.05 1.2.05 1.15.075 2.325.1 3.5.025 1.175.05 2.35.1 3.5 18.08.16 36.16.064 54.24-.032 4.52-.024 9.04-.048 13.56-.068l.059-.729c.503-6.142 1.179-14.406-2.859-17.771-2.1-1.8-4.9-2.3-7.6-2.4-4.7-.2-9.4-.1-14.1 0v9.5c0 1.6-1.4 3-3 3H85c-1.6 0-3-1.4-3-3v-9.4c-1.65.05-3.275.075-4.9.1-1.625.025-3.25.05-4.9.1-.536.017-1.084.022-1.637.028-2.75.028-5.65.057-8.063 1.472zm15.1 80.5c.5 0 1-.1 1.5-.4 10-5.6 20-11.2 30-16.9v14.1c-5.2 2.9-10.4 5.825-15.6 8.75-5.2 2.925-10.4 5.85-15.6 8.75a690.448 690.448 0 00-.12-4.639c-.09-3.2-.18-6.431-.18-9.661zm-.1-6.4L109 93.6V80.2c-4.999 2.8-9.972 5.598-14.946 8.397l-.004.003c-4.975 2.8-9.95 5.6-14.95 8.4-.5.3-1 .4-1.5.4-.1 3.9-.1 7.8-.1 11.7v2.2zm.7 38.4c0-3.605-.095-7.115-.192-10.715L78 138.7l.183-.058c.267-.084.575-.181.817-.342 10-5.6 20-11.2 30-16.9 0 9.4 0 18.8.1 28.2-10.2.3-20.6.3-30.9.1zm-.6-58.8c10.4-5.8 20.8-11.6 31.2-17.5 0-3.605-.095-7.115-.192-10.715l-.008-.285c-5.1 0-10.225.025-15.35.05S83 62.5 77.9 62.5l-.3 28.4z" fill="#000"/>
                    </svg>
                </div>
                <div class="col content-col-heading">
                    <div class="h-text">Find the right<br><span class="base-color text-color">professionals for you!</span>
                    </div>
                    <div class="excerpt">UDEX free Connect search service allows you to find the very best specialist professionals in your local area</div>
                </div>
            </div>
        </div>
        <div class="section-tab-mode">
            <div class="heading-section">
                <div class="row g-0">
                    <div class="col-auto item">
                        <a href="{{ url('profile/design') }}" class="item-inner">
                            <div class="icon">
                                <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.785 21.64c.44 0 .685.342.734.734.134 1.414.142 2.816.149 4.23.003.642.007 1.287.022 1.936.024.392-.343.735-.734.735-.668.008-1.333.019-1.997.03a234.67 234.67 0 01-3.9.043.753.753 0 01-.735-.734c0-.881 0-1.787-.024-2.668-4.625-.024-9.274.074-13.9.294 0 .367-.005.734-.012 1.101-.006.367-.012.734-.012 1.101a.753.753 0 01-.734.735c-.677-.009-1.354-.011-2.031-.014-1.354-.005-2.708-.011-4.062-.06a.88.88 0 01-.44-.171.65.65 0 01-.294-.563c0-.954-.006-1.909-.012-2.863-.007-.954-.013-1.909-.013-2.863 0-.416.343-.71.734-.734l.71-.037.71-.037c-.025-4.771-.025-9.519-.025-14.29H1.011c-.44 0-.685-.343-.734-.735C.143 5.605.157 4.412.173 3.214.18 2.66.186 2.106.179 1.549c0-.391.342-.734.734-.734 1.982 0 3.94 0 5.897.025.392 0 .734.342.734.734v1.908l7-.073h.001l6.996-.073c0-.195.003-.393.006-.591.005-.4.01-.803-.006-1.196 0-.391.343-.734.735-.734 1.982 0 3.94 0 5.897.025.392 0 .734.342.734.734-.008.579-.01 1.158-.014 1.737a92.571 92.571 0 01-.06 3.475c-.024.147-.048.269-.122.367a.652.652 0 01-.611.367h-1.885c.123 4.723.22 9.446.318 14.169.38-.013.753-.019 1.126-.025.373-.006.747-.012 1.126-.024zm-2.851 1.541c-.722.019-1.444.037-2.166.05-.018 1.155.005 2.312.028 3.468.007.385.015.77.021 1.156 1.468 0 2.936-.024 4.405-.049-.018-.569-.023-1.135-.028-1.7-.008-.99-.017-1.977-.095-2.974-.721.012-1.443.03-2.165.05zM23.026 3.372c.004-.362.008-.724.008-1.089 1.468 0 2.937 0 4.405.025 0 1.248 0 2.496-.05 3.768a127.884 127.884 0 00-4.33 0c-.053-.908-.043-1.803-.033-2.704zm-21.338 0c-.01.9-.02 1.796.032 2.704 1.444-.024 2.888-.024 4.331 0 .05-1.272.05-2.52.05-3.768-1.469-.025-2.937-.025-4.405-.025 0 .365-.004.727-.008 1.089zm5.245 24.336c-1.542 0-3.084 0-4.65-.049 0-1.443 0-2.887-.024-4.33 1.117-.053 2.223-.044 3.333-.033.446.004.892.008 1.34.008.025 1.468.025 2.936 0 4.404zm1.492-5.163v2.227c4.622-.22 9.248-.318 13.875-.294a26.081 26.081 0 010-1.958c0-.22.073-.366.196-.489a.133.133 0 00.02-.026c.008-.013.013-.023.029-.023a.644.644 0 01.489-.195c.343-.013.68-.019 1.015-.025.34-.005.678-.013 1.016-.025-.12-4.628-.216-9.28-.312-13.91l-.006-.282h-2.374c-.44 0-.685-.343-.734-.735a18.364 18.364 0 01-.098-2.006l-6.998.073-6.999.074c0 .612-.024 1.223-.049 1.835 0 .147-.024.269-.098.367-.122.196-.318.367-.636.367h-2.35c.025 4.772.025 9.52.025 14.291.358 0 .716.003 1.075.005.72.006 1.445.011 2.18-.005.391 0 .734.343.734.734z" fill="#ED7B00"/>
                                </svg>
                            </div>
                            <div class="label">
                                <div class="title">Design</div>
                                <div class="desc">Not started</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto item active">
                        <a href="{{ url('profile/connect') }}" class="item-inner">
                            <div class="icon">
                                <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.916.218c1.892-.095 4.18-.21 5.543 1.006 1.335 1.182 1.207 3.215 1.096 4.969-.023.364-.045.716-.053 1.046a.724.724 0 01-.711.702c-.58 0-1.167.006-1.754.012-.586.006-1.173.012-1.753.012.094 4.025.096 8.051.098 12.077.002 3.019.003 6.038.044 9.058a.725.725 0 01-.711.702c-2.923.047-5.846.047-8.768 0a.725.725 0 01-.711-.702c-.011-1.542-.046-3.09-.082-4.636a244.447 244.447 0 01-.084-5.57c.012-1.813.03-3.633.047-5.452.018-1.82.036-3.64.047-5.454-1.28 0-2.535 0-3.815-.023a.708.708 0 01-.71-.702l-.072-2.739c0 .14-.024-.14-.024-.398 0-.374.048-.749.119-1.1C6.316.137 9.548.213 12.112.272c.407.01.797.019 1.157.016.38 0 .71.327.71.702v2.2h1.897V.967c0-.211.07-.352.19-.468l.047-.047c.095-.117.26-.188.474-.188.404 0 .854-.022 1.329-.046zm-9.98 1.849c-.686.397-.947 1.123-.97 1.848 0 .019 0 .059.003.108.005.14.014.355-.004.337 0 .094.006.188.012.281.006.094.012.187.012.281.012.27.018.544.024.82.006.274.012.55.023.818 4.285.038 8.57.015 12.854-.007l3.214-.016.014-.17c.119-1.438.279-3.372-.678-4.16-.498-.421-1.161-.538-1.8-.562-1.115-.047-2.229-.023-3.342 0V3.87a.724.724 0 01-.711.702h-3.318a.724.724 0 01-.71-.702v-2.2c-.392.011-.777.017-1.162.023-.385.006-.77.012-1.161.024a18.75 18.75 0 01-.388.006c-.652.007-1.339.013-1.911.345zm3.58 18.84a.676.676 0 00.355-.093c2.37-1.31 4.74-2.621 7.11-3.955v3.3c-1.233.679-2.465 1.363-3.698 2.048-1.232.684-2.464 1.37-3.697 2.048-.007-.36-.017-.722-.028-1.086-.021-.749-.043-1.505-.043-2.261zm-.024-1.497l7.464-4.143v-3.136c-1.184.655-2.363 1.31-3.541 1.965h-.001c-1.18.656-2.358 1.312-3.543 1.967a.675.675 0 01-.356.094c-.023.912-.023 1.825-.023 2.738v.515zm.166 8.988c0-.844-.023-1.666-.046-2.508l-.002-.067.043-.014a.778.778 0 00.194-.08c2.37-1.31 4.74-2.621 7.11-3.955 0 2.2 0 4.4.023 6.6-2.417.07-4.882.07-7.322.024zm-.142-13.763c2.464-1.357 4.929-2.715 7.393-4.096 0-.843-.022-1.665-.045-2.507l-.002-.067c-1.209 0-2.423.006-3.638.011-1.215.006-2.429.012-3.638.012l-.07 6.647z" fill="#ADADAD"/>
                                </svg>
                            </div>
                            <div class="label">
                                <div class="title">Connect</div>
                                <div class="desc">Not started</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-content-tab-mode">
                <div class="section-inner">
                    <div class="row">
                        <div class="col-8">
                            <div class="section-text">
                                <div class="title-section">Connecting you with suppliers</div>
                                <div class="desc-section">Prepare yourself for working with third party suppliers, understanding what you’ll need, and knowing when you’ll need them.</div>
                            </div>

                            <div class="connect-service-block">
                                <div class="section-text">
                                    <div class="title-section">Architectural support</div>
                                    <div class="desc-section">Suppliers that provide necessary input to your drawings.</div>
                                </div>

                                <div class="connect-service-list">
                                    @forelse($Connects_Service as $item)
                                        <div class="connect-item">
                                            <span class="row align-items-center">
                                                <span class="col-auto">
                                                    <span class="icon"><img src="{{ asset('public/assets/site/images/base/connect') . '/' . json_decode($item->connect_meta, true)['service_are_you_looking'] . '.svg' }}" alt="{{ str_replace('_', ' ', json_decode($item->connect_meta, true)['service_are_you_looking']) }}"></span>
                                                </span>
                                                <span class="col">
                                                    <span class="title-item text-capitalize">{{ str_replace('_', ' ', json_decode($item->connect_meta, true)['service_are_you_looking']) }}</span>
                                                </span>
                                            </span>
                                            <span class="link-btn"><span class="text">{{ $item->status == 'Requested' || $item->status == null ? 'Requested': $item->status }}</span></span>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        {{-- Estimate the construction costs --}}
                        <div class="col-4">
                            <div class="heading-block-side">Estimate the construction costs</div>

                            <div class="connect-quote">
                                @forelse($Connects_Design_Quote as $item)
                                    <a href="{{ url('project-cost-estimates' .'/'. $item->slug) }}" class="order-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="order-icon">
                                                    <img src="{{ asset('public/assets/site/images/base/design/designs-icons') . "/" . json_decode($item->connect_meta, true)['what_type_of_property_is_this'] . '.svg' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="order-title text-capitalize">{{ str_replace('_',' ', json_decode($item->connect_meta, true)['what_type_of_property_is_this']) }}</div>
                                            </div>
                                            <div class="col-12">
                                                <div class="price">
                                                    <span class="icon"><svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.19885 5.49912C6.66749 5.49912 7.85783 4.30856 7.85783 2.84015C7.85783 1.37174 6.66726 0.181396 5.19885 0.181396C3.73044 0.181396 2.53943 1.37196 2.53943 2.84037C2.53943 4.30878 3.73044 5.49912 5.19885 5.49912ZM6.32675 5.68036H4.07051C2.19325 5.68036 0.666016 7.20782 0.666016 9.08508V11.8443L0.67303 11.8875L0.863086 11.947C2.65459 12.5068 4.21102 12.6934 5.49208 12.6934C7.99426 12.6934 9.44457 11.98 9.53395 11.9346L9.71156 11.8447H9.73056V9.08508C9.73124 7.20782 8.204 5.68036 6.32675 5.68036Z" fill="#999"></path></svg></span>
                                                    £{{ number_format(json_decode($item->connect_meta, true)['values']['small']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'] - (json_decode($item->connect_meta, true)['values']['small']['range_avg'] / 100) * json_decode($item->connect_meta, true)['values']['small']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'], 2) }} to £{{ number_format(json_decode($item->connect_meta, true)['values']['small']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'] + (json_decode($item->connect_meta, true)['values']['small']['range_avg'] / 100) * json_decode($item->connect_meta, true)['values']['small']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'], 2) }}
                                                </div>
                                                <div class="price">
                                                    <span class="icon"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.3372 2.88637C11.1293 3.38298 11.6847 4.22334 11.7858 5.1988C12.1088 5.34973 12.4673 5.43652 12.8474 5.43652C14.235 5.43652 15.3597 4.31184 15.3597 2.92442C15.3597 1.53679 14.235 0.412109 12.8474 0.412109C11.473 0.412537 10.3582 1.51713 10.3372 2.88637ZM8.69134 8.03029C10.079 8.03029 11.2037 6.90539 11.2037 5.51797C11.2037 4.13056 10.0788 3.00587 8.69134 3.00587C7.30393 3.00587 6.1786 4.13077 6.1786 5.51819C6.1786 6.9056 7.30393 8.03029 8.69134 8.03029ZM9.75702 8.20153H7.62523C5.85152 8.20153 4.40852 9.64474 4.40852 11.4185V14.0255L4.41515 14.0663L4.59472 14.1225C6.28741 14.6514 7.75799 14.8278 8.9684 14.8278C11.3326 14.8278 12.7029 14.1537 12.7873 14.1108L12.9551 14.0259H12.9731V11.4185C12.9737 9.64474 11.5307 8.20153 9.75702 8.20153ZM13.9135 5.60798H11.7982C11.7753 6.45432 11.414 7.21644 10.8426 7.76456C12.4192 8.23338 13.5727 9.6954 13.5727 11.4223V12.2257C15.6613 12.1491 16.8649 11.5572 16.9442 11.5174L17.112 11.4323H17.13V8.82447C17.13 7.05097 15.687 5.60798 13.9135 5.60798ZM4.28303 5.43695C4.77451 5.43695 5.23178 5.29351 5.61914 5.04916C5.74228 4.246 6.17283 3.54417 6.78787 3.06616C6.79043 3.01913 6.79492 2.97252 6.79492 2.92507C6.79492 1.53744 5.67002 0.412751 4.28303 0.412751C2.89519 0.412751 1.77072 1.53744 1.77072 2.92507C1.77072 4.31205 2.89519 5.43695 4.28303 5.43695ZM6.53924 7.76456C5.97059 7.21922 5.61059 6.46116 5.5843 5.61995C5.50584 5.61417 5.42824 5.60798 5.34829 5.60798H3.21671C1.443 5.60798 0 7.05097 0 8.82447V11.4319L0.00662711 11.4721L0.1862 11.5288C1.54412 11.9527 2.75602 12.1481 3.80866 12.2096V11.4223C3.80909 9.6954 4.96221 8.23381 6.53924 7.76456Z" fill="#999"></path></svg></span>
                                                    £{{ number_format(json_decode($item->connect_meta, true)['values']['medium']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'] - (json_decode($item->connect_meta, true)['values']['medium']['range_avg'] / 100) * json_decode($item->connect_meta, true)['values']['medium']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'], 2) }} to £{{ number_format(json_decode($item->connect_meta, true)['values']['medium']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'] + (json_decode($item->connect_meta, true)['values']['medium']['range_avg'] / 100) * json_decode($item->connect_meta, true)['values']['medium']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'], 2) }}
                                                </div>
                                                <div class="price">
                                                    <span class="icon">
                                                        <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.1846 8.246V9.94H21.8746V12.25H20.1806V9.94H17.8846V8.246H20.1806V5.95H21.8746V8.246H24.1846Z" fill="#999"></path><g clip-path="url(#clip0)"><path d="M10.4197 5.76671C11.2181 6.26728 11.7779 7.11434 11.8798 8.09759C12.2054 8.24972 12.5668 8.33721 12.9499 8.33721C14.3486 8.33721 15.4823 7.20355 15.4823 5.80506C15.4823 4.40636 14.3486 3.27271 12.9499 3.27271C11.5646 3.27314 10.4408 4.38654 10.4197 5.76671ZM8.76068 10.9517C10.1594 10.9517 11.293 9.81779 11.293 8.41931C11.293 7.02082 10.1592 5.88716 8.76068 5.88716C7.3622 5.88716 6.22789 7.02104 6.22789 8.41952C6.22789 9.81801 7.3622 10.9517 8.76068 10.9517ZM9.83487 11.1243H7.68607C5.89821 11.1243 4.44369 12.579 4.44369 14.3669V16.9947L4.45037 17.0358L4.63138 17.0925C6.33758 17.6256 7.81988 17.8034 9.03995 17.8034C11.423 17.8034 12.8042 17.124 12.8893 17.0807L13.0585 16.9951H13.0766V14.3669C13.0772 12.579 11.6227 11.1243 9.83487 11.1243ZM14.0245 8.51002H11.8923C11.8692 9.36312 11.5051 10.1313 10.9291 10.6838C12.5183 11.1564 13.681 12.6301 13.681 14.3707V15.1805C15.7863 15.1034 16.9995 14.5067 17.0794 14.4666L17.2486 14.3809H17.2667V11.7522C17.2667 9.96454 15.8122 8.51002 14.0245 8.51002ZM4.31721 8.33764C4.8126 8.33764 5.27352 8.19305 5.66398 7.94675C5.78809 7.13718 6.22208 6.42975 6.84202 5.94793C6.84461 5.90052 6.84913 5.85355 6.84913 5.80571C6.84913 4.40701 5.71526 3.27335 4.31721 3.27335C2.91829 3.27335 1.78485 4.40701 1.78485 5.80571C1.78485 7.20377 2.91829 8.33764 4.31721 8.33764ZM6.59141 10.6838C6.01823 10.1341 5.65536 9.37002 5.62885 8.52209C5.54977 8.51627 5.47155 8.51002 5.39096 8.51002H3.24238C1.45451 8.51002 0 9.96454 0 11.7522V14.3804L0.00667998 14.4209L0.187686 14.478C1.55643 14.9053 2.77801 15.1023 3.83905 15.1644V14.3707C3.83948 12.6301 5.0018 11.1568 6.59141 10.6838Z" fill="#999"></path></g><defs><clipPath id="clip0"><rect width="17.2667" height="17.2667" fill="white" transform="translate(0 1.90479)"></rect></clipPath></defs></svg>
                                                    </span>
                                                    £{{ number_format(json_decode($item->connect_meta, true)['values']['large']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'] - (json_decode($item->connect_meta, true)['values']['large']['range_avg'] / 100) * json_decode($item->connect_meta, true)['values']['large']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'], 2) }} to £{{ number_format(json_decode($item->connect_meta, true)['values']['large']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'] + (json_decode($item->connect_meta, true)['values']['large']['range_avg'] / 100) * json_decode($item->connect_meta, true)['values']['large']['avg_final'] * json_decode($item->connect_meta, true)['square_metres'], 2) }}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </article>
@endsection
