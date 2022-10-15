@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => $corporate_page->seo_title,
        'description' => $corporate_page->seo_description,
        'keywords' => $corporate_page->seo_keywords,
    ])
    <main class="page__corp corp" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{ $corporate_page->seo_title }}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{ $corporate_page->seo_description }}">
        <meta itemprop="logo" content="">
        @include('front.corporate.blocks.1title-block') 
        @include('front.corporate.blocks.2about-block')
        @include('front.corporate.blocks.3video-block')
        @include('front.corporate.blocks.4features-block')
        @include('front.corporate.blocks.5hits-block')
        @include('front.corporate.blocks.6catalog-block')
        @include('front.common.feedback-block')
        @include('front.common.reviews-block')
    </main>
    @include('front.footer')
@endsection