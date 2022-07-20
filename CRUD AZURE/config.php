<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "data";

$dbconnect = new mysqli($host, $user, $pass, $db);

if (!$dbconnect) {
  echo "Koneksi Gagal -> " . !$dbconnect;
}
