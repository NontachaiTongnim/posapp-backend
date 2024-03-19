<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    //


    public function insert(Request $req){
        $store = new store;
        $store->name=$req->input('name');
        $store->price=$req->input('price');
        $store->save();
        return response()->json([
            'message'=>'Create Item Successfully'
         ],200);
    }
    public function get(){
        $allStore = store::all();
        return response()->json([
            'data'=>$allStore
         ],200);
    }
    public function id($id){
        $allStore = store::find($id);
        return response()->json([
            'data'=>$allStore
         ],200);
    }
    public function update(Request $req, $id){
        $store = store::find($id);
        $store->name=$req->get('name');
        $store->price=$req->get('price');
        $store->save();
        return response()->json([
            'message'=>'Updated Item Successfully'
         ],200);
    }

    public function delete( $id){
        $store = store::find($id);
        $store->delete();
        return response()->json([
            'message'=>'Deleted Item Successfully'
         ],200);
    }

}
