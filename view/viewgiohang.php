<?php
    if($_SESSION['giohang']!=""){
        $html_view_giohang="";
        $i=0;
        foreach($_SESSION['giohang'] as $item){
            extract($item);
            $html_view_giohang.='
                <div class="sanpham" id="sanpham">
                    <div class="img-sanpham">
                        <img src="assets/img/'.$img.'.jpg" alt="">

                    </div>
                    <div class="content">
                        <h3>'.$ten.'</h3>
                    <div style="display: flex;justify-items: center; margin:15px 0 0 0;">Giá: <p style="font-size:16px;margin-top:0px; margin-left:10px;  color:var(--color--red)";> '.number_format($gia, 0, ',', '.').'</p></div>
                        <div class="iconthemxoa"> Số lượng:
                            <button><i class="fa-solid fa-minus"></i></button>
                                '.$soluong.'
                            <button><i class="fa-solid fa-plus"></i></button>

                        </div>
                        <p>Thành tiền:
                            <strong>'.number_format($thanhtien, 0, ',', '.').' VNĐ</strong>
                         </p>
                  
                    </div>
                    <div class="themxoa">
                        <div class="iconxoa">
                        <a href="index.php?mod=page&act=viewgiohang&ind='.$i.'"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>
                </div>  
            ';
            $i++;
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
  <script src="admin/assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/thuvien.js"></script>
  </head>
    <main>

        <div class="tieude" >
            <h1 >Giỏ hàng </h1>
        </div>
        <div class="row">
        <div class="noidung">
            <div class="noidung_giohang" id="giohang">
            <?=$html_view_giohang?>
            </div>
           <div class="capnhatgiohang">
                   <a href="index.php?mod=page&act=viewgiohang&delall=1"><button>Xóa tất cả</button></a> 
            </div>     
           </div>

            <div class="thanhtoan">
            <div class="noidung">
                    <div class="noidungsanpham">
                        <h2>Tóm tắt đơn hàng</h2>
                        <table>
                       
                            <tr>
                                <th>Vận chuyển
                                    <td> Liên hệ phí vận chuyển sau</td>    
                                </th>
                            </tr>
                        </table>
                        <hr>
                        <div class="magiamgia">
                            <input type="text" placeholder="Mã giảm giá">
                            <button>Sử dụng</button>

                        </div>
                        <div class="tongcong">
                            <span>Tổng cộng :</span>
                            <strong><?=number_format($total, 0, ',', '.')?> VNĐ</strong>
                           
                        </div>
                        <div class="thongtingiaohang">
                            <h4>Thông tin giao hàng</h4>
                            <p>
                                Đối với những sản phẩm có sẵn tại khu vực, Furni sẽ giao hàng trong vòng 2-7 ngày. Đối với những sản phẩm không có sẵn, thời gian giao hàng sẽ được nhân viên Furni thông báo đến quý khách.
                            </p>
                            <p>Từ 2-6: 8:30 - 17:30</p>
                            <p>Thứ 7, CN: 9:30 - 16:30</p>
                            <a href="#">Cửa hàng gần đây</a>

                        </div>

                        <div class="hoanthanh">
                            <a href="index.php"><button><i class="fa-solid fa-arrow-right fa-rotate-180"></i>Tiếp tục mua hàng</button> </a>
                            <a href="index.php?mod=page&act=thanhtoan" ><button class="btn2">Thanh Toán</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

