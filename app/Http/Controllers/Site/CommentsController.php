<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\SiteController;

class CommentsController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this->date = getRusDate(date('Y-m-d H:i:s'));
    }

    public function index()
    {
        //
        return view('blocks.contact_comments')->with(['menus'=>$this->menus,'date'=>$this->date]);
    }


    public function store(Request $request)
    {
        //
    }

}
