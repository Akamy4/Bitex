@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => /* $r_offers_list->seo_title */ 'Специальное предложение - Bitex',
        'description' => $r_offers_list->seo_description,
        'keywords' => $r_offers_list->seo_keywords,
    ])
    <main class="page__information information" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{-- {{ $r_offers_list->seo_title }} --}}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{-- {{ $r_offers_list->seo_description }} --}}">
        <meta itemprop="logo" content="">
    </main>
    @include('front.footer')
@endsection