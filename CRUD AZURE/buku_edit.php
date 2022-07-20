<?php

include 'config.php';

if (isset($_GET['id_buku'])) {
  $id_buku = $_GET['id_buku'];

  $data = mysqli_query($dbconnect, "SELECT * FROM tabel_buku where id_buku='$id_buku' ");
  $data = mysqli_fetch_assoc($data);
}

if (isset($_POST['update'])) {
  $id_buku = $_GET['id_buku'];

  $kategori   = $_POST['kategori'];
  $nama_buku   = $_POST['nama_buku'];
  $harga     = $_POST['harga'];
  $stok     = $_POST['stok'];
  $penerbit   = $_POST['penerbit'];

  //Menyimpan Ke database
  mysqli_query($dbconnect, "UPDATE tabel_buku SET kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', penerbit='$penerbit' 
		where id_buku='$id_buku' ");

  //Mengalihkan ke list buku
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
    <h1>Edit Buku</h1>
    <form method="POST">
      <div class="form-group">
        <label>ID Buku</label>
        <input type="text" name="id_buku" class="form-control" placeholder="Masukkan ID Buku" value="<?= $data['id_buku'] ?>" readonly>
      </div>
      <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori" value="<?= $data['kategori'] ?>">
      </div>
      <div class="form-group">
        <label>Nama Buku</label>
        <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku" value="<?= $data['nama_buku'] ?>">
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga" value="<?= $data['harga'] ?>">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok" value="<?= $data['stok'] ?>">
      </div>
      <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit" value="<?= $data['penerbit'] ?>">
      </div>
      <input type="submit" name="update" value="Perbaharui" class="btn btn-primary">
      <a href="admin.php" class="btn btn-warning">Kembali</a>
    </form>
  </div>
</body>

</html>