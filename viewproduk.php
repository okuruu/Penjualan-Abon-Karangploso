<?php

// Memanggil mysql

// Memanggil database
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
$sql1 = "select * from produk";
$data = mysqli_query($con,$sql1);

// Nampilin
	
	echo "<meta charset='utf-8'>";
	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='col-md-6 col-md-offset-3'>";
	
			echo "<form method='post' action='goleks.php'>";
			echo "<table class='table table-hover table-dark'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th scope=col'>Masukkan Nama Barang</th>";
			echo "<th scope=col'>Masukkan Harga Barang</th>";
			echo "<th scope=col'>Masukkan Kategori Barang</th>";
			echo "<th scope=col'> </th>";
			echo "</thead>";
			echo "<tbody>";
			echo "<tr>";
			echo "<th scope='row'>" . "<input type='text' name='Nbars' class='form-control' required style='width:67%'>" . "</td>";
			echo "<td>" . "<input type='number' name='Habar' class='form-control' required style='width:74%'>" . "</td>";
			echo "<td>" . "<select name=kats class='form-control'>
			<option value='Pecah Belah'> Pecah Belah </option>
			<option value='Kerajinan'> Kerajinan </option>
			<option value='Elektronik'> Elektronik </option>
			<option value='Lukisan'> Lukisan </option>
			<option value=''> Sembarang </option>
			</select>"
			. "<td>";
			echo "<td>" . "<input type='submit' value='Cari!' class='btn btn-primary'>" . "</td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";
			
			
	while ($cetak = mysqli_fetch_array($data))
	 { 	
		
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
			echo "<th scope='row'>" . $cetak['KODE'] . "</td>";
			echo "<td>" . $cetak['NAMA'] . "</td>";
			echo "<td>" . $cetak['HARGA'] . "</td>";
			echo "<td>" . $cetak['SATUAN'] . "</td>";
			echo "<td>" . $cetak['STOK'] . "</td>";
			echo "<td>" . $cetak['JENIS'] . "</td>";
			echo "<td>" ."<img src='".$cetak['FOTO1']."' width='100px' height='100px'/>"."</td>";
			echo "<td>" ."<img src='".$cetak['FOTO2']."' width='100px' height='100px'/>"."</td>";
			echo "</tr>";
		echo "</tbody>";
		
 }
	
	echo "</table>";
	echo "<a href='purchase.php'><center><input type='button' value='Mau Beli? Klik Disini!' class='btn btn-primary' style='width:100%'></center></a>";	
	echo "<p>";
	echo "<a href='index.php'><center><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:100%'></center></a>";	
	echo "<p>";
	echo "<br>";
?>
