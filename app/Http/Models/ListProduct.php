<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ListProduct extends Model{

    protected $table = "listsProducts";
    public $timestamp = false;
    protected $fillable = array('name', 'description');
}
