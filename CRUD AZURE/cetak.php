<!DOCTYPE html>
<html>

<head>

  <meta charset=UTF-8>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Unibook Store</title>



  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body style="padding: 0 20;">
  <div>
    <?php
    include "config.php";
    $sel = mysqli_query($dbconnect, 'SELECT * FROM tabel_buku WHERE id_buku =' . $_GET['id_buku']);
    $data = mysqli_fetch_array($sel);
    ?>
    <section class="content">
      <div class="row">
        <div>
          <div class="span12">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h2><strong>ID Buku</strong>#<?php echo $data['id_buku']; ?></h2>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Unibookstore</strong>
            Jl. Semarang Kota NO. 123, Semarang<br>
            Kec. Tembalang, Semarang,<br>
            Jawa Tengah 50961<br>
            Phone: 021-1234-5678-9000<br>
            Email: unibookstore@gmail.com
          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penerbit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $data['id_buku']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['nama_buku']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><?php echo $data['stok']; ?></td>
                <td><?php echo $data['penerbit']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</body>

<script>
  window.print()
</script>