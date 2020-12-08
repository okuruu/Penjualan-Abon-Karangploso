<?php

	// Memanggil mysql
	$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
	$sql1 = "select * from tbl_product";
	$data = mysqli_query($con,$sql1);

	echo "<title> Lazodi - Better at Prices </title>";
	echo "<div class='col-md-6 col-md-offset-3'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
	
	
//Erase the sin
			echo "<h1 class='form-group' style=color:red><i>Hapus Data Barang</i></h1>";
			echo "<form method='post' action='erased.php'>";
			echo "<table class='table table-hover table-dark'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>Kode Barang</th>";
			echo "<th scope=col'> </th>";
			echo "</thead>";
			echo "<tbody>";
			echo "<tr>";
			echo "<th scope='row'>" . "<input type='text' name='binasa' class='form-control'   style=width:100%>" . "</td>";
			echo "<td>" . "<input type='submit' value='Sikat!' class='btn btn-primary'>" . "</td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";
			//Erased
			
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
	while ($cetak = mysqli_fetch_array($data))
	 { 	
			echo "<tr>";
			echo "<th scope='row'>" . $cetak['id'] . "</td>";
			echo "<td>" . $cetak['name'] . "</td>";
			echo "<td>" . $cetak['price'] . "</td>";
			echo "<td>" . $cetak['availability'] . "</td>";
			echo "<td>" ."<img src='".$cetak['image']."' width='100px' height='100px'/>"."</td>";
			echo "</tr>";
		echo "</tbody>";

 }
	
	echo "</table>";
			
			
	echo "</div>";
	
	
	
?>