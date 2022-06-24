<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = product::all();


        // $products = DB::table('product')
        // ->when($id, function ($query, $id) {
        //     return $query->where('id','<',$id);
        // })
        // ->paginate(20);

        return view('product.index' , ['data'=>$data]);
    }
}
