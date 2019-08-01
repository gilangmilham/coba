<?php
mysql_connect("localhost","root","");
	mysql_select_db("warteg");
	if(!($_POST['submit'])){
	}else{
		echo $nama = $_POST['nama'];
		echo $harga = $_POST['harga'];
		
		$kueri = mysql_query("insert into makanan values(null , '$nama' , '$harga')");
		if($kueri){
			echo "berhasil";
			header("location:new 1.php");
		}
		else{
			echo "gagal";
		}
	}
	
?>