<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="{{ asset('js/form_js2.js') }}"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="form-grup">
        <label for="bil1">Bilangan 1: </label>
        <input type="number" id="bil1" class="form-control" />
      </div>

      <div class="form-grup">
        <label for="bil2">Bilangan 2: </label>
        <input type="number" id="bil2" class="form-control" />
      </div>

      <input type="button" value="Penjumlahan" class="btn btn-primary" onclick="tambah()" />
      <input type="button" value="Perkalian" class="btn btn-info" onclick="kali()" />
      <input type="button" value="Ulangi" class="btn btn-danger" />
      <h3>
        Hasil Operasi:
        <div id="hasil"></div>
      </h3>
    </div>
  </body>
</html>
