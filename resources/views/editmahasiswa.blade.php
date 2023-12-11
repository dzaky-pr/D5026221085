@extends('master2')

@section('konten')
	<h3>Edit Data Mahasiswa</h3>

	<a href="/mahasiswa" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post" class="border col-6">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="NRP" class="col control-label pt-4">NRP</label>
            <div class="col">
                <input name="NRP"  type="number" id="NRP" class="form-control" value="{{ $m->NRP }}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="Nama" class="col control-label">Nama</label>
            <div class="col">
                <input name="Nama" required="required" type="text" id="Nama" class="form-control" value="{{ $m->Nama }}">
            </div>
        </div>

        <div class="form-group">
            <label for="Jurusan" class="col control-label">Jurusan</label>
            <div class="col">
                <input type="text" required="required" name="Jurusan" id="Jurusan" class="form-control" value="{{ $m->Jurusan }}">
            </div>
        </div>

        <div class="form-group">
            <label for="IPK" class="col control-label">IPK</label>
            <div class="col">
                <input type="number" required="required" name="IPK" id="IPK" class="form-control" step="any" min="0" max="4"  value="{{ $m->IPK }}">
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

