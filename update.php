<?php
	include("koneksi.php");
	$name = $_GET['name'];
	$price = $_GET['price'];
	$desc = $_GET['desc'];
	$id = $_GET['id'];
	$query = "update products set name='$name',price='$price',descript='$desc' where id='$id'";
	$hasil = mysql_query($query);
	if($hasil){
		header("location:http://localhost/ecommerce");
	}else{
		echo "error";
	}
?>