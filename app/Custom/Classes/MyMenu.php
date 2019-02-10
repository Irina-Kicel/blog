<?php

namespace App\Custom\Classes;

use Illuminate\Support\Facades\DB;
class MyMenu
{
    protected $menus;


    public function __construct(){

        $this->menus = DB::table('menus')->orderBy('parent', 'ASC')->get();

    }

    public function getMenu(){
        $menus = $this->menus;

        $cat = [];
        foreach($menus as $items){

            if($items->parent == 0){
                $cat[$items->id][] = $items->title;
                $cat[$items->id][] = $items->path;
            }
            else{
                $cat[$items->parent]['children'][$items->id][] = $items->title;
                $cat[$items->parent]['children'][$items->id][] = $items->path;
                }
            }

        return $cat;
    }
}