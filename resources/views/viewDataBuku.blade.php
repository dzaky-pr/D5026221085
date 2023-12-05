@extends('master2')

@section('konten')
	<h3>Detail Buku</h3>

	<a href="/database-buku" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    <div class='row'>
        <div class='col-6 bg-primary'>
        </div>
	    @foreach($buku as $b)
	    <form method="get" class='col-6 border'>

            <div class="form-group">
                <label for="kodebuku" class="col control-label pt-4">Kode Buku</label>
                <div class="col">
                    <input type="number" class="form-control w-100" name="kodebuku" value="{{ $b->kodebuku }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="merkbuku" class="col control-label">Merk Buku</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="merkbuku" value="{{ $b->merkbuku }}" disabled>
                </div>
            </div>


            <div class="form-group">
                <label for="stockbuku" class="col control-label">Stock Buku</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="stockbuku" value="{{ $b->stockbuku }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="tersedia" class="col control-label">Apakah tersedia?</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="tersedia" value="{{ $b->tersedia }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <div class="col pb-3">
                    <a href="/database-buku" class='form-control btn btn-primary '>Ok</a>
                </div>
            </div>
	    </form>
	    @endforeach
    </div>
@endsection

