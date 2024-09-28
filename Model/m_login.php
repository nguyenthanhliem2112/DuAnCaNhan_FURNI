<?php
ob_start();
include_once 'connect.php';
include_once 'm_user.php';
if( isset($_POST['uname']) && isset($_POST['pw']))
{
    $uname = $_POST['uname'];
    $pword = $_POST['pw'];
    $role = checkuser($uname,$pword);
    $_SESSION['role'] = $role;
    if($role == 1 ){
        header("location:../admin/index.php");
    }else{
   

    $conn = dbConnection();
   // $sql = "SELECT * FROM login WHERE uname = '" . $uname. "'and pword = '" . $pw . "'";
    $sql = "SELECT * FROM user WHERE uname = ? and pword = ? ";
    $stmt = $conn->prepare($sql);
    $stmt ->bindParam(1,$uname);
    $stmt ->bindParam(2,$pword);
    $stmt ->execute();
    $result = $stmt -> fetch();
    if($result){
        setcookie("name", $result["name"],time()+ 900,"/") ;
        header("location:../index.php?mod=page&act=trangchu");
    }
    else{
        header( "location:../index.php?mod=user&act=login");    
    }}
}else{
}