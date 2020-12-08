<?php

// mengenalkan namaa
$NamBar = $_POST['nmbrg'];
$Harbar = $_POST['hrbrg'];
$SatuBar = $_POST['stbrg'];

// Memanggil mysql
$con = mysqli_connect("localhost","id5969255_odz","300698ra0052","id5969255_isep") or die ("Koneksi Gagal");
//if ($koneksi)
//	{ echo 'Konek bray';}
//else
	//{ echo 'Koneksi gagal';}

// Nampilin

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//Done
$sql1 = "insert into tbl_product (name,image,price,availability) values ('$NamBar', '$target_file', '$Harbar','$SatuBar')";
//

// Proses Penyimpanan
$data = mysqli_query ($con,$sql1);

	echo "<title> Lazodi - Better at Prices </title>";
	echo "<div class='col-md-6 col-md-offset-3'>";
	echo "<link href='css/bootstrap.min.css' rel='stylesheet'<meta name='viewport' content='width=device-width,initial-scale=1.0'>>";

//
	
echo "<br>";
echo "<a href=masuklahnak.php><input type=button value='Sukses, Klik untuk kembali' class='btn btn-primary'></a>";
echo "</div>";
?>