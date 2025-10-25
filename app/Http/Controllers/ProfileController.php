<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama = "Rosyid";
        $email = "rosyid@gmail.com";
        $bio = "Saya adalah Web developer yang bersemangat tentang laravel.";
        return view('profile', compact('nama', 'email', 'bio'));
    }
}
