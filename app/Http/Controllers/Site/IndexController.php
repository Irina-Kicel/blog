<?php

namespace App\Http\Controllers\Site;

use App\Custom\Classes\MyMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\DB;

class IndexController extends SiteController
{

    public function index()
    {
        $this->keywords = 'Садоводческий кооператив';
        $this->title = 'Кооператив "Локомотив"';


       return view('blocks.main');
    }

    public function relations()
    {
      /*  Post::find(1)
            ->tags()
            ->sync([
                Tag::where('name', 'Новость')->first()->id,
                Tag::where('name', 'Статья')->first()->id
            ]);
        Post::find(2)
            ->tags()
            ->sync([
                Tag::where('name', 'Объявление')->first()->id,
            ]);*/
        return 'OK';
    }

}
