<?php
    namespace App\Http\Controllers;

    class ListController extends Controller{

        public function create(){
            return view('/list/form');
        }
    }
?>