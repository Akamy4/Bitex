@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => /* $retail_page->seo_title */ 'Специальное предложение - Bitex',
        /* 'description' => $retail_page->seo_description,
        'keywords' => $retail_page->seo_keywords, */
    ])
    <main class="page__information information" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{-- {{ $retail_page->seo_title }} --}}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{-- {{ $retail_page->seo_description }} --}}">
        <meta itemprop="logo" content="">
    </main>
    @include('front.footer')
@endsection