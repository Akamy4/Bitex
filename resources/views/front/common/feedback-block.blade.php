<section class="page__feedback-block feedback-block @if(action('FrontController@getRetail')==Request::url())retail @else @if(action('FrontController@getBranding')==Request::url())brand @else @if(action('FrontController@getCorporate')==Request::url())corp @endif @endif @endif">
    <div class="feedback-block__wrap">
        <div class="feedback-block__content">
            <p class="feedback-block__title title">
                Оставьте свои контакты
            </p>
            <p class="feedback-block__desc">
                Мы позвоним вам в течении часа
            </p>
        </div>
        <form class="feedback-block__form">
            <input type="text" class="feedback-block__input input" placeholder="Ваше имя" required>
            <input type="tel" class="feedback-block__input input input_phone" placeholder="Ваш телефон" required>
            <input type="email" class="feedback-block__input input" placeholder="Почта" required>
            <button type="submit" class="feedback-block__btn btn">
                Отправить
            </button>
        </form>
    </div>
</section>