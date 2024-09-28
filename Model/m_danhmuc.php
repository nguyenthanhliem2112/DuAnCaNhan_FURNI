<?php

function getCategory_Home_List()
{
    $sql = "SELECT * FROM danhmuc order by id_danhmuc ASC ";
    return pdo_query($sql);
}
function getByID($id_danhmuc)
{
    $sql= "SELECT * FROM danhmuc WHERE id='$id_danhmuc'";
    return pdo_query($sql);

}
