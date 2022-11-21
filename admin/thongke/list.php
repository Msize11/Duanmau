<div class="row">
            <div class="row header">
                <h1>Danh Sách Thống Kê</h1>
            </div>
            <div class="row formconten">
                <div class="row mb10 frmdsloai">
                    <table >
                        <tr>
                            
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>                          
                            
                        </tr>
                        <?php 
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            echo ' <tr>
                            <td>'.$madm.' </td>
                            <td>'.$tendm.' </td>
                            <td>'.$countsp.' </td>
                            <td>'.$maxprice.' </td>
                            <td>'.$minprice.' </td>
                            <td>'.$avgprice.'</td>
                            
                        </tr>';
                        }
                        
                        
                        
                        ?>
                       


                    </table>
                </div>
            </div>
</div>