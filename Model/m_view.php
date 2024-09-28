<?php
function show_sp($products){
    $html_product_all = "";
    foreach ($products as $item) {
            extract($item);
            $html_product_all .='<div class="product0">
                                <div class="product1">
                                <div class="product1-img">
                                    <a href="index.php?mod=page&act=chitietsanpham&id='.$id_sanpham.'">
                                        <img src="assets/img/'. $img .'.jpg" alt="">
                                       
                                    </a>
                                </div>
                                <div class="product1-info">
                                    <div class="soluong">
                                    <div class="soluongcon">số lượng:
                                        <span>'. $soluong .'</span>
                                    </div>
                                    <div class="daban">đã bán:
                                        <span>'. $daban .'</span>
                                    </div>
                                    </div>
                                    <h2>'. $ma .'</h2>
                                    <p>'. $ten .'</p>
                                    <p>Giá: 
                                        <span>'. number_format($gia, 0, ',', '.') .' VNĐ</span>
                                    </p>
                                    <form action="index.php?mod=page&act=giohang" method="POST">
                                        <input type="hidden" name="id_sanpham" value="'.$id_sanpham.'" >
                                        <input type="hidden" name="ten" value="'.$ten.'" >
                                        <input type="hidden" name="img" value="'.$img.'" >
                                        <input type="hidden" name="gia" value="'.$gia.'" >
                                        <input type="hidden" name="soluong" value="1" >
                                        <button name="btncart"> <a> <img src="assets/img/icongiohang.png" alt="" ></a></button>
                                    </form>
                                 
                                </div>
                             </div>
                        </div>' ;
    }
    return $html_product_all;
}
function show_sph($products_danhmuc){
    $html_product_danhmuc = "";
    foreach ($products_danhmuc as $item) {
            extract($item);
            $html_product_danhmuc .='<div class="product0">
                                <div class="product1">
                                <div class="product1-img">
                                    <a href="index.php?mod=page&act=chitietsanpham&id='.$id_sanpham.'">
                                        <img src="assets/img/'. $img .'.jpg" alt="">

                                    </a>
                                </div>
                                <div class="product1-info">
                                    <div class="soluong">
                                    <div class="soluongcon">số lượng:
                                        <span>'. $soluong .'</span>
                                    </div>
                                    <div class="daban">đã bán:
                                        <span>'. $daban .'</span>
                                    </div>
                                    </div>
                                    <h2>'. $ma .'</h2>
                                    <p>'. $ten .'</p>
                                    <p>Giá: 
                                        <span>'. number_format($gia, 0, ',', '.') .' VNĐ</span>
                                    </p>
                                    <form action="index.php?mod=page&act=giohang" method="POST">
                                        <input type="hidden" name="id_sanpham" value="'.$id_sanpham.'" >
                                        <input type="hidden" name="ten" value="'.$ten.'" >
                                        <input type="hidden" name="img" value="'.$img.'" >
                                        <input type="hidden" name="gia" value="'.$gia.'" >
                                        <input type="hidden" name="soluong" value="1" >
                                        <button name="btncart"> <a> <img src="assets/img/icongiohang.png" alt="" ></a></button>
                                    </form>
                                </div>
                             </div>
                        </div>' ;
    }
    return $html_product_danhmuc;
}


?>