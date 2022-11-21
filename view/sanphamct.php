<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/stiye.css">
    <style>
        .boxconten li {
            border: 1px solid #ccc;
            margin: 0;
            padding: 0;
            width: 400px;
            list-style-type: none;
        }

        .boxconten li {
            padding: 10px 20px;
            background-color: rgb(255, 255, 255);
            border-bottom: 1px solid #ccc;
        }

        .boxconten li a {
            color: #666;
            text-decoration: none;
        }

        .boxconten li:hover {
            background-color: #eee;
        }

        .boxconten input[type="text"] {
            width: 32%;
            padding: 5px 10px;
            background-color: rgb(255, 253, 253);
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="row mb">
        <div class="boxtrai mr ">
            <div class="row mb">
                <?php
                extract($onesp);

                ?>
                <div class="boxtitle"> <?=$name?></div>
                <div class="row boxconten">
                    <?php

                    $img = $img_path . $img;
                    echo '<div class="row mb spct"><img src="' . $img . '"></div>';
                    echo $mota;
                    ?>

                </div>
            </div>
             <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                       
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?> });                  
                    });
                </script>    
            <div class="row" id="binhluan"> 
                
                </div>  -->
                <div class="row binhluan" >
                    <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="450px"></iframe>

                </div>
            </div>
            <div class="row mb">
                <div class="boxsty">Sản Phẩm Cùng Loại</div>
                <div class="row boxconten">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                    }
                    ?>

                </div>
            </div>



        </div>
        


    </div>
</body>

</html>