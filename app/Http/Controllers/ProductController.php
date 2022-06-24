<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\product;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\product;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
>>>>>>> origin/dinda

class ProductController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $data = product::all();


        // $products = DB::table('product')
        // ->when($id, function ($query, $id) {
        //     return $query->where('id','<',$id);
        // })
        // ->paginate(20);

        return view('product.index' , ['data'=>$data]);
=======
        $product = product::all();

        return view('product.index', compact(['product']));
    }

    public function exportexcel()
    {
        return Excel::download(new ProductExport, 'product.xlsx');
>>>>>>> origin/dinda
    }
}
