<?php
    require './lib/quantri.php';
 ?>
 <?php 
    $idLT = $_GET['idLT'];
    settype($idLT,'int');
    $row_loaitin = ChiTietLoaiTin($idLT);
   ?>
 <?php 
    if (isset($_POST['btnSua'])) {
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
        $qr = "UPDATE loaitin SET Ten = '$Ten', Ten_KhongDau = '$Ten_KhongDau',ThuTu = '$ThuTu',AnHien = '$AnHien',idTL = '$idTL' WHERE idLT = '$idLT'";
        mysqli_query($conn,$qr);
        header('location:?url=loaitin/danhsachloaitin.php');
    }
  ?>  
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Tin
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            
                            <div class="form-group">
                                <label>Ten</label>
                                <input class="form-control" name="Ten" placeholder="Please Enter Category Name" value="<?php echo $row_loaitin['Ten'] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Thu Tu</label>
                                <input class="form-control" name="ThuTu" placeholder="Please Enter Category Thu Tu" value="<?php echo $row_loaitin['ThuTu'] ?>"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input <?php if ($row_loaitin['AnHien'] == 1) echo "checked='checked'" ?> name="AnHien" value="1" checked="" type="radio">Hien
                                </label>
                                <label class="radio-inline">
                                    <input <?php if ($row_loaitin['AnHien'] == 0) echo "checked='checked'" ?> name="AnHien" value="0" type="radio">An
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Ten The Loai</label>
                                <select class="form-control" name="idTL">
                                <?php 
                                    $theloai = DanhSachTheLoai();
                                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                                        
                                 ?>
                                    <option <?php if($row_theloai['idTL'] == $row_loaitin['idTL']) echo "selected='selected'" ?> value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default" name="btnSua"> Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>