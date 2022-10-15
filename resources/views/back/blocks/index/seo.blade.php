@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'SEO-текст главной страницы'])

    <div class="box box-info">
        <div class="box-body">

            @include('back.tpls.texteditor', [
            'title' => 'SEO-текст',
            'field_name' => 'index_seo',
            'br_replace' => true
            ])

            @include('back.tpls.last_modified', [
            'blocks' => [
                ['block_name' => 'index_page']
            ]])

        </div>
    </div>

@endsection