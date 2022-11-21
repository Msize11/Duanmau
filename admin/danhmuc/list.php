
<div class="row">
            <div class="row header">
                <h1>Danh Sách Loại Hàng</h1>
            </div>
            <div class="row formconten">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Loai</th>
                            <th></th>
                        </tr>
                        <form action="" method="get">
                        <?php  
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm="danhmuc/update.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                          
                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                        }
                        ?>
                        </form>
                        
                    </table>
                </div>


                <div class="row mb10"></div>
                <input type="button" value="chọn tất cả">
                <input type="button" value="bỏ chọn tất cả">
                <input type="button" value="xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập Them"></a>

            </div>
            <div class="row mb10 "></div>

        </div>