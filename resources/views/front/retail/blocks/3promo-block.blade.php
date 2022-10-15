<section class="retail__retail-promo retail-promo">
    <div class="retail-promo__wrap">
        <div class="retail-promo__slider js_retail_promo_slider">
            @foreach($retail_page->r_offers_list_group as $item)
            <div class="retail-promo__img-wrap img__wrap">
                <a href="retail-offer/{{ $item->slug }}" class="retail-promo__link link-abs" data-href="{{ $item->slug }}"></a>
                <img data-src="{{ $item->img->link }}?{{ $item->img->cache_index }}" alt="" class="retail-promo__img img b-lazy">
            </div>
            @endforeach
        </div>
        <p class="retail-promo__desc retail-desc">
            <span>ТЕКСТ ТЕКСТ</span>
            <span>ТЕКСТ ТЕКСТ</span>
            <span>ТЕКСТ ТЕКСТ</span>
        </p>
    </div>
</section>