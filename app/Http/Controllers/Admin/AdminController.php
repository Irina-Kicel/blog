<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 02.02.2019
 * Time: 12:24
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $template;
    protected $vars = [];

    protected $keywords;
    protected $meta_desc;
    protected $title;
}