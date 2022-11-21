<?php
require_once 'pdo.php';

function binh_luan_insert($noidung,$user,$idpro,$ngaybinhluan){
    $sql = "insert into binhluan(noidung,user,idpro,ngaybinhluan) VALUES ('$noidung','$user','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

// function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }

// function binh_luan_delete($ma_bl){
//     $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
//     if(is_array($ma_bl)){
//         foreach ($ma_bl as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_bl);
//     }
// }

function binh_luan_all($idpro){
    $sql = "SELECT * FROM binhluan where idpro='".$idpro."'  ORDER BY ngaybinhluan DESC";
    $listbl= pdo_query($sql);
    return $listbl;
}
function binhluan_loadall(){
    
$sql="select * from binhluan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
    // $sql = "select * form binhluan  where 1";
    // if($idpro>0)$sql.=" AND idpro='".$idpro."'";
    // $sql .= " order by id desc";
    // $listbinhluan=pdo_query($sql);
    // return $listbinhluan;
}







// function binh_luan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binh_luan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function binh_luan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }
?>