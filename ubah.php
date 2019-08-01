<?php
	mysql_connect("localhost","root","");
	mysql_select_db("warteg");
	echo $id = $_GET['id'];
	
	$data = $mysql_query("select *from makanan where id_makanan='$id'");
	while($data2 = $mysql_fetch_array($data)){
		echo $data2[2];
	}
?>