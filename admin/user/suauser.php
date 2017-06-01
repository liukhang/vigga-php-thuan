<?php 
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
  <?php 
    $idUser = $_GET['idUser'];
    settype($idUser,'int');
    $user = ChiTietUser($idUser);
    $row_user = mysqli_fetch_array($user);
    if ($idUser=='') {
        echo '<form  style="text-align:center">';
        echo 'khong duoc phep sua';
        echo '</form>';
    }
   ?>
 <?php 
    if (isset($_POST['btnSua'])) {
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = md5($_POST['Password']);
        $RePassword = md5($_POST['txtRePass']);
        $Ngay = date('Y-m-d');
        $idGroup = $_POST['idGroup'];
            settype($idGroup, "int");
        $conn = mysqli_connect('localhost', 'root', '', 'vigga');
        mysqli_set_charset($conn,"utf8");
        $qr = "UPDATE users SET Password='$Password',idGroup='$idGroup' WHERE idUser='$idUser'";
        mysqli_query($conn,$qr);
        header('location:?url=user/danhsachuser.php');
   
    }
  ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="Username" value="<?php echo $row_user['Username'] ?>" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="Email" value="<?php echo $row_user['Email'] ?>" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="Password" value="<?php echo $row_user['Password'] ?>" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input <?php if ($row_user['idGroup'] == 1) echo "checked='checked'" ?> name="idGroup" value="1"  type="radio" checked="">Admin
                                </label>
                                <label class="radio-inline">
                                    <input <?php if ($row_user['idGroup'] == 0) echo "checked='checked'" ?> name="idGroup" value="0" type="radio">Member
                                </label>
                            </div>
                            <button type="submit" name="btnSua" class="btn btn-default">User Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>