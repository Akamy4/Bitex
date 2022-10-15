@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">
               <a href="/">Перейти на сайт</a>
            </li>
            <li>
                <a href="/adm/all">
                    <i class="fa fa-wrench"></i> <span>Общие настройки</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-code-fork"></i> <span>Главная страница</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" data-widget="tree">
                    <li><a href="/adm/index"><i class="fa fa-list"></i>Основной контент</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-code-fork"></i> <span>Розничным клиентам</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" data-widget="tree">
                    <li><a href="/adm/retail-page"><i class="fa fa-list"></i>Основной контент</a></li>
                    <li><a href="/adm/retail-offers"><i class="fa fa-list"></i>Спец. предложения</a></li>
                    <li><a href="/adm/retail-categories"><i class="fa fa-list"></i>Список категорий</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-code-fork"></i> <span>Брендирование</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" data-widget="tree">
                    <li><a href="/adm/branding-page"><i class="fa fa-list"></i>Основной контент</a></li>
                    <li><a href="/adm/branding-types"><i class="fa fa-list"></i>Список типов печати</a></li>
                    <li><a href="/adm/branding-categories"><i class="fa fa-list"></i>Список категорий</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-code-fork"></i> <span>Корпоративным</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" data-widget="tree">
                    <li><a href="/adm/corporate-page"><i class="fa fa-list"></i>Основной контент</a></li>
                    <li><a href="/adm/corporate-categories"><i class="fa fa-list"></i>Список категорий</a></li>
                </ul>
            </li>
        </ul>
    </section>

@endsection
