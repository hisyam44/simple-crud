<?php include("koneksi.php"); ?>
<div>
	<form method="get" action="post.php">
		<div>
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Price</label>
			<input type="text" name="price">
		</div>
		<div>
			<label>Desc</label>
			<textarea name="desc"></textarea>
		</div>
		<div>
			<input type="submit" value="post">
		</div>
	</form>
</div>
<div>
	<?php
		$query = "select * from products";
		$hasil = mysql_query($query);
		while($data = mysql_fetch_array($hasil)){
			echo '<div style="padding:20px 0px;border-bottom:1px solid #000;">';
			echo "<div>".$data['name']."</div>";
			echo "<div>".$data['price']."</div>";
			echo "<div>".$data['descript']."</div>";
			echo '<div><a href="hapus.php?id='.$data['id'].'">HAPUS</a></div>';
			echo '<div><a href="edit.php?id='.$data['id'].'">EDIT</a></div>';
			echo "</div>";
		}
	?>
</div>