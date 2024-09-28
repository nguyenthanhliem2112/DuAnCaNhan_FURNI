<?php
function get_total(){
    if(isset($_SESSION['giohang']) && (count($_SESSION['giohang'])>0)){
        $total =0;
        foreach ($_SESSION['giohang'] as $item) {
            $gia =$item['gia'];
            $soluong =$item['soluong'];
            $thanhtien= $gia * $soluong;
            $total+=$thanhtien;
        }
        return $total;
    }
    

}   
function insert_order_returnID($iduser,$ordercode, $total, $fullname, $phone, $address, $ghichu, $phuongthucthanhtoan)
{
    $sql= "INSERT INTO donhang (id_user,code, tongtien, ten, dienthoai, diachi,ghichu, phuongthucthanhtoan) values ('$iduser','$ordercode', '$total', '$fullname', '$phone', '$address','$ghichu','$phuongthucthanhtoan')";
    return pdo_execute_returnID($sql);
}
function insert_order_($iduser,$ordercode, $total, $fullname, $phone, $address, $ghichu, $phuongthucthanhtoan)
{
    $sql= "INSERT INTO donhang (id_user,code, tongtien, ten, dienthoai, diachi,ghichu, phuongthucthanhtoan) values ('$iduser','$ordercode', '$total', '$fullname', '$phone', '$address','$ghichu','$phuongthucthanhtoan')";
    return pdo_execute_returnID($sql);
}


function insert_orderdetails($idpro, $soluong, $ten, $gia, $idorder,$ngaydathang)
{
    $sql= "INSERT INTO donhangchitiet (id_sanpham, soluong, ten, gia, id_donhang,ngaydathang) values ('$idpro', '$soluong', '$ten', '$gia', '$idorder','$ngaydathang')";
    return pdo_execute_returnID($sql);
}

function get_id_oder_lastest(){
    $sql = "SELECT id_donhang FROM donhang order by id_donhang desc limit 1";
    $hoadon= pdo_query_one($sql);   
    return $hoadon['id_donhang'];
}