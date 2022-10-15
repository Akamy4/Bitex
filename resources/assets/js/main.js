$(function () {
    var btn = $('.js_open_menu'),
        menu = $('.js_menu'),
        close_btn = $('.js_close_menu'),
        blackout = $('.blackout');

    btn.click(function () {
        menu.toggleClass('is-active');
        blackout.toggleClass('is-active');
    });

    close_btn.click(function () {
        menu.removeClass('is-active');
        blackout.removeClass('is-active');
    });

    blackout.click(function () {
        menu.removeClass('is-active');
        btn.removeClass('active');
        blackout.removeClass('is-active');
    });
});

$('.js_retail_promo_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 600,
    touchThreshold: 30,
    arrows: false,
    dots: true,
    infinite: false,
    responsive: [{
        breakpoint: 1110,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },]
});

$('.js_reviews_slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    speed: 600,
    touchThreshold: 30,
    arrows: false,
    dots: true,
    infinite: false,
    responsive: [{
        breakpoint: 1110,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },]
});

$('.js_brand_slider').slick({
    slidesToShow: 1,
    speed: 500,
    touchThreshold: 30,
    arrows: true,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    responsive: [{
        breakpoint: 1110,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },]
});

$(function () {
    $('.input_phone').click(function () {
        if ($(window).width() < 550) {
        } else {
            $(this).setCursorPosition(3);
        }
    }).mask("8 799 999-99-99");
});

$.fn.setCursorPosition = function (pos) {
    if ($(this).get(0).setSelectionRange) {
        $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
        var range = $(this).get(0).createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
};

// Ленивая загрузка изображений
$(document).ready(function () {
    var bLazy = new Blazy({
        loadInvisible: true,
        offset: 1,
    })
});

$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 500) {
            $('.js_goto_top').addClass('is-active');
        } else {
            $('.js_goto_top').removeClass('is-active');
        }
    });
    $('.js_goto_top').on('click', function (e) {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        e.preventDefault();
    });
});

$(function () {
    var $window = $(window);

    $window.on('scroll', revealOnScroll);

    function revealOnScroll() {
        var viewportTop = $window.scrollTop(),
            viewportBottom = viewportTop + $window.height();
        // Showed...
        $(".js_scroll_animate:not(.animated)").each(function () {
            var $this = $(this),
                userOffset = $this.data('viewportOffset'),
                win_height_padded = $window.height(),
                startAnimationTop = viewportTop + win_height_padded,
                startAnimationBottom = viewportBottom - win_height_padded,
                offsetTop = $this.offset().top,
                offsetBottom = offsetTop + $this.height();

            if ((startAnimationTop < offsetBottom) && (startAnimationTop > offsetTop) ||
                (startAnimationBottom > offsetTop) && (startAnimationBottom < offsetBottom)) {
                if ($this.data('timeout')) {
                    window.setTimeout(function () {
                        $this.addClass('animated ' + $this.data('animation'));
                    }, parseInt($this.data('timeout'), 10));
                } else {
                    $this.addClass('animated ' + $this.data('animation'));
                }
            }
        });
    }

    revealOnScroll();
});

/* $('.index-title__links-list a').circularText({
    speed: 50 
}); */

