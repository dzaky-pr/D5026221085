<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a =3;
        $b = 7;
        $c = $a * $b;
    	return "<h1>Hasil Perkalian = ".(string)$c."</h1>";
    }

    public function showBlog(){
        $nama = "Budi";
        $alamat = "Surabaya";
        $umur=19;
        return view('blog', ['nama'=> $nama, 'alamat' => $alamat,'umur'=> $umur]);
    }

    public function showNama($nama){
        return "Anda telah mengisikan : " .$nama;
    }

    public function formulir(){
        //cek soal hak akses
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $notelp = $request->input('notelp');
        return "Nama : ".$nama."<br /> Alamat : ".$alamat. "<br /> Notelp : " . $notelp;
    }
}