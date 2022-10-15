<section class="corp__corp-hits corp-hits">
    <div class="corp-hits__wrap">
        <div class="corp-hits__col-1">
            <div class="corp-hits__img-wrap img__wrap">
                <img src="img/wooman-2.jpg" alt="" class="corp-hits__img img">
            </div>
            <h2 class="corp-hits__title title">
                ХИТ
                <span>ПРОДАЖ</span>
            </h2>
            <div class="corp-hits__img-wrap img__wrap">
                <img src="img/man-1.jpg" alt="" class="corp-hits__img img">
            </div>
        </div>
        <div class="corp-hits__col-2">
            <ul class="corp-hits__list">
                @foreach($corporate_page->c_categories_list_group as $item)
                    @foreach($item->c_products_list_group as $item1)
                    @if($item1->show_on_hits)
                    <li class="corp-hits__item">
                        <div class="corp-hits__item-img-wrap img__wrap">
                            <img data-src="{{ $item1->img->link }}?{{ $item1->img->cache_index }}" alt="" class="corp-hits__item-img img b-lazy">
                        </div>
                        <div class="corp-hits__item-content">
                            <p class="corp-hits__item-title">
                                {{ $item1->desc_1 }}
                            </p>
                            <p class="corp-hits__item-desc">
                                {{ $item1->hit_title }}
                            </p>
                            <p class="corp-hits__item-small-desc">
                                {{ $item1->desc_2 }}
                            </p>
                            <a href="corporate-product/{{ $item1->slug }}" class="corp-hits__item-btn btn">Заказать</a>
                        </div>
                    </li>
                    @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
    <div class="corp-hits__banner-wrap img__wrap">
        <a href="#catalog" class="corp-hits__banner-link link-abs js_goto js_catalog_link" data-category="{{$corporate_page->banner_link}}"></a>
        <img data-src="{{ $corporate_page->banner_img->link }}?{{ $corporate_page->banner_img->cache_index }}" alt="" class="corp-hits__banner img b-lazy">
    </div>
</section>