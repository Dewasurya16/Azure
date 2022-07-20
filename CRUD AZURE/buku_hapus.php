<?php 

	include 'config.php';
	
	if(isset($_GET['id_buku'])) {
		
		$id_buku = $_GET['id_buku'];
		
		mysqli_query($dbconnect, "DELETE FROM tabel_buku WHERE id_buku='$id_buku' ");
		
		header("location:admin.php");
	}
?>