


            <div class="row formconten">
                <div class="row mb10 frmdsloai">
                <div class="row header">
                <h1>Danh Sách Bình Luận</h1>
            </div>
                   
                    <table>
                        <tr>
                            <th>chon</th>
                            <th>id</th>
                            <th>Noi Dung</th>
                            <th>user</th>
                            <th>idpro</th>
                            <th>ngay thang</th>
                        </tr>
                        
                        <?php 
                        
                         foreach ($listbinhluan as $binhluan){
                            extract($binhluan);
                            $suabl="index.php?act=suabl&id=".$id;
                            $xoabl="index.php?act=xoabl&id=".$id;    
                    
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'. $id .'</td>
                            <td>'. $noidung .'</td>
                            <td>'. $user .'</td>
                            <td>'. $idpro .'</td>
                            <td>'. $ngaybinhluan .'</td>
                            <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            // 
                        }
                        ?>
                        </form>
                        
                    </table>
                </div>


                <div class="row mb10">
                <input type="button" value="chọn tất cả">
                <input type="button" value="bỏ chọn tất cả">
                <input type="button" value="xóa các mục đã chọn">
                </div>

            </div>
            