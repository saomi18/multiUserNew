<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class TabelController extends Controller
{
    function index(){
        $login=users::all();
        return view("tabel", compact("login"));
    }
    public function visit(){
        $vis=users::count();
        return view("adminHome", compact("vis"));
        // echo $vis;
    }
}
