<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        $product = product::all();

        return view('product.index', compact(['product']));
    }

    public function exportexcel()
    {
        return Excel::download(new ProductExport, 'product.xlsx');
    }
}
