@extends('master2')

@section('konten')
	<h3>Edit Data Buku</h3>

	<a href="/database-buku" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($buku as $b)
	<form action="/database-buku/update" method="post" class="border col-6">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="kodebuku" class="col control-label pt-4">Kode Buku</label>
            <div class="col">
                <input name="kodebuku"  type="number" id="kodebuku" class="form-control" value="{{ $b->kodebuku }}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="merkbuku" class="col control-label">Merk Buku</label>
            <div class="col">
                <input name="merkbuku" required="required" type="text" id="merkbuku" class="form-control" value="{{ $b->merkbuku }}">
            </div>
        </div>

        <div class="form-group">
            <label for="stockbuku" class="col control-label">Stock Buku</label>
            <div class="col">
                <input type="number" required="required" name="stockbuku" id="stockbuku" class="form-control" value="{{ $b->stockbuku }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col pb-3">
                <input type="submit" value="Simpan Data" class="btn btn-success w-100">
            </div>
        </div>

	</form>
	@endforeach
@endsection

