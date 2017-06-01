<?php
    require './lib/quantri.php';
 ?>
 <?php 
    if (isset($_POST['btnThem'])) {
        $Ten = $_POST['Ten'];
        $Ten_KhongDau = changeTitle($Ten);
        $ThuTu = $_POST['ThuTu'];
            settype($ThuTu, "int");
        $AnHien = $_POST['AnHien'];
            settype($AnHien, "int");
        $idTL = $_POST['idTL'];
            settype($idTL, "int");
        $conn = mysqli_connect('localhost', 'root', '', 'vigga');
        mysqli_set_charset($conn,"utf8");
        $qr = "INSERT INTO loaitin VALUES('null','$Ten','$Ten_KhongDau','$ThuTu','$AnHien','$idTL')";
        mysqli_query($conn,$qr);
        header('location:?url=loaitin/danhsachloaitin.php');
    }
  ?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Tin
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            
                            <div class="form-group">
                                <label>Ten</label>
                                <input class="form-control" name="Ten" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Thu Tu</label>
                                <input class="form-control" name="ThuTu" placeholder="Please Enter Category Thu Tu" />
                            </div>
                            
                            <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="AnHien" value="1" checked="" type="radio">Hien
                                </label>
                                <label class="radio-inline">
                                    <input name="AnHien" value="0" type="radio">An
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Ten The Loai</label>
                                <select class="form-control" name="idTL">
                                <?php 
                                    $theloai = DanhSachTheLoai();
                                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                                        
                                 ?>
                                    <option value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default" name="btnThem">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>