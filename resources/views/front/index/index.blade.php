@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => /* $index_page->seo_title */ 'Главная - Bitex',
        'description' => $index_page->seo_description,
        'keywords' => $index_page->seo_keywords,
    ])
    @php
    // session_start();

    // if(!isset($_SESSION['cart'])){
    //     $_SESSION['cart'] = array();
    // }
    @endphp
    <main class="page__index index" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{ $index_page->seo_title }}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{ $index_page->seo_description }}">
        <meta itemprop="logo" content="/img/fav.png">
        <section class="index__title-block index-title">
            <div class="index-title__wrap">
                <div class="index-title__sector-wrap index-title__sector-wrap--index js_section active">
                    <div class="index-title__sector-heading index-title__sector-heading--index">
                        <h2 class="index-title__sector-title index-title__sector-title--index">
                            Print
                        </h2>
                        <p class="index-title__sector-desc">
                            текст текст текст
                            текст текст текст
                            текст текст текст
                        </p>
                        <ul class="index-title__links-list">
                            <li class="index-title__links-item">
                                <a href="/retail" class="index-title__link index-title__link--retail js_index_section_link">
                                    <img src="img/retail-text.svg" alt="" class="index-title__link-img">
                                </a>
                            </li>
                            <li class="index-title__links-item">
                                <a href="/branding" class="index-title__link index-title__link--brand js_index_section_link">
                                    <img src="img/brand-text.svg" alt="" class="index-title__link-img">
                                </a>
                            </li>
                            <li class="index-title__links-item">
                                <a href="/corporate" class="index-title__link index-title__link--corp js_index_section_link">
                                    <img src="img/corp-text.svg" alt="" class="index-title__link-img">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="index-title__sector-figure-1 index-title__sector-figure-1--index">
                        <img src="img/index-fig-1-1.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-2 index-title__sector-figure-2--index">
                        <img src="img/index-fig-2-1.svg" alt="" class="index-title__sector-figure-img"> 
                    </div>
                    <div class="index-title__sector-figure-3 index-title__sector-figure-3--index">
                        <img src="img/index-fig-3-1.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                </div>
                <div class="index-title__sector-wrap index-title__sector-wrap--retail js_section">
                    <a href="/retail" class="index-title__sector-link"></a>
                    <div class="index-title__sector-heading index-title__sector-heading--retail">
                        <h2 class="index-title__sector-title index-title__sector-title--retail">
                            Розница
                        </h2>
                        <p class="index-title__sector-desc">
                            текст текст текст
                            текст текст текст
                            текст текст текст
                        </p>
                    </div>
                    <div class="index-title__sector-figure-1 index-title__sector-figure-1--retail">
                        <img src="img/retail-fig-1.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-2 index-title__sector-figure-2--retail">
                        <img src="img/retail-fig-2.svg" alt="" class="index-title__sector-figure-img"> 
                    </div>
                    <div class="index-title__sector-figure-3 index-title__sector-figure-3--retail">
                        <img src="img/retail-fig-3.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                </div>
                <div class="index-title__sector-wrap index-title__sector-wrap--brand js_section">
                    <a href="/branding" class="index-title__sector-link"></a>
                    <div class="index-title__sector-heading index-title__sector-heading--brand">
                        <h2 class="index-title__sector-title index-title__sector-title--brand">
                            Брендирование
                        </h2>
                        <p class="index-title__sector-desc">
                            текст текст текст
                            текст текст текст
                            текст текст текст
                        </p>
                    </div>
                    <div class="index-title__sector-figure-1 index-title__sector-figure-1--brand">
                        <img src="img/brand-fig-1.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-2 index-title__sector-figure-2--brand">
                        <img src="img/brand-fig-2.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-3 index-title__sector-figure-3--brand">
                        <img src="img/brand-fig-3.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-4 index-title__sector-figure-4--brand">
                        <img src="img/brand-fig-4.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                </div>
                <div class="index-title__sector-wrap index-title__sector-wrap--corp js_section">
                    <a href="/corporate" class="index-title__sector-link"></a>
                    <div class="index-title__sector-heading index-title__sector-heading--corp">
                        <h2 class="index-title__sector-title index-title__sector-title--corp">
                            Для бизнеса
                        </h2>
                        <p class="index-title__sector-desc">
                            текст текст текст
                            текст текст текст
                            текст текст текст
                        </p>
                    </div>
                    <div class="index-title__sector-figure-1 index-title__sector-figure-1--corp">
                        <img src="img/corp-fig-1.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-2 index-title__sector-figure-2--corp">
                        <img src="img/corp-fig-2.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                    <div class="index-title__sector-figure-3 index-title__sector-figure-3--corp">
                        <img src="img/corp-fig-3.svg" alt="" class="index-title__sector-figure-img">
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('front.footer')
@endsection