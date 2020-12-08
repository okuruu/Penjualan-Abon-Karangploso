<?php


echo "<title> Lazodi - Better at Prices </title>";
echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
echo "<div class='col-md-6 col-md-offset-3'>";

// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");

// Suikoden 2 - The Crimson Army Fleeting
$IDVr = $_POST['binasa'];
$sql1 = "select*from tbl_product where id='$IDVr'";
$ngecek = mysqli_query($con,$sql1);
// Udah kwkw

if (mysqli_num_rows($ngecek)==1)
	{
		$sql2 = "delete from tbl_product where id='$IDVr'";
		$ladub = mysqli_query($con,$sql2);		
	}
	
	else
		
	{
			die("<a href=\"javascript:history.back()\"><input type='button' value='Upps! Ga Ketemu. Klik Buat Balik' class='btn btn-primary'></a>");
			
	}
		
		echo "<a href='banned.php'><center><input type='button' value='Yay berhasil klik untuk kembali~' class='btn btn-primary' style='width:100%'></center></a>";	
		
//Tutup
?>