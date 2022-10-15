@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Цвет товара Брендинга'])

    <div class="box box-info">
        <div class="box-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#panel1"><i class="glyphicon glyphicon-pencil"></i> <b>О странице</b></a></li>
                <li><a data-toggle="tab" href="#panel2"><i class=" glyphicon glyphicon glyphicon-home"></i> <b>Основное содержимое</b></a></li>
            </ul>

            <div class="tab-content">
                <div id="panel1" class="tab-pane fade in active " style="padding-top: 10px">
                    @include('back.tpls.string', [
                    'title' => 'Название цвета',
                    'field_name' => 'color_name'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'URL адрес',
                    'field_name' => 'slug',
                    ])
                </div>

                <div id="panel2" class="tab-pane fade" style="padding-top: 10px">
                    @include('back.tpls.image', [
                    'title' => 'Изображение цвета (640x770 пикселей, в формате JPG/PNG)',
                    'field_name' => 'color_image'
                    ])

                    @include('back.tpls.box_group', [
                    'title' => 'Список размеров',
                    'group_name' => 'b_products_sizes_list',
                    ])

                    @include('back.tpls.box_group', [
                    'title' => 'Список фотографий товара',
                    'group_name' => 'b_products_images_list',
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