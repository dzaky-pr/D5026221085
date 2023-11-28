@extends('master2')
@section('title', 'Database Pegawai')

    @section('judul_halaman')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    @endsection

    @section('konten')
     {{-- <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <input name="nama" type="text" class="form-control" id="nama" value="{{ $p->pegawai_nama }}" required="required" disabled>
            </div>
        </div> --}}
    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" class="d-flex" method="GET">
		<input class='form-control w-fit' type="text" name="cari" placeholder="Cari pegawai berdasarkan nama ..." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>


    <div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td class="d-flex">
                <a href="/pegawai/view/{{ $p->pegawai_id }}"  class="btn btn-success m-1">View</a>
|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}"  class="btn btn-warning m-1">Edit</a>
|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger m-1">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

    {{$pegawai -> links()}}
    @endsection

