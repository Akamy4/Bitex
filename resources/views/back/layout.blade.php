<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/img/fav.svg">

    <title>Bitex | Панель управления</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include('back.styles')
    @yield('styles')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-blue fixed">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <a href="/adm" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg">Панель управления</span>
        </a>


        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/logout"><i class="fa  fa-arrow-circle-right"></i> Выход</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <aside class="main-sidebar">
        @include('back.main-menu')
        @yield('main-menu')
    </aside>


    <div class="content-wrapper">
        {{-- Заголовок страницы, Хлебные крошки --}}
        @yield('content-top')
        <section class="content">
            {{-- Основной контент страницы --}}
            @yield('content')
        </section>
    </div>

    {{-- Кнопка сохранить. Копирайт. Статус --}}
    @include('back.footer')
    @yield('footer')


    @include('back.special.right-tab')

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('back.scripts')
@yield('scripts')

</body>
</html>
