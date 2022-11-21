<?php 
include "../herder.php";
require_once('../../Dao/sanpham.php');


// if(is_array($sanpham)){
    
//     extract($sanpham);
// }
// $hinhpath="../upload/".$img;
// if(is_file($hinhpath)){
//     $hinh="<img src='".$hinhpath."' height='80' >";
// }else{
//     $hinh="khong co hinh trong file nay!!";
// }
if(isset($_POST['capnhat'])) {
$id=$_POST['id'];
            $iddm=$_POST['iddm'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $mota=$_POST['mota'];
            $hinh=$_FILES['hinh']['name'];
            $target_dir = "../../upload/";
            echo $id;
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            //     echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            //   } else {
            //     echo "Sorry, there was an error uploading your file.";
            //   }
    update_sanpham($id,22,$tensp,$giasp,$mota,$hinh);
    echo '<script>alert("Thanh cong")</script>';
    echo '<script>location.href="http://localhost/dUANMAU_pc04277/admin/index.php?act=listsp"</script>';
    // header('location: list.php');
    
}
if(isset($_GET['id_sp'])) {
    $arr = load_sanpham($_GET['id_sp']);
}

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
            <h1>Update Sản Phẩm</h1>
        </div>

        <div class="row formconten">
            <form action="<?=$_SERVER['PHP_SELF']?>?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <select name="iddm">
                     <option value="0" selected>Tất Cả</option>
                        <?php 
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id)echo '<option value="'.$id.'" selected>'.$name.'</option>';
                            else echo '<option value="'.$id.'" selected>'.$name.'</option>';
                            

                        }
                        ?>
                        <input type="submit" name="listok" value="Go">
                    </select>
                    
                </div>
                 <div class="row mb10">
                    Tên san pham<br>
                    <input type="text" name="tensp" value="<?=$arr[0][1]?>">
                </div>
                <div class="row mb10">
                    Gía san pham<br>
                    <input type="text" name="giasp" value="<?=$arr[0][2]?>">
                </div> 
                <div class="row mb10">
                    Hình san pham<br>
                    <input type="file" name="hinh">
                    <?$hinh?>
                </div>
                <div class="row mb10">
                    Mô Tả<br>
                    <textarea name="mota"  cols="30" rows="10"> <?=$arr[0][4]?></textarea>
                </div>
                
                <div class="row mb10">
                    <input type="hidden" name="id_sp" value="<?=$_GET['id_sp']?>">
                    <input type="submit" name="capnhat" value="Cập Nhật">
                    <input type="hidden" name="id" value="<?=$_GET['id_sp'] ?>">
                    <input type="reset" value="Nhập lại">

                    <a href="index.php?act=listsp"><input type="button" value="Danh sach"></a>
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>

    </div>
</body>
</html>

    
    