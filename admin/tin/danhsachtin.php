<?php 
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th> ID - Ngay</th>
                                <th>Tin</th>
                                <th>Ten The Loai - Ten Tin</th>
                                <th>Other</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $tin = DanhSachTin();
                                while ($row_tin = mysqli_fetch_array($tin)) {
                                    ob_start();
                             ?>
                            <tr class="odd gradeX" align="center">
                                <td>{idTin} <br/> {Ngay}</td>
                                <td>{TieuDe}<br/><img src="{urlHinh}" width="152" height="96" alt=""><br/>{TomTat}</td>
                                <td>{TenTL} <br>-<br/> {Ten} </td>
                                <td>{SoLanXem}<br>-<br/>{TinNoiBat}<br>-<br/>{AnHien}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('co muon xoa ko ha?')" href="tin/xoatin.php?idTin={idTin}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="?url=tin/suatin.php&idTin={idTin}">Edit</a></td>
                            </tr>
                            <?php
                                $s = ob_get_clean();
                                $s = str_replace('{idTin}', $row_tin['idTin'], $s);
                                $s = str_replace('{Ngay}', $row_tin['Ngay'], $s);
                                $s = str_replace('{TieuDe}', $row_tin['TieuDe'], $s);
                                $s = str_replace('{TomTat}', $row_tin['TomTat'], $s);
                                $s = str_replace('{urlHinh}', $row_tin['urlHinh'], $s);
                                $s = str_replace('{TenTL}', $row_tin['TenTL'], $s);
                                $s = str_replace('{Ten}', $row_tin['Ten'], $s);
                                $s = str_replace('{SoLanXem}', $row_tin['SoLanXem'], $s);
                                $s = str_replace('{TinNoiBat}', $row_tin['TinNoiBat'], $s);
                                $s = str_replace('{AnHien}', $row_tin['AnHien'], $s);
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