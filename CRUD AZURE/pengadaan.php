<!DOCTYPE html>
<html>

<head>

  <head>
    <meta charset=UTF-8>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Unibook Store</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>

<body>
  <div class="container">
    <h1>Cetak Data</h1>
    <a href="index.php" class="btn btn-warning">Kembali</a>
    <br><br>
    <div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>ID Buku</th>
            <th>Kategori</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penerbit</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'config.php';
          $select = mysqli_query($dbconnect, 'SELECT * FROM tabel_buku');
          while ($data = mysqli_fetch_array($select)) {

          ?>
            <tr>
              <td><?php echo $data['id_buku']; ?></td>
              <td><?php echo $data['kategori']; ?></td>
              <td><?php echo $data['nama_buku']; ?></td>
              <td><?php echo $data['harga']; ?></td>
              <td><?php echo $data['stok']; ?></td>
              <td><?php echo $data['penerbit']; ?></td>
              <td><a href="cetak.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-danger btn-sm">Cetak
                </a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>