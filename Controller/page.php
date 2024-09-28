<?php

include_once 'Model/connect.php';
include_once 'Model/m_user.php';
include_once 'Model/m_products.php';
include_once 'Model/m_view.php';
include_once 'Model/m_danhmuc.php';
include_once 'Model/m_giohang.php';
include_once 'Model/global.php';


if ($_GET['act']) {
        switch ($_GET['act']) {
                case 'trangchu':
                        
                        $products = getAllProducts();
                        $danhmuc= getCategory_Home_List();

                
                        include_once 'View/header.php';
                        include_once "View/trangchu.php";
                        break;
                case 'products':

                        if(isset($_GET['id_danhmuc'])&&(is_numeric($_GET['id_danhmuc']))&&($_GET['id_danhmuc'] >0)){
                                $id_danhmuc=$_GET['id_danhmuc'];
                        }else{
                                $id_danhmuc=0;  
                        }

                        // if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
                        //         $kyw=$_POST['kyw'];
                        // }else{
                        //         $kyw="";
                        // } 
                        $products_danhmuc= getProductsByCategory($id_danhmuc,SO_SP_TRANG);
                        $danhmuc= getCategory_Home_List(); 
                    
                        $products_danhmuc_phantrang= getProductsByCategory($id_danhmuc,0,);
                        $dssotrang=get_so_trang($products_danhmuc_phantrang,$id_danhmuc);
                        include_once 'View/header.php';
                        include_once "View/products.php";
                        
                        break;
                case 'viewgiohang':
                        $danhmuc= getCategory_Home_List();
                        include_once 'View/header.php';
                        if(isset($_GET['ind'])&&($_GET['ind']>=0)){
                                array_splice($_SESSION['giohang'],$_GET['ind'],1 );
                                header('Location: index.php?mod=page&act=viewgiohang');

                        }
                        if(isset($_GET['delall'])&&($_GET['delall']==1)){
                                $_SESSION['giohang']=[];
                                header('Location: index.php?mod=page&act=viewgiohang');

                        }

                        include "View/viewgiohang.php";
                        break;
                case 'giohang':
                        $danhmuc= getCategory_Home_List();
                        include_once 'View/header.php';

                        if (isset($_POST['btncart'])) {
                                $id_sanpham= $_POST['id_sanpham'];
                                $ten= $_POST['ten'];
                                $img= $_POST['img'];
                                $gia= $_POST['gia'];
                                $soluong= $_POST['soluong'];
                                $thanhtien= $gia * $soluong;
                                $sp =[  
                                        'id_sanpham'=> $id_sanpham,
                                        'ten'=>$ten,
                                        'img'=>$img,
                                        'gia'=>$gia,
                                        'soluong'=>$soluong,
                                        'thanhtien'=>$thanhtien
                                ];

                                        array_push($_SESSION['giohang'],$sp);
                                        header('Location: index.php?mod=page&act=viewgiohang');
                        }
                        $total=get_total();

                        break; 
                case 'chitietsanpham':
                       

                        if(isset($_GET['id_danhmuc'])&&(is_numeric($_GET['id_danhmuc']))&&($_GET['id_danhmuc']) >0){
                                $id_danhmuc=$_GET['id_danhmuc'];
                        }else{
                                $id_danhmuc=0;  
                        }
                        $products_danhmuc= getProductsByCategory($id_danhmuc,SO_SP_TRANG);
                        $products = getAllProducts();
                        $danhmuc= getCategory_Home_List();

                        include_once 'View/header.php';

                        if(isset($_GET['id'])&&(is_numeric($_GET['id']))&&($_GET['id']) >0){
                                $idpro =$_GET['id'];
                                $chitietsanpham = getProductDetails($idpro);
                                include_once "View/chitietsanpham.php";
                        }else{
                                $idpro=0;  
                                header('Location: index.php');
                        }

                     
                     
                        break;
                case 'thanhtoan':
                        $iduser=0;
                        $idorder=0;
                        if(isset($_POST['btn_order'])){

                                $fullname =$_POST['fullname'];
                                $phone =$_POST['phone'];
                                $address =$_POST['address']; 
                                $pword =rand(100000,999999);
                                $email = $_POST['email'];
                                $ghichu = $_POST['ghichu'];
                                $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
                                if(!isset($_SESSION['uname'])){
                                        $iduser = insert_user_returnID($fullname, $pword, $email, $phone);
                                }else{
                                        $iduser= $_SESSION['uname']['id'];
                                }
                                $today=date("mdY");
                                $today_code=$today;
                                $stt_code=get_id_oder_lastest()+1;
                                $ordercode= "FRU". $today_code.$stt_code;
                                $total=get_total();


                                $idorder=insert_order_returnID($iduser,$ordercode, $total, $fullname, $phone, $address,$ghichu,$phuongthucthanhtoan);


                                foreach($_SESSION['giohang'] as $item){
                                        $idpro=$item['id_sanpham'];
                                        $soluong=$item['soluong'];
                                        $ten=$item['ten'];
                                        $gia=$item['gia'];
                                        $ngaydathang=$item['ngaydathang'];
                                        $ngaydathang = $today;

                                        insert_orderdetails($idpro, $soluong, $ten, $gia, $idorder,$today);

                                }
                                unset($_SESSION['giohang']);

                                header('location: ?mod=page&act=hoadon');
                        }

                        $danhmuc= getCategory_Home_List();
                        include_once 'View/header.php';
                        include_once "View/thanhtoan.php";
                        break;
                case 'hoadon':
                     
                        $danhmuc= getCategory_Home_List();
                        include_once 'View/header.php';
                        $total=get_total();


                        include_once "View/hoadon.php";
                        break;
                default:
                
                        break;
        }
    }
include_once 'View/footer.php';
