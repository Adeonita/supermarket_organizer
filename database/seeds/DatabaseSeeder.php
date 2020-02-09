<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;  //Livro
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoryTableSeeder');
    }
}

class CategoryTableSeeder extends Seeder{

    public function run(){

        $queryInsert = 'insert into categories (name, description)';

        DB::insert("$queryInsert values ('Cuidados pessoais', 'Sabonete, desodorante, ect') ");
    
        DB::insert("$queryInsert values ('Higiene', 'Sabão em pó, detergente, etc') ");

        DB::insert("$queryInsert values ('Alimentos Básicos', 'Ex: Arroz, feijão, etc') ");
       
        DB::insert("$queryInsert values ('Congelados', 'Ex: Carne de hamburger, nuggets, etc') ");
       
        DB::insert("$queryInsert values (' Petshop e Jardinagem', 'Ração, sementes, etc') ");
       
        DB::insert("$queryInsert values ('Derivados de Laticinios e frios', 'Ex: Manteiga, queijo, etc') ");
        
        DB::insert("$queryInsert values ('Padaria', 'Pães, bolos, etc') ");

        DB::insert("$queryInsert values ('Feira', 'Legumes, verduras, etc') ");

        DB::insert("$queryInsert values ('Biscoitos e salgadinhos', 'Pipocas, Batata frita, ect') ");

        DB::insert("$queryInsert values ('Doces e sobremesas', 'Leite Condensado, gelatina, etc') ");

        DB::insert("$queryInsert values ('Matinais', 'Cereais, Achocolatados, etc') ");

        DB::insert("$queryInsert values ('Molhos, Condimentos e Conservas', 'Molhos de tomates, Temperos prontos , etc') ");

        DB::insert("$queryInsert values ('Proteínas', 'carnes, Aves, etc') ");

        DB::insert("$queryInsert values ('Bebidas Alcolicas', 'Cerveja, vinhos, etc') ");

        DB::insert("$queryInsert values ('Utensilios para o lar', 'Pratos, garrafas, etc') ");        

    }
}
