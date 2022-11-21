
<div class="row">
            <div class="row header">
                <h1>Danh Sách khách Hành</h1>
            </div>
            <div class="row formconten">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã TK</th>
                            <th>user name</th>
                            <th>Password</th>
                            <th>email</th>
                            <th>address</th>
                            <th>tel</th>
                            <th>vai trò</th>
                            <th></th>
                        </tr>
                        <form action="" method="get">
                        <?php  
                        foreach ($listtaikhoan as $listtaikhoan){
                            extract($listtaikhoan);
                            $suatk="index.php?act=suatk&id".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$vaitro.'</td>
                          
                            <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
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