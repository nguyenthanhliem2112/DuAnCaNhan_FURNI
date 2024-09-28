<section class="product-list2">
            <div class="row">
                <div class="menusanpham1">
                    <a href="">TẤT CẢ SẢN PHẨM</a>
                    <div class="xemtatca">
                        <a href=""></a>
                    </div>
                </div>
                <div class="product">
                    <?php
                     $pa = $_GET['pa'] ?? 1;
                     $offset = ($pa -  1) * 4;
                     $conn = pdo_get_connection();
                     $stmt = $conn->query("SELECT * FROM sanpham LIMIT 16 OFFSET $offset ");
                     while($row = $stmt->fetch())
                     {
                        echo  '<div class="product0">
                                <div class="product1">
                                <div class="product1-img">
                                    <a href="assets/chitietsanpham.html">
                                        <img src="assets/img/'.$row["img"].'.jpg" alt="">
                                       
                                    </a>
                                </div>
                                <div class="product1-info">
                                    <div class="soluong">
                                    <div class="soluongcon">số lượng:
                                        <span>'.$row["soluong"].'</span>
                                    </div>
                                    <div class="daban">đã bán:
                                        <span>'.$row["daban"].'</span>
                                    </div>
                                    </div>
                                    <h2>'.$row["ma"].'</h2>
                                    <p>'.$row["ten"].'</p>
                                    <p>Giá: 
                                        <span>'.number_format($row["gia"],0,',','.').' VNĐ</span>
                                    </p>
                                    <p>
                                        <a href="assets/giohang.html">
                                            <img src="assets/img/icongiohang.png" alt="" >
                                        </a>
                                    </p>
                                </div>
                             </div>
                        </div>' ;
                    }
                    ?>
                </div> 
            </div>
        </div>

       
    </div>        
</section>
<div class="text-center"> 
        <?php
            $record = $conn->query("SELECT * FROM sanpham")->rowCount();
            $page = ceil($record / 16);

            for($i = 1; $i <= $page; $i++)
            {
                echo '<button><a href="index.php?act=product&pa='. $i .'">'. $i .'</a> </button>';
            }
            ?>
           
        </div>