<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends AdminController
{
    public function index() {
        $this->keywords = 'Садоводческий кооператив';
        $this->title = 'Кооператив "Локомотив"';

        return view('admin.index');

    }
}
