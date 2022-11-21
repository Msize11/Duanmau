<?php
session_start();
include "Dao/pdo.php";
include "Dao/danhmuc.php";
include "Dao/sanpham.php";
include "Dao/taikhoan.php";

include "./view/herder.php"; 
include "view/global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew=loadds_sanpham_home();
$dsdm=loadds_danhmuc();
$dstop10=loadds_sanpham_top10();

if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];

            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'] ;
            }else{
                $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "view/sanpham.php";
            break;


        case 'sanphamct':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id=$_GET['idsp'];

                $onesp= loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
            include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
            
            break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đã Đăng Ký Tài Khoản Thành Công!!";
                }
                include "view/taikhoan/dangky.php";
                break;
                case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                             header('location:index.php');

                             //$thongbao="Đăng Nhập Thành Cong!!";
                           
                        }else{
                            $thongbao="Đăng Nhập thất bại . vui Lòng Kiểm Tra Hoặc Đăng Ký!";
                        }
                    
                    }
                    include "view/taikhoan/dangky.php";
                    break;
                    case 'edit_taikhoan':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $tel=$_POST['tel'];
                            $id=$_POST['id'];
                            update_taikhoan($id,$user,$email,$address,$tel,$pass);

                            $_SESSION['user']=checkuser($user,$pass);
                            header('location:index.php?act=edit_taikhoan');
                            
                            
                            
                        }
                        include "view/taikhoan/edit_taikhoan.php";
                        break;
                        case 'quenmk':
                            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                                
                                $email=$_POST['email'];
                                
                                $checkemail=checkemail($email);
    
                                if(is_array($checkemail)){
                                    $thongbao= "Mật khẩu cảu bạn là :".$checkemail['pass'];
                                }else{
                                    $thongbao="- email này không tồn tại!!";
                                }                                                                                           
                                
                            }
                            include "view/taikhoan/quenmk.php";
                            break;

                            case 'thoat':
                                session_unset();
                                session_destroy();
                                header('Location: index.php');
                            
                                break;
                            



                                case 'addtocart':
                                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                                        $id=$_POST['id'];
                                        $name=$_POST['name'];
                                        $img=$_POST['img'];
                                        $price=$_POST['price'];
                                        $soluong=1;
                                        $tien=$soluong * $price;
                                        $spadd=[$id,$name,$img,$price,$soluong,$tien];
                                        array_push($_SESSION['mycart'],$spadd);
                                         
                                        }                                                                                           
                                        
                                    
                                    include "view/cart/viewcart.php";
                                    break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;
                case 'lienhe':
                    include "view/lienhe.php";
                    break;
                    case 'home':
                        include "view/home.php";
                        break;
    }

}else{
    include "view/home.php";
}


include "./view/footer.php"; 
?>