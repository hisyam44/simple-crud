<?php
	include("koneksi.php");
	$id = $_GET['id'];
	$query = "delete from products where id = '$id'";
	$hasil = mysql_query($query);
	if($hasil){
		header("location:http://localhost/ecommerce");
	}else{
		echo "gagal";
	}
?>