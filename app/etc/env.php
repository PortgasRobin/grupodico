<?php
return [
    'backend' => [
        'frontName' => 'qmjgmexupigtf9vu'
    ],
    'crypt' => [
        'key' => '90e0b14419da84c74954a9f1a6abbacc'
    ],
    'db' => [
        'table_prefix' => 'mg_',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'taxisnic_mg2',
                'username' => 'taxisnic_mg2',
                'password' => 'Y.13hpuID4sTewns9ZP47',
                'active' => '1',
                'driver_options' => [

                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'b09_'
            ],
            'page_cache' => [
                'id_prefix' => 'b09_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'grupodico.consultoriaweb.mx'
    ],
    'install' => [
        'date' => 'Wed, 03 Feb 2021 02:15:41 +0000'
    ]
];
