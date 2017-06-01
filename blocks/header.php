
<div class="leftMenu">
                <div class="leftmenuHead">
                    <div class="logoleft pull-left">
                        <a href="./"><img src="./public/images/logoleft.png" alt=""></a>
                    </div>
                    <a href="#" class="leftclose pull-right">x</a>
                    <div class="clearfix"></div>
                </div>
                <div class="leftmenuScroll">
                    <nav class="leftmainnav">
                        <ul>
                           
                            <li><a href="./">home pages</a></li>
                             <?php
                                $theloai = DanhSachTheLoai();
                                foreach ($theloai as $a ) {
                                    $idTL = $a['idTL'];
                             ?>
                            <li class="has-menu-items"><a href="index.php?p=tintheotheloai&idTL=<?php echo $a['idTL'] ?>"><?php echo $a['TenTL'] ?></a>
                                <ul class="sub-menu">
                                    <?php 
                                        $theloai = DanhSachLoaiTin_TheoTheLoai($idTL);
                                        foreach ($theloai as $a) {
                                    ?>
                                    <li><a href="index.php?p=tintrongloai&idLT=<?php echo $a['idLT'] ?>"><?php echo $a['Ten'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                            <li class="has-menu-items"><a href="./admin/login.php">Dang Nhap</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="socialleft">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
              <!--Header Top Start -->
            <section class="headerTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-2">
                            <div class="menuBar" id="leftTrigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-8 text-center">
                            <div class="logo">
                                <a href="./"><img src="./public/images/logoa.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-2 pull-right text-right">
                            <div class="socialHeader">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Header Top End -->
            <!--Header Start-->
            <header class="header">
                <div class="container">
                    <div class="headerIn">
                        <div class="row">
                            <div class="col-lg-8 col-sm-9 col-xs-12 pull-left noPaddingRight">
                                <nav class="mainNav">
                                    <div class="menuBar hidden-lg hidden-md">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <ul>
                                        <li><a href="./">home pages</a></li>
                                         <?php
                                            $theloai = DanhSachTheLoai();
                                            foreach ($theloai as $a ) {
                                                $idTL = $a['idTL'];
                                         ?>
                                        <li class="has-menu-items"><a href="index.php?p=tintheotheloai&idTL=<?php echo $a['idTL'] ?>"><?php echo $a['TenTL'] ?></a>
                                            <ul class="sub-menu">
                                                <?php 
                                                    $theloai = DanhSachLoaiTin_TheoTheLoai($idTL);
                                                    foreach ($theloai as $a) {
                                                ?>
                                                <li><a href="index.php?p=tintrongloai&idLT=<?php echo $a['idLT'] ?>"><?php echo $a['Ten'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-sm-3 col-xs-8 pull-right text-right search">
                                    
                                
                                <form action="" method="get" class="searchForm" id="search">
                                    <a href="javascript:void(0)"><input value="" class="" type="submit"></a>
                                    <input name="q" type="text" placeholder="Search...">
                                    <input name="p" value="timkiem" type="hidden">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>