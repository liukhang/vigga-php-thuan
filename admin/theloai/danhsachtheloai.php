
<?php 
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">The Loai
                            <small>Danh Sach</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ten</th>
                                <th>TenTL_KhongDau</th>
                                <th>ThuTu</th>
                                <th>AnHien</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $theloai = DanhSachTheLoai();
                                while ($row_theloai = mysqli_fetch_array($theloai)) {
                                ob_start();
                             ?>
                            <tr class="odd gradeX" align="center">
                                <td>{idTL}</td>
                                <td>{TenTL}</td>
                                <td>{TenTL_KhongDau}</td>
                                <td>{ThuTu}</td>
                                <td>{AnHien}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('co muon xoa ko ha?')" href="theloai/xoatheloai.php?idTL={idTL}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="?url=theloai/suatheloai.php&idTL={idTL}">Edit</a></td>
                            </tr>
                            <?php
                                 $s = ob_get_clean();
                                 $s = str_replace('{idTL}',$row_theloai['idTL'],$s);
                                 $s = str_replace('{TenTL}',$row_theloai['TenTL'],$s);
                                 $s = str_replace('{TenTL_KhongDau}',$row_theloai['TenTL_KhongDau'],$s);
                                 $s = str_replace('{ThuTu}',$row_theloai['ThuTu'],$s);
                                 $s = str_replace('{AnHien}',$row_theloai['AnHien'],$s);
                                 echo $s;
                                 }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>