<?php
session_start();
if(isset($_POST['isLogin'])) {
    echo '<script>alert("Cần Đăng Nhập Để Bình Luận!!")</script>';
}
include "../../Dao/pdo.php";
include "../../Dao/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = binh_luan_all($idpro);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stiye.css">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }

        *{
            font-size: 1.3vw;
            
        }

        .binhluan table {
            width: 100%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 40%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 20%;
        }
    </style>
</head>

<body>
    <div class="row mb">
        <div class="boxsty ">Binh Luận</div>
        
        <div class="boxcontent2 binhluan ">
            <table>
                <?php


                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $user . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }

                ?>
            </table>
        </div>
<?php

?>
        <div class="boxbotton binhluanform padding-top">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="hidden" name="isLogin" value="<?= isset($_SESSION['user']) ? 1 : 0 ?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="gửi bình luận">
            </form>
        </div>
        <?php
if(isset($_SESSION['user']))  {

    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $user = $_SESSION['user']['id'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        binh_luan_insert($noidung, $user, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
        // header("location: " . $_SERVER['PHP_SELF']);
    }
        }
        ?>

    </div>
</body>

</html>