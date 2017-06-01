 <div class="col-lg-8 col-sm-7">
                            <div class="row">
                                <?php 
                                    if (isset($_GET['idTin'])) {
                                      $idTin = $_GET['idTin'];
                                      settype($idTin, 'int');
                                    }else{
                                      $idTin = 1;
                                    }
                                    CapNhatSoLanXemTin($idTin);
                                    ?>
                                    <?php
                                    $tin = ChiTietTin($idTin);
                                    $row_tin = mysqli_fetch_array($tin);
                                ?>
                                <div class="col-lg-12">
                                    <div class="slider noMarginBottom">
                                        <img src="<?php echo $row_tin['urlHinh'] ?>" alt="">
                                    </div>
                                    <div class="gellarypostCont">
                                        <h2 class="blogtitle gellary">
                                            <a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin'] ?>"><?php echo $row_tin['TieuDe'] ?></a>
                                        </h2>
                                        <p> <?php echo $row_tin['Content'] ?></p>

                                    </div>
                                    <div class="blogMeta gfullwidth">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i><?php echo $row_tin['SoLanXem'] ?></a>                         
                                        
                                    </div>
                                    <?php 
                                        $tincungloai = TinCungLoaiTin($idTin,$row_tin['idLT']);
                                        while ($row_tincungloai =  mysqli_fetch_array($tincungloai)) {
                                          
                                    ?>
                                    <div class="authorFullWidth">
                                   
                                        <img src="<?php echo $row_tincungloai['urlHinh'] ?>" alt="">
                                        <h2><a href="index.php?p=chitiettin&idTin=<?php echo $row_tincungloai['idTin'] ?>"><?php echo $row_tincungloai['TieuDe'] ?></a></h2>
                                        <p><?php echo $row_tincungloai['TomTat'] ?></p>
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="widgetTitle text-capitalize">Leave a Reply</h3>
                                </div>
                            </div>
                            <div class="row">
                                <form action="#" method="post" class="contactForm">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="commentSubmit">submit comment</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>