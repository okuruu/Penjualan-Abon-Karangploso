
<script language="JavaScript">
	
	function enteknoo() {
		window.print();
	}
	
	</script>

<?php

// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
	
	echo "<meta charset='utf-8'>";
	echo "<title> Lazodi - Better at Prices </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	echo "<div class='col-md-6 col-md-offset-3'>";
	
$titles = $_POST['junas'];
$prices = $_POST['jumlahbels'];
	
?>

<center>

	<table border=2 class='table table-hover'>
		
		<font color=red><h1> Lazodi - Better At Prices <h1></font>
		
		<tr>
			<td><b>Nama Barang			:</b>	<i><?php $hasil = mysqli_query($con, "select * from produk where kode='$titles'"); $cetak = mysqli_fetch_array($hasil); echo $cetak['NAMA'];?></td>
		</i></tr>
		<tr>
			<td><b>Harga Barang		:</b>	<i>Rp. <?php $hasil = mysqli_query($con, "select * from produk where KODE='$titles'"); $cetak = mysqli_fetch_array($hasil); echo $cetak['HARGA']; echo "," . (rand(10,100)); ?></td>
		</i></tr>
		<tr>
			<td><b>Jenis Barang		:</b>	<i><?php $hasil = mysqli_query($con, "select * from produk where KODE='$titles'"); $cetak = mysqli_fetch_array($hasil); echo $cetak['JENIS'];?></td>
		</i></tr>
		<tr>
			<td><b>Nama Pembeli		:</b>	<i><?php $hasil = mysqli_query($con, "select * from user"); $cetak = mysqli_fetch_array($hasil); echo $cetak['NMDPN'];?></td>
		</i></tr>
		<tr>
			<td><b>Sisa Saldo			:</b>	<i><?php $hasil = mysqli_query($con, "select * from user"); $cetak = mysqli_fetch_array($hasil); echo $cetak['SALDO'];?></td>
		</tr>
		<tr>
			<td><b> Sisa Stok	:	<?php $hasil = mysqli_query($con, "select * from produk where kode='$titles'"); 
			$cetak = mysqli_fetch_array($hasil); 
			echo $cetak['STOK']-$prices; 
			$hisal = mysqli_query($con, "select * from user");
			$titles = $_POST['junas']; 
			$cetik = mysqli_fetch_array($hisal); 
			$isa = $cetik['NMBLK']; 
			$prices = $_POST['jumlahbels'];
			$remants = $cetak['NAMA'];
			$rusak = $cetak['STOK']-$prices; 
			$rusik = $cetak['ZSEED']+1;
			$finz = mysqli_query($con, "update produk set STOK=$rusak where KODE='$titles'");
			mysqli_query($con, "insert into notif (IDBARANG,NAMABARANG,HARGABARANG,NAMPEM,SEED) values ('$titles','$remants','$prices','$isa','$prices')");
			$fanz = mysqli_query($con, "update produk set ZSEED=$rusik where KODE='$titles'");
			mysqli_query($con, "insert into tesa (tanggal) values (NOW())");
			?></b></td>
		</tr>
		<tr>
		<td></b>Terima kasih telah berbelanja di <font color=red> Lazodi </font>, Semoga hari anda menyenangkan~</b></td>
		</tr>
	
	</table>
	<input type='button' value='Print Formulir' onclick='enteknoo();' class='btn btn-primary'>
<h1><center>Transaksi Sukses! Mohon Nota Disimpan Sebagai Bukti Pembayaran</center> </h1>
<a href='index-buyer.php'><input type=button class='btn btn-primary' value='Kembali Ke Indeks' style=width:100%></a>
</center>