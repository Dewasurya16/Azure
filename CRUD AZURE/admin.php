<?php

include 'config.php';

$view = $dbconnect->query("SELECT * FROM tabel_buku");

$view2 = $dbconnect->query("SELECT * FROM tabel_penerbit");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset=UTF-8>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Unibook Store</title>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
  <!-- List Buku -->
  <div class="container">
    <h1>List Buku</h1>
    <a href="buku_add.php" class="btn btn-primary">Tambah Data</a> | <a href="index.php" class="btn btn-warning">Kembali</a>
    <br>
    <table class="table table-bordered">
      <tr>
        <th>ID Buku</th>
        <th>Kategori</th>
        <th>Nama Buku</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Penerbit</th>
        <th>Aksi</th>
      </tr>

      <?php
      while ($row = $view->fetch_array()) {
      ?>

        <tr>
          <td> <?= $row['id_buku'] ?></td>
          <td> <?= $row['kategori'] ?></td>
          <td> <?= $row['nama_buku'] ?></td>
          <td> <?= $row['harga'] ?></td>
          <td> <?= $row['stok'] ?></td>
          <td> <?= $row['penerbit'] ?></td>
          <td>
            <a href="buku_edit.php?id_buku=<?= $row['id_buku'] ?>">Edit</a> |
            <a href="buku_hapus.php?id_buku=<?= $row['id_buku'] ?>" onclick="return confirm('Apakah Anda yakin mau menghapus?')">Hapus</a>
          </td>
        </tr>

      <?php
      }
      ?>
    </table>
  </div>







  <!-- List Penerbit -->
  <div class="container">
    <h1>List Penerbit</h1>
    <a href="penerbit_add.php" class="btn btn-primary">Tambah Data</a> | <a href="index.php" class="btn btn-warning">Kembali</a>
    <br>
    <table class="table table-bordered">
      <tr>
        <th>ID Penerbit</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Telepon</th>
        <th>Aksi</th>
      </tr>

      <?php
      while ($row2 = $view2->fetch_array()) {
      ?>

        <tr>
          <td> <?= $row2['id_penerbit'] ?></td>
          <td> <?= $row2['nama'] ?></td>
          <td> <?= $row2['alamat'] ?></td>
          <td> <?= $row2['kota'] ?></td>
          <td> <?= $row2['telepon'] ?></td>
          <td>
            <a href="penerbit_edit.php?id_penerbit=<?= $row2['id_penerbit'] ?>">Edit</a> |
            <a href="penerbit_hapus.php?id_penerbit=<?= $row2['id_penerbit'] ?>" onclick="return confirm('Apakah Anda yakin mau menghapus?')">Hapus</a>
          </td>
        </tr>

      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>