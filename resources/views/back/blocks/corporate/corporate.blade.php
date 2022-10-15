@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Настройки страницы Корпоративным клиентам'])

    <div class="box box-info">
        <div class="box-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#panel1"><i class="glyphicon glyphicon-pencil"></i> <b>О странице</b></a></li>
                <li><a data-toggle="tab" href="#panel2"><i class=" glyphicon glyphicon glyphicon-home"></i> <b>Основное содержимое</b></a></li>
            </ul>

            <div class="tab-content">
                <div id="panel1" class="tab-pane fade  in active" style="padding-top: 10px">
                    {{-- @include('back.tpls.string', [
                    'title' => 'Название категории',
                    'field_name' => 'category_name'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'URL адрес',
                    'field_name' => 'slug',
                    ]) --}}

                    @include('back.tpls.seo-fields')
                </div>

                <div id="panel2" class="tab-pane fade" style="padding-top: 10px">
                    @include('back.tpls.string', [
                    'title' => 'Ссылка в баннере на категорию (URL, указанный в категории)',
                    'field_name' => 'banner_link'
                    ])

                    @include('back.tpls.image', [
                    'title' => 'Изображение баннера (1290x180 пикселей, в формате JPG/PNG)',
                    'field_name' => 'banner_img'
                    ])

                    {{-- @include('back.tpls.string', [
                    'title' => 'Заголовок',
                    'field_name' => 'title'
                    ])

                    @include('back.tpls.box_group', [
                    'title' => 'Список особенностей',
                    'group_name' => 'features_list',
                    ])

                    @include('back.tpls.page_group', [
                    'title' => 'Список подкатегорий',
                    'group_name' => 'subcategories_list',
                    'input_field_name' => 'subcategory_name'
                    ])

                    @include('back.tpls.last_modified', [
                    'blocks' => [
                        ['block_name' => 'category_page']
                    ]]) --}}

                    @include('back.tpls.last_modified', [
                    'blocks' => [
                        ['block_name' => 'corporate_page']
                    ]])
                </div>
            </div>
        </div>
    </div>

@endsection