
<?php 
	$idTin = $_GET['idTin'];
	settype($idTin, 'int');
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 	mysqli_set_charset($conn,"utf8");
	$qr = "DELETE FROM tin WHERE idTin = '$idTin'";
		mysqli_query($conn,$qr);
        header('location:../index.php?url=tin/danhsachtin.php');
 ?>