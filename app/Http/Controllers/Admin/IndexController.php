<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends AdminController
{
    public function index() {
        $this->keywords = 'Садоводческий кооператив';
        $this->meta_desc = 'Админ панель по управлению сайтом';
        $this->title = 'Кооператив "Локомотив"';

        return view('admin.index');

    }
}
