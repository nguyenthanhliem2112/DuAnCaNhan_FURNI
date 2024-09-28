<?php
include_once 'Model/connect.php';
include_once 'Model/m_user.php';
include_once 'Model/m_products.php';


if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'login':
            include_once 'Model/m_login.php';
            include_once 'Model/m_danhmuc.php';


            $danhmuc= getCategory_Home_List(); 
            include_once 'View/header.php';
            include_once 'View/login.php';


            break;
        case 'signup':
          

            include_once 'Model/m_login.php';
            include_once 'Model/m_danhmuc.php';


            $danhmuc= getCategory_Home_List(); 
            include_once 'View/header.php';
            include_once 'View/signup.php';

        
        case 'capnhatthongtin':
            if(isset($_COOKIE['name']) &&($_COOKIE['name'])){
                include_once 'View/capnhatthongtin.php'; 
                break;
            }
           
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}

include_once 'View/footer.php';