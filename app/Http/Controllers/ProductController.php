<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProducts(){
        $products=[
            ['name'=>'Phone'],
            ['name'=>'sad'],
            ['name'=>'Phoasdane'],
            ['name'=>'hone'],
            ['name'=>'hodsdne'],
            ['name'=>'one'],
            ['name'=>'sone'],
            ['name'=>'xxxxPhone'],
        ];
        Product::insert($products);
    return "inserted";
    }
    public function search(){
        return view('search');
    }


    
    public function autocomplete(Request $req){
        // return view('search');
        $data=Product::select("name")->where("name","LIKE","%{$req->terms}%")->get();
        return response()->json($data);
    }
}
