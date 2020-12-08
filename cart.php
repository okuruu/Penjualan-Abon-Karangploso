<title> Lazodi - Better at Prices</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="col-md-6 col-md-offset-3">
<meta name='viewport' content='width=device-width,initial-scale=1.0'>
<?php
require_once("config.php");
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
if(isset($_GET['add'])){
	$id = mysqli_real_escape_string((int)$_GET['add']);
	$first = "SELECT produk_id, produk_jumlah FROM twproduk WHERE produk_id='$id'";
	$qt = mysqli_query($con,$first);
	while($qt_row = mysqli_fetch_assoc($qt)){
		if($qt_row['produk_jumlah'] != $_SESSION['cart_'.$_GET['add']] && $qt_row['produk_jumlah'] > 0){
			$_SESSION['cart_'.$_GET['add']]+='1';
			header("Location: daker.php");
		} else {
			echo '<script language="javascript">alert("Stok produk tidak mencukupi!"); document.location="daker.php";</script>';
		}
	}

}

function cart(){
	foreach($_SESSION as $name => $value){
		if($value > 0){
			if(substr($name, 0, 5) == 'cart_'){
				$id = substr($name, 5, (strlen($name)-5));
				$scnd = "SELECT * FROM twproduk WHERE produk_id='$id'";
				$get = mysql_query($con,$scnd);
				while($get_row = mysqli_fetch_assoc($get)){
					$sub = $get_row['produk_harga'] * $value;
					echo '<div style="font-size:11px; margin-bottom:-10px">&raquo; '.$get_row['produk_nama'].' @ Rp. '.$get_row['produk_harga'].' X '.$value.' = Rp. '.$sub.'</div><br>';
				}
			}
			$total += $sub;
		}
	}
	if($total == 0){
		echo 'Keranjang Belanja Kosong!';
	} else {
		echo '<div style="text-align:right; font-size:11px;"><a href="detail.php"> Klik disini untuk melihat secara Detail </a></div>';
	}
}

function produk(){
	$erame = "SELECT * FROM twproduk ORDER BY produk_id DESC";
	$sql = mysqli_query($con,$erame);
	
			
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysqli_fetch_assoc($sql)){
			
			echo "<table class='table table-hover table-dark'>";
			echo "<thead>";
			echo "<th>"."Nama"."</th>";
			echo "<th>"."Harga"."</th>";
			echo "<th>"."Stok"."</th>";
			echo "<th>" ."Foto 1:"."</th>";
			echo "<th>" ."Foto 2:"."</th>";
			echo "</tr>";
			echo "</thead>";
			echo "</tbody>";
			echo "<td>".$row['produk_nama']."</td>";
			echo "<td>".$row['produk_harga']."</td>";
			echo "<td>".$row['produk_jumlah']."</td>";
			echo "<td>"."<img src='".$row['FOTO1']."' width='100px' height='100px'/>"."</td>";
			echo "<td>"."<img src='".$row['FOTO2']."' width='100px' height='100px'/>"."</td>";
			
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";
			echo '
				<td><a href="daker.php?add='.$row['produk_id'].'"><input type=button value=Beli class="btn btn-primary" style="width:100%"></a></tr><br><br>
				';
			
			
		}
	}
}
?>
</div>