<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Ошибка на сервере</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/fav.png">
    @include('front.meta.styles')
</head>

<style>
    body {
        position: fixed;
        width: 100%;
        height: 100%;
        position: relative;
        font-size: 17px;
        line-height: 1.2;
        font-family: Hind, sans-serif;
        top: 0;
        left: 0;
        margin: 200px 0 0;
        display: flex;
        overflow: auto;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }

    p {
        /* margin: 0; */
    }

    p.big {
        text-align: center;
        font-size: 80px;
        line-height: 75px;
        font-family: "Arial", sans-serif;
        color: #333333;
    }

    p.big:first-child {
        border-bottom: 1px solid #999999;
        margin: 0 auto;
        max-width: 280px;
        font-size: 160px;
        line-height: 140px;
        color: #333333;
    }

    p.big.error {}

    p.text {
        font-family: "Arial", sans-serif;
        margin-top: 15px;
        text-align: center;
        color: #333333;
        margin-bottom: 17px;
    }

    a.big {
        font-size: 36px;
        border-bottom: 1px solid rgba(0, 102, 153, 0.25);
        text-decoration: none;
        color: #006699;
        font-family: "Arial", sans-serif;
    }

    a.big:hover {
        color: red;
        border-bottom: 1px solid red;
    }

    a {}

    p {
        /* text-align: center; */
    }
</style>

