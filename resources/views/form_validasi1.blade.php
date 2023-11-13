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
    <script src="./operasi.js"></script>

    <title>Hello, world!</title>
    <script>
      function validateForm() {
        console.log('ini baris 14');
        return true;
        console.log('ini baris 16');
        return false;
        console.log('ini baris 18');
      }

      function validate() {
        var bil1 = document.getElementById('bil1');
        var bil2 = document.getElementById('bil2');
        var nrp = document.getElementById('nrp');

        // if (bil1.value == '' && bil2.value == '') {
        //   alert('kedua bilangan harus diisi');
        //   return false;
        // } else if (bil1.value == '' || bil2.value == '') {
        //   alert(`Bilangan ${bil1.value === '' ? '1' : '2'} harus diisi`);
        //   return false;
        // } else {
        //   return true;
        // }

        //ini versi panjang
        // if (bil1.value == '' && bil2.value == '') {
        //   alert('kedua bilangan harus diisi');
        //   return false;
        // } else if (bil1.value == '' || bil2.value == '') {
        //   alert(`Bilangan ${bil1.value === '' ? '1' : '2'} harus diisi`);
        //   return false;
        // } else {
        //   return true;
        // }

        // pake focus dan placeholder
        // if (bil1.value == '') {
        //   alert('bilangan 1 harus diisi');
        //   bil1.focus();
        //   return false;
        // }

        // if (bil2.value == '') {
        //   bil2.placeholder = 'Mohon diisi angka';
        //   bil2.focus();
        //   return false;
        // }

        //fix
        if (bil1.value == '') {
          alert('bilangan 1 harus diisi');
          bil1.focus();
          return false;
        }

        if (bil2.value == '') {
          alert('bilangan 2 harus diisi');
          bil2.focus();
          return false;
        }

        if (nrp.value == '') {
          alert('NRP harus diisi');
          return false;
        }

        if (isNaN(nrp.value)) {
          alert('NRP hanya boleh angka');
          return false;
        }

        if (nrp.value.length !== 10) {
          alert('NRP harus berisikan 10 digit nomor');
          return false;
        }

        //ini ternary option
        // return bil1.value == '' || bil2.value == '' ? (alert('kedua bilangan harus diisi'), false) : true;
      }
    </script>
  </head>
  <body>
    <div class="container">
      <form action="https://www.detik.com/" method="post" onsubmit="return validate()">
        <div class="form-grup">
          <label for="bil1">Bilangan 1: </label>
          <input type="number" id="bil1" class="form-control" />
        </div>

        <div class="form-grup">
          <label for="bil2">Bilangan 2: </label>
          <input type="number" id="bil2" class="form-control" />
        </div>

        <div class="form-grup">
          <label for="nrp">NRP: </label>
          <input type="text" id="nrp" class="form-control" />
        </div>

        <input type="submit" value="KIRIM" class="btn btn-primary" />
      </form>
    </div>
  </body>
</html>
