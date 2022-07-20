<?php

include 'config.php';

if (isset($_GET['id_penerbit'])) {
  $id_penerbit = $_GET['id_penerbit'];

  $data = mysqli_query($dbconnect, "SELECT * FROM tabel_penerbit where id_penerbit='$id_penerbit' ");
  $data = mysqli_fetch_assoc($data);
}

if (isset($_POST['update'])) {
  $id_penerbit = $_GET['id_penerbit'];

  $nama     = $_POST['nama'];
  $alamat   = $_POST['alamat'];
  $kota     = $_POST['kota'];
  $telepon   = $_POST['telepon'];


  //Menyimpan Ke database
  mysqli_query($dbconnect, "UPDATE tabel_penerbit SET nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' where id_penerbit='$id_penerbit' ");

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
    <h1>Edit Penerbit</h1>
    <form method="post">
      <div class="form-group">
        <label>ID Penerbit</label>
        <input type="text" name="id_penerbit" class="form-control" placeholder="Masukkan ID Penerbit" value="<?= $data['id_penerbit'] ?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?= $data['nama'] ?>">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="<?= $data['alamat'] ?>">
      </div>
      <div class="form-group">
        <label>Kota</label>
        <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota" value="<?= $data['kota'] ?>">
      </div>
      <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor" value="<?= $data['telepon'] ?>">
      </div>'
      <input type="submit" name="update" value="Simpan" class="btn btn-primary">
      <a href="admin.php" class="btn btn-warning">Kembali</a>
    </form>

  </div>
</body>

</html>