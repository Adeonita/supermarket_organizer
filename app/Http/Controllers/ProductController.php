<?php
    namespace App\Http\Controllers;

    use App\Http\Models\Product;
    use App\Http\Models\Category;
    use Request;

    class ProductController extends Controller{

        public function create(){
            $categories = Category::all();
            return view('product/form', ['categories' => $categories]);
        }

        public function add(){
            $product = new Product();
            $product->name = Request::input('name');
            $product->price = Request::input('price');
            $product->description = Request::input('description');
            $product->category_id = Request::input('category_id');
            
            $product->save();            
        }
    }
?>