
<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
           
            
            <div class="row boxconten form">
            <form action="index.php?act=quenmk" method="post" >
        <div class="container">
            <h1 class="clas1">Quên Mật Khẩu</h1>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" required>         
            <div class="row mb10">
                <input type="submit" value="Gửi" name="guiemail">
            </div>
        </div>
    </form>
               
                <p class="thongbao">
                <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                    
                }
                
                ?>

            </div>
        </div>
      

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>




</div>