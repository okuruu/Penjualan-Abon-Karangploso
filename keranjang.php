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
				 
				 $data = mysql_query ("select * from produk");	
				 while ($cetak = mysql_fetch_array($data))
				 
					echo "<option value='". $cetak['KODE'] . "'>" . $cetak['NAMA'] . "</option>";
					
				?>" + "</select>")
		document.write("<td>" + "<input type=button value='Beli'>")
		document.write("<tr>")
	}
	document.write("<tr>")
	document.write("</table>")
	
}

function Hai() {
	window.open('stashed.php','', 'width=640','height=480')
	
}

</script>

<table class='table table-hover table-dark'>	 
		<label>Masukkan Dalam Keranjang</label>
			<td><input type=number id=punish name=ura class='form-control'>
		<td><input type='button' name='dibs' class='btn btn-primary' value='Tambah Ke Keranjang!' style='width:100%' onClick='jalals()'></td>
		<td><a href='#'><input type='button' name='sarah' class='btn btn-primary' value='Borong Gan'></a></td>
		</form>
		
</table>


<form method='post' action='stashed.php'>
			<font color='red'><label> Beli Barang </label></font>
			 <table class='table table-hover table-dark'>
			 <thead>
				 <tr>
				 <th scope=col'>Pilih Nama Barang</th>
				<th scope=col'>Berapa Banyak?</th>
				 </thead>
			 <tbody>
			 <tr>
			 <td><select name='junas' class='form-control'>
				 
				 <?php
				 
				 $data = mysql_query ("select * from produk");	
				 while ($cetak = mysql_fetch_array($data))
				 
					echo "<option value='". $cetak['NAMA'] . "'>" . $cetak['NAMA'] . "</option>";
					
				?>
				
				</select>
				</td>
				<td><input type=number name=jumlahbels class=form-control></td>
				<td><input type='submit' value='Masukkan Dalam Keranjang' class='btn btn-primary'>  </td>
			 </tr>
			 </tbody>
			 </table>
		</form>
		
		