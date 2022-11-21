<?php
 include "../herder.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssAdmin/style.css" >
</head>
<body>
<div class="row">
        <div class="row header">
            <h1>UPDATE Loại Hàng</h1>
        </div>
        <div class="row formconten">
            <form action="../index.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                    <input type="submit" name="capnhat" value="cập nhật">
                    <input type="reset" value="Nhập lại">

                    <a href="index.php?act=lisdm"><input type="button" value="Danh sach"></a>
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>

    </div>
</body>
</html>

    
    