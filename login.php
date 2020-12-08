<!DOCTYPE html>
<meta charset="UTF-8">
<title> Lazodi - Better At Prices </title>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"><meta name='viewport' content='width=device-width,initial-scale=1.0'>
<style>
body{
	 background: url(http://www.timurtek.com/wp-content/uploads/2014/10/form-bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family:'HelveticaNeue','Arial', sans-serif;

}
a{color:#58bff6;text-decoration: none;}
a:hover{color:#aaa; }
.pull-right{float: right;}
.pull-left{float: left;}
.clear-fix{clear:both;}
div.logo{text-align: center; margin: 20px 20px 30px 20px; fill: #566375;}
div.logo svg{
	width:180px;
	height:100px;
}
.logo-active{fill: #44aacc !important;}
#formWrapper{
	background: rgba(0,0,0,.2); 
	width:100%; 
	height:100%; 
	position: absolute; 
	top:0; 
	left:0;
	transition:all .3s ease;}
.darken-bg{background: rgba(0,0,0,.5) !important; transition:all .3s ease;}

div#form{
	position: absolute;
	width:360px;
	height:320px;
	height:auto;
	background-color: #fff;
	margin:auto;
	border-radius: 5px;
	padding:20px;
	left:50%;
	top:50%;
	margin-left:-180px;
	margin-top:-200px;
}
div.form-item{position: relative; display: block; margin-bottom: 20px;}
 input{transition: all .2s ease;}
 input.form-style{
	color:#8a8a8a;
	display: block;
	width: 90%;
	height: 44px;
	padding: 5px 5%;
	border:1px solid #ccc;
	-moz-border-radius: 27px;
	-webkit-border-radius: 27px;
	border-radius: 27px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	background-color: #fff;
	font-family:'HelveticaNeue','Arial', sans-serif;
	font-size: 105%;
	letter-spacing: .8px;
}
div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:#58bff6; }
div.form-item p.formLabel {
	position: absolute;
	left:26px;
	top:2px;
	transition:all .4s ease;
	color:#bbb;}
.formTop{top:-22px !important; left:26px; background-color: #fff; padding:0 5px; font-size: 14px; color:#58bff6 !important;}
.formStatus{color:#8a8a8a !important;}
input[type="submit"].login{
	float:right;
	width: 112px;
	height: 37px;
	-moz-border-radius: 19px;
	-webkit-border-radius: 19px;
	border-radius: 19px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	background-color: #55b1df;
	border:1px solid #55b1df;
	border:none;
	color: #fff;
	font-weight: bold;
}
input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
input[type="submit"].login:focus{outline: none;}
</style>
</head>
<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
<script>
$(document).ready(function(){
	var formInputs = $('input[type="email"],input[type="password"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
});
</script>
<body>
<div id="formWrapper">

<div id="form">
<div class="logo">
 
</div>
		<form action="" method="POST">
<div class="form-group">
<label> Username </label>
<input type="text"  name="username" class="form-control">
</div>
<div class="form-group">
<label> Password </label>
<input type="password"  name="password" class="form-control">
</div>
<input type="submit" class="btn btn-primary" value="Login" name="login"/>
<a href='Pendaftaran.html'><input type="button" class="btn btn-primary" value="Klik Untuk Daftar" name="login"/></a>
  </form>
		<div class="clear-fix"></div>
		</div>
</div>
</div>
</body>
</html>
<?php
@ob_start;
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
IF(ISSET($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql1 = "SELECT * FROM user WHERE USERNAME='$username' AND PASSW='$password'";
	$sql2 = "SELECT * FROM user WHERE USERNAME='$username' AND PASSW='$password'";
	$cek = mysqli_num_rows(mysqli_query($con,$sql1));
	$data = mysqli_fetch_array(mysqli_query($con,$sql2));

IF($cek > 0)
	{
		
		$_SESSION['USERNAME'] = $data['USERNAME'];
		$_SESSION['NMBLK'] = $data['NMBLK'];
		// NB : Di, perhatiin titik koma, pengaruh bgt lho.
		
			if ($_SESSION['LEVEL'] = $data['LEVEL'] == 37 ) {
		echo "<script language=\"javascript\">alert(\"Selamat Datang\");document.location.href='landingpage.html';</script>";
			}
			
			else if ($_SESSION['LEVEL'] = $data['LEVEL'] == 0) {
		echo "<script language=\"javascript\">alert(\"Selamat Datang\");document.location.href='index-buyer.php';</script>";
			}
	}
		
else{
	
		echo "<script language=\"javascript\">alert(\"Password atau Username Salah !!!\");document.location.href='login.php';</script>";
		
	}
}