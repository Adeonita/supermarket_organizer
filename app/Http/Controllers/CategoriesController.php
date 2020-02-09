<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use App\Category;

    class CategoriesController extends Controller{
        
        public function list(){
            $result = DB::connection('mysql')->select('select * from categories');

            foreach ($result as $p) {  //Percorro o array produtos atribuindo cada ítem individual a p
                print '<li>Nome: '. $p->name . ' - Descrição: '. $p->description . '</li><br>';  //Acesso os atributos nome e descrição de cada produto. Concatenando da variavel html
            }
        }
    }

?>