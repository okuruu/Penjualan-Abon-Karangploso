<?php
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
$sql1 = "select * from user";
$hasil = mysqli_query($con,$sql1);

	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='container-fluid'>";
	echo "<table class='table table-hover table-dark'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>ID User</th>";
			echo "<th scope=col'>Username</th>";
			echo "<th scope=col'>Password</th>";
			echo "<th scope=col'>Level Pengguna</th>";
			echo "<th scope=col'>Nama Lengkap</th>";
			echo "<th scope=col'>Panggilan</th>";
			echo "<th scope=col'>Email</th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
while ($cetak = mysqli_fetch_array($hasil))
	 { 	

			echo "<tr>";
			echo "<th scope='row'>" . $cetak['NOID'] . "</td>";
			echo "<td>" . $cetak['USERNAME'] . "</td>";
			echo "<td>" . $cetak['PASSW'] . "</td>";
			echo "<td>" . $cetak['LEVEL'] . "</td>";
			echo "<td>" . $cetak['NMDPN'] . "</td>";
			echo "<td>" . $cetak['NMBLK'] . "</td>";
			echo "<td>" . $cetak['EMAIL'] . "</td>";
			echo "</tr>";
		echo "</tbody>";
		
 }
	
	echo "</table>";
	echo "<a href='landingpage.html'><center><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:30%'></center></a>";	
	echo "</div>";
	echo "<p>";
	echo "<br>";
		
//Tutup