
<?php 
include "../Dao/pdo.php";
include "../Dao/danhmuc.php";
include "../Dao/sanpham.php";
include "../Dao/taikhoan.php";
include "../Dao/binhluan.php";
include "../Dao/cart.php";
include "herder.php";

 //----------------------
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            //kiem tra co click add 
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                $tenloai=$_POST['tenloai'];
                $sql="insert into danhmuc(name) values('".$tenloai."')";
                pdo_execute($sql);
                $thongbao="them thanh cong";
            }
            include "danhmuc/add.php";
            break;


            case 'lisdm':
                $listdanhmuc=loadds_danhmuc();

                include "danhmuc/list.php";
                break;
                // xoa danh muc
            case 'xoadm':
                    if(isset($_GET['id'])&&($_GET['id']>0)) {
                        delete_danhmuc($_GET['id']);
                    }
                    $listdanhmuc=loadds_danhmuc();
                    include "danhmuc/list.php";
                break;
                //sua danh muc
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    
                    $dm=loadone_danhmuc($_GET['id']);
                }
               
                    include "danhmuc/update.php";
                    break;
                    



case 'updatedm':
    if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
        $tenloai=$_POST['tenloai'];
        $id=$_POST['id'];
        update_danhmuc($id,$tenloai);
        $thongbao="Update thanh cong";
    }
    include "danhmuc/add.php";
    break;

    $listdanhmuc=loadds_danhmuc();
        include "danhmuc/list.php";
    break;

    /* ---------------- controller sản phẩm----------------------*/ 
    /*-----------------------------------------------------------*/ 
    /*-----------------------------------------------------------*/ 
    /*-----------------------------------------------------------*/
    case 'addsp':
        //kiem tra co click add 
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])) {
            $iddm=$_POST['iddm'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $mota=$_POST['mota'];
            $hinh=$_FILES['hinh']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
              } else {
                //echo "Sorry, there was an error uploading your file.";
              }
            insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
            $thongbao="them thanh cong";
        }
        $listdanhmuc=loadds_danhmuc();

        include "sanpham/add.php";
        break;


        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])) {
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }
            $listsanpham=loadds_sanpham_home($kyw,$iddm);
            $listdanhmuc=loadds_danhmuc();
            include "sanpham/list.php";
            break;
            // xoa san pham
        case 'xoasp':
                if(isset($_GET['id'])) {
                    delete_sanpham($_GET['id']);
                    // echo $_GET['id'];
                    
                }
                $listsanpham=loadds_sanpham("",0);
                include "sanpham/list.php";
            break;
            //sua san pham
        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){              
                $sanpham=loadone_sanpham($_GET['id']);
            }
            $listdanhmuc=loadds_danhmuc();
           
                include "sanpham/update.php";
                break;
                



case 'updatesp':
if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
            $id=$_POST['id'];
            $iddm=$_POST['iddm'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $mota=$_POST['mota'];
            $hinh=$_FILES['hinh']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
              } else {
                //echo "Sorry, there was an error uploading your file.";
              }
    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,);
    $thongbao="Update thanh cong";
}
$listsanpham=loadds_sanpham($kyw,$iddm);
$listdanhmuc=loadds_danhmuc();
include "sanpham/add.php";
break;

$listsanpham=loadds_sanpham("",0);
    include "sanpham/list.php";
break;

        default:
            include "home.php";
            break;


     /* ---------------- controller khách hàng----------------------*/ 
    /*-----------------------------------------------------------*/ 
    /*-----------------------------------------------------------*/ 
    /*-----------------------------------------------------------*/
    case 'dskh':
        $listtaikhoan=loadall_taikhoan();

        include "taikhoan/list.php";
        break;

        case 'xoatk':
            if(isset($_GET['id'])&&($_GET['id']>0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan=loadall_taikhoan();
            include "taikhoan/list.php";
        break;


  /* ---------------- controller binh luận----------------------*/ 
    /*-----------------------------------------------------------*/ 
    /*-----------------------------------------------------------*/ 
    /*-----------------------------------------------------------*/

    case 'dsbl':
        $listbinhluan=binhluan_loadall();
        include "binhluan/list.php";
        break;


    

    case 'thongke':
        $listthongke=thongke_loadall();
        include "thongke/list.php";
        break;


        case 'bieudo':
            $listthongke=thongke_loadall();
            include "thongke/bieudo.php";
            break;


    }
    


}else{
 include "home.php";
}




 include "footer.php";


?>

