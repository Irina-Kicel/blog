<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;


class IndexController extends SiteController
{
    public function index()
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.main');
    }
}
