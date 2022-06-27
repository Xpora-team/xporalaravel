<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AkunAdminExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\AkunAdmin as ModelsAkunAdmin;

class AkunAdmin_C extends Controller
{
    public function index()
    {
        $akun_admin = ModelsAkunAdmin::all();
        
        return view('akunadmin.index',compact(['akun_admin']));
    }
    public function exportexcel(){
        return Excel::download(new AkunAdminExport, 'akunadmin.xlsx');
    }
}