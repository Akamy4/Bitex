<section class="brand__brand-categories brand-categories">
    <div class="brand-categories__wrap">
        <ul class="brand-categories__list">
            @foreach($branding_page->b_types_list_group as $item)
            <li class="brand-categories__item">
                <div class="brand-categories__img-wrap img__wrap">
                    <img data-src="{{ $item->img->link }}?{{ $item->img->cache_index }}" alt="" class="brand-categories__img img b-lazy">
                </div>
                <div class="brand-categories__content">
                    <div class="brand-categories__col-1">
                        <p class="brand-categories__category-name">
                            {{ $item->title }}
                        </p>
                        <p class="brand-categories__category-desc">
                            {{ $item->card_desc }}
                        </p>
                    </div>
                    <div class="brand-categories__col-2">
                        <a href="branding-type/{{ $item->slug }}" class="brand-categories__btn btn">Подробнее</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="brand-categories__banner-wrap img__wrap">
            <a href="#catalog" class="brand-categories__banner-link link-abs js_goto js_catalog_link" data-category="{{$branding_page->banner_link}}"></a>
            <img data-src="{{ $branding_page->banner_img->link }}?{{ $branding_page->banner_img->cache_index }}" alt="" class="brand-categories__banner img b-lazy">
        </div>
    </div>
</section>