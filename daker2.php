<?php
$connect = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Lazodi | AIO</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    body
        {
            font-family: Segoe UI;
        }
    .brand
        {
            font-weight: lighter;
        }
    #navbar
        {
            border-radius: 0px;
        }
    .kotak-barang
        {
            border: solid thin rgba(0,0,0,0.4);
            height: 200px;
            background-size: cover !important;
            background-position: center !important;
            border-radius: 5px 5px 0px 0px;
            border-bottom: none !important;
        }
    .keterangan-barang
        {
            padding: 10px;
            font-weight: lighter;
            border: solid thin rgba(0,0,0,0.4);
            border-top: none !important;
            border-radius: 0px 0px 5px 5px;
        }
    .barang
        {
            padding: 10px;
        }
    .btn-keranjang
        {
            background: rgba(0,0,255,0.7);
        }
    .btn-detail
        {
            background: rgba(0,0,255,0.4);
            color: #FFF;
            text-shadow: none !important;
        }
    .btn-detail:hover
        {
            color: #000;
        }
    .footer
        {
            margin-top: 50px;
            color: #FFF;
            background: #222;
            padding: 50px;
        }
    </style>
</head>
    <body>
    <nav class="navbar navbar-inverse" role="navigation" id="navbar">
        <div class="container-fluid">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand brand" href="#">Lazodi</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="nav navbar-nav">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Semua Produk</a></li>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <li><a href="#">Login Pelanggan</a></li>
                </div>
            </div>
        </div>
    </nav>
        
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Selamat Datang di Lazodi</h1>
            <p>Tempat dimana semua barang dijual dengan harga yang sangat pas dengan dompet anda :)</p>
        </div>
        <div>
            <h1>Produk Kami</h1>
        </div>
        <div class="row">
            <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
                    
                
            <div class="col-md-3">
                <div class="barang">
                <div class="kotak-barang" style="background:url(<?php echo $row["image"]; ?>)">
                    
                </div>
                <div class="keterangan-barang">
                    <div class="container-fluid">
                        <h3><?php echo $row["name"]; ?></h3>
                        <p>Rp <?php echo $row["price"]; ?></p>
                        <form method="post" action="daker.php?action=add&id=<?php echo $row["id"]; ?>">
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px; border:none;" class="btn btn-primary btn-keranjang" value="Tambah ke Keranjang" />  
                        </form>
                    </div>
                </div>
            </div>
            </div>
        <?php 
                     }  
                }  
        ?>
        </div>
    </div>
    <div class="footer">
        <div class="page-header">
        <h4>Copyright&copy; 2018 Lazodi International<small>&nbsp;All Rights Reserved</small></h4>
        </div>    
    </div>
    </body>
</html>