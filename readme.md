# Installation

```bash
composer require iankov/control-panel-static
```

Run migrations
```bash
php artisan migrate --path=vendor/iankov/control-panel-static/database/migrations
```

## Configuration
You can modify configuration options by adding them to `config/icp.php`<br>
Package config located in `vendor/iankov/control-panel-static/src/config.php`<br>
Don't change this file, just use it as an example of what options are configurable.