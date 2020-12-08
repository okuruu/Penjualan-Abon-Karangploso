<?php

// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
	
	echo "<meta charset='utf-8'>";
	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='col-md-6 col-md-offset-3'>";

?>	

<script language='JavaScript'>

function jalals() {
	nilai=document.getElementById("punish").value;
	alert(nilai + " Berhasil ditambah di keranjang!")
	document.write("<table border=2>")
		document.write("<tr>")
		document.write("<td>Nama Barang</td>")
		document.write("<td>Lakukan Pembelian?</td>")
		
		document.write("<tr>")		
	for (i=1;i<=nilai;i++){
		document.write("<td>" + "<select name='otestas' class='form-control'>" + "<?php
				 $sql1 = "select * from produk";
				 $data = mysqli_query ($con,$sql1);	
				 while ($cetak = mysqli_fetch_array($data))
				 
					echo "<option value='". $cetak['KODE'] . "'>" . $cetak['NAMA'] . "</option>";
					
				?>" + "</select>")
		document.write("<td>" + "<input type=submit value='Beli' onClick='Hai()'>")
		document.write("<tr>")
	}
	document.write("<tr>")
	document.write("</table>")
	
}

function Hai() {
	window.open('keranjang.html','', 'width=640','height=480')
	
}

function dakersa() {
	window.open('daker.php','', 'width=700','height=400')
}

</script>

	<form method='post' action='bons.php'>
			<font color='red'><label> Beli Barang </label></font>
			 <table class='table table-hover table-dark'>
			 <thead>
				 <tr>
				 <th scope=col'>Pilih Nama Barang</th>
				 <th scope=col'>Berapa Banyak?</th>
				 <th scope=col'> </th>
				 </thead>
			 <tbody>
			 <tr>
			 <td><select name='junas' class='form-control'>
				 
				 <?php
				 $sql2 = "select * from produk";
				 $data = mysqli_query ($con,$sql2);	
				 while ($cetak = mysqli_fetch_array($data))
				 
					echo "<option value='". $cetak['KODE'] . "'>" . $cetak['NAMA'] . "</option>";
					
				?>
				
				</select>
				</td>
				<td><input type=number name=jumlahbels class=form-control></td>
				<td><input type='button' name='dibs' class='btn btn-primary' value='Tambah Ke Keranjang!' style='width:100%' onClick='Hai()'></td>
				<td><input type='button' class='btn btn-primary' value='Stash' onClick='dakersa()'>
				<td><input type='submit' value='Lakukan Pembelian' class='btn btn-primary'>  </td>
			 </tr>
			 </tbody>
			 </table>
		</form>
		
<?php		

// Baris 79 Hit nomor 32
$sql3 = "select * from produk";
$data = mysqli_query ($con,$sql3);

// Nampilin
	
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

?>


		
<?php

	echo "<a href='viewproduk.php'><center><input type='button' value='Klik untuk kembali' class='btn btn-primary' style='width:100%'></center></a>";	
	echo "<p>";
	echo "<br>";


?>