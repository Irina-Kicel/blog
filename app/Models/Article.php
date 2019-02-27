<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','description','announce','text','slug','img','created_at'];

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }

    public function articles(){

        return $this->hasMany('App\models\Article');
    }

    public function categories()
    {
        return $this->belongsToMany('App\models\Category', 'article_category');
    }
}
