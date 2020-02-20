<?php
    namespace App\Http\Controllers;

    use Request;
    use app\Http\Request\LitsRequest;
    use app\Http\Models\List;

    class ListController extends Controller{

        public funcion index(){
            $lists = List::all();
            $response = response()->json($list);

            return $response;
        }

        public function store(ListRequest $request){
            $list = List::create($request->all());
            $response = response()->json($list);

            return $response;
        }

        public function update($id){
            $list = List::find($id);
            $list->name = Request::input('name');
            $list->description = Request::input('description');
            $list->save();

            $response = response()->json($list);
            return $response;
        }

        public function delete($id){
            $result = List::find($id);
            $result->delete();

            return $result;
        }

        public function show($id){
            $list = List::find($id);
            $response = response()->json($list);

            return $response;
        }
    }
?>