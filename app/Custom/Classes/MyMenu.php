<?php

namespace App\Custom\Classes;

use Illuminate\Support\Facades\DB;
class MyMenu
{
      public function getMenu()
      {
        $menus = DB::table('menus')->orderBy('id', 'ASC')->get();

        $cat = [];
        foreach($menus as $items){

            if($items->parent == 0){
                $cat[$items->id][] = $items->title;
                $cat[$items->id][] = $items->path;
            }else{
                $cat[$items->parent]['children'][$items->id][] = $items->title;
                $cat[$items->parent]['children'][$items->id][] = $items->path;
                }
            }

            $menu = '';
            foreach($cat as $k => $item){
              if(count($item) > 2){

                  $menu = $this->start($item[0], $item[1]);
                  foreach($item['children'] as $v){
                      $menu .= $this->build($v[0], $v[1]);
                  }
                  $menu .= '</ul></li>';
              }else{
                  $menu .=  $this->build($item[0], $item[1]);
              }
            }
                $str = '<li><a href="/">Главная</a></li>';

          return $str . $menu;
        }

    protected function start($caption, $link)
    {
        return <<<HTML
           <li class="menu__list"><a href="$link">$caption</a>
                    <ul class="menu__drop">
HTML;
    }

    protected function build($caption, $link)
    {
        return <<<HTML
            <li>
                <a href="$link">$caption</a>
            </li>
HTML;
    }

}