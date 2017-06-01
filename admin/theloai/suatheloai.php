<?php 
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
<?php 
    $idTL = $_GET['idTL'];settype($idTL, 'int');
    $row_theloai = ChiTietTheLoai($idTL);
  ?>
  <?php 
    if (isset($_POST['btnSua'])) {
        $TenTL = $_POST['TenTL'];
        $TenTL_KhongDau = changeTitle($TenTL);
        $ThuTu = $_POST['ThuTu'];
            settype($ThuTu, "int");
        $AnHien = $_POST['AnHien'];
            settype($AnHien, "int");
        $conn = mysqli_connect('localhost', 'root', '', 'vigga');
        mysqli_set_charset($conn,"utf8");
        $qr = "UPDATE  theloai SET TenTL = '$TenTL',TenTL_KhongDau='$TenTL_KhongDau',ThuTu='$ThuTu',AnHien='$AnHien' WHERE idTL='$idTL'";
        mysqli_query($conn,$qr);
        header('location:?url=theloai/danhsachtheloai.php');
    }
   ?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            
                            <div class="form-group">
                                <label>TenTL</label>
                                <input class="form-control" name="TenTL" placeholder="Please Enter Category Name" value="<?php echo $row_theloai['TenTL'] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Thứ Tự</label>
                                <input class="form-control" name="ThuTu" placeholder="Please Enter Category Thu Tu" value="<?php echo $row_theloai['ThuTu'] ?>"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Ẩn Hiện</label>
                                <label class="radio-inline">
                                    <input <?php if ($row_theloai['AnHien'] == 1) echo "checked='checked'" ?> name="AnHien" value="1" checked="" type="radio">Hiện
                                </label>
                                <label class="radio-inline">
                                    <input <?php if ($row_theloai['AnHien'] == 0) echo "checked='checked'" ?> name="AnHien" value="0" type="radio">Ẩn
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default" name="btnSua">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>