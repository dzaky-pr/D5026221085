<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller{
    public function index(){
        // mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->paginate(5);

        // mengirim data mahasiswa ke view index
        return view('indexmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    // method untuk edit data mahasiswa
    public function edit($id){
        // mengambil data Mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('editmahasiswa',['mahasiswa' => $mahasiswa]);
    }

    // update data Mahasiswa
    public function update(Request $request){

        // Update data Mahasiswa
        DB::table('mahasiswa')->where('NRP', $request->NRP)->update([
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK,
        ]);

        // Redirect to indexmahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk lihat Mahasiswa (1 data)
    public function view($nrp)
    {
	// mengambil mahasiswa berdasarkan nrp yang dipilih
	$Mahasiswa = DB::table('mahasiswa')->where('NRP',$nrp)->get();

	// passing data pegawai yang didapat ke view viewmahasiswa.blade.php
	return view('viewmahasiswa',['mahasiswa' => $Mahasiswa]);
    }
}