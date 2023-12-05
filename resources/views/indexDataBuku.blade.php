@extends('master2')
@section('title', 'Database Pegawai')

    @section('judul_halaman')

	<h3>Database Buku</h3>

	<a href="/database-buku/tambah" class="btn btn-primary"> + Tambah Buku Baru</a>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <p>Cari Data Buku:</p>
	<form action="/database-buku/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari data buku berdasarkan nama ..." value="{{ old('cari') }}">
		<input type="submit" value="Cari" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">

		<tr>
			<th>Kode Buku</th>
			<th>Merk Buku</th>
			<th>Stock Buku</th>
			<th>Apakah Tersedia?</th>
            <th>Opsi</th>
		</tr>
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->kodebuku }}</td>
			<td>{{ $b->merkbuku }}</td>
			<td>{{ $b->stockbuku }}</td>
            <td>@if($b->tersedia == 'y')
                    Tersedia <input type="checkbox" checked disabled>
                @else
                    Tidak Tersedia <input type="checkbox" disabled>
                @endif</td>
			<td>
				<a href="/database-buku/view/{{ $b->kodebuku }}" class="btn btn-primary">View </a>
                |
                <a href="/database-buku/edit/{{ $b->kodebuku }}" class="btn btn-warning">Edit </a>
				|
				<a href="/database-buku/hapus/{{ $b->kodebuku }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$buku -> links()}}

    @endsection
