
<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
           
            
            <div class="row boxconten form">
            <form action="index.php?act=dangky" method="post" >
        <div class="container">
            <h1 class="clas1">Đăng Ký</h1>
            <p> nhập biểu mẫu bên dưới để đăng ký.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" required>

            <label for="psw"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="tên user" name="user" required>

            <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
            <input type="password" placeholder=" Mật Khẩu" name="pass" required>

            <div class="row mb10">
                <input type="submit" value="đăng ký" name="dangky">
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