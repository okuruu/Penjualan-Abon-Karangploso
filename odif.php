<?php

// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
	
	echo "<meta charset='utf-8'>";
	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='col-md-6 col-md-offset-3'>";
	
	$hasil = mysql_query("select * from stash");	
	$scnd = mysql_fetch_array($hasil);
	$stkprd = $scnd['Jumlah'];
	echo "Jumlahnya adalah . $stkprd . <br>";
	
	$data = mysql_query("select STOK-$scnd from produk where NAMA='piring'");
		echo $data;
	
	
?>