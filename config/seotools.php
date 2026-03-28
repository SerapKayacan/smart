<?php

return [
    'meta' => [
        'defaults' => [
            'title'        => 'Smart Grup Özel Güvenlik ve Temizlik Hizmetleri',
            'titleBefore'  => false,
            'description'  => 'Smart Grup olarak İstanbul\'da profesyonel özel güvenlik ve temizlik hizmetleri sunuyoruz. Sertifikalı personel, 7/24 kesintisiz hizmet.',
            'separator'    => ' - ',
            'keywords'     => [
                'özel güvenlik', 'güvenlik hizmetleri', 'site güvenliği', 'avm güvenliği',
                'fabrika güvenliği', 'şantiye güvenliği', 'okul güvenliği', 'otel güvenliği',
                'temizlik hizmetleri', 'avm temizliği', 'otel temizliği', 'kat hizmetleri',
                'housekeeping', 'steward hizmetleri', 'kurumsal temizlik',
                'smart grup', 'istanbul güvenlik', 'istanbul temizlik',
            ],
            'canonical'    => 'full',
            'robots'       => 'all',
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Smart Grup Özel Güvenlik ve Temizlik Hizmetleri',
            'description' => 'Smart Grup olarak İstanbul\'da profesyonel özel güvenlik ve temizlik hizmetleri sunuyoruz.',
            'url'         => null,
            'type'        => false,
            'site_name'   => 'Smart Grup',
            'images'      => [],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card' => 'summary',
            'site' => '@SmartGrup',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'Smart Grup Özel Güvenlik ve Temizlik Hizmetleri',
            'description' => 'Smart Grup olarak İstanbul\'da profesyonel özel güvenlik ve temizlik hizmetleri sunuyoruz.',
            'url'         => null,
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
