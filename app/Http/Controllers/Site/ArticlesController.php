<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;

class ArticlesController extends SiteController
{
    public function index()
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.articles');
    }

    public function oneIndex($id = false)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.article_content');
    }

    public function show($cat_alias = false)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        $date = getRusDate(date('Y-m-d H:i:s'));
        return view('blocks.articles_content')->with('date', $date);
    }
}
