<?php


if($_SESSION['giohang']!=""){
    $html_donhang="";
    foreach($_SESSION['giohang'] as $item){
        extract($item);
        $html_donhang.='<div class="sanpham">
                            <img src="assets/img/'.$img.'.jpg" alt="">
                                <p>'.$ten.' </p>
                                <p> '.$soluong.'</p>
                                <strong>'.number_format($thanhtien, 0, ',', '.').' VNĐ</strong>

      </div>';
    }
}else {
    $html_view_giohang='<div class="sanpham">
                                  <div class="content">
                                      <h3>Không có sản phẩm</h3>
                                </div> 
                        </div> 
               
        ';
}

        $total=get_total();
?>
<head>
    <link rel="stylesheet" href="assets/css/hoadon.css">
</head>
        <div class="row">
           <form action="index.php?mod=page&act=hoadon" method="POST">
           <div class="noidung">
            <h2>Chúc mừng bạn đặt hàng thành công<img src="assets/img/tichxanh.jpg" alt="">
            </h2>
            <p class="xincamon">Furni cảm ơn bạn</p>

      <div class="tongnoidung">
      <div class="noidungsanphamm">
                       <div class="tren">
                       <table>
                            <tr>
                                <th>Thông tin mua hàng</th>
                                    <td class="td"> Nguyễn Thanh Liêm</td>    
                                    <td class="td"> +84589060317</td>    
                                    <td class="td"> liemnt04@gmail.com</td>    
                                
                            </tr>
                        </table>

                        <table>
                       <tr>
                           <th>Địa chỉ nhận hàng</th>

                               <td class="td"> Từ Tâm 1</td>    
                               <td class="td"> Phước Hải</td>    
                               <td class="td"> Ninh Phước Ninh Thuận</td>    
                            </tr>
                        </table>
                       </div>
                       <div class="duoi">
                       <table>
                            <tr>
                                <th>Phương thức thanh toán</th>
                                    <td class="td"> Thanh toán khi nhận hàng</td>    
                                 
                                
                            </tr>
                        </table>

                        <table>
                       <tr>
                           <th>Phương thức vận chuyển</th>

                               <td class="td">Giao hàng tận nhà</td>    
                                 
                            </tr>
                        </table>
                       </div>

                        </div>
 <div class="right">
       <div class="noidung1">
       <div class="tieudee">
       <h3>Đơn hàng:</h3>
       <span>#3221</span>
       </div>
        <div class="sanphamdangmua">
            <div class="sanpham">
                <img src="assets/img/15.jpg" alt="">
                <p>Ghế văn phòng cao cấp </p>
                <p> 1</p>
                <strong>1.750.000 VNĐ</strong>

            </div>
            <div class="sanpham">
                <img src="assets/img/15.jpg" alt="">
                <p>Ghế văn phòng cao cấp </p>
                <p> 1</p>
                <strong>1.750.000 VNĐ</strong>

            </div>
            
        </div>
        <div class="noidungsanpham1">
                         <div class="vanchuyenn">
                            <span>Phí vận chuyển :</span>
                            <p>miễn phí</p>
                           
                        </div>
                        <div class="tongcong">
                            <span>Tổng cộng :</span>
                            <strong>3.500.000 VNĐ</strong>
                           
                        </div>
                    </div>
       </div>
    </div>
      </div>

                        <div class="hoanthanh">
                            <a href="index.php?mod=page&act=trangchu"class="btn2" >Tiếp tục mua hàng
                            </a>
                        </div>
                    </div>
           </form>
                </div>

