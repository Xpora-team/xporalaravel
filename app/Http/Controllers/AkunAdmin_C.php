<?php

namespace App\Http\Controllers;

use App\Models\AkunAdmin as ModelsAkunAdmin;
use Illuminate\Http\Request;

class AkunAdmin_C extends Controller
{
    public function index()
    {
        $akun_admin = ModelsAkunAdmin::all();
        
        return view('akunadmin.index',compact(['akun_admin']));
    }
}