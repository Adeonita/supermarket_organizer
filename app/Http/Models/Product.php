<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    
    protected $table = "products";
    public $timestamp = false;
    protected $fillable = array('name', 'price', 'category_id', 'description', 'list_id');
}
