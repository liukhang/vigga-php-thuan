<?php 
    ob_start();
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
 <?php 
    $user = DanhSachUser();
    $row_user = mysqli_fetch_array($user);
  ?>
 <?php 
    if (isset($_POST['btnThem'])) {
        $Username = addslashes($_POST['Username']);
        $Email = addslashes($_POST['Email']);
        $Password = md5(addslashes($_POST['Password']));
        $RePassword = md5(addslashes($_POST['txtRePass']));
        $Ngay = date('Y-m-d');
        $idGroup = addslashes($_POST['idGroup']);
            settype($idGroup, "int");
            $conn = mysqli_connect('localhost', 'root', '', 'vigga');
                mysqli_set_charset($conn,"utf8");
            if (!$Username || !$Email|| !$_POST['Password'] || !$_POST['txtRePass']) {
                echo '<form  style="text-align:center">';
                echo 'Xin vui lòng nhập đầy đủ các thông tin.';
                echo '</form>';
            }elseif($Password != $RePassword ){
                echo '<form  style="text-align:center">';
                echo 'pass sai';
                echo '</form>';
                }elseif ($row_user['Username']==$Username){
                    echo '<form  style="text-align:center">';
                    echo 'Username da su dung';
                    echo '</form>';
                }elseif ($row_user['Email']==$Email){
                    echo '<form  style="text-align:center">';
                    echo 'Email da su dung';
                    echo '</form>';
                }else{
                 $conn = mysqli_connect('localhost', 'root', '', 'vigga');
                mysqli_set_charset($conn,"utf8");
                $qr = "INSERT INTO users VALUES('null','null','$Username','$Password','null','null','$Email','$Ngay','$idGroup','null','null','null','null')";
                mysqli_query($conn,$qr);
                header('location:?url=user/danhsachuser.php');
            }
       
    }
  ?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="Username" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="Email" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="Password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="idGroup" value="1"  type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="idGroup" value="0" type="radio" checked="">Member
                                </label>
                            </div>
                            <button type="submit" name="btnThem" class="btn btn-default">User Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>