<?php 
include ("../admin/includes/header.php");
include_once '../Model/m_danhmuc.php';
include_once '../Model/m_products.php';
include_once '../Model/m_giohang.php';

?>
<body>
<div class="container-fluid">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tất cả sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <form action="add-product.php" method="POST" enctype="multipart/form-data"><!-- Uploads image -->
                            <div class="row">
                                <div class="col-md-12">
                                <label class="mb-0"><b>Chọn danh mục</b></label>
                                <select name="category_id" class="form-select mb-2">
                                    <option selected>Danh mục</option>
                                    <?php 
                                            $danhmuc= getCategory_Home_List("id_danhmuc"); 
                                            foreach ($danhmuc as $item) {
                                                    extract($item);
                                                    ?>
                                                    <option value="<?= $item['id_danhmuc']; ?>">  <?= $item['ten']?></option>
                                                <?php
                                                } 
                                            
                                    ?>
                                        


                                </select>
                                </div>
                                <div class="col-md-6">
                                                <input type="hidden" name="product_id" value="">
                                                <br>
                                                    <label class="mb-0"><b>Tên</b></label>
                                                    <input type="text" id="full-name" required name="name" value="" placeholder="Nhập tên sản phẩm" class="form-control mb-2 "> 
                                                </div>                               
                                                <div class="col-md-6">
                                                <br>
                                                    <label class="mb-0"><b>Mã</b></label>
                                                    <input type="text" id="slug-name"required name="slug" value="" placeholder="Nhập mã sản phẩm" class="form-control mb-2">
                                                </div>
                                                <div class="col-md-12">
                                                <br>
                                                    <label class="mb-0"><b>Giá</b></label>
                                                    <textarea type="text" required name="small_description" placeholder="Giá sản phẩm" class="form-control mb-2"></textarea>
                                                </div>                               
                                             
                                                <div class="col-md-6">
                                                <br>
                                                    <label class="mb-0"><b>Số lượng</b></label>
                                                    <input type="text" required name="original_price" value="" placeholder="Nhập số lượng" class="form-control mb-2"> 
                                                </div>                               
                                                <div class="col-md-6">
                                                <br>
                                                    <label class="mb-0"><b>Đã bán</b></label>
                                                    <input type="text" required name="selling_price" value=""  placeholder="Nhập đã bán" class="form-control mb-2">
                                                </div>                          
                                <div class="col-md-12">
                                <br>
                                    <label class="mb-0"><b>Image</b></label>
                                    <input type="file" name="image" class="form-control mb-2">
                                </div>
                              
                                
                                <div class="col-md-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_product_btn">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
<script type="text/javascript" src="./assets/js/StringConvertToSlug.js"></script>
