@extends('front.layout')
@section('content')
   @include('front.meta.meta', [
        'title' => $r_products_list->seo_title,
        'description' => $r_products_list->seo_description,
        'keywords' => $r_products_list->seo_keywords,
    ])
    <main class="page__product product" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{ $r_products_list->seo_title }}">
        <meta itemprop="url" content="">
        <meta itemprop="description" content="{{ $r_products_list->seo_description }}">
        <meta itemprop="logo" content="">
        <div class="product__wrap retail">
            <div class="product__main-content">
                <div class="product__col-1">
                    <div class="product__small-slider js_product_small_slider">
                        <div class="product__small-slide img__wrap">
                            <img data-src="/img/product-1.png" alt="" class="product__small-img img b-lazy">
                        </div>
                        <div class="product__small-slide img__wrap">
                            <img src="/img/product-2.png" alt="" class="product__small-img img">
                        </div>
                        <div class="product__small-slide img__wrap">
                            <img src="/img/product-3.png" alt="" class="product__small-img img">
                        </div>
                        <div class="product__small-slide img__wrap">
                            <img src="/img/product-4.png" alt="" class="product__small-img img">
                        </div>
                    </div>
                    <div class="product__big-slider js_product_big_slider">
                        <div class="product__big-slide img__wrap">
                            <img data-src="/img/product-big.png" alt="" class="product__big-img img b-lazy">
                        </div>
                        <div class="product__big-slide img__wrap">
                            <img src="/img/product-big.png" alt="" class="product__big-img img">
                        </div>
                        <div class="product__big-slide img__wrap">
                            <img src="/img/product-big.png" alt="" class="product__big-img img">
                        </div>
                        <div class="product__big-slide img__wrap">
                            <img src="/img/product-big.png" alt="" class="product__big-img img">
                        </div>
                    </div>
                </div>
                <div class="product__col-2">
                    <p class="product__category">
                        Мужская футболка
                    </p>
                    <p class="product__title">
                        Classic
                    </p>
                    <p class="product__articul">
                        Артикул: 0000000
                    </p>
                    <div class="product__price-wrap">
                        <p class="product__price retail">
                            10 000 тг
                        </p>
                        <p class="product__old-price">
                            20 000тг
                        </p>
                        <span class="product__sale catalog__cards-sale catalog__cards-sale--retail retail">
                            -50%
                        </span>
                    </div>
                    <p class="product__characters">
                        Состав: 100% хлопок <br>
                        Метод нанесения: ДТФ печать
                    </p>
                    <p class="product__size-wrap">
                        Размер: <a href="/img/sizes.jpg" class="product__size-link retail">Таблица Размеров</a>
                    </p>
                    <ul class="product__sizes-list retail">
                        <li class="product__sizes-item">
                            XS (40-42)
                        </li>
                        <li class="product__sizes-item">
                            S (42-44)
                        </li>
                        <li class="product__sizes-item">
                            M (44-46)
                        </li>
                        <li class="product__sizes-item">
                            L (46-48)
                        </li>
                        <li class="product__sizes-item">
                            XL (48-50)
                        </li>
                        <li class="product__sizes-item">
                            XS (50-52)
                        </li>
                    </ul>
                    <p class="product__color-desc">
                        Цвет:
                    </p>
                    <ul class="product__colors-list">
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                        <li class="product__colors-item img__wrap">
                            <a href="#" class="product__img-link img"></a>
                            <img src="/img/product-1.png" alt="" class="product__color-img img">
                        </li>
                    </ul>
                    <a href="#" id="{{$r_products_list->slug}}" data-img="{{$r_products_list->img->link}}" data-color="color" data-size="size" class="product__cart-btn btn retail add-To-Cart">
                        Добавить в корзину
                    </a>
                </div>
            </div>
            <p class="product__desc">
                Over size бомбер цвета хаки на резинке с объемными рукавами. Фурнитура выполнена в серебряном цвете. Акцентными деталями выступают объемные нашитые карманы и капюшон, который отстёгивается. 
            </p>
            <p class="product__subtitle retail">
                Другие товары
            </p>
            <ul class="product__products-list">
                <li class="product__products-item catalog__product-item"></li>
            </ul>
            @php
                $count = 0;
            @endphp
            <ul class="product__products-list catalog__cards-list js_products_list">
            @foreach($retail_page->r_categories_list_group as $item)
                @if ($count <= 5)
                    @foreach($item->r_products_list_group as $item1)
                    @php
                        $count++;
                    @endphp
                    @if ($count <= 5)
                    <li class="retail-catalog__cards-item product__products-item catalog__cards-item catalog__cards-item--retail" data-category="{{ $item->slug }}">
                        <div class="retail-catalog__cards-img-wrap catalog__cards-img-wrap img__wrap">
                            <img data-src="{{ $item1->img->link }}?{{ $item1->img->cache_index }}" alt=""
                                class="retail-catalog__cards-img catalog__cards-img img b-lazy">
                        </div>
                        <div class="retail-catalog__price-block catalog__cards-price-block">
                            <p class="retail-catalog__current-price catalog__cards-current-price">
                                <b>{{ $item1->price }}</b>
                            </p>
                            <p class="retail-catalog__old-price catalog__cards-old-price">
                                {{ $item1->old_price }}
                            </p>
                            <p class="retail-catalog__sale catalog__cards-sale catalog__cards-sale--retail">
                                <b>{{ $item1->sale }}</b>
                            </p>
                        </div>
                        <p class="retail-catalog__card-desc catalog__cards-desc">
                            {{ $item1->title }}
                        </p>
                        <a href="retail-product/{{ $item1->slug }}"
                            class="retail-catalog__card-btn catalog__cards-btn catalog__cards-btn--retail btn">Купить</a>
                    </li>
                    @else 
                        @break
                    @endif
                    @endforeach
                @else 
                    @break
                @endif
            @endforeach
            </ul>
            @include('front.branding.blocks.5features-block')
        </div>
    </main>
    @include('front.footer')
@endsection