<div class="col-lg-4 col-sm-5">
    <div class="sidebarBlog">
        <aside class="widget">
            <h3 class="widgetTitle">ABOUT ME</h3>
            <div class="aboutMe">
                <img src="./public/images/aboutme.jpg" alt="">
                <div class="aboutdec">
                    <h4>Hernandez Higuan</h4>
                    <p>Doing business like this takes much more effort than doing your own business at home, and on top of that there's the curse of travelling, worries about making train connections, bad and irregular food.</p>
                </div>
            </div>
        </aside>
        <aside class="widget">
            <div class="followMe">
                <h2 class="widgetTitle">follow me</h2>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </aside>
        <aside class="widget">
            <h3 class="widgetTitle">XEM NHIỀU</h3>
            <div class="recentPost">
                <?php 
                    $tinxemnhieunhat = TinXemNhieuNhat();
                    while ($row_tinxemnhieunhat = mysqli_fetch_array($tinxemnhieunhat)) {
                     
                 ?>
                <div class="singleRecpost">
                    <img src="<?php echo $row_tinxemnhieunhat['urlHinh'] ?>" alt="">
                    <h2 class="recTitle">
                        <a href="index.php?p=chitiettin&idTin=<?php echo $row_tinxemnhieunhat['idTin'] ?>"><?php echo $row_tinxemnhieunhat['TieuDe'] ?></a>
                    </h2>
                </div>
                <?php } ?>
            </div>
        </aside>
        <aside class="widget emailSub">
            <h3 class="widgetTitle">subcribe</h3>
            <p>Etiam mollis leo ac diam facilisis, in pretium felis molestie. Quisque non nisi ut lectus</p>
            <form action="#" method="post" class="subForm" id="subscriptionsforms">
                <input type="email" placeholder="Your email address" id="sub_email">
                <button type="submit" id="subs_submit">sign up</button>
            </form>
        </aside>
        
    </div>
</div>