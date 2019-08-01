<table border="2">
	<tr>
		<th> Id </th>
		<th> Nama </th>
		<th> Harga </th>
		<th colspan="2"> Aksi </th>
	</tr>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("warteg");
	
	$aha = mysql_query("select * from makanan");
	while($row =  mysql_fetch_array($aha)){
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td> <a href='hapus.php?id=$row[0]'> Hapus</a></td>";
		echo "<td> <a href='ubah.php?id=$row[0]'> Ubah</a></td></tr>";
	}
?>
</table>
<form action="hehe.php" method="POST">
Nama makanan <input type="text" name="nama">
Harga Makanan <input type="int" name="harga">
<input type="submit" name="submit">
</form>
