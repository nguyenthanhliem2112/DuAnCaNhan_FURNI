<?php 
include ("../admin/includes/header.php");
include_once '../Model/m_products.php';
$products = getAllProducts();

?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sản phẩm</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>IMG</th>
                                <th>Mã</th>
                                <th>Số lượng</th>
                                <th>Đã bán</th>
                                <th>Giá</th>
                                <th>Chỉnh sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        foreach ($products as $item) {
                            extract($item);
                                     echo  '<tr>
                                            <td>'.$id_sanpham.'</td>
                                            <td> '.$ten.' </td>
                                            <td>
                                                <img src="../assets/img/'.$img.'.jpg" width="50px" height="50px" alt="">
                                            </td>
                                            <td>'.$ma.'</td>
                                            <td>'.$soluong.'</td>
                                            <td>'.$daban.'</td>
                                            <td>'.$gia.'</td>
                                            <td>
                                                <a href="edit-product.php?id='.$id_sanpham.'" class="btn btn-primary">Chỉnh sửa</a>                                 
                                            </td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="product_id" value="'.$id_sanpham.'">
                                                    <button type="submit" name="delete_product_btn" class="btn btn-danger">Xóa</button>
                                                </form>   
                                            </td>                      
                                        </tr>';
                                 
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
