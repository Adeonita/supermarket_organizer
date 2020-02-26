<?php
    namespace App\Http\Controllers;

    use App\Http\Models\Product;
    use App\Http\Models\Category;
    use App\Http\Request\ProductRequest;
    use Request;

    class ProductController extends Controller{

        public function index(){
            $products = Product::all();
            $response = response()
                        ->json($products)
                        ->setStatusCode(200);

            return $response;
        }
        /**
         * Create product
         * @param Request
         * @return Response
         */
        public function store(RequestProduct $request){
            $product = Product::create($request->all());
            $response = response()
                        ->json($product)
                        ->setstatusCode(201);

            return $response;
        }

        /**
         * Update product 
         * @param Id - O id do produto
         * @return Response
         */
        public function update($id){
            $product = Product::find($id);
            if(!$product){
                return response()
                        ->json(['message' => 'Record not found',])
                        ->setStatusCode(404);
            }
            $product->name = Request::input('name');
            $product->price = Request::input('price');
            $product->description = Request::input('description');
            $product->category_id = Request::input('category_id'); 
            $product->save();  
            $response = response()
                        ->json($product)
                        ->setStatusCode(200);

            return $response;
        }

        public function show($id){
            $product = Product::find($id);
            if(!$product){
                return response()
                        ->json(['message' => 'Record not found'])
                        ->setStatusCode(404);
            }
            $product = Product::all();
            $response = response()
                        ->json($product)
                        ->setStatusCode(200);

            return $response;
        }

        public function delete($id){
            $product = Product::find($id);
            $product = $product->delete();
            $response = response()
                        ->json($product)
                        ->setStatusCode(200);
            return $response;
        }
    }
?>