# Installation

```bash
composer require iankov/control-panel-static
```

* Publish migrations
    ```bash
    php artisan vendor:publish --tag=icp_static_migrations
    ```
    
* Run migrations
    ```bash
    php artisan migrate
    ```

* Add item to `icp-menu.php` config file
    ```php
    [
        'icon' => 'file-text',
        'title' => 'Static',
        'link' => icp_route('static')
    ]
    ```

## Usage
Add new route in the end of your ```routes/web.php``` file. 
This will try to handle any request matching the regex by StaticPageController.
If the requested route is equal to the one stored in database, you'll get the response you set by icp-static module.

```php
Route::get('{route}', ['as' => 'any', 'uses' => '\Iankov\ControlPanelStatic\Controllers\StaticPageController@index'])->where('route', '[0-9a-zA-Z\-\_\.]+');
```

Example: add new static page, set route field to ```custom_page.html```, set any content like ```<b>Hello</b> World```, make it active and save.
Now open your browser and try to request http://your-website.com/**custom_page.html**. Your screen must display this:

<p><b>Hello</b> World</p>

StaticPageController will try to figure out mime-type by a ```route``` field and return a content of the page with content-type included in header.
<br>That means if you create route with the name ```page.html```, you'll get html-type page by this route.
...```data.xml``` will return content with ```xml``` content-type header.<br>
If mime type can't be defined ```text/html``` is used.


## Configuration
You can modify configuration options by adding them to `config/icp.php`<br>
Package config located in `vendor/iankov/control-panel-static/src/config.php`<br>
Don't change this file, just use it as an example of what options are configurable.