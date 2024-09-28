<?php
if(isset($_COOKIE['name'])){
    setcookie('name', '', 1, '/');
    header("location:../index.php?mod=page&act=trangchu");
}else{
    echo 'OK';
}