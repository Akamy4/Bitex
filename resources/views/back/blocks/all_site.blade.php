@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Общие настройки'])

    <div class="box box-info">
        <div class="box-body">
            @include('back.tpls.text', [
            'title' => 'Поле для вставки скриптов (перед закрывающим тегом head)',
            'block' => $scripts,
            'field_name' => 'before_head_close'
            ])

            @include('back.tpls.text', [
            'title' => 'Поле для вставки скриптов (после открывающего тега body)',
            'block' => $scripts,
            'field_name' => 'after_body_open'
            ])

            @include('back.tpls.text', [
            'title' => 'Поле для вставки скриптов (перед закрывающим тегом body)',
            'block' => $scripts,
            'field_name' => 'before_body_close'
            ])
        </div>
    </div>

@endsection
