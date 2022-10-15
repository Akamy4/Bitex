@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Специальное предложение'])

    <div class="box box-info">
        <div class="box-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#panel1"><i class="glyphicon glyphicon-pencil"></i> <b>О странице</b></a></li>
                <li><a data-toggle="tab" href="#panel2"><i class=" glyphicon glyphicon glyphicon-home"></i> <b>Основное содержимое</b></a></li>
            </ul>

            <div class="tab-content">
                <div id="panel1" class="tab-pane fade in active " style="padding-top: 10px">
                    @include('back.tpls.string', [
                    'title' => 'Название предложения',
                    'field_name' => 'offer_name'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'URL адрес',
                    'field_name' => 'slug',
                    ])

                    @include('back.tpls.seo-fields')
                </div>

                <div id="panel2" class="tab-pane fade" style="padding-top: 10px">
                    @include('back.tpls.image', [
                    'title' => 'Изображение предложения (640x770 пикселей, в формате JPG/PNG)',
                    'field_name' => 'img'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'Описание изображения (alt)',
                    'field_name' => 'img_desc'
                    ])

                    @include('back.tpls.string', [
                    'title' => 'Заголовок',
                    'field_name' => 'title'
                    ])

                    @include('back.tpls.text', [
                    'title' => 'Описание',
                    'field_name' => 'desc',
                    'br_replace' => true
                    ])

                    @include('back.tpls.text', [
                    'title' => 'Ссылка на видео',
                    'field_name' => 'video',
                    'br_replace' => true
                    ])

                    @include('back.tpls.box_group', [
                    'title' => 'Список фотографий для страницы',
                    'group_name' => 'r_offers_images_list',
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