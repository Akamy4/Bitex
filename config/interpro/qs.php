<?php

return [

    'scripts' => [
        'text' => ['before_body_close', 'after_body_open', 'before_head_close']
    ],

    'all_site' => [
        'string' => ['vk_link', 'instagram_link', 'tg_link', 'instagram_link', 'phone', 'email', 'hours'],
        'text'   => ['address', 'wpp_link']
    ],

    'index_page' => [
        'string' => ['last_modified']
    ],

    'search_page' => [
        'string' => ['last_modified']
    ],

    'cart_page' => [
        'string' => ['last_modified']
    ],

    'retail_page' => [
        'string' => ['last_modified', 'banner_link'],
        'text' => [],
        'image' => ['banner_img'],
        'groups' => [
            'r_offers_list' => [
                'string' => ['offer_name', 'title', 'img_desc'],
                'text'   => ['video', 'desc'],
                'image'  => ['img']
            ],
            'r_offers_images_list' => [
                'string' => ['offer_img_desc'],
                'image'  => ['offer_img'],
                'r_offers_list' => ['superior']
            ],
            'r_categories_list' => [
                'string' => ['category_name', 'title'],
                'image'  => ['img'],
                'bool' => ['checkbox']
            ],
            'r_products_list' => [
                'string' => ['product_name', 'title', 'articul', 'old_price', 'price', 'sale'],
                'text'   => ['desc', 'made_from'],
                'image'  => ['img', 'sizes_img'],
                'r_categories_list' => ['superior']
            ],
            'r_products_colors_list' => [
                'string' => ['color_name'],
                'image'  => ['color_image'],
                'r_products_list' => ['superior']
            ],
            'r_products_sizes_list' => [
                'string' => ['size_name'],
                'bool' => ['checkbox'],
                'r_products_colors_list' => ['superior']
            ],
            'r_products_images_list' => [
                'image'  => ['product_image'],
                'r_products_colors_list' => ['superior']
            ]
        ]
    ],

    'branding_page' => [
        'string' => ['last_modified', 'banner_link'],
        'text' => [],
        'image' => ['banner_img'],
        'groups' => [
            'b_types_list' => [
                'string' => ['type_name', 'title', 'img_desc'],
                'text'   => ['video', 'card_desc', 'desc'],
                'image'  => ['img']
            ],
            'b_types_images_list' => [
                'string' => ['type_img_desc'],
                'image'  => ['type_img'],
                'b_types_list' => ['superior']
            ],
            'b_categories_list' => [
                'string' => ['category_name', 'title']
            ],
            'b_subcategories_list' => [
                'string' => ['subcategory_name', 'title'],
                'b_categories_list' => ['superior']
            ],
            'b_products_list' => [
                'string' => ['product_name', 'title', 'articul', 'old_price', 'price', 'sale'],
                'text'   => ['desc', 'made_from', 'print_type'],
                'image'  => ['img', 'sizes_img'],
                'b_subcategories_list' => ['superior']
            ],
            'b_products_colors_list' => [
                'string' => ['color_name'],
                'image'  => ['color_image'],
                'b_products_list' => ['superior']
            ],
            'b_products_sizes_list' => [
                'string' => ['size_name'],
                'bool' => ['checkbox'],
                'b_products_colors_list' => ['superior']
            ],
            'b_products_images_list' => [
                'image'  => ['product_image'],
                'b_products_colors_list' => ['superior']
            ]
        ]
    ],

    'corporate_page' => [
        'string' => ['last_modified', 'banner_link'],
        'text' => [],
        'image' => ['banner_img'],
        'groups' => [
            'c_categories_list' => [
                'string' => ['category_name', 'title']
            ],
            'c_products_list' => [
                'string' => ['product_name', 'title', 'articul', 'old_price', 'price', 'min_count', 'sale', 'hit_title'],
                'text'   => ['desc_1', 'desc_2', 'main_desc', 'made_from'],
                'image'  => ['img', 'sizes_img'],
                'bool' => ['show_on_hits'],
                'c_categories_list' => ['superior']
            ],
            'c_products_colors_list' => [
                'string' => ['color_name'],
                'image'  => ['color_image'],
                'c_products_list' => ['superior']
            ],
            'c_products_sizes_list' => [
                'string' => ['size_name'],
                'bool' => ['checkbox'],
                'c_products_colors_list' => ['superior']
            ],
            'c_products_images_list' => [
                'image'  => ['product_image'],
                'c_products_colors_list' => ['superior']
            ]
        ]
    ]
];
