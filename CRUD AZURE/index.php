<?php

include 'config.php';

$view = $dbconnect->query("SELECT * FROM tabel_buku");

if (isset($_POST['cari'])) {
  $keyword = $_POST['keyword'];
  $query = "SELECT * FROM tabel_buku WHERE
            id_buku LIKE '%$keyword%'OR
            kategori LIKE '%$keyword%' OR
            nama_buku LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR  
            penerbit LIKE '%$keyword%'     
            ";
  $view = $dbconnect->query($query);
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
    <h1>Selamat Datang</h1>
    <a href="index.php">Home</a> |
    <a href="admin.php">Admin</a> |
    <a href="pengadaan.php">Pengadaan</a> |

  </div>
  <br>
  <div class="container">
    <h3>List Buku</h3>
    <form action="" method="post">
      <input type="text" name="keyword" placeholder="Masukkan Keyword..." autocomplete="off">
      <button name="cari">Cari</button>
    </form>

    <table class="table table-bordered">
      <tr>
        <th>ID Buku</th>
        <th>Kategori</th>
        <th>Nama Buku</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Penerbit</th>
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
        </tr>

      <?php
      }
      ?>
    </table>
  </div>
</body>