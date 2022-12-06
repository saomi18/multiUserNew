<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cekot;

class CekotController extends Controller
{
    public function index(){
        return view('cekot');
    }

    public function proses(Request $req){
        Cekot::create([
            "nama"=>$req->nama,
            "nomor"=>$req->nomor,
            "produk"=>$req->produk,
            "jumlah"=>$req->jumlah,
        ]);
        return redirect('home');
    }    

    public function viewDat(){
        $dat=Cekot::all();
        return view("dataPesan", compact("dat"));
    }
    
    // public function pesan(){
    //     $pes=Cekot::count();
    //     return view("adminHome", compact("pes"));
    //     // echo $vis;
    // }
}
