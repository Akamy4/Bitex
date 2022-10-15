<section class="corp__corp-catalog corp-catalog">
    <div class="corp-catalog__catalog-wrap catalog__wrap">
        <div class="corp-catalog__col-1 catalog__col-1" id="catalog">
            <div class="corp-catalog__categories-title-wrap catalog__categories-title-wrap">
                <p class="corp-catalog__categories-title catalog__title catalog__title--brand">
                    <button class="catalog__categories-title-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    Категории магазина
                </p>
            </div>
            <ul class="corp-catalog__categories-list catalog__categories-list catalog__categories-list">
                @foreach($corporate_page->c_categories_list_group as $item)
                <li class="corp-catalog__categories-item catalog__categories-item catalog__categories-item">
                    <button
                        class="corp-catalog__categories-item-btn catalog__categories-item-btn catalog__categories-item-btn js_catalog_category" data-category="{{ $item->slug }}">
                        {{ $item->category_name }}
                    </button>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="corp-catalog__col-2 catalog__col-2">
            @php 
                $count = 0;
                $i = 0;
                $k = 0;
            @endphp
            @foreach($corporate_page->c_categories_list_group as $item)
                @foreach($item->c_products_list_group as $item1)
                @php $count++ @endphp
                @endforeach
            @endforeach
            @php $count1 = $count; @endphp
            <ul class="corp-catalog__cards-list catalog__cards-list js_products_list">
                @foreach($corporate_page->c_categories_list_group as $item)
                    @foreach($item->c_products_list_group as $item1)
                    @php 
                    $k++
                    @endphp
                    @while($k > 0)
                        @php 
                        $k = $k - 16;
                        $i++;
                        @endphp
                    @endwhile
                    <li class="corp-catalog__cards-item catalog__cards-item catalog__cards-item--corp js_catalog_product @if($i >1) hidden @endif" data-category="{{ $item->slug }}" data-page="{{$i}}">
                        <div class="corp-catalog__cards-img-wrap catalog__cards-img-wrap img__wrap">
                            <img data-src="{{ $item1->img->link }}?{{ $item1->img->cache_index }}" alt="" class="corp-catalog__cards-img catalog__cards-img img b-lazy">
                        </div>
                        <div class="corp-catalog__price-block catalog__cards-price-block">
                            <p class="corp-catalog__current-price catalog__cards-current-price">
                                <b>{{ $item1->price }}</b>
                            </p>
                            <p class="corp-catalog__old-price catalog__cards-old-price">
                                {{ $item1->old_price }}
                            </p>
                            <p class="corp-catalog__sale catalog__cards-sale">
                                <b>{{ $item1->sale }}</b>
                            </p>
                        </div>
                        <p class="corp-catalog__card-desc catalog__cards-desc">
                            {{ $item1->title }}
                        </p>
                        <a href="corporate-product/{{ $item1->slug }}" class="corp-catalog__card-btn catalog__cards-btn btn">Купить</a>
                    </li>
                    @endforeach
                @endforeach
            </ul>
            @if ($count > 16)
            @php 
                $i = 1;
            @endphp
            <div class="corp-catalog__nav-block catalog__nav-block catalog__nav-block--corp js_catalog_nav">
                <button class="corp-catalog__nav-btn corp-catalog__nav-btn--prev catalog__nav-btn catalog__nav-btn--prev js_nav_prev disabled" data-page="0">
                    < </button>
                <ul class="corp-catalog__nav-list catalog__nav-list">
                    @while($count > 0)
                        @php 
                            $count = $count - 16;
                        @endphp
                        <li class="corp-catalog__nav-item catalog__nav-item">
                            <button class="corp-catalog__nav-link catalog__nav-link js_catalog_nav_btn @if($i == 1) current @endif" data-page="{{$i}}">
                                {{$i}}
                            </button>
                        </li>
                        @php 
                            $i++;
                        @endphp
                        @endwhile
                </ul>
                <button class="corp-catalog__nav-btn corp-catalog__nav-btn--next catalog__nav-btn catalog__nav-btn--next js_nav_next" data-page="2">
                    >
                </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
