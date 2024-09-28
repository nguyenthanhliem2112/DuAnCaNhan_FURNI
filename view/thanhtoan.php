<?php
        $total=get_total();
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

?>
<head>    <link rel="stylesheet" href="assets/css/thanhtoan.css">
</head>
<main class="thanhtoan">

<div class="row">
    <form action="index.php?mod=page&act=thanhtoan" method="POST">
    <div class="left">
        <div class="diachigiaohang">
            <h2>Thông tin giao hàng</h2>
            <div class="thongtin">
                <div class="thongtin1">
                    <label for="">
                        Họ và tên 
                        <span>*</span>
                    </label>
                    <span>
                        <input name="fullname" type="text" required="required" placeholder="Nhập họ và tên">
                    </span>
                </div>
                <div class="thongtin2">
                    <label for="" >
                        Số điện thoại
                        <span>*</span>
                    </label>
                    <span>
                        <input name="phone" type="text" required="required" placeholder="Nhập số điện thoại của bạn">
                    </span>
                </div>
                <div class="thongtin3">
                    <label for="">
                        Địa chỉ email 
                        <span>*</span>
                    </label>
                    <span>
                        <input name="email" type="email" required="required" placeholder="Nhập Email ">
                    </span>
                </div>
                <div class="thongtin4">
                    <label for="">
                        Địa chỉ
                        <span>*</span>
                    </label>
                    <span>
                        <input name="address" type="text" required="required" placeholder="Nhập địa chỉ">
                    </span>
                </div>
             
                


            </div>
            <div class="thongtinthem">
                <div class="thongtinthem1">
                    <h4>Lưu ý cho đơn hàng (tùy chọn)</h4>
                    <p>
                        <input name="ghichu"type="text" placeholder="Viết các lưu ý cho đơn hàng của bạn, ví dụ: lưu ý đặc biệt khi vận chuyển.">
                    </p>

                </div>
            </div>
            <div class="phuongthucthanhtoan">
                <div class="phuongthuc">
                <div class="thongtin5">
                    <input type="checkbox" name="phuongthucthanhtoan" checked value="Thanh toán khi nhận hàng" id="">Thanh toán khi nhận hàng

                </div>
                <div class="thongtin5">
                    <input type="checkbox" name="phuongthucthanhtoan"  value="Chuyển khoản ngân hàng" id="">Chuyển khoản ngân hàng

                </div>
                
                   
              
            </div>
            <!-- <div class="bottom">
                <h4>Ngân hàng BIDV</h4>
                <p>Số tài khoản: <strong>6150878749</strong></p>
                <p>Tên chủ tài khoản:</p>
                <p>NGUYEN THANH LIEM BIDV - CHI NHÁNH Ninh Thuận</p>
               </div> -->

        </div>

        </div>

    </div>
    <div class="right">
       <div class="noidung">
        <h2>Tóm tắt đơn hàng</h2>
        <div class="sanphamdangmua">
            <?=$html_donhang?>
            
           
        </div>
        <div class="noidungsanpham">
                      
                        <div class="magiamgia">
                            <input type="text" placeholder="Mã giảm giá">
                            <button>Sử dụng</button>

                        </div>
                        <div class="vanchuyen">
                            <span>Vận chuyển:</span>
                            <strong>Miễn phí</strong>
                           
                        </div>
                    
                     
                        <div class="tongcong">
                            <span>Tổng cộng :</span>
                            <strong><?=number_format($total, 0, ',', '.')?>  VNĐ</strong>
                           
                        </div>
                    </div>
        <!-- <table>
            
            <tr>
                <th>Vận chuyển
                    <td> Liên hệ phí vận chuyển sau</td>
                </th>
            </tr>
            <tr>
                <th>Tổng cộng
                    <td style="color: var(--color--redfake);"> 1.750.000 VNĐ</td>
                </th>
            </tr>
            
        </table>
     -->
        <!-- <div class="chinhsach">
            <h3>CHÍNH SÁCH BÁN HÀNG</h3>
            <h5>1.Thanh toán</h5>
            <p>FURNI chỉ áp dụng duy nhất một hình thức thanh toán online qua thẻ tín dụng, chuyển khoản, cụ thể</p>
            <p>Bước 1: Khách hàng tìm hiểu thông tin về sản phẩm.</p>
            <p>Bước 2: Khách hàng xác thực đơn hàng (điện thoại, tin nhắn, email).</p>
            <p>Bước 3: Khách hàng đồng ý các điều khoản mua hàng, chi phí giao hàng và lắp đặt.</p>
            <p>Bước 4: Khách hàng thanh toán qua các thẻ ATM/VISA/CREDIT CARD.</p>
            <p>Bước 5: Hệ thống Nhà Xinh xác nhận thông tin khách hàng và giao hàng.</p>
            <p>Bước 6: Khách hàng nhận hàng, kiểm tra và xác nhận với nhân viên.</p>
            <h5>2. Chính sách lưu kho (Bên mua gửi/ lưu giữ hàng hóa tại kho của bên bán).</h5>
            <p>Thỏa thuận lưu kho, phí lưu kho và điều kiện lưu kho sẽ được ký kết nếu khách hàng có nhu cầu kí gửi hàng hóa.</p>
            <h5>3. ĐƠN HÀNG CÓ HIỆU LỰC.</h5>
            <p>Đơn hàng có hiệu lực là đơn hàng sau khi Quý khách đã thanh toán và nhận được xác nhận của nhân viên bán hàng FURNI.</p>
            <p>Quý khách không được hủy đơn hàng sau khi đã thanh toán và nhận được xác nhận của nhân viên bán hàng FURNI.</p>
            <h5>4. QUY ĐỊNH ĐỔI TRẢ HÀNG HÓA.</h5>
            <h6>4.1. Các trường hợp hợp được đổi hàng:</h6>
            <p>FURNI sẽ thực hiện việc đổi, trả hàng hóa theo các điều kiện sau:</p>
            <P>Hàng không đủ số lượng, đủ bộ, hoặc không đúng chủng loại theo như trong đơn đặt hàng của Quý khách.</P>
            <p>Hàng bị lỗi, không đạt chất lượng. </p>

        </div> -->
        <div class="dieukhoan">
            <input type="checkbox">
            <p>Tôi đã đọc và đồng ý điều kiện đổi trả hàng, giao hàng, chính sách bảo mật, điều khoản dịch vụ mua hàng online *</p>
        </div>
        <button href="" name="btn_order" type="submit" class="datmua">ĐẶT MUA</button>
       </div>
    </div>
    </form>

</div>

</main>
