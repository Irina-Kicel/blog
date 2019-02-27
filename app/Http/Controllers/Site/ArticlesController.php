<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;

class ArticlesController extends SiteController
{
    public $date;

    public function __construct()
    {
        parent::__construct();
        $this->date = getRusDate(date('Y-m-d H:i:s'));
    }

    public function index()
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.articles')->with('date', $this->date);
    }

    public function oneIndex($id = false)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.article_content')->with('date', $this->date);
    }

    public function show($cat_alias = false)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->title = 'Кооператив "Локомотив"';


        return view('blocks.articles_content')->with('date', $this->date);
    }
}
