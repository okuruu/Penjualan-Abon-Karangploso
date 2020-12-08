<?php
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
$sql1 = "select * from datadiri";
$hasil = mysqli_query($con,$sql1);

	echo "<title> Jual Beli Abon Kota Malang </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='container-fluid'>";	
	echo "<table class='table table-hover table-dark'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>No</th>";
			echo "<th scope=col'>Nama</th>";
			echo "<th scope=col'>Alamat</th>";
			echo "<th scope=col'>Kota</th>";
			echo "<th scope=col'>Kode Pos</th>";
			echo "<th scope=col'>Kecamatan</th>";
			echo "<th scope=col'>Kelurahan</th>";
			echo "<th scope=col'>RT / RW</th>";
			echo "<th scope=col'>WhatsApp</th>";
			echo "<th scope=col'>No. Handphone</th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		
while ($cetak = mysqli_fetch_array($hasil))
	 { 	

			echo "<tr>";
			echo "<th scope='row'>" . $cetak['No'] . "</td>";
			echo "<td>" . $cetak['Nama'] . "</td>";
			echo "<td>" . $cetak['Alamat'] . "</td>";
			echo "<td>" . $cetak['Kota'] . "</td>";
			echo "<td>" . $cetak['KodeP'] . "</td>";
			echo "<td>" . $cetak['Kecamatan'] . "</td>";
			echo "<td>" . $cetak['Kelurahan'] . "</td>";
			echo "<td>" . $cetak['RTRW'] . "</td>";
			echo "<td>" . $cetak['Telpon'] . "</td>";
			echo "<td>" . $cetak['Handphone'] . "</td>";
			echo "</tr>";
		echo "</tbody>";
		
 }
	
	echo "</table>";
	echo "<center><a href='landingpage.html'><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:30%'></a></center>";	
	echo "</div>";
	echo "<p>";
	echo "<br>";
		
//Tutup