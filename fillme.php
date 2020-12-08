<?php

// mengenalkan namaa
$Usname = $_POST['uname'];
$Password = $_POST['pass'];
$Lvel = $_POST['lvl'];
$NmDepan = $_POST['depan'];
$NmBlkg = $_POST['blk'];
$Emailz = $_POST['imel'];

// Memanggil DB
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");


//if ($koneksi)
//	{ echo 'Konek bray';}
//else
	//{ echo 'Koneksi gagal';}

	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
	echo "<div class='col-md-6 col-md-offset-3'>";	
$sql1 = "insert into user (USERNAME,PASSW,LEVEL,NMDPN,NMBLK,EMAIL,SALDO) values ('$Usname','$Password','$Lvel','$NmDepan','$NmBlkg','$Emailz',300000)";
// Proses Penyimpanan
$data = mysqli_query ($con,$sql1);


// Nampilin
	
	
echo "<a href=login.php><input type=button value ='Sukses, Kembali ke menu login' class='btn btn-primary'></a>";
echo "</div>";
?>