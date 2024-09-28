<?php

function insert_user_returnID($fullname, $pword, $email, $phone)
{
    $sql= "INSERT INTO user (name, pword, email, phone) values ('$fullname','$pword','$email', '$phone')";
    return pdo_execute_returnID($sql);
}
function checkuser($uname,$pword){
    $conn = dbConnection();
    $stmt = $conn->prepare("SELECT * FROM user WHERE uname = '".$uname."' AND pword ='".$pword."'");
    $stmt->execute();
    $result = $stmt->setFetchMode (PDO:: FETCH_ASSOC);
    
    $kq=$stmt->fetchAll();
    if(count($kq)>0){
        return $kq[0]['role'];
    }else{
        return 0;
    }
    
}