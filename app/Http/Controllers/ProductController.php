<?php
    namespace App\Http\Controllers;

    use App\Http\Models\Product;
    use App\Http\Models\Category;
    use App\Http\Request\ProductRequest;
    use Request;

    class ProductController extends Controller{

        public function index(){
            $request = Product::all();
            $response = response()->json($request);

            return $response;
        }

        public function store(RequestProduct $request){
            $request = Product::all();
            $response = response()->json($request);

            return $response;
        }

        public function update($id){
            $request = Product::find($id);
            $request->name = Request::input('name');
            $request->price = Request::input('price');
            $request->description = Request::input('description');
            $request->category_id = Request::input('category_id');
            
            $request->save();  
            $response = response()->json($request);

            return $response;
        }

        public function show($id){
            $request = Product::find($id);
            $request = Product::all();
            $response = response()->json($request);

            return $request;
        
        }
    }
?>