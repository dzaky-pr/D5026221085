<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller{
    public function index(){
        // mengambil data dari table buku
        $buku = DB::table('buku')->paginate(5);

        // mengirim data buku ke view index
        return view('indexDataBuku', ['buku' => $buku]);
    }

    // method untuk menampilkan view form tambah buku
    public function tambah(){
        // memanggil view tambah
        return view('tambahDataBuku');
    }

    // method untuk insert data ke table buku
    public function store(Request $request){
        // insert data ke table buku
        DB::table('buku')->insert([
            'merkbuku' => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia' => ($request->stockbuku > 0) ? 'y' : 'n',
        ]);
        // alihkan halaman ke halaman buku
        return redirect('/database-buku');
    }

    // Cara panjang if else dibawah ini
    // public function store(Request $request){
    //     // insert data ke table buku
    //     $tersedia = 'n'; // default value

    //     if ($request->stockbuku > 0) {
    //         $tersedia = 'y';
    //     }

    //     DB::table('buku')->insert([
    //         'merkbuku' => $request->merkbuku,
    //         'stockbuku' => $request->stockbuku,
    //         'tersedia' => $tersedia,
    //     ]);

    //     // alihkan halaman ke halaman buku
    //     return redirect('/database-buku');
    // }

    // method untuk edit data buku
    public function edit($id){
        // mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('kodebuku',$id)->get();
        // passing data buku yang didapat ke view edit.blade.php
        return view('editDataBuku',['buku' => $buku]);
    }

    // update data buku
    public function update(Request $request){

        // Update data buku
        DB::table('buku')->where('kodebuku', $request->kodebuku)->update([
            'merkbuku' => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia' => ($request->stockbuku > 0) ? 'y' : 'n',
        ]);

        // Redirect to the appropriate page
        return redirect('/database-buku');
    }

    // method untuk hapus data buku
    public function hapus($id){
        // menghapus data buku berdasarkan id yang dipilih
        DB::table('buku')->where('kodebuku',$id)->delete();

        return redirect('/database-buku');
    }

    // method untuk lihat buku
    public function view($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$buku = DB::table('buku')->where('kodebuku',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('viewDataBuku',['buku' => $buku]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table buku sesuai pencarian data
		$buku = DB::table('buku')
		->where('merkbuku','like',"%".$cari."%")
		->paginate();

    		// mengirim data buku ke view index
		return view('indexDataBuku',['buku' => $buku]);

	}
}