<?php
    namespace App\Http\Controllers;

    use Request;
    use app\Http\Request\LitsRequest;
    use app\Http\Models\List;

    class ListController extends Controller{

        /**
         * Function for create one list
         */
        public function create(){
            return view('/list/form');
        }

        public function store(ListRequest $request){
            $result = List::create($request->all());
            $response = json->response($result);
            return $response;
        }

        public function insert(){

        }

        public function update(){

        }

        public function delete(){
            
        }
    }
?>