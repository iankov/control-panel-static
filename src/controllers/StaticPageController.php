<?php

namespace Iankov\ControlPanelStatic\Controllers;

use Iankov\ControlPanelStatic\Models\StaticPage;

class StaticPageController extends Controller
{
    public function index($route)
    {
        $page = StaticPage::where('route', $route)->where('active', 1)->firstOrFail();

        $mimetype = \GuzzleHttp\Psr7\mimetype_from_filename($page->route);
        if(!$mimetype){
            $mimetype = 'text/html'; //by default
        }

        return response($page->content)->header('Content-Type', $mimetype);
    }
}