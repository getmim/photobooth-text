<?php

return [
    'Photobooth\\Model\\Photobooth' => [
        'fields' => [
            'texted' => [
                'type' => 'INT',
                'attrs' => [
                	'unsigned' => true,
                	'null' => false,
                    'default' => 0
                ],
                'index' => 4600
            ]
        ]
    ]
];