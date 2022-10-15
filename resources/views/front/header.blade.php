<div class="blackout"></div>
<header class="page__header header">
    <div class="header__wrap">
        @if(action('FrontController@getIndex') !== Request::url())
        <a href="/">
            <img src="/img/sprite.svg#logo" alt="" class="header__logo-img">
        </a>
        @else
        <img src="/img/sprite.svg#logo" alt="" class="header__logo-img">
        @endif
        <div class="header__information">
            <p class="header__desc">
                Наш адрес
                <span>мкр Жетысу - 4, 3а</span>
            </p>
            <p class="header__desc">
                Часы работы
                <span>ПН - ПТ с 9:00 - 18:00, СБ 10:00 - 14:00</span>
            </p>
        </div>
        <form method="GET" action="/search" class="header__search-form">
            <input name="search_name" type="search" class="header__input input">
            <button type="submit" class="header__btn"></button>
        </form>
        <button class="header__menu-btn">
            <span class="header__menu-btn-line"></span>
            <span class="header__menu-btn-line"></span>
            <span class="header__menu-btn-line"></span>
        </button>
    </div>
    <nav class="header__nav nav @if(action('FrontController@getIndex')==Request::url()){{trim('nav--index')}}@else @if(action('FrontController@getRetail')==Request::url()){{trim('nav--retail')}}@else @if(action('FrontController@getBranding')==Request::url()){{trim('nav--brand')}}@else{{trim('nav--corp')}}@endif @endif @endif">
        <div class="nav__wrap">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="/corporate" class="nav__link link js_index_nav">Корпоративным клиентам</a>
                </li>
                <li class="nav__item">
                    <a href="/retail" class="nav__link link js_index_nav">Розничным клиентам</a>
                </li>
                <li class="nav__item">
                    <a href="/branding" class="nav__link link js_index_nav">Брендирование</a>
                </li>
            </ul>
        </div>
    </nav>
</header>