
<div class="col-lg-8">
    <div class="row">
        <?php 
            $idLT = $_GET["idLT"];
            settype($idLT, "int");
         ?>
         <?php 
            $bc =breadCrumb($idLT);
            $row_bc = mysqli_fetch_array($bc);
          ?>
        <div style="margin-left: 15px;">
            <i class="fa fa-home"></i> <i class="fa fa-angle-right"> <?php echo $row_bc['TenTL'] ?></i> <i class="fa fa-angle-right"> <?php echo $row_bc['Ten'] ?> </i>
        </div><br>
        <?php 
            $sotin1trang =4;
            if (isset($_GET['trang'])) {
                $trang = $_GET['trang'];
                settype($trang,'int');
            }else{
                $trang = 1;
            }
            $from = ($trang - 1) * $sotin1trang;
            $tin = TinTheoLoaiTin_PhanTrang($idLT,$from,$sotin1trang);
            while ($row_tin = mysqli_fetch_array($tin)) {
               
         ?>
        <div class="col-lg-6">
            <div class="singleBlog">
                <div class="blogImg">
                    <img src="<?php echo $row_tin['urlHinh'] ?>" alt="">
                </div>
                <div class="blogDec">
                    <h2 class="blogtitle">
                        <a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin'] ?>"><?php echo $row_tin['TieuDe'] ?></a>
                    </h2>
                    <p><?php echo $row_tin['TomTat'] ?></p>
                    <div class="blogMeta">     
                        <a href="#"> <i class="fa fa-eye"></i><?php echo $row_tin['SoLanXem'] ?></a>
                    </div>
                </div>
            </div>
            </div>
        <?php } ?>
    </div>
    <div class="col-lg-12">
        <div class="paginationIn">
            <?php 
                $t = TinTheoLoaiTin($idLT);
                $tongsotin = mysqli_num_rows($t);
                $tongsotrang = ceil($tongsotin/$sotin1trang);
                for ($i=1; $i <=$tongsotrang ; $i++) { 
                   
             ?>
            <a <?php if ($i==$trang) echo "style = 'background: #000; color: #fff; border-color: #000;'"  ?> href="index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>
            <?php } ?>
            <a href="#" class="next"><i class="fa fa-long-arrow-right"></i></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>