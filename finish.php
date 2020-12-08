<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> Lazodi - Better at Prices</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta name='viewport' content='width=device-width,initial-scale=1.0'>
</head>
<body>


 <script language="JavaScript">
 {
	 function cetak()
	 {
	window.print();	 
	 }
 }
 </script>
 

	<div id="container">

		<div id="content">
			<div class="title">&raquo; Proses Belanja Selesai</div>
			
			<?php
			$nama = ['nama'];
			$alamat = ['alamat'];
			
			if($_POST['finish']){
				session_destroy();
				echo 'Terima kasih Anda sudah berbelanja di Lazodi. Dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p>Total biaya untuk pembelian Produk adalah ' . 'Rp.'; echo $_POST['total'] + rand(0,200); echo ",00".' dan biaya bisa di kirimkan melalui Rekening Bank BCA nomor rekening xxxx-xxxx-xxxx.</p>';
				echo '<p>Dan barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama Lengkap : '.$_POST['nama'].'<br>';
				echo 'Alamat Lengkap : '.$_POST['alamat'].'</p>';
				echo 'Terima Kasih.';
				echo "<br><br><br>";
				echo "<input type= 'button' value='Cetak Bukti Transaksi' onClick='cetak();' class='btn btn-primary'>";
			}else{
				header("Location: daker.php");
			}
			?>

		</div>		
		<div class="clear"></div>


	</div>

</body>
</html>
