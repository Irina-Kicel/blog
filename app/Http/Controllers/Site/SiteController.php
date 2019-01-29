<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    protected $template;
    protected $vars = [];

    protected $keywords;
    protected $meta_desc;
    protected $title;
}
