<?php   
 session_start();  
 $connect = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>
          <meta charset="utf-8">
           <title>Jual Beli Abon Kota Malang</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body style="background:#fafafa;">          
          
          
          
            
               
               <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Jual Beli Abon Kota Malang</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" method='post' action='goleks.php'>
        <div class="form-group">
          <input type="text" name='eaz' class="form-control" placeholder="Cari Produk">
        </div>
        <button type="submit" class="btn btn-default">Go!</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          
          <div class="jumbotron" style="background: url(uploads/header-daker.jpg);background-size:cover;padding-left:100px; font-family:Segoe UI; color:#FFF;background-position:center;">
          <h1 style="font-weight:lighter!important;">Selamat Datang</h1>
          </div>

               
                <h3 align="center">List Produk</h3><br />
            <div class="container-fluid">
               <div class="row">
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
                    
                <div class="col-md-2">    
                          <div style="border:1px solid rgba(0,0,0,0.5); background-color:#f1f1f1; border-radius:5px; padding:16px; margin:20px;" align="center">
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" />
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">Rp <?php echo $row["price"]; ?></h4>
                            <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px; border:none;" class="btn btn-primary" value="Beli Produk" />  
                            </form>
                         </div>  
                </div>
                <?php 
                     }  
                }  
                ?>
               </div>
          </div>
                <div style="clear:both"></div>
                <br />
                <div class="container">
                <h3>Detail Pesanan</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Nama Produk</th>  
                               <th width="10%">Jumlah</th>  
                               <th width="20%">Harga</th>  
                               <th width="15%">Total</th>  
                               <th width="5%"> </th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>Rp <?php echo $values["item_price"]; ?></td>  
                               <td>Rp <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Hapus</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">Rp <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                                     <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal" style="magin-bottom:200px;">Beli Produk</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notice Pembelian</h4>
      </div>
      <div class="modal-body">
        <p>Terima Kasih telah membeli di <font color=red> Jual Beli Abon Kota Malang</font></p>
        <p>Total pembelian anda sejumlah : Rp. <?php echo number_format($total); ?></p>
        <p></p>
		<p>Pengiriman : <select name='jenispengiriman'><option value='JNE OK'>JNE OK</option><option value='JNE REG'>JNE REG</option><option value='JNE YES'>JNE YES</option></select></p>
		<p></p>
        <p>Untuk pembayaran dapat ditransfer ke rekening : <font color=red><b>16155 20181 50046</b></font> BTN Syariah</p>
        <p>Atas Nama <font color=red><b>Gilby Dhilega Yodiaz</b></font></p>
		<p></p>
		<p>Untuk pengiriman produk, mohon mengisi info di bawah ini :</p>
	<form method='post' action='checkout.php' >
		<p>Nama : <input type=text class=form-control  name=nams></p>
		<p>Alamat : <input type=text class=form-control  name=alms></p>
		<p>Kota : <input type=text class=form-control  name=kots></p>
		<p>Kode Post : <input type=number class=form-control  name=kopost></p>
		<p>Kecamatan : <input type=text class=form-control  name=kec></p>
		<p>Kelurahan : <input type=text class=form-control  name=kels></p>
		<p>RT/RW : <input type=text class=form-control  name=rts></p>
		<p>No. Whatsapp : <input type=text class=form-control  name=telps></p>
		<p>Handphone : <input type=text class=form-control  name=hps></p>
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Lakukan Transaksi</button><button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
	  </form>
    </div>
    
  </div>
</div>
</div>
</div>
    <br>
          <br>
          <br>
      </body>  
 </html>
   