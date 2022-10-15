<section class="page__reviews-block reviews-block @if(action('FrontController@getRetail')==Request::url())retail @else @if(action('FrontController@getCorporate')==Request::url())corp @else @if(action('FrontController@getBranding')==Request::url())brand @endif @endif @endif">
    <div class="reviews-block__wrap">
        <div class="reviews-block__slider js_reviews_slider">
            <div class="reviews-block__slide">
                <div class="reviews-block__slide-img-wrap img__wrap">
                    <img src="img/review-1.jpg" alt="" class="reviews-block__slide-img img">
                </div>
                <div class="reviews-block__content">
                    <div class="reviews-block__slide-stars stars">
                        <div class="star" style="width: calc((5/5) * 100%);"></div>
                    </div>
                    <p class="reviews-block__slide-desc">
                        ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ 
                    </p>
                    <p class="reviews-block__slide-author">
                        Owen Estrada
                    </p>
                </div>
            </div>
            <div class="reviews-block__slide">
                <div class="reviews-block__slide-img-wrap img__wrap">
                    <img src="img/review-1.jpg" alt="" class="reviews-block__slide-img img">
                </div>
                <div class="reviews-block__content">
                    <div class="reviews-block__slide-stars stars">
                        <div class="star" style="width: calc((4.5/5) * 100%);"></div>
                    </div>
                    <p class="reviews-block__slide-desc">
                        ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ 
                    </p>
                    <p class="reviews-block__slide-author">
                        Owen Estrada
                    </p>
                </div>
            </div>
            <div class="reviews-block__slide">
                <div class="reviews-block__slide-img-wrap img__wrap">
                    <img src="img/review-1.jpg" alt="" class="reviews-block__slide-img img">
                </div>
                <div class="reviews-block__content">
                    <div class="reviews-block__slide-stars stars">
                        <div class="star" style="width: calc((4.25/5) * 100%);"></div>
                    </div>
                    <p class="reviews-block__slide-desc">
                        ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ 
                    </p>
                    <p class="reviews-block__slide-author">
                        Owen Estrada
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>