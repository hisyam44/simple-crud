<?php
	include("koneksi.php");
	$id = $_GET['id'];
	$query = "select * from products where id = '$id'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
?>
<div>
	<form method="get" action="update.php">
		<div>
			<input type="text" name="id" value="<?php echo $data['id']; ?>" hidden>
		</div>
		<div>
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $data['name']; ?>">
		</div>
		<div>
			<label>Price</label>
			<input type="text" name="price" value="<?php echo $data['price']; ?>">
		</div>
		<div>
			<label>Desc</label>
			<textarea name="desc"><?php echo $data['descript']; ?></textarea>
		</div>
		<div>
			<input type="submit" value="update">
		</div>
	</form>
</div>