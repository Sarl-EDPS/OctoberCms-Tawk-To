<?php

    return [
        'plugin' => [
            'name'              => 'Tawk To',
            'description'       => 'Lets you monitor and chat with visitors on your website'
        ],

        'components' => [
            'tawkto' => [
                'name' => 'Tawk To',
                'description' => 'Window Chat',
                'apikey' => [
                    'value' => [
                        'title' => 'Site ID',
                        'description' => 'Site ID in: Administration > XXXXX > Property Settings',
                    ],
                ],
                'widgetname' => [
                    'value' => [
                        'title' => 'Widget name',
                        'description' => 'Widget name on Tawk To website',
                    ],
                ],
            ],
        ],
    ];

?>
