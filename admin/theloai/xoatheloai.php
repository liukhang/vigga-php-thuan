
<?php 
	$idTL = $_GET['idTL'];
	settype($idTL, 'int');
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 	mysqli_set_charset($conn,"utf8");
	$qr = "DELETE FROM theloai WHERE idTL = '$idTL'";
		mysqli_query($conn,$qr);
        header('location:../index.php?url=theloai/danhsachtheloai.php');
 ?>