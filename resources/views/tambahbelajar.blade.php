<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Baju</h3>

	<a href="/database-baju"> Kembali</a>

	<br/>
	<br/>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

	<form action="/database-baju/store" method="post">
        {{ csrf_field() }}
        Merk Baju <input type="text" name="merkbaju" required="required"> <br/>
        Stock Baju  <input type="number" name="stockbaju" required="required"> <br/>
        <input type="submit" value="Simpan Data">
    </form>


</body>
</html>
