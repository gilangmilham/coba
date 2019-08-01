<?php
	include "koneksi.php";
	
	if (isset($_POST['submit'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];

	$kueri = mysql_query("insert into siswa values('$nis' , '$nama' , '$kelas' , '$alamat')");
	header ("location:view.php");
	}
	else{
		header("location:tambah.php");
	}
?>