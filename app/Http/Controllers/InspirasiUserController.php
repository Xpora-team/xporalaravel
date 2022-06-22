<?php

namespace App\Http\Controllers;

use App\Models\inspirasi_user;
use Illuminate\Http\Request;

class InspirasiUserController extends Controller
{
    public function index()
    {   
        $data = inspirasi_user::all();
        return view('inspirasi_user.index' , ['data'=>$data]);
    }
}
