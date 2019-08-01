<html>
	<head>
		<title> CRUD </title>
	</head>
	
	<body>
	<center>
<?php
	include "koneksi.php";
	
	$kueri = mysql_query("select * from siswa");
	$cek = mysql_num_rows($kueri);
	if($cek==0){
		echo "tidak ada data!";
	}else{
?>
	<table border = 1>
		<tr>
			<td>NO </td>
			<td>NIS</td>
			<td>NAMA</td>
			<td>Kelas</td>
			<td>Alamat</td>
			<td colspan=2>Aksi</td>
		</tr>
<?php
	$i=1;
	while ($row = mysql_fetch_array($kueri)){
?>
		<tr>
			<td><?php echo $i ?> </td>
			<td><?php echo $row[0]?> </td>
			<td><?php echo $row[1]?> </td>
			<td><?php echo $row[2]?> </td>
			<td><?php echo $row[3]?> </td>
			<td><a href="edit.php?id=<?php echo $row[0] ?>"> edit </a></td>
			<td><a href="delete.php?id=<?php echo $row[0] ?>"> delete </a></td>
		</tr>
<?php
			$i++;
		}
?>
	</table>
<?php
	}
?>
	<a href= "tambah.php"> Tambah Data </a>
	</center>
</body>
</html>