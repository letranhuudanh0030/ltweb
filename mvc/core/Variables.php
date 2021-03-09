<?php
return [

    'roles' => [
        'User',
        'Manager'
    ],

    'menus' => [
        'user_manager' => [
            'name' => 'User Manager',
            'icon' => 'fas fa-users',
            'url' => '',
            'submenu' => [
                'user' => [
                    'name' => 'Users',
                    'url' => '/admin/user',
                    'icon' => '',
                ],
                'role' => [
                    'name' => 'Roles',
                    'url' => '/admin/role',
                    'icon' => '',
                ]
            ]
        ],
        'product_manager' => [
            'name' => 'Product Manager',
            'icon' => 'fab fa-product-hunt',
            'url' => '',
            'submenu' => [
                'product' => [
                    'name' => 'Products',
                    'url' => '/admin/product',
                    'icon' => '',
                ],
                'product_type' => [
                    'name' => 'Product Type',
                    'url' => '/admin/product-type',
                    'icon' => ''
                ]
            ]
        ],
        'news_manager' => [
            'name' => 'News Manager',
            'icon' => 'fas fa-newspaper',
            'url' => '',
            'submenu' => [
                'news' => [
                    'name' => 'News',
                    'url' => '/admin/news',
                    'icon' => ''
                ],
                'news_type' => [
                    'name' => 'News Type',
                    'url' => '/admin/news-type',
                    'icon' => ''
                ]
            ]
        ],
        'slide_manager' => [
            'name' => 'Slide Show',
            'icon' => 'fas fa-images',
            'url' => '/admin/slide',
            'submenu' => []
        ],
        'file_manage' => [
            'name' => 'Media',
            'icon' => 'fas fa-photo-video',
            'url' => '/admin/media',
            'submenu' => []
        ]
    ]
];