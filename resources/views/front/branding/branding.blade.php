@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => $branding_page->seo_title ,
        'description' => $branding_page->seo_description,
        'keywords' => $branding_page->seo_keywords,
    ])
    <main class="page__brand brand" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{ $branding_page->seo_title }}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{ $branding_page->seo_description }}">
        <meta itemprop="logo" content="">
        @include('front.branding.blocks.1title-block')
        @include('front.branding.blocks.2video-block')
        @include('front.branding.blocks.3categories-block')
        @include('front.branding.blocks.4catalog-block')
        @include('front.common.feedback-block')
        @include('front.branding.blocks.5features-block')
        @include('front.common.reviews-block')
    </main>
    @include('front.footer')
@endsection