<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inspirasi_user;
use App\Exports\InspirasiUserExport;
use Maatwebsite\Excel\Facades\Excel;

class InspirasiUserController extends Controller
{
    public function index()
    {
        $inspirasi_user = inspirasi_user::all();
        
        return view('inspirasi_user.index',compact(['inspirasi_user']));
    }

    public function exportexcel(){
        return Excel::download(new InspirasiUserExport, 'inspirasiuser.xlsx');
    }
}
