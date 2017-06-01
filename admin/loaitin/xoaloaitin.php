
<?php 
	$idLT = $_GET['idLT'];
	settype($idLT, 'int');
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 	mysqli_set_charset($conn,"utf8");
	$qr = "DELETE FROM loaitin WHERE idLT = '$idLT'";
		mysqli_query($conn,$qr);
        header('location:../index.php?url=loaitin/danhsachloaitin.php');
 ?>