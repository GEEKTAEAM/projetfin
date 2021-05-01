<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbordController extends Controller
{

    public function produits(){
        return view('back/produits');
    }
    public function category(){
        return view('back/category');
    }
}
