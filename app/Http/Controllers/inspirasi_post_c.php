<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inspirasi_post;
use App\Exports\InspirasiPostExport;
use Maatwebsite\Excel\Facades\Excel;

class inspirasi_post_c extends Controller
{
    public function index()
    {
        $inspirasi_post = inspirasi_post::all();
        //echo json_encode($inspirasi_post); die;
        return view('inspirasi_post.index',compact(['inspirasi_post']));
    }
    
    public function exportexcel(){
        return Excel::download(new InspirasiPostExport, 'inspirasipost.xlsx');
    }

    public function insertdata (Request $request){
        //inspirasi_post::create($request->all());
        $inspirasi_post=new inspirasi_post();
        $inspirasi_post->ID_Inspirasi = $request->ID_Inspirasi;
        $inspirasi_post->Nama_Kelas = $request->Nama_Kelas;
        $inspirasi_post->Category = $request->Category;
        $inspirasi_post->Level = $request->Level;
        $inspirasi_post->view = $request->view;
        $inspirasi_post->application = $request->application;
        $inspirasi_post->status = $request->status;
        $inspirasi_post->upload_date = $request->upload_date;
        $inspirasi_post->Photo ="";
        $inspirasi_post->Deskripsi = $request->Deskripsi;
        $inspirasi_post->save();
        return redirect('/inspirasipost');
    }

}
