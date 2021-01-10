<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/themes/hypertext.yaml',
    'modified' => 1609634762,
    'data' => [
        'structure' => [
            'inline_navbar' => true,
            'inline_pagination' => true,
            'use_decorators' => true,
            'html_mode' => 'default',
            'use_favicon' => true,
            'show_date' => false
        ],
        'style' => [
            'configuration' => 'centered',
            'width' => '960',
            'allowCSS' => true,
            'allowJS' => true,
            'stylesheet' => 'sakura-earthly',
            'include_type' => 'default',
            'image_cropping' => true,
            'inline_navbar' => 1,
            'customCSS' => NULL
        ],
        'partials' => [
            'footer' => [
                'custom_footer_type' => 'markdown',
                'custom_footer' => NULL
            ]
        ]
    ]
];
