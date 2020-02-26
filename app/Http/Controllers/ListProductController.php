<?php
    namespace App\Http\Controllers;

    use App\Http\Models\ListProduct;
    use App\Http\Requests\ListRequest;
    use Request;

    class ListProductController extends Controller{

        public function index(){
            $lists = ListProduct::all();
            $response = response()->json($lists);

            return $response;
        }

        public function store(ListRequest $request){
            $list = ListProduct::create($request->all());
            $response = response()->json($list);

            return $response;
        }

        public function update($id){
            $list = ListProduct::find($id);
            $list->name = Request::input('name');
            $list->description = Request::input('description');
            $list->save();

            $response = response()->json($list);
            return $response;
        }

        public function delete($id){
            $result = ListProduct::find($id);
            $result->delete();

            return $result;
        }

        public function show($id){
            $list = ListProduct::find($id);
            $response = response()->json($list);

            return $response;
        }

    }
?>