<?php
include_once 'connect.php';

if(isset($_POST['submit']) && $_POST['submit']  && $_POST['name'] !='' && $_POST['usr'] != ''  && $_POST['pwd'] !='' ){
    $conn = dbConnection();
    $sql = "INSERT INTO user (uname, pword, name) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt ->execute([$_POST['usr'], $_POST['pwd'], $_POST['name']]);
    header( "location:../index.php?mod=user&act=login");
}else{
    header("location:../index.php?mod=user&act=signup");
}