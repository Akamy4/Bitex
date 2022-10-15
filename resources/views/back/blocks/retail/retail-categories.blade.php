@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категории страницы Розничным клиентам'])

    <div class="box box-info">
        <div class="box-body">
            @include('back.tpls.page_group', [
            'title' => 'Список категорий',
            'group_name' => 'r_categories_list',
            'input_field_name' => 'category_name'
            ])

            @include('back.tpls.last_modified', [
            'blocks' => [
                ['block_name' => 'retail_page']
            ]])
        </div>
    </div>

@endsection