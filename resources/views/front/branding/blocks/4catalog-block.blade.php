<section class="brand__brand-catalog brand-catalog">
    <div class="brand-catalog__catalog-wrap catalog__wrap">
        <div class="brand-catalog__col-1 catalog__col-1" id="catalog">
            <div class="brand-catalog__categories-title-wrap catalog__categories-title-wrap">
                <p class="brand-catalog__categories-title catalog__title catalog__title--brand">
                    <button class="catalog__categories-title-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    Категории магазина
                </p>
            </div>
            <ul class="brand-catalog__categories-list catalog__categories-list catalog__categories-list">
                @foreach($branding_page->b_categories_list_group as $item)
                <li class="brand-catalog__categories-item catalog__categories-item catalog__categories-item">
                    <button
                        class="brand-catalog__categories-item-btn catalog__categories-item-btn catalog__categories-item-btn">
                        {{ $item->category_name }}
                    </button>
                    <ul class="brand-catalog__subcategories-list">
                        @foreach($item->b_subcategories_list_group as $item1)
                        <li class="brand-catalog__subcategories-item brand-catalog__categories-item">
                            <button class="brand-catalog__categories-item-btn catalog__categories-item-btn catalog__categories-item-btn js_catalog_category" data-category="{{ $item1->slug }}">
                                {{ $item1->subcategory_name }}
                            </button>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="brand-catalog__col-2 catalog__col-2">
            @php 
                $count = 0;
                $i = 0;
                $k = 0;
            @endphp
            @foreach($branding_page->b_categories_list_group as $item)
                @foreach($item->b_subcategories_list_group as $item1)
                    @foreach($item1->b_products_list_group as $item2)
                    @php $count++ @endphp
                    @endforeach
                @endforeach
            @endforeach
            @php $count1 = $count; @endphp
            <ul class="brand-catalog__cards-list catalog__cards-list js_products_list">
                @foreach($branding_page->b_categories_list_group as $item)
                    @foreach($item->b_subcategories_list_group as $item1)
                        @foreach($item1->b_products_list_group as $item2)
                        @php 
                        $k++
                        @endphp
                        @while($k > 0)
                            @php 
                            $k = $k - 16;
                            $i++;
                            @endphp
                        @endwhile
                        <li class="brand-catalog__cards-item catalog__cards-item catalog__cards-item--brand js_catalog_product @if($i >1) hidden @endif" data-category="{{ $item1->slug }}" data-page="{{$i}}">
                            <div class="brand-catalog__cards-img-wrap catalog__cards-img-wrap img__wrap">
                                <img data-src="{{ $item2->img->link }}?{{ $item2->img->cache_index }}" alt=""
                                    class="brand-catalog__cards-img catalog__cards-img img b-lazy">
                            </div>
                            <div class="brand-catalog__price-block catalog__cards-price-block">
                                <p class="brand-catalog__current-price catalog__cards-current-price">
                                    <b>{{ $item2->price }}</b>
                                </p>
                                <p class="brand-catalog__old-price catalog__cards-old-price">
                                    {{ $item2->old_price }}
                                </p>
                                <p class="brand-catalog__sale catalog__cards-sale">
                                    <b>{{ $item2->sale }}</b>
                                </p>
                            </div>
                            <p class="brand-catalog__card-desc catalog__cards-desc">
                                {{ $item2->title }}
                            </p>
                            <a href="branding-product/{{ $item2->slug }}" class="brand-catalog__card-btn catalog__cards-btn btn">Купить</a>
                        </li>
                        @endforeach
                    @endforeach
                @endforeach
            </ul>
            @if ($count > 16)
            @php 
                $i = 1;
            @endphp
            <div class="brand-catalog__nav-block catalog__nav-block catalog__nav-block--brand js_catalog_nav">
                <button class="brand-catalog__nav-btn brand-catalog__nav-btn--prev catalog__nav-btn catalog__nav-btn--prev js_nav_prev disabled" data-page="0">
                    < </button>
                    <ul class="brand-catalog__nav-list catalog__nav-list">
                        @while($count > 0)
                        @php 
                            $count = $count - 16;
                        @endphp
                        <li class="brand-catalog__nav-item catalog__nav-item">
                            <button class="brand-catalog__nav-link catalog__nav-link js_catalog_nav_btn @if($i == 1) current @endif" data-page="{{$i}}">
                                {{$i}}
                            </button>
                        </li>
                        @php 
                            $i++;
                        @endphp
                        @endwhile
                    </ul>
                    <button class="brand-catalog__nav-btn brand-catalog__nav-btn--next catalog__nav-btn catalog__nav-btn--next js_nav_next" data-page="2">
                        >
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
