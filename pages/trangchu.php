<div class="col-lg-8">
    <div class="row">
       
        <div class="col-lg-12 text-center">
            <div class="slider">
             <?php 
              $bontinmoi = TinMoiNhat_BonTin();
              while ($row_bontinmoi = mysqli_fetch_array($bontinmoi)) {
            ?>
                <div class="singleSlide">
                    <img src="<?php echo $row_bontinmoi['urlHinh'] ?>" alt="">
                    <div class="silderCont">
                        <h1><a href="index.php?p=chitiettin&idTin=<?php echo $row_bontinmoi['idTin'] ?>"><?php echo $row_bontinmoi['TieuDe'] ?></a></h1>
                        
                    </div>
                </div>
            
        <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <?php  
            $theloai =  DanhSachTheLoai();
            while ($row_theloai = mysqli_fetch_array($theloai)) {
                $idTL = $row_theloai['idTL'];
        ?>
        <div class="col-lg-6">
            <div class="singleBlog">
                <?php 
                    $tintrai = TinMoi_BenTrai($idTL);
                    $row_tintrai = mysqli_fetch_array($tintrai);
                 ?>
                 <div class="blogMeta">
                    <a href="#"><i class="fa fa-user"></i><?php echo $row_theloai['TenTL'] ?></a>   
                    <?php 
                        $loaitin = DanhSachLoaiTin_TheoTheLoai($idTL);
                        while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                     ?>                      
                    <a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin['idLT'] ?>"> <i class="fa fa-clock-o"></i><?php echo $row_loaitin['Ten'] ?></a>
                    <?php } ?>
                </div>
                <div class="blogImg">
                    <img src="<?php echo $row_tintrai['urlHinh'] ?>" alt="">
                </div>
                <div class="blogDec">
                    <h2 class="blogtitle">
                        <a href="index.php?p=chitiettin&idTin=<?php echo $row_tintrai['idTin'] ?>"><?php echo $row_tintrai['TieuDe'] ?></a>
                    </h2>
                    <p><?php echo $row_tintrai['TomTat'] ?></p>
                    
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>