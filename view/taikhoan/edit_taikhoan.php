
<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
           
            
            <div class="row boxconten form">
                <?php 
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                
                ?>
            <form action="index.php?act=edit_taikhoan" method="post" >
        <div class="container">
            <h1 class="clas1">Đăng Ký</h1>
            <p> nhập biểu mẫu bên dưới để Cập Nhật Lại MK.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" value="<?=$email?>" required>

            <label for="psw"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="tên user" name="user" value="<?=$user?>" required>

            <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
            <input type="password" placeholder=" Mật Khẩu" name="pass" value="<?=$pass?>" required>
            
            <label for="psw-repeat"><b>địa chỉ</b></label>
            <input type="text" placeholder=" nhập địa chỉ" name="address" value="<?=$address?>" required>
            
            <label for="psw-repeat"><b>Điện Thoại</b></label>
            <input type="text" placeholder=" số điện thoại" name="tel" value="<?=$tel?>" required>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id?>">

                <input type="submit" value="cập nhật" name="capnhat">
                <input type="reset" name="nhập lại">
            </div>
        </div>
    </form>
               
                <h2 class="thongbao">
                <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                    header('location: index.php');
                    
                }
                
                ?>

            </div>
        </div>
      

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>




</div>