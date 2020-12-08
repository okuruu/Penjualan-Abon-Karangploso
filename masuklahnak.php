

<!DOCTYPE html>
<script language='JavaScript'>

var Are = document.getElementById("myAudio");

function togglePlay() {
		return myAudio.paused ? myAudio.play() : my.Audio.pause();
};

</script>
<html>
<head>
<title> Lazodi - Better at Prices</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name='viewport' content='width=device-width,initial-scale=1.0'>
</head>
<body>
<div class="col-md-6 col-md-offset-3">
	<h1> Berhasil Login selamat datang Admin<i style='color:red'></i> </h1>
		<div class='form-group'>
		<label> Opsi Penjualan </label> <br>
			<a href=uploadproduk.html><input type='button' value='Upload Produk' class="btn btn-primary" style='width:46%'></a>
			<a href=viewproduk.php><input type='button' value='Lihat Produk' class="btn btn-primary" style='width:46%'></a>
		</div>
		<div class='form-group'>
		<label> Alat Spesials </label> <br>
			<a href='odifilluser.php'><input type='button' value='Data User' class="btn btn-primary" style='width:46%'></a>
			<a href='editdataa.php'><input type='button' value='Edit Data Barang' class="btn btn-primary" style='width:46%'></a>
			<p></p>
			<a href='nots.php'><input type='button' value='Cek Data Transaksi' class="btn btn-primary" style='width:46%'></a>
			<audio id='myAudio' src='http://192.168.0.35/Isep/aws_1.mp3' preload='auto'></audio>
			<a onClick='togglePlay()'><input type='button' value='Refresh Your Thought' class="btn btn-success" style='width:46%'></a>
		</div>
		<div class='form-group'>
		<label>Hapus Barang Di Database</label> <br>
			<a href='banned.php'><input type='button' value='Hapus Barang' class="btn btn-primary" style='width:93%'></a>
		</div>
	<br/>
	<a href="logout.php?keluar"><center><input type='button' value='Klik Disini Untuk Keluar' class="btn btn-primary"></center></a>
</div>
</body>
</html>

