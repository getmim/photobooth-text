<?php

return [
    '__name' => 'photobooth-text',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/photobooth-text.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/photobooth-text' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'photobooth' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'photobooth' => [
                'texted' => [
                    'type' => 'number'
                ]
            ]
        ]
    ]
];