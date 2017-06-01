<?php 
    require './lib/dbCon.php';
    require './lib/quantri.php';
 ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Email</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $user = DanhSachUser();
                                while ($row_user = mysqli_fetch_array($user)) {
                                ob_start();
                             ?>
                            <tr class="odd gradeX" align="center">
                                <td>{idUser}</td>
                                <td>{Username}</td>
                                <td>
                                    <?php 
                                        if ($row_user['idGroup']==1) {
                                            echo 'admin';
                                        }else{
                                            echo 'member';
                                        }
                                     ?>
                                </td>
                                <td>{Email}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('co muon xoa ko ha?')" href="user/xoauser.php?idUser=<?php if ($row_user['idUser'] == $_SESSION['idUser'] || $row_user['idGroup']==1){
                                    echo 'khong duoc xoa';
                                }else{
                                    echo $row_user['idUser'];
                                    } ?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="?url=user/suauser.php&idUser=<?php if($row_user['idUser'] == $_SESSION['idUser'] || $row_user['idGroup']==0){
                                    echo $row_user['idUser'];
                                    } ?>">Edit</a></td>
                            </tr>
                            <?php
                                 $s = ob_get_clean();
                                 $s = str_replace('{idUser}',$row_user['idUser'],$s);
                                 $s = str_replace('{Username}',$row_user['Username'],$s);
                                 $s = str_replace('{Email}',$row_user['Email'],$s);
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