<?php session_start();
    require '../lib/dbCon.php';
    require '../lib/trangchu.php';
 ?>
 <?php 
// kiem tra login
if (isset($_POST['btnLogin'])) {
    $un = $_POST['txtUn'];
    $pa = $_POST['txtPa'];
    $pa = md5($pa);
    $conn = mysqli_connect('localhost', 'root', '', 'vigga');
     mysqli_set_charset($conn,"utf8");
    $sql = " SELECT * FROM Users WHERE Username = '$un' AND Password = '$pa'";
    $user = mysqli_query($conn,$sql);
    if (mysqli_num_rows($user) == 1) {
        $row = mysqli_fetch_array($user);
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['HoTen'] = $row['HoTen'];
        $_SESSION['idGroup'] = $row['idGroup'];
        header("location:index.php");
    }else{
        echo "<script>alert('uay co gi do sai me roi !');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">

    <title>Admin - Liu Khang</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/dist/css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="vid-container">
      <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop="">
          <source src="public/videomeomeo.mp4" type="video/mp4">
      </video>
    <div class="inner-container">
        <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop="">
          <source src="public/videomeomeo.mp4" type="video/mp4">
        </video>
    <div class="box">
        <h1>Login</h1>
        <p id="loilogin" style="color: red; font-size:15px"></p>
        <form method="POST" action="">
                <input type="text" placeholder="Username" name="txtUn">
                <input type="password" placeholder="Password" name="txtPa">
                <button type="submit" name="btnLogin" class="btn btn-lg btn-success btn-block" value="Dang Nhap">Login</button>
        </form>
    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="public/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrapublic/p Core JavaScript -->
    <script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/dist/js/sb-admin-2.js"></script>

</body>

</html>
