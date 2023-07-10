<!doctype html>
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

    <div class="container my-4">
    <div class="item">
      <h2>Tabel Matakuliah</h2>
      <a type="button" class="btn btn-primary" href="create_matkul.php">Tambah</a>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>Jumlah SKS</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from matakuliah";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <td>$row[kodemk]</td>
        <td>$row[namamk]</td>
        <td>$row[jumlah_sks]</td>
        <td>
          <a class='btn btn-success' href='edit_matkul.php?kodemk=$row[kodemk]'>Edit</a>
          <a class='btn btn-danger' href='delete_matkul.php?kodemk=$row[kodemk]'>Delete</a>
        </td>
      </tr>
      ";
        }
      ?>
    </tbody>
    </table>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>