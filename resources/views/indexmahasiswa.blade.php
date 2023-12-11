@extends('master2')
@section('title', 'Database Mahasiswa')

    @section('judul_halaman')

	<h3>Database Mahasiswa</h3>

	<br/>
	<br/>
    @endsection
    @section('konten')

	<table class="table table-striped table-hover">

		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>IPK</th>
            <th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->Nama }}</td>
			<td>{{ $m->Jurusan }}</td>
            <td>{{ $m->IPK }}</td>
            <td>
				<a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-primary">View </a>
                |
                <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit </a>
			</td>

		</tr>
		@endforeach
	</table>
    {{$mahasiswa -> links()}}

    @endsection
