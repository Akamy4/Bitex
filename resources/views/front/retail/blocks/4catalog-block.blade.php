
<section class="retail__retail-catalog retail-catalog">
    <div class="retail-catalog__wrap">
        <h2 class="retail-catalog__title title">
            Каталог
        </h2>
        <ul class="retail-catalog__promo-list">
            
            @foreach($retail_page->r_categories_list_group as $item)
            @if($item->checkbox)
            <li class="retail-catalog__promo-item img__wrap">
                <a href="#catalog" class="retail-catalog__promo-link js_goto img js_catalog_link" data-category="{{ $item->slug }}"></a>
                <img data-src="{{ $item->img->link }}?{{ $item->img->cache_index }}" alt="" class="retail-catalog__promo-img img b-lazy">
            </li>
            @endif
            @endforeach
        </ul>
        <div class="retail-catalog__catalog-wrap catalog__wrap">
            <div class="retail-catalog__col-1 catalog__col-1" id="catalog">
                <ul class="retail-catalog__categories-list catalog__categories-list catalog__categories-list--retail">
                    @foreach($retail_page->r_categories_list_group as $item)
                    <li
                        class="retail-catalog__categories-item catalog__categories-item catalog__categories-item--retail">
                        <button
                            class="retail-catalog__categories-item-btn catalog__categories-item-btn catalog__categories-item-btn--retail js_catalog_category" data-category="{{ $item->slug }}">
                            {{ $item->category_name }}
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="retail-catalog__col-2 catalog__col-2">
                @php 
                    $count = 0;
                    $i = 0;
                    $k = 0;
                @endphp
                @foreach($retail_page->r_categories_list_group as $item)
                    @foreach($item->r_products_list_group as $item1)
                    @php $count++ @endphp
                    @endforeach
                @endforeach
                @php $count1 = $count; @endphp
                <ul class="retail-catalog__cards-list catalog__cards-list js_products_list">
                    @foreach($retail_page->r_categories_list_group as $item)
                        @foreach($item->r_products_list_group as $item1)
                        @php 
                        $k++
                        @endphp
                        @while($k > 0)
                            @php 
                            $k = $k - 16;
                            $i++;
                            @endphp
                        @endwhile
                        <li class="retail-catalog__cards-item catalog__cards-item catalog__cards-item--retail js_catalog_product @if($i >1) hidden @endif" data-category="{{ $item->slug }}" data-page="{{$i}}">
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
                            <a 
                            href="retail-product/{{ $item1->slug }}" id="{{ $item1->slug }}" name="cart_info"
                                class="retail-catalog__card-btn catalog__cards-btn catalog__cards-btn--retail btn">Купить</a>
                        </li>
                        @endforeach
                    @endforeach
                </ul>
                @if ($count > 16)
                @php 
                    $i = 1;
                @endphp
                <div class="retail-catalog__nav-block catalog__nav-block catalog__nav-block--retail js_catalog_nav">
                    <button class="retail-catalog__nav-btn retail-catalog__nav-btn--prev catalog__nav-btn catalog__nav-btn--prev js_nav_prev disabled" data-page="0">
                        < </button>
                    <ul class="retail-catalog__nav-list catalog__nav-list">
                        @while($count > 0)
                        @php 
                            $count = $count - 16;
                        @endphp
                        <li class="retail-catalog__nav-item catalog__nav-item">
                            <button class="retail-catalog__nav-link catalog__nav-link js_catalog_nav_btn @if($i == 1) current @endif" data-page="{{$i}}">
                                {{$i}}
                            </button>
                        </li>
                        @php 
                            $i++;
                        @endphp
                        @endwhile
                    </ul>
                    <button class="retail-catalog__nav-btn retail-catalog__nav-btn--next catalog__nav-btn catalog__nav-btn--next js_nav_next" data-page="2">
                        >
                    </button>
                </div>
                @endif
            </div>
        </div>
        @php
        // session_start()
// var_dump($_SESSION);
@endphp
        <div class="retail-catalog__banner-wrap img__wrap">
            <a href="#catalog" class="retail-catalog__banner-link link-abs js_goto js_catalog_link" data-category="{{$retail_page->banner_link}}"></a>
            <img data-src="{{ $retail_page->banner_img->link }}?{{ $retail_page->banner_img->cache_index }}" alt="" class="retail-catalog__banner img b-lazy">
        </div>
    </div>
</section>
