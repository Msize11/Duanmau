
<div class="row mb">
    <div class="boxsty">Tài Khoản</div>
    <div class="boxcontent form">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);

        ?>
            <div class="row mb10">
                <b> USER: <?=$user?></b> 
                <hr/>

            </div>
            <div class="row pm">
                <li>
                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">cập nhật Mật khẩu </a>
                </li>
                <?php
                if($vaitro==1){
                
                ?>
                <li>
                    <a href="admin/index.php">Đăng Nhập Admin </a>
                </li>
                <?php }?>
                <li>
                    <a href="index.php?act=thoat">Thoát </a>
                </li>
            </div>
        <?php
        }else{
        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                Tên Đăng Nhập<br>
                <input type="text" name="user">
            </div>
            <div class="row mb10">Mật Khẩu
                <input type="password" name="pass"><br>
            </div>



            <div class="row mb10">
                <input type="checkbox" name="" >Ghi Nhớ Tài Khoản!
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng Nhập" name="dangnhap">
            </div>


        </form>
        <li>
            <a href="../view/">Quên Mật Khẩu</a>
        </li>
        <li>
            <a href="index.php?act=dangky">Đăng Ký Thành viên </a>
        </li>
        <?php } ?>
    </div>

</div>

<div class="row mb">
    <div class="boxcontent2 menudoc">
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<li>
                    <a href="' . $linkdm . '">' . $name . '</a>
                </li>';
        }

        ?>
        <!-- <ul>
                    
                    <li>
                        <a href="#">Samsung</a>
                    </li>
                    <li>
                        <a href="#">Xiaomi</a>
                    </li>
                    <li>
                        <a href="#">Vivo</a>
                    </li>
                    <li>
                        <a href="#">Oppo</a>
                    </li>
                    <li>
                        <a href="#"> Realme </a>
                    </li>
                    <li>
                        <a href="#">Huawei</a>
                    </li>
                </ul> -->
    </div>

    <div class="boxbotton searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="tim kiếm">
        </form>
    </div>

</div>
<div class="row mb">
    <div class="boxsty">Top 10 yêu thich</div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                    <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                    <a href="' . $linksp . '">' . $name . '</a>
                </div>';
        }


        ?>

        <!-- 
                <div class="row mb10 top10">
                    <img src="./view/img_TC/sp02.jpg" alt="">
                    <a href="#">Iphone 13 pro max</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./view/img_TC/sp03.jpg" alt="">
                    <a href="#">Huawei A12</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./view/img_TC/sp04.jpg" alt="">
                    <a href="#">Samsung A12</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./view/img_TC/sp05.jpg" alt="">
                    <a href="#">>Realme A12</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./view/img_TC/sp06.jpg" alt="">
                    <a href="#">vivo A12</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./view/img_TC/sp07.jpg" alt="">
                    <a href="#">Oppo A12</a>
                </div> -->
    </div>
</div>
