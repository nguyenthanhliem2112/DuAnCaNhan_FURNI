<?php 
include ("../admin/includes/header.php");
?>
<body>
<div class="container-fluid">   
        <div class="row">
            <div class="col-md-12">
         
            <div class="card">
                                <div class="card-header">
                                    <h4>Chỉnh sửa danh mục</h4>
                                </div>
                                <div class="card-body">
                                    <form action="  " method="POST" enctype="multipart/form-data"><!-- Uploads image -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="category_id" value="" >
                                                <label for=""><b>Tên</b></label>
                                                <input type="text" id="full-name" required value="" name="name" placeholder="Thay đổi tên vui lòng nhập" class="form-control"> 
                                            </div>                               
                                            <div class="col-md-12">
                                                <input type="hidden" name="category_id" value="" >
                                                <label for=""><b>IMG</b></label>
                                                <input type="file" name="img" class="form-control mb-2">                                            </div>     
                                         
                                            <div class="col-md-12">
                                                <br>
                                                <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
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
