<?php
    require './lib/quantri.php';
 ?>
<?php 
    $idTin = $_GET['idTin'];
    $tin = ChiTietTin($idTin);
    $row_tin = mysqli_fetch_array($tin);
?>
<?php 
    if (isset($_POST['btnSua'])) {
        $TieuDe = $_POST['TieuDe'];
        $TieuDe_KhongDau = changeTitle($TieuDe);
        $TomTat = $_POST['TomTat'];
        $urlHinh = $_POST['urlHinh'];
        $Ngay = date('Y-m-d');
        $idUser = $_SESSION['idUser'];
        $Content = $_POST['Content'];
        $idLT = $_POST['idLT'];
        $idTL = $_POST['idTL'];
        $TinNoiBat = $_POST['TinNoiBat'];
        $AnHien = $_POST['AnHien'];
        $conn = mysqli_connect('localhost', 'root', '', 'vigga');
        mysqli_set_charset($conn,"utf8");
        $qr = "UPDATE  tin SET TieuDe = '$TieuDe',TieuDe_KhongDau='$TieuDe_KhongDau',TomTat='$TomTat',urlHinh='$urlHinh',Ngay='$Ngay',idUser='$idUser',Content='$Content',idLT='$idLT',idTL='$idTL',TinNoiBat='$TinNoiBat',AnHien='$AnHien' WHERE idTin='$idTin'";
        mysqli_query($conn,$qr);
        header('location:?url=tin/danhsachtin.php');
    }

 ?>
    <script type="text/javascript" src="./public/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="./public/js/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
    function BrowseServer( startupPath, functionData ){
        var finder = new CKFinder();
        finder.basePath = 'public/js/ckfinder/'; //Đường path nơi đặt ckfinder
        finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
        finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
        finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
        //finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn    
        finder.popup(); // Bật cửa sổ CKFinder
    } //BrowseServer

    function SetFileField( fileUrl, data ){
        document.getElementById( data["selectActionData"] ).value = fileUrl;
    }
    function ShowThumbnails( fileUrl, data ){   
        var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
        document.getElementById( 'thumbnails' ).innerHTML +=
        '<div class="thumb">' +
        '<img src="' + fileUrl + '" />' +
        '<div class="caption">' +
        '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
        '</div>' +
        '</div>';
        document.getElementById( 'preview' ).style.display = "";
        return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
    }
    </script>
    
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tieu De</label>
                                <input class="form-control" name="TieuDe" value="<?php echo $row_tin['TieuDe'] ?>" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Tom Tat</label>
                                <textarea class="form-control" rows="3" name="TomTat" value=""><?php echo $row_tin['TomTat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="text" name="urlHinh" id="urlHinh" value="<?php echo $row_tin['urlHinh'] ?>">
                                <input onclick="BrowseServer('Images:/','urlHinh')" type="button" name="btnChonFile" id="btnChonFile" value="Chọn file" />
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="Content" id="Content" class="form-control" rows="3" value="<?php echo $row_tin['Content'] ?>"></textarea>
                                <script type="text/javascript">
                                    var editor = CKEDITOR.replace( 'Content',{
                                        uiColor : '#9AB8F3',
                                        language:'vi',
                                        skin:'v2',  
                                        filebrowserImageBrowseUrl : 'public/js/ckfinder/ckfinder.html?Type=Images',
                                        filebrowserFlashBrowseUrl : 'public/js/ckfinder/ckfinder.html?Type=Flash',
                                        filebrowserImageUploadUrl : 'public/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl : 'public/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                    
                                        toolbar:[
                                        ['Source','-','Save','NewPage','Preview','-','Templates'],
                                        ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
                                        ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                                        ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
                                        ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
                                        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
                                        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                                        ['Link','Unlink','Anchor'],
                                        ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
                                        ['Styles','Format','Font','FontSize'],
                                        ['TextColor','BGColor'],
                                        ['Maximize', 'ShowBlocks','-','About']
                                        ]
                                    });     
                                </script>
                            </div>
                            <div class="form-group">
                                <label>ID TL</label>
                                <select class="form-control" name="idTL" id="idTL">
                                <?php 
                                    $theloai = DanhSachTheLoai();
                                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                                        
                                 ?>
                                    <option <?php if($row_theloai['idTL'] == $row_tin['idTL']) echo "selected='selected'" ?>  value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>idLT</label>
                                <select class="form-control" name="idLT" id="idLT">
                                <?php 
                                    $loaitin = DanhSachLoaiTin();
                                    while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                                        
                                 ?>
                                    <option <?php if($row_loaitin['idLT'] == $row_tin['idLT']) echo "selected='selected'" ?>  value="<?php echo $row_loaitin['idLT'] ?>"><?php echo $row_loaitin['Ten'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="TinNoiBat" value="1" checked="" type="radio">Noi Bat
                                </label>
                                <label class="radio-inline">
                                    <input name="TinNoiBat" value="0" type="radio">Binh Thuong
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="AnHien" value="1" checked="" type="radio">An 
                                </label>
                                <label class="radio-inline">
                                    <input name="AnHien" value="0" type="radio">Hien
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default" name="btnSua">Cập Nhật</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>