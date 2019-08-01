<?php
	include "koneksi.php";
	
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$kueri = mysql_query("select * from siswa where nis = '$id'");
		
	$cek = mysql_num_rows($kueri);
	if($cek==1){
		$row = mysql_fetch_array($kueri);
?>		
	<form action = "p_edit.php" method="POST">
		<input type = "hidden" name = "nis" value="<?php echo $row[0] ?>" />
		NIS : <input type="text" value="<?php echo $row[0] ?>"  disabled /> <br/>
		Nama : <input type="text" name="nama" value="<?php echo $row[1] ?>" /> <br/>
		Kelas : <input type="text" name="kelas" value="<?php echo $row[2] ?>" /> <br/>
		Alamat : <input type="text" name="alamat "value="<?php echo $row[3] ?>" /> <br/>
		<input type="submit" name="submit" value="EDIT">
		<a href= "view.php"> Kembali </a>
	</form>
<?php
	}else{
		echo "Duplikasi Data";
		echo "<br/> <a href = 'view.php'> Kembali </a>";
	}
	}
?>