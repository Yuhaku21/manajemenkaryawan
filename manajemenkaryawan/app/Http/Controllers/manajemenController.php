<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manajemenController extends Controller
{
    public function tampilUi(){
        return view('layout.master');
    }
}
