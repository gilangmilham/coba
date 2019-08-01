<?php
	include "koneksi.php";
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		mysql_query("delete from siswa where nis = '$id'");
		header ("location:view.php");
	}else{
		header("location:view.php");
	}
?>