<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baju;

class NadaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$baju = Baju::paginate(5);

    	// mengirim data pegawai ke view index
    	return view('belajar',['baju' => $baju]);

    }

    public function tambah() {
        return view('tambahbelajar');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'merkbaju' => 'required|min:3|max:30',
        'stockbaju' => 'required|numeric',
        'tersedia' => 'numeric',
    ]);

    Baju::create([
        'merkbaju' => $request->merkbaju,
        'stockbaju' => $request->stockbaju,
        'tersedia' => ($request->stockbaju > 0) ? 1 : 0,
    ]);

    return redirect('/database-baju');
    }

    public function edit($id) {
        // mengambil data pegawai berdasarkan id yang dipilih
    	$baju = Baju::find($id);
    	// passing data pegawai yang didapat ke view edit.blade.php
    	return view('editbelajar',['baju' => $baju]);

        }

    public function update(Request $request){
        $baju = Baju::find($request->kodebaju);
        $baju->merkbaju= $request->merkbaju;
        $baju->stockbaju= $request->stockbaju;
        $baju->tersedia = ($request->stockbaju > 0) ? 1 : 0;
        $baju->save();

    	return redirect('/database-baju');
    }

    public function hapus($kodebaju){
        $baju = Baju::find($kodebaju);

        $baju->delete();

        return redirect('/database-baju');
    }

    public function cari(Request $request)
    {
    // Menangkap data pencarian
    $cari = $request->cari;

    // Mengambil data dari tabel buku sesuai pencarian data
    $baju = Baju::where('merkbaju', 'like', "%".$cari."%")
                ->paginate();

    return view('belajar', ['baju' => $baju]);
    }

    public function view($id) {
        // mengambil data pegawai berdasarkan id yang dipilih
    	$baju = Baju::find($id);
    	// passing data pegawai yang didapat ke view edit.blade.php
    	return view('viewbelajar',['baju' => $baju]);

        }



}