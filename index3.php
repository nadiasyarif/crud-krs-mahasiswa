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
      <h2>Tabel KRS</h2>
      <a type="button" class="btn btn-primary" href="create_krs.php">Tambah</a>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Nama Mata Kuliah</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "SELECT mahasiswa.nama, matakuliah.namamk, matakuliah.jumlah_sks FROM mahasiswa JOIN krs ON mahasiswa.npm = krs.mahasiswa_npm JOIN matakuliah ON matakuliah.kodemk = krs.matakuliah_kodemk;";
        $result = $conn->query($sql);
        $no = 0;
        if(!$result){
        die("Invalid query!");
      }
      while($row=$result->fetch_assoc()){
        ?>
        <tr>
          <td scope="row">
          <?php echo ++$no; ?>
          </td>
          <td>
          <?php echo $row['nama'];?>
          </td>
          <td>
          <?php echo $row['namamk'];?>
          </td>
          <td>
          <?php echo "<font color='#E63E6D'>".$row['nama']."</font>" . " Mengambil Mata Kuliah"."<font color='#E63E6D'> ".$row['namamk']."</font>" ." (".$row['jumlah_sks']."SKS)";?>
          </td>
        </tr>
          <?php
          }
          ?>
    </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>