$(function () {
    var btn = $('.js_index_section_link'),
        section = $('.js_section'),
        nav_btn = $('.js_index_nav')



    if ($('.js_index_section_link').length !== 0) {
        btn.each(function (i) {
            $(this).click(function (e) {
                e.preventDefault()
            })

            $(this).mouseover(function () {
                section.removeClass('active')
                section.eq(i + 1).addClass('active')
                $('.nav').removeClass('nav--retail')
                $('.nav').removeClass('nav--brand')
                $('.nav').removeClass('nav--corp')
                $('.nav').addClass('nav--index')

                if (i == 0) {
                    $('.nav').addClass('nav--retail')
                } else if (i == 1) {
                    $('.nav').addClass('nav--brand')
                } else if (i == 2) {
                    $('.nav').addClass('nav--corp')
                }
            })
        })

        nav_btn.each(function (i) {
            $(this).mouseover(function (e) {
                e.stopPropagation()
                section.removeClass('active')
                $('.nav').removeClass('nav--retail')
                $('.nav').removeClass('nav--brand')
                $('.nav').removeClass('nav--corp')
                $('.nav').addClass('nav--index')

                if (i == 0) {
                    $('.nav').addClass('nav--corp')
                    section.eq(3).addClass('active')
                } else if (i == 1) {
                    $('.nav').addClass('nav--retail')
                    section.eq(1).addClass('active')
                } else if (i == 2) {
                    $('.nav').addClass('nav--brand')
                    section.eq(2).addClass('active')
                }
            })

            $(this).mouseleave(function () {
                section.removeClass('active')
                section.eq(0).addClass('active')
                $('.nav').removeClass('nav--retail')
                $('.nav').removeClass('nav--brand')
                $('.nav').removeClass('nav--corp')
            })
        })

        section.mouseover(function (e) {
            e.stopPropagation()
        })

        $(window).mouseover(function () {
            section.removeClass('active')
            section.eq(0).addClass('active')
            $('.nav').removeClass('nav--retail')
            $('.nav').removeClass('nav--brand')
            $('.nav').removeClass('nav--corp')
            $('.nav').addClass('nav--index')
        })
    }
})

$('.js_goto').on('click', function (e) {
    $('html, body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top
    }, 600);
    e.preventDefault();
});

