<?php
include 'lib/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-warning text-white text-center">
  <marquee><h1>Absen siswa Smk Generasi madani</h1></marquee>
  <h2 font-size="29px">Welcome to </h2>
  <p> Smk Generasi Madani Cibinong </p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Daftar</h3>
      <p><img src="img/h.png" width="100px" height="100px"></p>
      <button><a href='input_absensi.php'>absensi</a></button>
    </div>
    <div class="col-sm-4">
      <h3>Daftar</h3>
      <p><img src="img/dft.png"width="100px" height="100px"></p>
      <button><a href='input_siswa.php'>input</a></button>
    </div>
    <div class="col-sm-4">
      <h3>Daftar</h3>
      <p><img src="img/h.png" width="100px" height="100px"></p>
      <button><a href='lihat_absensi.php'>lihat</a></button>
    </div>
    </div>
</div>

</body>
</html>
