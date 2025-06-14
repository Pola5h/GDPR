<?php
return [
    'banner' => [
        'theme' => 'light',
        'position' => 'bottom',
        'show_customize' => true,
    ],
    'cookie_categories' => [
        'necessary' => [
            'label' => 'Necessary',
            'description' => 'Required for basic site functionality.',
            'enabled' => true,
        ],
        'analytics' => [
            'label' => 'Analytics',
            'description' => 'Helps us improve the website.',
            'enabled' => false,
        ],
        'marketing' => [
            'label' => 'Marketing',
            'description' => 'Personalized ads and content.',
            'enabled' => false,
        ],
    ],
    'default_locale' => 'en',
    'enabled_languages' => ['en'],
    'admin_route' => 'gdpr-cookie-admin',
    'admin_middleware' => ['web', 'auth'],
    'log_retention_days' => 365,
    'geo_targeting' => false,
];