<body class="">
    <div class="blackout"></div>
    <header class="page__header header">
        <div class="header__wrap">
            <div class="header__logo-wrap">
                <a href="/" class="header__logo-link"></a>
                <img src="/img/logo-t.png" alt="Автоматизация торговли Idpos" title="Автоматизация торговли Idpos"
                    class="header__logo">
            </div>
            <nav class="header__nav nav js_menu">
                <button class="nav__close-btn js_close_menu">
                    <span class="nav__close-btn-line"></span>
                    <span class="nav__close-btn-line"></span>
                </button>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/category/oborudovaniye" class="nav__link link link--w">
                            Оборудование
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/category/programmnoe-obespechenie" class="nav__link link link--w">
                            Программное обеспечение
                        </a>
                    </li>
                    <li class="nav__item nav__item--sub">
                        Готовые решения
                        <ul class="nav__sub-list">
                            <li class="nav__sub-item">
                                <a href="/automatization/produktovyj-magazin" class="nav__link link link--w">Продуктовый
                                    магазин</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/magazin-odezhdy" class="nav__link link link--w">Магазин
                                    одежды</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/magazin-kosmetiki" class="nav__link link link--w">Магазин
                                    косметики</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/obuvnoj-magazin" class="nav__link link link--w">Обувной
                                    магазин</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/pivnoj-magazin" class="nav__link link link--w">Пивной
                                    магазин</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/alkomarket" class="nav__link link link--w">Алкомаркет</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/stroitelnyj-magazin"
                                    class="nav__link link link--w">Строительный магазин</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/khozyajstvennyj-magazin"
                                    class="nav__link link link--w">Хозяйственный магазин</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/stolovaya" class="nav__link link link--w">Столовая</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/kafe" class="nav__link link link--w">Кафе</a>
                            </li>
                            <li class="nav__sub-item">
                                <a href="/automatization/magazin-kanczelyarii" class="nav__link link link--w">Магазин
                                    канцелярии</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="/contacts" class="nav__link link link--w">
                            О компании
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/contacts" class="nav__link link link--w">
                            Отзывы
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/contacts" class="nav__link link link--w">
                            Контакты
                        </a>
                    </li>
                </ul>
                <ul class="header__socials-list header__socials-list--mob">
                    <li class="header__socials-item">
                        <a href="http://wa.me/77075875134" class="header__socials-link header__socials-link--wpp"
                            rel="nofollow"></a>
                    </li>
                    <li class="header__socials-item">
                        <a href="https://t.me/iiskanderr" class="header__socials-link header__socials-link--tg"
                            rel="nofollow"></a>
                    </li>
                </ul>
            </nav>
            <ul class="header__socials-list">
                <li class="header__socials-item">
                    <a href="http://wa.me/77075875134" class="header__socials-link header__socials-link--wpp"
                        rel="nofollow"></a>
                </li>
                <li class="header__socials-item">
                    <a href="https://t.me/iiskanderr" class="header__socials-link header__socials-link--tg"
                        rel="nofollow"></a>
                </li>
            </ul>
            <div class="header__phones-wrap">
                <a href="tel:+77075875134" class="header__phone" rel="nofollow">+7 707 587-51-34</a>
                <a href="tel:+77075875134" class="header__phone" rel="nofollow">+7 747 149-45-56</a>
            </div>
            <button class="header__menu-btn js_open_menu">
                <span class="header__menu-btn-line"></span>
                <span class="header__menu-btn-line"></span>
                <span class="header__menu-btn-line"></span>
            </button>
        </div>
    </header>
    <div>
        <p class="big">500</p>
        <p class="big error">Ошибка</p>
        <p class="text">Страница временно недоступна</p>
        <p style="text-align: center"><a href="/" class="big">На главную</a></p>
    </div>
    <footer class="page__footer footer contacts" style="width: 100%"> 
        <p class="contacts__title title title--l1">Контактная информация</p>
        <div class="contacts__container container">
            <address class="contacts__info">
                <div class="contacts__method" itemprop="address" itemscope
                    itemtype="https://schema.org/PostalAddress">
                    <p class="contacts__method-title">Наш адрес</p>
                    <p itemprop="streetAddress" class="street-address contacts__text contacts__text--address">Алматы,
                        БЦ Алтын
                        Гасыр, ​ул. Шевченко 118</p>
                    <meta itemprop="addressLocality" content="Алматы">
                    <meta itemprop="addressCountry" content="Казахстан">
                </div>
                <div class="contacts__method contacts__method--phones" itemprop="contactPoint" itemscope
                    itemtype="https://schema.org/ContactPoint">
                    <p class="contacts__method-title contacts__method-title--for-desktop">Телефоны</p>
                    <div class="contacts__phone-wrap contacts__phone-wrap--messengers">
                        <p class="contacts__phone-title">WhatsApp, Telegram</p>
                        <p class="contacts__phone-title">
                            <a href="https://t.me/iiskanderr"
                                class="contacts__social-link contacts__social-link--tg contacts__social-link--pc"
                                rel="nofollow noreferrer" target="_blank" rel="nofollow">Telegram</a>
                            <a href="http://wa.me/77075875134"
                                class="contacts__social-link contacts__social-link--wa contacts__social-link--pc"
                                rel="nofollow noreferrer" target="_blank" rel="nofollow">WhatsApp</a>
                        </p>
                    </div>
                    <div class="contacts__phone-wrap">
                        <p class="contacts__phone-title">Колл-центр</p>
                        <p class="contacts__text">
                            <a itemprop="telephone" content="+7 707 587-51-34" href="tel:+77075875134"
                                class="tel contacts__phone-link" rel="nofollow">+7 707 587-51-34</a>
                        </p>
                        <p class="contacts__text">
                            <a href="tel:+77471494556" class="tel contacts__phone-link" rel="nofollow">+7 747
                                149-45-56</a>
                        </p>
                    </div>
                    <div class="contacts__phone-wrap">
                        <p class="contacts__phone-title">Почта</p>
                        <p class="contacts__text">
                            <a itemprop="email" content="isa27.95@mail.ru" href="mailto:isa27.95@mail.ru"
                                class="tel contacts__phone-link" rel="nofollow">isa27.95@mail.ru</a>
                        </p>
                    </div>
                </div>
                <div class="contacts__method contacts__method--socials">
                    <p class="contacts__method-title contacts__method-title--for-desktop">Мы в соцсетях</p>
                    <p class="contacts__method-title contacts__method-title--for-mobile">Мессенджеры и соцсети</p>
                    <ul class="contacts__social-list">
                        <li class="contacts__social-item contacts__social-item--for-mobile">
                            <a href="http://wa.me/77075875134" class="contacts__social-link contacts__social-link--wa"
                                rel="nofollow noreferrer" target="_blank">WhatsApp</a>
                        </li>
                        <li class="contacts__social-item contacts__social-item--for-mobile">
                            <a href="https://t.me/iiskanderr" class="contacts__social-link contacts__social-link--tg"
                                rel="nofollow noreferrer" target="_blank">Telegram</a>
                        </li>
                        <li class="contacts__social-item">
                            <a itemprop="sameAs" href="https://instagram.com/idpos.kz?utm_medium=copy_linkp"
                                class="contacts__social-link contacts__social-link--inst" rel="nofollow noreferrer"
                                target="_blank">Инстаграм</a>
                        </li>
                    </ul>
                </div>
                <a href="/files/Прайс-лист-IDPOS.xlsx" class="contacts__btn btn btn--b">Получить прайс-лист</a>
                <p class="contacts__copyright">
                    © 2022 - "Idpos" - Автоматизация торговли"
                </p>
            </address>
            <div class="contacts__map-wrapper">
                <p class="contacts__method-title contacts__method-title--map">Карта проезда</p>
                <div class="contacts__red-line"></div>
                <div class="contacts__map js_map" id="map"></div>
                <p class="contacts__copyright contacts__copyright--mob">
                    ©2022 - "Idpos" - Автоматизация торговли"
                </p>
            </div>
        </div>
        <nav class="contacts__nav">
            <ul class="contacts__nav-list container">
                <li class="contacts__nav-item">
                    <a href="/about" class="contacts__nav-link link link--w">О компании</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/reviews" class="contacts__nav-link link link--w">Отзывы</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/contacts" class="contacts__nav-link link link--w">Контакты</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/category/oborudovaniye" class="contacts__nav-link link link--b">Оборудование</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/category/programmnoe-obespechenie" class="contacts__nav-link link link--b">Программное
                        обеспечение</a>
                </li>

                <li class="contacts__nav-item">
                    <a href="/automatization/produktovyj-magazin" class="contacts__nav-link link link--b">Продуктовый
                        магазин</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/magazin-odezhdy" class="contacts__nav-link link link--b">Магазин
                        одежды</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/magazin-kosmetiki" class="contacts__nav-link link link--b">Магазин
                        косметики</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/obuvnoj-magazin" class="contacts__nav-link link link--b">Обувной
                        магазин</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/pivnoj-magazin" class="contacts__nav-link link link--b">Пивной
                        магазин</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/alkomarket" class="contacts__nav-link link link--b">Алкомаркет</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/stroitelnyj-magazin" class="contacts__nav-link link link--b">Строительный
                        магазин</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/khozyajstvennyj-magazin"
                        class="contacts__nav-link link link--b">Хозяйственный магазин</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/stolovaya" class="contacts__nav-link link link--b">Столовая</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/kafe" class="contacts__nav-link link link--b">Кафе</a>
                </li>
                <li class="contacts__nav-item">
                    <a href="/automatization/magazin-kanczelyarii" class="contacts__nav-link link link--b">Магазин
                        канцелярии</a>
                </li>
            </ul>
        </nav>
    </footer>
    @include('front.meta.scripts')
</body>

</html>
