<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 26.02.2019
 * Time: 21:16
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
}