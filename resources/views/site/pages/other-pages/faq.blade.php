@extends('layouts.site.pages-master')

@section('page-title',  'Frequently Asked Questions')

@section('page-style',  'pages/pages.min.css')

@section('content')
    <article class="container container-padding">
        <div class="page-info">
            <div class="heading-title">
                <span class="base-color text-color">F</span>
                requently
                <span class="base-color text-color">A</span>
                sked
                <span class="base-color text-color">Q</span>
                uestions
            </div>
            <div class="heading-desc">Straightforward answers to some of the most common questions we hear</div>
        </div>

        {{-- FAQ Items --}}
        <div class="section-content">
            <section class="faq-section">
                <div class="faq-list">
                    <div class="accordion" id="accordionPanelsFAQ">
                        @php $faq_count = 0; @endphp
                        @if(isset($Page->page_meta) && json_decode($Page->page_meta, true)['faq'])
                            @foreach(json_decode($Page->page_meta, true)['faq'] as $item)
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed" id="panelsStayOpen-heading-{{ $faq_count += 1 }}" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-{{ $faq_count }}" aria-expanded="true" aria-controls="panelsStayOpen-collapse-{{ $faq_count }}">{{ $item['question'] }}</div>
                                    <div id="panelsStayOpen-collapse-{{ $faq_count }}" class="content-item collapse" aria-labelledby="panelsStayOpen-heading-{{ $faq_count }}">
                                        <div class="content-inner">{{ $item['answer'] }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </article>
@endsection
