<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/database-baju"> Kembali</a>

	<br/>
	<br/>
	<form action="/database-baju/update" method="post">
		{{ csrf_field() }}
		Kode Baju (Read Only): <input type="number" name="kodebaju" value="{{ $baju->kodebaju }}" readonly> <br/>

		Merk Baju: <input type="text" required="required" name="merkbaju" value="{{ $baju->merkbaju }}"> <br/>

		Stock Baju: <input type="number" required="required" name="stockbaju" value="{{ $baju->stockbaju }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>


</body>
</html>
