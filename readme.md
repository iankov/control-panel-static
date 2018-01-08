# Installation

```bash
 composer require iankov/control-panel-static
```

* Run migrations

    ```bash
    "php artisan migrate --path=vendor/iankov/control-panel-static/database/migrations",
    ```
    
* Add config to `modules` section of the `config/icp.php` file
    ```php
    'static' => [
        'route' => [
            'path' => base_path('vendor/iankov/control-panel-static/src/routes/static.php'),
            'namespace' => '\Iankov\ControlPanelStatic\Controllers\Control',
        ],
    ],
    ```

* Also add menu to `menu` section of `config/icp.php` file
    ```php
    [
        'icon' => 'file',
        'title' => 'Static',
        'icp_route' => 'static'
    ],
    ```