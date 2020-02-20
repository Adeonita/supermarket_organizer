<?php
    namespace App\Http\Controllers;

    use App\Http\Models\Product;
    use App\Http\Models\Category;
    use App\Http\Request\Product;
    use Request;

    class ProductController extends Controller{

        public function store(RequestProduct $request){
            $request = Product::all();
            $response = json()->response($request);

            return $response;
        }

        public function update($id){
            $request = Product::find($id));
            $request->name = Request::input('name');
            $request->price = Request::input('price');
            $request->description = Request::input('description');
            $request->category_id = Request::input('category_id');
            
            $request->save();  
            $response = json()->response($request);

            return $response;

        }
    }
?>