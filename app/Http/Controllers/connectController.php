<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connectController extends Controller
{
    public function users() {
        return view ('back/users');
    }
    public function villes() {
        return view ('back/villes');
            }
}
