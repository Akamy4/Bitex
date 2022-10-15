@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Товар со страницы Розницы'])

    <div class="box box-info">
        <div class="box-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#panel1"><i class="glyphicon glyphicon-pencil"></i> <b>О странице</b></a></li>
                <li><a data-toggle="tab" href="#panel2"><i class=" glyphicon glyphicon glyphicon-home"></i> <b>Основное содержимое</b></a></li>
            </ul>

            <div class="tab-content">
                <div id="panel1" class="tab-pane fade in active " style="padding-top: 10px">
                    @include('back.tpls.string', [
                    'title' => 'Название товара',
                    'field_name' => 'product_name'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'URL адрес',
                    'field_name' => 'slug',
                    ])

                    @include('back.tpls.seo-fields')
                </div>

                <div id="panel2" class="tab-pane fade" style="padding-top: 10px">
                    @include('back.tpls.image', [
                    'title' => 'Изображение товара в каталоге (174x178 пикселей, в формате JPG/PNG)',
                    'field_name' => 'img'
                    ])
                    
                    @include('back.tpls.string', [
                    'title' => 'Заголовок',
                    'field_name' => 'title'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'Артикул',
                    'field_name' => 'articul'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'Старая цена',
                    'field_name' => 'old_price'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'Текущая цена',
                    'field_name' => 'price'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'Размер скидки',
                    'field_name' => 'sale'
                    ])

                    @include('back.tpls.text', [
                    'title' => 'Состав',
                    'field_name' => 'made_from',
                    'br_replace' => true
                    ])

                    @include('back.tpls.image', [
                    'title' => 'Изображение размерной сетки (640x770 пикселей, в формате JPG/PNG)',
                    'field_name' => 'sizes_img'
                    ])

                    @include('back.tpls.text', [
                    'title' => 'Описание',
                    'field_name' => 'desc',
                    'br_replace' => true
                    ])

                    @include('back.tpls.page_group', [
                    'title' => 'Список цветов',
                    'group_name' => 'r_products_colors_list',
                    'input_field_name' => 'color_name'
                    ])

                    @include('back.tpls.last_modified', [
                    'blocks' => [
                        ['block_name' => 'retail_page']
                    ]])
                </div>
            </div>
        </div>
    </div>
@endsection