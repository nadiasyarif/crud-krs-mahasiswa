<?php
  include "connection.php";
  $npm="";
  $nama="";
  $jurusan="";
  $alamat="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['npm'])){
      header("index.php");
      exit;
    }
    $npm = $_GET['npm'];
    $sql = "select * from mahasiswa where npm=$npm";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("index.php");
      exit;
    }
    $nama=$row["nama"];
    $jurusan=$row["jurusan"];
    $alamat=$row["alamat"];

  }
  else{
    $npm = $_POST["npm"];
    $nama=$_POST["nama"];
    $jurusan=$_POST["jurusan"];
    $alamat=$_POST["alamat"];

    $sql = "update mahasiswa set nama='$nama', jurusan='$jurusan', alamat='$alamat' where npm='$npm'";
    $result = $conn->query($sql); 
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
 <h1 class="text-white text-center">Update Mahasiswa</h1>
 </div><br>
 <input type="hidden" name="npm" value="<?php echo $npm; ?>" class="form-control"> <br>

 <label> Nama : </label>
 <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control"> <br>

 <label> Jurusan : </label>
 <select name="jurusan" class="form-control">
 <option value="Teknik Informatika">Teknik Informatika</option>
 <option value="Sistem Informasi">Sistem Informasi</option>
 </select>
 <br>
            
 <label> Alamat : </label>
 <textarea name="alamat" value="<?php echo $alamat; ?>" class="form-control" cols="158" rows="3"></textarea><br>

 <button class="btn btn-success" type="submit" name="submit" style="height: 50px; width:100px;"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php" style="height: 50px; width:100px;"> Cancel </a><br>
 </div>
 </form>
 </div>
</body>
</html>