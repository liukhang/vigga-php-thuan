 <?php 
    ob_start();
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
 <?php 
    if (isset($_POST['btnThem'])) {
        $TenTL = $_POST['TenTL'];
        $TenTL_KhongDau = changeTitle($TenTL);
        $ThuTu = $_POST['ThuTu'];
            settype($ThuTu, "int");
        $AnHien = $_POST['AnHien'];
            settype($AnHien, "int");
        $conn = mysqli_connect('localhost', 'root', '', 'vigga');
        mysqli_set_charset($conn,"utf8");
        $qr = "INSERT INTO theloai VALUES('null','$TenTL','$TenTL_KhongDau','$ThuTu','$AnHien')";
        mysqli_query($conn,$qr);
        header('location:?url=theloai/danhsachtheloai.php');
    }
  ?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Thể Loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                           
                            <div class="form-group">
                                <label>Tên Thể Loại</label>
                                <input class="form-control" name="TenTL" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Thứ Tụ</label>
                                <input class="form-control" name="ThuTu" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Ân Hiện</label>
                                <label class="radio-inline">
                                    <input type="radio" name="AnHien" value="1" checked> Hiện
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="AnHien" value="0">Ẩn<br></td>
                                </label>
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