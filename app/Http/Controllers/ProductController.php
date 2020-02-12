<?php
    namespace App\Http\Controllers;

    class ProductController extends Controller{

        public function create(){
            return view('product/form');
        }
    }
?>