$(function () {
    var category_btn = $('.js_catalog_category'),
        product = $('.js_catalog_product'),
        products_list = $('.js_products_list'),
        category_link = $('.js_catalog_link'),
        catalog_nav = $('.js_catalog_nav'),
        nav_btn = $('.js_catalog_nav_btn'),
        nav_prev = $('.js_nav_prev'),
        nav_next = $('.js_nav_next')

    category_link.each(function () {
        $(this).click(function () {
            var category_id = $(this).data('category'),
                count = 0,
                k = 0,
                i = 0

            category_btn.removeClass('active')
            category_btn.each(function () {
                if ($(this).data('category') === category_id) {
                    $(this).addClass('active')
                }
            })
            product.addClass('hidden')
            $(product.get().reverse()).each(function () {
                if ($(this).data('category') === category_id) {
                    products_list.prepend($(this))
                    $(this).removeClass('hidden')
                }
            })

            product.each(function () {
                if ($(this).data('category') === category_id) {
                    count++
                    k++
                    while (k > 0) {
                        k = k - 16;
                        i++;
                    }

                    $(this).attr('data-page', i)

                    if ($(this).attr('data-page') > 1) {
                        $(this).addClass('hidden')
                    }
                } else {
                    $(this).attr('data-page', 0)
                }
            })

            nav_prev.attr('data-page', 0)
            nav_prev.addClass('disabled')
            nav_next.attr('data-page', i)
            nav_next.removeClass('disabled')
            $('.catalog__nav-item').remove()

            if (count <= 16) {
                catalog_nav.addClass('hidden')
            } else {
                catalog_nav.removeClass('hidden')
            }

            i = 1
            while (count > 0) {
                count = count - 16
                catalog_nav.find('ul').append(`
                <li class="retail-catalog__nav-item catalog__nav-item"><button class = "retail-catalog__nav-link catalog__nav-link js_catalog_nav_btn ${i == 1 ? 'current' : ''}" data-page="${i}">${i}</button></li>`)
                i++
            }
        })
    })

    category_btn.each(function () {
        $(this).click(function () {
            var category_id = $(this).data('category'),
                count = 0,
                k = 0,
                i = 0

            category_btn.removeClass('active')
            $(this).addClass('active')
            product.addClass('hidden')


            $(product.get().reverse()).each(function () {
                if ($(this).data('category') === category_id) {
                    products_list.prepend($(this))
                    $(this).removeClass('hidden')
                }
            })

            product.each(function () {
                if ($(this).data('category') === category_id) {
                    count++
                    k++
                    while (k > 0) {
                        k = k - 16;
                        i++;
                    }

                    $(this).attr('data-page', i)

                    if ($(this).attr('data-page') > 1) {
                        $(this).addClass('hidden')
                    }
                } else {
                    $(this).attr('data-page', 0)
                }
            })

            nav_prev.attr('data-page', 0)
            nav_prev.addClass('disabled')
            nav_next.attr('data-page', i)
            nav_next.removeClass('disabled')
            $('.catalog__nav-item').remove()

            if (count <= 16) {
                catalog_nav.addClass('hidden')
            } else {
                catalog_nav.removeClass('hidden')
            }

            i = 1
            while (count > 0) {
                count = count - 16
                catalog_nav.find('ul').append(`
                <li class="retail-catalog__nav-item catalog__nav-item"><button class = "retail-catalog__nav-link catalog__nav-link js_catalog_nav_btn ${i == 1 ? 'current' : ''}" data-page="${i}">${i}</button></li>`
                )
                i++
            }
        })
    })

    catalog_nav.on('click', '.js_catalog_nav_btn', function (ind) {
        var page = $(this).data('page'),
            i,
            k

        product.each(function () {
            if (!$(this).hasClass('hidden')) {
                k++
                while (k > 0) {
                    k = k - 16;
                    i++;
                }
            }
        })

        $('html, body').stop().animate({
            scrollTop: $(products_list).offset().top
        }, 600);

        catalog_nav.find('.js_catalog_nav_btn').removeClass('current')
        $(this).addClass('current')
        nav_prev.attr('data-page', parseInt(page) - 1)
        nav_next.attr('data-page', parseInt(page) + 1)
        if (parseInt(page) != 1) {
            nav_prev.removeClass('disabled')
        } else {
            nav_prev.addClass('disabled')
        }

        if (!$(this).parent().is(':last-child')) {
            nav_next.removeClass('disabled')
        } else {
            nav_next.addClass('disabled')
        }

        product.addClass('hidden')
        $(product.get().reverse()).each(function () {
            if ($(this).data('page') === page) {
                products_list.prepend($(this))
                $(this).removeClass('hidden')
            }
        })
    })

    nav_prev.click(function () {
        var page = $(this).attr('data-page')

        if ($(this).attr('data-page') == 1) {
            $(this).addClass('disabled')
        }

        $('html, body').stop().animate({
            scrollTop: $(products_list).offset().top
        }, 600);

        catalog_nav.find('.js_catalog_nav_btn').removeClass('current')
        $(this).attr('data-page', parseInt(page) - 1)
        nav_next.attr('data-page', parseInt(page) + 1)
        nav_next.removeClass('disabled')
        catalog_nav.find('.js_catalog_nav_btn').each(function () {
            if ($(this).attr('data-page') === page) {
                $(this).addClass('current')
            }
        })
        product.addClass('hidden')
        $(product.get().reverse()).each(function () {
            if ($(this).attr('data-page') === page) {
                products_list.prepend($(this))
                $(this).removeClass('hidden')
            }
        })
    })

    nav_next.click(function () {
        var page = $(this).attr('data-page')

        $('html, body').stop().animate({
            scrollTop: $(products_list).offset().top
        }, 600);

        catalog_nav.find('.js_catalog_nav_btn').removeClass('current')
        $(this).attr('data-page', parseInt(page) + 1)
        nav_prev.attr('data-page', parseInt(page) - 1)
        nav_prev.removeClass('disabled')

        catalog_nav.find('.js_catalog_nav_btn').each(function () {
            if ($(this).attr('data-page') === page) {
                $(this).addClass('current')

                if ($(this).parent().is(':last-child')) {
                    nav_next.addClass('disabled')
                }
            }
        })
        product.addClass('hidden')

        $(product.get().reverse()).each(function () {
            if ($(this).attr('data-page') === page) {
                products_list.prepend($(this))
                $(this).removeClass('hidden')
            }
        })
    })
})
