<?php


// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");

//if ($koneksi)
//	{ echo 'Konek bray';}
//else
	//{ echo 'Koneksi gagal';}
$sql1 = "select * from tbl_product";
$data = mysqli_query($con,$sql1);

// Nampilin
	
	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='col-md-6 col-md-offset-3'>";
	
		
	
			echo "<h1 class='form-group' style=color:red><i>Edit Data Barang</i></h1>";
			echo "<form method='post' action='finedits.php'>";
			echo "<table class='table table-hover table-dark'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>Masukkan ID Lama</th>";
			echo "<th scope=col'>Masukkan Nama Abon Baru</th>";
			echo "<th scope=col'>Masukkan Harga Baru</th>";
			echo "<th scope=col'>Masukkan Ketersediaan Baru</th>";
			echo "</thead>";
			echo "<tbody>";
			echo "<tr>";
			echo "<th scope='row'>" . "<input type='text' name='IDS' class='form-control'   style='width:67%'>" . "</td>";
			echo "<td>" . "<input type='text' name='Nbars' class='form-control'   style='width:67%'>" . "</td>";
			echo "<td>" . "<input type='number' name='Habar' class='form-control'   style='width:74%'>" . "</td>";
			echo "<td>" . "<select name='Jensbars' class='form-control'   style=:'width:74%'>
			<option value='Stok Tersedia'> Stok Tersedia</option>
			<option value='Stok Tidak Tersedia'> Stok Tidak Tersedia</option>
			</select>
			" . "</td>";
			echo "<td>" . "<input type='submit' value='Ubah Data!' class='btn btn-primary'>" . "</td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";			
			
	echo "<h1 class='form-group' style=color:red><i>Cari Barang</i></h1>";
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
	echo "<a href='landingpage.html'><center><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:30%'></center></a>";	
	echo "<p>";
	echo "<br>";
		
//Tutup

?>