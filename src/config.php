<?php

return [
    'modules' => [
        'static' => [
            'route' => [
                'path' => base_path('vendor/iankov/control-panel-static/src/routes/static.php'),
                'namespace' => '\Iankov\ControlPanelStatic\Controllers\Control',
            ],
            'mimetype' => 'text/html', //default content-type of the page if not defined automatically
        ]
    ],

];