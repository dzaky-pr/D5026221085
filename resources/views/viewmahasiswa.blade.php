@extends('master2')

@section('konten')
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    <div class='row'>
        <div class='col-6 bg-primary'>
        </div>
	    @foreach($mahasiswa as $m)
	    <form method="get" class='col-6 border'>

            <div class="form-group">
                <label for="NRP" class="col control-label pt-4">NRP</label>
                <div class="col">
                    <input type="number" class="form-control w-100" name="NRP" value="{{ $m->NRP }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="Nama" class="col control-label">Nama</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="Nama" value="{{ $m->Nama}}" readonly>
                </div>
            </div>


            <div class="form-group">
                <label for="Jurusan" class="col control-label">Jurusan</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="Jurusan" value="{{ $m->Jurusan }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="IPK" class="col control-label">IPK</label>
                <div class="col">
                    <input type="number" class="form-control w-100" name="IPK" value="{{ $m->IPK }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <div class="col pb-3">
                    <a href="/mahasiswa" class='form-control btn btn-primary '>Ok</a>
                </div>
            </div>
	    </form>
	    @endforeach
    </div>
@endsection

