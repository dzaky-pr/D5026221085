<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">


                <h1>Naada belajar laravel</h1>
				<h2 class="text-center"><a href="https://www.malasngoding.com">Web Malas Ngoding</a></h2>

				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <a href="/database-baju/tambah" class="btn btn-primary">Tambah Baju</a>
                <br/>
                <br>
				<form action="/database-baju/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari merk baju .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="Cari">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Kode Baju</th>
						<th>Merk Baju</th>
						<th>Stock Baju</th>
						<th>Tersedia</th>
						<th>Opsi</th>
					</tr>
					@foreach($baju as $b)
					<tr>
						<td>{{ $b->kodebaju }}</td>
						<td>{{ $b->merkbaju }}</td>
						<td>{{ $b->stockbaju }}</td>
						<td>{{ $b->tersedia }}</td>
						<td>
                            <a class="btn btn-primary btn-sm" href="/database-baju/view/{{ $b->kodebaju }}">View</a>
							<a class="btn btn-warning btn-sm" href="/database-baju/edit/{{ $b->kodebaju }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/database-baju/hapus/{{ $b->kodebaju }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $baju->currentPage() }} <br/>
				Jumlah Data : {{ $baju->total() }} <br/>
				Data Per Halaman : {{ $baju->perPage() }} <br/>
				<br/>

				{{ $baju->links() }}
			</div>
		</div>
	</div>


</body>
</html>
