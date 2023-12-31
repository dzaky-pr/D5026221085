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

    <title>Hello, world!</title>

    <script>
      function changeText() {
        let span = document.getElementById('output');
        let textBox = document.getElementById('textbox');

        textBox.style.color = 'red';
        span.innerHTML = 'HALO';
      }
    </script>
  </head>
  <body>
    <div class="container">
      <script>
        function showAlert() {
          alert('Selamat Anda Jawir');
        }

        // showAlert();
      </script>
      <button class="btn btn-primary" onclick="showAlert()">Klik disini</button>
      <br />
      <button onclick="changeText()" class="btn btn-warning">Click Me!</button>
      <span id="output">Replace me</span>
      <input type="text" id="textbox" class="form-control" />
    </div>
  </body>
</html>
