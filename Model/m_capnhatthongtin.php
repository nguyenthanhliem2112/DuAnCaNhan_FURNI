<?php
if(empty($_COOKIE['name'])) {
    echo "User not found";
} else {
    include_once 'connect.php';
    $conn = dbConnection();

    $name = $_COOKIE['name'];
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : '';
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : '';
    $pword = isset($_REQUEST['pword']) ? $_REQUEST['pword'] : '';
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';

    //kiem tra ng dung
    if (empty($phone) && empty($address) && empty($email)) {
        
        header("Location:../index.php?mod=user&act=capnhatthongtin");
        exit();
    }else{
        $update = $conn->prepare("UPDATE user SET phone = ?, address = ?,pword = ?, email = ? WHERE name = ?");
    $update->bindParam(1, $phone);
    $update->bindParam(2, $address);
    $update->bindParam(3, $pword);
    $update->bindParam(4, $email);
    $update->bindParam(5, $name);
    try {
        $update->execute();
        header("location:../index.php?mod=page&act=trangchu");
    } catch(PDOException $e) {
        echo "Error updating user: " . $e->getMessage();
    }
    }

    

    
}