<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;

class OrdinanceController extends SiteController
{
    public function __construct()
    {
    parent::__construct();

    }

    public function index()
    {
        $this->keywords = 'Устав садоводческого кооператива';
        $this->meta_desc = 'Устав Садоводческого кооператива "Локомотив"';
        $this->title = 'Устав Садоводческого кооператива "Локомотив"';

        return view('blocks.ordinance')->with('menus', $this->menus);
    }
}
