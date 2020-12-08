<?php


echo "<title> Lazodi - Better at Prices </title>";
echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
echo "<div class='col-md-6 col-md-offset-3'>";
// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");

// Ngenalin Vars~
$Nambars = $_POST['eaz'];
$sql1 = "select*from tbl_product where name='$Nambars'";
$ngecek = mysqli_query($con,$sql1);
// Udah kwkw

if (mysqli_num_rows($ngecek)==1)
	{
		$ladub = mysqli_fetch_array($ngecek);
		
		echo "<table class='table table-hover table-dark'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>ID Barang</th>";
			echo "<th scope=col'>Nama Barang</th>";
			echo "<th scope=col'>Harga Barang</th>";
			echo "<th scope=col'>Ketersediaan Barang</th>";
			echo "<th scope=col'>Foto Depan</th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
			echo "<tr>";
			echo "<th scope='row'>" . $ladub['id'] . "</td>";
			echo "<td>" . $ladub['name'] . "</td>";
			echo "<td>" . $ladub['price'] . "</td>";
			echo "<td>" . $ladub['availability'] . "</td>";
			echo "<td>" ."<img src='".$ladub['image']."' width='100px' height='100px'/>"."</td>";
			echo "</tr>";
		echo "</tbody>";
		
	}
	
	else
	{
			die("<a href=\"javascript:history.back()\"><input type='button' value='Upps! Ga Ketemu. Klik Buat Balik' class='btn btn-primary'></a>");
			
	}
		
		echo "<a href='viewproduk.php'><center><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:30%'></center></a>";	
		
?>