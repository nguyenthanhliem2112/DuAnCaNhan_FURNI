<?php 
include ("../admin/includes/header.php");
include_once '../Model/m_danhmuc.php';
include_once '../Model/m_products.php';


?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Danh mục</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IMG</th>
                                <th>Tên</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $danhmuc= getCategory_Home_List("id_danhmuc"); 

                        foreach ($danhmuc as $item) {
                            extract($item);
                                     echo  '
                                        <tr>
                                            <td>'.$id_danhmuc.'</td> 
                                              <td>
                                                <img src="../assets/img/'.$img.'.jpg" width="50px" height="50px" alt="">
                                            </td>
                                            <td>'.$ten.' </td> 
                                            <td>
                                                <a href="edit-category.php?id='.$id_danhmuc.'" class="btn btn-primary">Chỉnh sửa</a>                                 
                                            </td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="category_id" value="'.$id_danhmuc.'">
                                                    <button type="submit" name="delete_category_btn" class="btn btn-danger">Xóa</button>
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
