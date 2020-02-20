<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model{

    protected $table = "lists";
    public $timestamp = false;
    protected $fillable = array('name', 'description');
}
