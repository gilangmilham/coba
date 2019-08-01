<?php
	include "koneksi.php";
	
	if (isset($_POST['submit'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];
		
		mysql_query("update siswa set nama ='$nama' , kelas='$kelas' , alamat='$alamat' where nis ='$nis'");
		//header("location:view.php");
	}
	else{
		header("location:view.php");
	}
?>