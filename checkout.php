<?php
	$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
	echo "<title> Jual Beli Abon Kota Malang </title>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'><meta name='viewport' content='width=device-width,initial-scale=1.0'>";
	
$NAMS = $_POST['nams'];
$ALAMAT = $_POST['alms'];
$KOTA = $_POST['kots'];
$KODEP = $_POST['kopost'];
$KECA = $_POST['kec'];
$KELUR = $_POST['kels'];
$RTRW = $_POST['rts'];
$TELPS = $_POST['telps'];
$HPS = $_POST['hps'];

$sql1 = "insert into datadiri (Nama,Alamat,Kota,KodeP,Kecamatan,Kelurahan,RTRW,Telpon,Handphone) values
		('$NAMS','$ALAMAT','$KOTA','$KODEP','$KECA','$KELUR','$RTRW','$TELPS','$HPS')";

$data = mysqli_query($con,$sql1);
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jual Beli Abon Kota Malang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<p></p>
<p></p>
<p></p>
<div class="container">
  <a href=index.php><img class="img-responsive" src="uploads/kwkw.jpg" alt="Chania" width="100%" height="100%"></a>
</div>
<p></p>
<p></p>
<p></p>
</body>
</html>
