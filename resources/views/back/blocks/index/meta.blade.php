@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Мета-данные главной страницы'])

    <div class="box box-info">
        <div class="box-body">

            @include('back.tpls.seo-fields')


            @include('back.tpls.last_modified', [
            'blocks' => [
                ['block_name' => 'index_page']
            ]])

        </div>
    </div>

@endsection