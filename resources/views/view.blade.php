@extends('master2')

@section('konten')
    <h3>View Pegawai</h3>
    <a href="/pegawai" class=' btn btn-primary '> Kembali</a>

	<br/>
	<br/>

    <div class='row'>
        <div class='col-6 bg-primary'>
        </div>
	    @foreach($pegawai as $p)
	    <form method="get" class='col-6'>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col">
                <input name="nama" type="text" class="form-control w-100" id="nama" value="{{ $p->pegawai_nama }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col">
                <input name="jabatan" type="text" class="form-control w-100" id="jabatan" value="{{ $p->pegawai_jabatan }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur</label>
            <div class="col">
                <input name="umur" type="text" class="form-control w-100" id="umur" value="{{ $p->pegawai_umur }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
            <div class="col">
                <textarea name="alamat"  class="form-control w-100" id="alamat" required="required" disabled>{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col">
                <a href="/pegawai" class='form-control btn btn-primary'>Ok</a>
            </div>
        </div>

	    </form>

	    @endforeach
    </div>
@endsection
