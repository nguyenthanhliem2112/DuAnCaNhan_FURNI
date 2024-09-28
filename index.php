<?php
    session_start();
    if(!isset($_SESSION['giohang'])){
        $_SESSION['giohang']=[];
    }
    if (isset($_GET['mod'])) {
        switch ($_GET['mod']) {
            case 'page':
                include_once 'Controller/page.php';
                break;
            case 'user':
                include_once 'Controller/user.php';
                break;   
            default:
                header("Location: ?mod=page&act=trangchu");
                break;  
        }
    } else {
        header("Location: ?mod=page&act=trangchu");
    }
    ?>  
