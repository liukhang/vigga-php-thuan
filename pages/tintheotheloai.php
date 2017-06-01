
<div class="col-lg-8">
    <div class="row">
        <?php 
            $idTL = $_GET["idTL"];
            settype($idTL, "int");
         ?>
         <?php 
            $bc = ViGa($idTL);
            $row_bc = mysqli_fetch_array($bc);
          ?>
         <div style="margin-left: 15px;">
            <i class="fa fa-home"></i> <i class="fa fa-angle-right"> <?php echo $row_bc['TenTL'] ?></i>
        </div><br>
        <?php 
            $tin = TinTheoTheLoai($idTL);
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
</div>