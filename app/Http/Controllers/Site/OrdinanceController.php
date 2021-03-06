<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;

class OrdinanceController extends SiteController
{

    public function index()
    {
        $this->keywords = 'Устав садоводческого кооператива';
        $this->title = 'Устав Садоводческого кооператива "Локомотив"';

        return view('blocks.ordinance')->with('menus', $this->menus);
    }
}
