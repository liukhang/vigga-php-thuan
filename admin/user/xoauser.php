
<?php 
	$idUser = $_GET['idUser'];
	settype($idUser, 'int');
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 	mysqli_set_charset($conn,"utf8");
	$qr = "DELETE FROM users WHERE idUser = '$idUser'";
		mysqli_query($conn,$qr);
        header('location:../index.php?url=user/danhsachuser.php');
 ?>