<?php

include 'config.php';

if (isset($_POST['simpan'])) {
  // echo var_dumb($_POST);
  $id_buku = $_POST['id_buku'];
  $kategori = $_POST['kategori'];
  $nama_buku = $_POST['nama_buku'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $penerbit = $_POST['penerbit'];

  //Menyimpan ke database
  mysqli_query($dbconnect, "INSERT INTO tabel_buku VALUES('$id_buku', '$kategori', '$nama_buku', '$harga', '$stok', '$penerbit')");

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
    <h1>Tambah Buku</h1>
    <form method="post">
      <div class="form-group">
        <label>ID Buku</label>
        <input type="text" name="id_buku" class="form-control" placeholder="Masukkan ID Buku">
      </div>
      <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori">
      </div>
      <div class="form-group">
        <label>Nama Buku</label>
        <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku">
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok">
      </div>
      <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit">
      </div>
      <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      <a href="admin.php" class="btn btn-warning">Kembali</a>
    </form>

  </div>
</body>

</html>