<?php
	include("koneksi.php");
	$name = $_GET['name'];
	$price = $_GET['price'];
	$desc = $_GET['desc'];
	$query = "insert into products(name,price,descript) values('$name','$price','$desc')";
	$hasil = mysql_query($query);
	if($hasil){
		header("location:http://localhost/ecommerce");
	}else{
		echo "ada error";
	}

?>