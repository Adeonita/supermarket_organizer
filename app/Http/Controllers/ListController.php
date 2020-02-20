<?php
    namespace App\Http\Controllers;

    use App\Http\Models\List;
    use Request;

    class ListController extends Controller{

        public function create(){
            return view('/list/form');
        }

        /**
         * Função para inserir uma lista no banco de dados
         * @param: user_id
         * @return: Um reditect para minhas listas
         * */
        public function insert($user_id){
            $list = new List();
            $list->user_id = $user_id;
            $list->name = Request::input('name');
            $list->description = Request::input('description');
            $list->user_id = Request::input('user_id');

            $list->save();  //Essa chamada de método save substitui a query insert. Ela é herdada do model

            return redirect()
                ->action('/list')
                ->witchInput(Request::only('name'));
        }

        public function update($id){

        }

        public function delete($id){
            
        }

        public function show($id){
            $response = List::all();
            return view('show', ['lists'] => $response);
        }
    }
?>