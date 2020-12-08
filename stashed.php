<?php

	// Memanggil mysql
	$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
	$urans = $_POST['junas'];
	$kons = $_POST['jumlahbels'];
	$data = mysql_query("insert into stash (IDBar,Jumlah) values ('$urans','$kons')");
	echo "<script language='javascript'>window.close();</script>";
	
?>
	