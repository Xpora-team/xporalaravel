<?php

namespace App\Http\Controllers;

use App\Models\inspirasi_user;
use Illuminate\Http\Request;

class InspirasiUserController extends Controller
{
    public function index()
    {
        $inspirasi_user = inspirasi_user::all();
        
        return view('inspirasi_user.index',compact(['inspirasi_user']));
    }
}
