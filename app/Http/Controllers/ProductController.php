<?php
    namespace App\Http\Controllers;

    use App\Http\Models\Product;
    use App\Http\Models\Category;
    use App\Http\Request\ProductRequest;
    use Request;

    class ProductController extends Controller{

        public function index(){
            $products = Product::all();
            $response = response()->json($products);

            return $response;
        }

        public function store(RequestProduct $request){
            $product = Product::create($request->all());
            $response = response()->json($product);

            return $response;
        }

        /**
         * function update 
         * @param: id - O id do produto
         * @return: json
         */
        public function update($id){
            $product = Product::find($id);
            $product->name = Request::input('name');
            $product->price = Request::input('price');
            $product->description = Request::input('description');
            $product->category_id = Request::input('category_id'); 
            $product->save();  
            $response = response()->json($product);

            return $response;
        }

        public function show($id){
            $product = Product::find($id);
            $product = Product::all();
            $response = response()->json($product);

            return $response;
        }

        public function delete($id){
            $product = Product::find($id);
            $product = $product->delete();
            $response = response()->json($product);

            return $response;
        }
    }
?>