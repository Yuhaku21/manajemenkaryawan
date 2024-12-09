<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manajemenController extends Controller
{   
    //Tampil UI Website
    public function tampilUi(){
        return view('layout.master');
    }
    //Tampil UI Daguku
    public function tampilDaguku(){
        return view('daguku.datakaryawan.masterdaguku');
    }
}
