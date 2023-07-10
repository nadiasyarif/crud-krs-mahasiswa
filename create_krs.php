<?php
    include "connection.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $mahasiswa_npm = $_POST['mahasiswa_npm'];
        $matakuliah_kodemk = $_POST['matakuliah_kodemk'];

        $q = "INSERT INTO `krs`(`id`,`mahasiswa_npm`, `matakuliah_kodemk`) VALUES ( '$id','$mahasiswa_npm', '$matakuliah_kodemk' )";
        $query = mysqli_query($conn, $q);

    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" href="style.css">
    <link rel="Stylesheet" href="https://fonts.cdnfonts.com/css/poppins" rel="Stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TUGAS CRUD KRS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Tabel Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index2.php">Tabel Mata Kuliah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index3.php">Tabel KRS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="col-lg-6 m-auto">
    <form method="post">
    <br><br><div class="card border-0">
    <div class="card-header bg-secondary">
    <h1 class="text-white text-center">Data KRS Baru</h1>
    </div><br>

    <label> id : </label>
    <input type="" name="id" class="form-control"> <br>

    <label> NPM  : </label>
    <input type="text" name="mahasiswa_npm" class="form-control"> <br>

    <label> Kode Mata Kuliah : </label>
    <input type="text" name="matakuliah_kodemk" class="form-control"> <br>

    <button class="btn btn-success" type="submit" name="submit" style="height: 50px; width:100px;"> Submit </button><br>
    <a class="btn btn-info" type="submit" name="cancel" href="index.php" style="height: 50px; width:100px;"> Cancel </a><br>
    </div>
    </form>
    </div>
  </body>
</html>