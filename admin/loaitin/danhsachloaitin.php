<?php 
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Tin
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ten</th>
                                <th>Ten_KhongDau</th>
                                <th>ThuTu</th>
                                <th>AnHien</th>
                                <th>idTL</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $loaitin = DanhSachLoaiTin();
                            while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                                ob_start();
                         ?>
                            <tr class="odd gradeX" align="center">
                                <td>{idLT}</td>
                                <td>{Ten}</td>
                                <td>{Ten_KhongDau}</td>
                                <td>{ThuTu}</td>
                                <td>{AnHien}</td>
                                <td>{TenTL}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('co muon xoa ko ha?')" href="loaitin/xoaloaitin.php?idLT={idLT}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="?url=loaitin/sualoaitin.php&idLT={idLT}">Edit</a></td>
                            </tr>
                           <?php 
                                $s = ob_get_clean();
                                $s = str_replace('{idLT}',$row_loaitin['idLT'],$s);
                                $s = str_replace('{Ten}',$row_loaitin['Ten'],$s);
                                $s = str_replace('{Ten_KhongDau}',$row_loaitin['Ten_KhongDau'],$s);
                                $s = str_replace('{ThuTu}',$row_loaitin['ThuTu'],$s);
                                $s = str_replace('{AnHien}',$row_loaitin['AnHien'],$s);
                                $s = str_replace('{TenTL}',$row_loaitin['TenTL'],$s);
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