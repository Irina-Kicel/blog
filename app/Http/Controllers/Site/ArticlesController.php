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
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.articles')->with(['menus'=>$this->menus,'date'=>$this->date]);
    }

    public function oneIndex($id = false)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';

        return view('blocks.article_content')->with(['menus'=>$this->menus,'date'=>$this->date]);
    }

    public function show($cat_alias = false)
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Сайт Садоводческий кооператив "Локомотив" создан для общения его членов';
        $this->title = 'Кооператив "Локомотив"';


        return view('blocks.articles_content')->with(['menus'=>$this->menus,'date'=>$this->date]);
    }
}
