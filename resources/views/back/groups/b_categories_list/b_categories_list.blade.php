@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория'])

    <div class="box box-info">
        <div class="box-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#panel1"><i class="glyphicon glyphicon-pencil"></i> <b>О странице</b></a></li>
                <li><a data-toggle="tab" href="#panel2"><i class=" glyphicon glyphicon glyphicon-home"></i> <b>Основное содержимое</b></a></li>
            </ul>

            <div class="tab-content">
                <div id="panel1" class="tab-pane fade in active " style="padding-top: 10px">
                    @include('back.tpls.string', [
                    'title' => 'Название категории',
                    'field_name' => 'category_name'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'URL адрес',
                    'field_name' => 'slug',
                    ])
                </div>

                <div id="panel2" class="tab-pane fade" style="padding-top: 10px">
                    @include('back.tpls.string', [
                    'title' => 'Заголовок',
                    'field_name' => 'title'
                    ])

                    @include('back.tpls.page_group', [
                    'title' => 'Список подкатегорий',
                    'group_name' => 'b_subcategories_list',
                    'input_field_name' => 'subcategory_name'
                    ])

                    @include('back.tpls.last_modified', [
                    'blocks' => [
                        ['block_name' => 'branding_page']
                    ]])
                </div>
            </div>
        </div>
    </div>
@endsection