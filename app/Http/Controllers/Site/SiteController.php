<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    protected $keywords;
    protected $meta_desc;
    protected $title;
    protected $menus;
    protected $template;
    protected $vars = [];

   public function __construct()
    {
        $this->menus = resolve('MyMenu')->getMenu();
    }
}
