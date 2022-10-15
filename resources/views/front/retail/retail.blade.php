@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => $retail_page->seo_title,
        'description' => $retail_page->seo_description,
        'keywords' => $retail_page->seo_keywords,
    ])
    <main class="page__retail retail" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{ $retail_page->seo_title }}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{ $retail_page->seo_description }}">
        <meta itemprop="logo" content="">
        @include('front.retail.blocks.1title-block')
        @include('front.retail.blocks.2video-block')
        @include('front.retail.blocks.3promo-block')
        @include('front.retail.blocks.4catalog-block')
        @include('front.common.feedback-block')
        @include('front.common.reviews-block')
    </main>
    @include('front.footer')
@endsection