<?php
	mysql_connect("localhost","root","");
	mysql_select_db("warteg");
	echo $id = $_GET['id'];
	$aha = mysql_query("delete from makanan where id_makanan = '$id'");
	if($aha){
		header('location:new 1.php');
	}
	else{
		echo "gagal";
	}
?>