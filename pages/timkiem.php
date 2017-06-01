
<div class="col-lg-8">
    <div class="row">
        <?php
            $tukhoa = $_GET['q'];
            $tin = TimKiem($tukhoa);
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