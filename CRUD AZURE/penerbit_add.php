<?php

include 'config.php';

if (isset($_POST['simpan'])) {
  // echo var_dumb($_POST);
  $id_penerbit = $_POST['id_penerbit'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kota = $_POST['kota'];
  $telepon = $_POST['telepon'];

  //Menyimpan ke database
  mysqli_query($dbconnect, "INSERT INTO tabel_penerbit VALUES('$id_penerbit', '$nama', '$alamat', '$kota', '$telepon')");

  //Mengalihkan halaman ke admin
  header("location:admin.php");
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset=UTF-8>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Unibook Store</title>

</head>

<body>
  <div class="container">
    <h1>Tambah Penerbit</h1>
    <form method="post">
      <div class="form-group">
        <label>ID Penerbit</label>
        <input type="text" name="id_penerbit" class="form-control" placeholder="Masukkan ID Penerbit">
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
      </div>
      <div class="form-group">
        <label>Kota</label>
        <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota">
      </div>
      <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor">
      </div>'
      <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      <a href="admin.php" class="btn btn-warning">Kembali</a>
    </form>

  </div>
</body>

</html>