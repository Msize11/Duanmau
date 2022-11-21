
<?php
require_once('../Dao/sanpham.php');
?>

<div class="row">
            <div class="row header mb">
                <h1>Danh Sách sản Phẩm </h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                
                        <input type="text" name="kyw">
                        <select name="iddm" name="cate" onchange="something(this)" >
                            <option value="0" selected>Tất Cả</option>
                        <?php 
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                        </select>
                    <input type="submit" name="listok" value="Go">
                    </form>
                    <script>
            function something(obj) {
                document.getElementsByTagName('form')[0].setAttribute('action','index.php?act=listsp&iddm='+obj.value)
            }
        </script>
            <div class="row formconten">
                <div class="row mb10 frmdsloai">
                   
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Gía </th>
                            <th>Hinh</th>
                            <th>Mô Tả</th>
                            <th></th>
                        </tr>
                        <form action="" method="get">
                        <?php  
                        if(isset($_GET['iddm'])) {

                            $arr = loadds_sanpham('dasas',$_GET['iddm']);
                        }
                        else {
                            $arr = load_all_sanpham();

                        }


                        
                        // foreach ($listsanpham as $sanpham){
                            // extract($sanpham);
                            // }
                            //     $hinhpath="../upload/".$img;
                            //     if(is_file($hinhpath)){
                                //         $hinh="<img src='".$hinhpath."' height='80' >";
                                //     }else{
                                    //         $hinh="khong co hinh trong file nay!!";
                                    //     }
                                    for ($i=0; $i < count($arr); $i++) { 
                            $suasp="sanpham/update.php?act=suasp&id=". $arr[$i][0];
                            $xoasp="index.php?act=xoasp&id=" . $arr[$i][0];
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'. $arr[$i][0] .'</td>
                            <td>'. $arr[$i][1] .'</td>
                            <td>'. $arr[$i][2] .'</td>
                            <td>'. $arr[$i][2] .'</td>
                            <td style="display:flex;justify-content : center"><img width="100px" src="../upload/'.   $arr[$i][3] .'"/></td>
                            <td><a href="'.$suasp.'&id_sp='. $arr[$i][0]. '"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            // }
                        }
                        ?>
                        </form>
                        
                    </table>
                </div>


                <div class="row mb10"></div>
                <input type="button" value="chọn tất cả">
                <input type="button" value="bỏ chọn tất cả">
                <input type="button" value="xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập Them"></a>

            </div>
            <div class="row mb10 "></div>

        </div>
        