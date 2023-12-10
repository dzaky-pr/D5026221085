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
	<form action="/database-baju/view" method="get">
		{{ csrf_field() }}
		Kode Baju: <input type="number" name="kodebaju" value="{{ $baju->kodebaju }}" readonly> <br/>

		Merk Baju: <input type="text" required="required" name="merkbaju" value="{{ $baju->merkbaju }}" readonly> <br/>

		Stock Baju: <input type="number" required="required" name="stockbaju" value="{{ $baju->stockbaju }}"readonly> <br/>

        <a href="/database-baju" class='form-control btn btn-primary'>Ok</a>
	</form>


</body>
</html>
