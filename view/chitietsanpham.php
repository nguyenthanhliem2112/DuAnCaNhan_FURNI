<?php
    $html_product_danhmuc = show_sph($products_danhmuc);
    $html_product_all = show_sp($products);

?>

<main>
        <div class="row">
            <div class="img-left">
                <div class="img">
                    <a href="#" >
                        <img src="assets/img/<?=$chitietsanpham['img']?>.jpg" alt="" class="imgcha">
                        <div class="imgcon">
                            <img src="assets/img/<?=$chitietsanpham['img']?>.jpg" alt="" class="img-concon">
                            <img src="assets/img/<?=$chitietsanpham['img']?>.jpg" alt=""class="img-concon">
                            <img src="assets/img/<?=$chitietsanpham['img']?>.jpg" alt=""class="img-concon">
                            <img src="assets/img/<?=$chitietsanpham['img']?>.jpg" alt=""class="img-concon">
                        </div>
                    </a>
                
                </div>
            </div>
            <div class="content-right">
                 <h2><?=$chitietsanpham['ten']?></h2>
                <h3><?=$chitietsanpham['ma']?></h3>
                <p>
                    <span>Màu sắc: </span>Bàn: Đen, Nâu/ Ghế: Nâu
                </p>
                <p>
                    <span>Chất liệu:</span> Nệm vải lưới chuyên dùng ngoài trời. Khung ghế sắt sơn epoxy chống rỉ sét
                </p>
                <p>
                    <span>Kích thước (D*R*C): </span>Bàn: D600*H720mm/ Ghế: 540*680*890mm
                </p>
                <p style="margin-bottom: 30px; font-size: 18px;">
                    Giá:
                    <span style="color: var(--color--red);font-size: 20px;"><?=number_format($chitietsanpham['gia'],0,',','.')?> VNĐ</span>
                </p>

                <form action="index.php?mod=page&act=giohang" method="POST">
                <div class="p">
                    <input type="hidden" name="id_sanpham" value="<?=$chitietsanpham['id_sanpham']?>" >
                    <input type="hidden" name="ten" value="<?=$chitietsanpham['ten']?>" >
                    <input type="hidden" name="img" value="<?=$chitietsanpham['img']?>" >
                    <input type="hidden" name="gia" value="<?=$chitietsanpham['gia']?>" >
                    <input type="hidden" name="soluong" value="1" >
                    <button class="dathang"  name="btncart"> Đặt hàng</button>
                </div>
                </form>
                
                <p>
                    <button type="submit">
                        <i class="fa-solid fa-thumbs-up"></i>
                        Like
                    </button>
                
                </p>

                <div class="cmt-content">
                     <div class="tieude-cmt">
                        <h3>0 Comments</h3>
                        <div class="right">
                            <h4>Sort by</h4>
                            <button>Newest <i class="fa-solid fa-sort"></i></button>
                        </div>
                    </div>

    
                    <div class="danhgia-cmt">
                        <div class="img">
                            <img src="assets/img/avata.jpg" alt="">
                        </div>
                        <div class="cmt">
                            <p>
                                <input type="text" placeholder="Nội dung của bạn..">
                            </p>
                        </div>
                    </div>
                    <div class="facebook">
                        <div class="logo">
                            <i class="fa-brands fa-square-facebook" style="color: #063152;"></i>
                        </div>
                        <div class="linkfb">
                            <a href="https://www.facebook.com/anhliemdz">Facebook Comments </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            
            <div class="content">
             <p>Liên hệ ngay hotline : <a href="#">  0968 90 94 96</a> (Zalo/Viber) để được tư vấn sản phẩm cụ thể và hỗ trợ đặt hàng
              Nội thất Furni rất vui khi nhận được liên hệ từ bạn.</p>
            </div>
    </nav>
    <nav>
            <div class="tieude">
                <div class="left">
                    <a href="#">Sản phẩm liên quan</a>
                </div>
                <div class="right">
                    <a href="index.php#tatcasanpham">Xem tất cả >></a>
                </div>
            </div>
           
        </nav>
        <div class="row">
             <div class="product"> 
              <?=$html_product_danhmuc;?>
                </div>
        </div>
       
</main>
    <script type="text/javascript">     
        var imgcon = document.getElementsByClassName("img-concon"); 
        for(var i = 0; i <imgcon.length; i++){
            imgcon[i].onmouseover = function(){
                var imgcha = document.getElementsByClassName("imgcha")[0];
                imgcha.src = this.src;
            }
        }
        </script>
