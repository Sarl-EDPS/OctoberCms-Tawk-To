<?php

    return [

        'plugin' => [
            'name'              => 'Tawk To',
            'description'       => 'Vous permet de chatter avec des visiteurs sur votre site Web',
        ],

        'components' => [
            'tawkto' => [
                'name' => 'Tawk To',
                'description' => 'Fenêtre de Chat',
                
                'apikey' => [
                    'value' => [
                        'title' => 'ID du site',
                        'description' => 'ID du site dans: Administration > XXXX > Réglages des propriétés',
                    ],
                ],
                'widgetname' => [
                    'value' => [
                        'title' => 'Nom du Widget',
                        'description' => 'Nom du Widget sur le site "tawk.to"',
                    ],
                ],
            ],
        ],
    ];

?>
