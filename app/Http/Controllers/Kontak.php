<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Kontak extends Controller
{
    function index(){
        $email = "mkrosyid@gmail.com";
        $nohp = "081233444555";
        return view('kontak', compact('email','nohp'));
    }

    function kirim(Request $request){
        $nama = $request->nama;
        $email = $request->email;
        $no_hp = $request->no_hp;
        $pesan = $request->pesan;

        $text = "Nama: $nama \nEmail: $email \nNoHp: $no_hp \nPesan: $pesan";
        $no_tujuan = "6281390436754";
        $url = "https://api.whatsapp.com/send?phone=$no_tujuan&text=" .urlencode($text);

        return redirect()->away($url);
    }
}
