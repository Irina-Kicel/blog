<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;

class ArticlesController extends SiteController
{
    public function index(Request $request)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.articles');
    }

    public function show($cat_alias = FALSE)
    {

    }
}
