@extends('master2')

@section('konten')
	<h3>Tambah Data Buku</h3>

	<a href="/database-buku" class='btn btn-primary'> Kembali</a>

	<br/>
	<br/>

	<form action="/database-buku/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group">
            <label class="col-sm-2 control-label">Kode Buku</label>
            <div class="col-6">
                <input name="kodebuku" type="number" class="form-control" placeholder="Masukkan Kode Buku ..." required="required">
            </div>
        </div> --}}

        <div class="form-group">
            <label for="merkbuku" class="col-sm-2 control-label">Merk Buku</label>
            <div class="col-6">
                <input name="merkbuku" type="text" class="form-control" id="merkbuku" placeholder="Masukkan nilai angka ..." required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="stockbuku" class="col-sm-2 control-label">Stock Buku</label>
            <div class="col-6">
                <input name="stockbuku" type="number" class="form-control" id="stockbuku" placeholder="Masukkan Stock Buku..." required="required">
            </div>
        </div>
		<input type="submit" class='btn btn-success' value="Tambah Data">
	</form>

@endsection
