<?php

return [
    'modules' => [
        'static' => [
            'route' => [
                'path' => base_path('vendor/iankov/control-panel-static/src/routes/static.php'),
                'namespace' => '\Iankov\ControlPanelStatic\Controllers\Control',
            ],
        ]
    ],
    'menu' => [
        'groups' => [
            'other' => [
                'items' => [
                    'static' => [
                        'icon' => 'file-text',
                        'title' => 'Static',
                        'icp_route' => 'static'
                    ],
                ]
            ],
        ],
    ],
];