<?php


echo "<title> Lazodi - Better at Prices </title>";
echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
echo "<div class='col-md-6 col-md-offset-3'>";
// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");

// Ngenalin Vars~
$Nambars = $_POST['Nbars'];
$Hagabars = $_POST['Habar'];
$Unto = $_POST['kats'];
$sql1 = "select*from produk where NAMA='$Nambars' or HARGA='$Hagabars' or JENIS='$Unto'";
$ngecek = mysqli_query($con,$sql1);
// Udah kwkw

if (mysqli_num_rows($ngecek)==1)
	{
		$ladub = mysqli_fetch_array($ngecek);
		
		echo "<table class='table table-hover table-dark'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>Kode Barang</th>";
			echo "<th scope=col'>Nama Barang</th>";
			echo "<th scope=col'>Harga Barang</th>";
			echo "<th scope=col'>Satuan Barang</th>";
			echo "<th scope=col'>Stok Barang</th>";
			echo "<th scope=col'>Jenis Barang</th>";
			echo "<th scope=col'>Foto Depan</th>";
			echo "<th scope=col'>Foto Belakang</th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
			echo "<tr>";
			echo "<th scope='row'>" . $ladub['KODE'] . "</td>";
			echo "<td>" . $ladub['NAMA'] . "</td>";
			echo "<td>" . $ladub['HARGA'] . "</td>";
			echo "<td>" . $ladub['SATUAN'] . "</td>";
			echo "<td>" . $ladub['STOK'] . "</td>";
			echo "<td>" . $ladub['JENIS'] . "</td>";
			echo "<td>" ."<img src='".$ladub['FOTO1']."' width='100px' height='100px'/>"."</td>";
			echo "<td>" ."<img src='".$ladub['FOTO2']."' width='100px' height='100px'/>"."<tr>";
			echo "</tr>";
		echo "</tbody>";
		
	}
	
	else
	{
			die("<a href=\"javascript:history.back()\"><input type='button' value='Upps! Ga Ketemu. Klik Buat Balik' class='btn btn-primary'></a>");
			
	}
		
		echo "<a href='viewproduk-buyer.php'><center><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:30%'></center></a>";	

?>