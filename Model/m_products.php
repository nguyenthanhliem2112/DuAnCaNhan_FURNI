<?php
include_once 'connect.php';

// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($id_danhmuc,$limit)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($id_danhmuc>0){
        $sql.=" AND id_danhmuc = ". $id_danhmuc ;

    // }if($kyw>0){
    //         $sql.=" AND ten like '%".$kyw."%'";
        
    // 
    }if($limit>0){
        $sql.=" limit 0,".$limit;
    }
        return pdo_query($sql);

    
}  
// function getProductsByCategory_search($kyw)
// {
//     $sql = "SELECT * FROM sanpham WHERE 1";
    
//     }else{
//         $sql.=" order by id_sanpham desc limit 4 ";
//         return pdo_query($sql);

//     }
// }    

// Hàm lấy ra những sản phẩm mới nhất
function getAllProductsss()
{
    $sql = "SELECT * FROM sanpham order by id_sanpham desc limit 4";
    return  pdo_query($sql);
}

// Hàm lấy id danh mục
function getAllCategory()
{
    $sql = "SELECT * FROM danhmuc order by id desc ";
    return pdo_query($sql);
}
function getAllProducts()
{
    $sql = "SELECT * FROM sanpham LIMIT 48";
    return pdo_query($sql);
}
// Hàm lấy các sản phẩm thuộc danh mục được đánh dấu là home
function getProductByCategory_Home1()
{
    $sql = "SELECT * FROM danhmuc
    left join sanpham on sanpham.id_danhmuc = danhmuc.id_danhmuc
    WHERE danhmuc.trangchu = 1";
    return pdo_query($sql);
}
function getProductDetails($id_sanpham)
{
    $sql = "SELECT * FROM  sanpham where id_sanpham = ? ";
    return pdo_query_one($sql, $id_sanpham);
}

function loadall_sanpham($kyw="",$id_danhmuc=0){
    $sql="SELECT * FROM sanpham where 1";
    if($kyw!=""){
        $sql.=" and ten LIKE '%".$kyw."%'";
    }
    if($id_danhmuc >0){
        $sql.=" and id_danhmuc ='".$id_danhmuc."'";
    }
    $sql.=" order by id_sanpham desc";
    return  pdo_query($sql);

}

function load_ten_dm($id_danhmuc){  
    if($id_danhmuc>0){
    $sql="SELECT * FROM danhmuc where id_danhmuc=".$id_danhmuc;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $ten;
    }else{
        return "";
    }

}
function get_so_trang($products_danhmuc_phantrang,$id_danhmuc){
 
    $sotrang=ceil(count($products_danhmuc_phantrang)/SO_SP_TRANG);
    $dssotrang="";
    for($i=1; $i<=$sotrang ;$i++){
        $dssotrang .= "<button><a href='?mod=page&act=products&id_danhmuc=" . $id_danhmuc . "&trang=" . $i . "'>" . $i . "</a></button>";

    }
    return $dssotrang;
}