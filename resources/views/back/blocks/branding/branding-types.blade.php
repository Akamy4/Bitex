@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Специальные предложения страницы Брендинга'])

    <div class="box box-info">
        <div class="box-body">
            @include('back.tpls.page_group', [
            'title' => 'Список типов печати',
            'group_name' => 'b_types_list',
            'input_field_name' => 'type_name'
            ])

            @include('back.tpls.last_modified', [
            'blocks' => [
                ['block_name' => 'branding_page']
            ]])
        </div>
    </div>

@endsection