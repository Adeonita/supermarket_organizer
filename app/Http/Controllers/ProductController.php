<?php
    namespace App\Http\Controller;

    class ProductController extends Controller{

        public function create(){
            return view('new/form');
        }
    }
?>