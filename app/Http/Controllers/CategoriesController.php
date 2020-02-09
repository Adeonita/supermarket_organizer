<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use App\Category;

    class CategoriesController extends Controller{

        /**
         * Função que acessa o banco, seleciona as categorias e as retorna para serem utilizadas na view
         */
        public function list(){

            $categories = DB::connection('mysql')->select('select * from categories');

            return view('listagem', ['categories'=> $categories]);  /**Chama a view listagem passando categories como chave e 
                                                                    $categories como valor pois  contem todas as categorias, carregadas
                                                                    do banco de dados, prontas para serem usadas pela view
             return view('listagem')->withCategories($categories);                           **/                                           
        
        }

    }

?>