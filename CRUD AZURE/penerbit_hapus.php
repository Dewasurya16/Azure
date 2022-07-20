<?php 

	include 'config.php';
	
	if(isset($_GET['id_penerbit'])) {
		
		$id_penerbit = $_GET['id_penerbit'];
		
		mysqli_query($dbconnect, "DELETE FROM tabel_penerbit WHERE id_penerbit='$id_penerbit' ");
		
		header("location:admin.php");
	}
?>