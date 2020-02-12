<?php
    namespace App\Http\Controller;

    class ProductController extends Controller{

        public function create(){
            return view('product/form');
        }
    }
?>