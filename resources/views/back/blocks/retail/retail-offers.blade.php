@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Специальные предложения страницы Розничным клиентам'])

    <div class="box box-info">
        <div class="box-body">
            @include('back.tpls.page_group', [
            'title' => 'Список специальных предложений (слайдер)',
            'group_name' => 'r_offers_list',
            'input_field_name' => 'offer_name'
            ])

            @include('back.tpls.last_modified', [
            'blocks' => [
                ['block_name' => 'retail_page']
            ]])
        </div>
    </div>

@endsection