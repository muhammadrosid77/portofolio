<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiri extends Controller
{
    function index(){
        $nama = "Muhammad Khoirur Rosyid";
        $prodi = "Teknik Informatika";
        return view('datadiri', compact('nama','prodi'));
    }
}
