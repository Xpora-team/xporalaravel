<?php

namespace App\Http\Controllers;

use App\Models\inspirasi_post;
use Illuminate\Http\Request;

class inspirasi_post_c extends Controller
{
    public function index()
    {
        $inspirasi_post = inspirasi_post::all();
        
        return view('inspirasi_post.index',compact(['inspirasi_post']));
    }
}
