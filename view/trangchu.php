<?php
    $html_product_all = show_sp($products);  
?>



<section class="product-list">
            <div class="banner">
                <button onclick="onClickLeft()" class="left"><i class="fa-solid fa-angle-up fa-rotate-270"></i></button>
                <img src="assets/img/anh1.jpg" id="img-banner" alt="">
                <button onclick="onClickRight()" class="right"><i class="fa-solid fa-angle-up fa-rotate-90"></i></button>
            </div>
        </section>

    <section class="product-list1">
        <div class="product">
            <div class="product-1">
                <div class="content-product">
                    <h2>Ghế</h2>
                    <p>Ghế văn phòng, nhà hàng, cafe fastfood, ghế phòng ăn...đa dạng mẫu mã, kiểu dáng, chất liệu, chất lượng và giá ...</p>
                    <a href="index.php?mod=page&act=products&id_danhmuc=1#tatca" >
                        <img src="assets/img/xem.png" alt="">
                    </a>
                </div>
                <div class="product-img">
                    <a href="">
                        <img src="assets/img/sp1.png" alt="">
                    </a>

                </div>
            </div>
            </div>
                <div class="product">
                <div class="product-1">
                <div  class="content-product">
                    <h2>Bàn</h2>
                    <p>Bàn ăn hiện đại, bàn nhà hàng, cafe fastfood, bàn giám đốc cao cấp nhập khẩu...nhiều mẫu mã để lựa ...
                    </p>
                    <a href="index.php?mod=page&act=products&id_danhmuc=2#tatca"> 
                        <img src="assets/img/xem.png" alt="">
                    </a>
                </div>
                <div class="product-img">
                  <a href="index.php"><img src="assets/img/sp2.png" alt=""></a>
                </div>
                </div>
            </div>
            <div class="product">
                <div class="product-1">
                <div class="content-product">
                    <h2>Bộ Bàn Ghế</h2>
                    <p>Bàn ghế được phối theo bộ, dễ dàng lựa chọn
                    </p>
                    <a href="index.php?mod=page&act=products&id_danhmuc=3#tatca">
                        <img src="assets/img/xem.png" alt="">
                    </a>
                </div>
                <div class="product-img">
                    <a href="" >
                        <img src="assets/img/sp3.jpg" style="height: 110px;" alt="">
                    </a>
                    
    
                </div>
                </div>
            </div>
                <div class="product">
                    <div class="product-1">
                    <div class="content-product">
                        <h2>Trang Trí</h2>
                        <p>Tự do thể hiện phong cách, tha hồ sáng tạo...
        
                        </p>
                        <a href="index.php?mod=page&act=products&id_danhmuc=4#tatca" class="xem">
                            <img src="assets/img/xem.png" alt="">
                        </a>
                    </div>
                    <div class="product-img">
                        <a href="" >
                            <img src="assets/img/sp4.png" alt="">
                        </a>
                        
        
                    </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-1">
                    <div class="content-product">
                        <h2>Phụ Kiện</h2>
                        <p>Các phụ kiện thay thế cho các dòng hàng: ghế văn phòng, bàn ghế cafe fastfood, ghế quầy bar, bàn nhà ...
                        </p>
                        <a href="index.php?mod=page&act=products&id_danhmuc=5#tatca" class="xem">
                            <img src="assets/img/xem.png" alt="">
                        </a>
                    </div>
                    <div class="product-img">
                        <a href="" >
                            <img src="assets/img/sp5.png" alt="">
                        </a>
                        
        
                    </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-1">
                    <div class="content-product">
                        <h2>Ưu Đãi</h2>
                        <p>Khuyến mãi, combo tiết kiệm tiện lợi và nhiều mặt hàng ưu đãi.
                        </p>
                        <a href="" class="xem">
                            <img src="assets/img/xem.png" alt="">
                        </a>
                    </div>
                    <div class="product-img">
                        <a href=""  >
                            <img src="assets/img/sp6.jpg" style="height: 110px;" alt="">
                        </a>
                        
                    </div>
                    </div>
                </div>
        
            </section>

        <!-----------------------End :: section 2 ------------------------->
        

       

     
    <section class="product-list2" id="tatcasanpham" >
            <div class="row">
                <div class="menusanpham1">
                    <a href="">TẤT CẢ SẢN PHẨM </a>
                    <div class="xemtatca">
                        <a href=""></a>
                    </div>
                </div>
                <div class="product" >
                    <?=$html_product_all?>
          
    </section>     
 
    <section class="product-list3">
            <div class="row">

                <div class="left">
                    <h2>MẠNG XÃ HỘI FACEBOOK</h2>
                <div class="thanhcuon">
                    <div class="facebook">
                        <img class="facebook-img" src="assets/img/LOGOS.png" alt="">
                        <div class="info-facebook">
                            <p><a href="">FURNI SRC</a></p>
                            <div class="follow-facebook">
                                <p><a href="#">18,2K người theo dõi - 12,6k lượt thích</a></p>
                            </div>
                            <div class="theodoi">
                                <a href="https://www.facebook.com/anhliemdz?locale=vi_VN">Theo dõi</a>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="menu">
                        <ul>
                            <li style="background-color: var(--color--2)"><a href="#">Bài viết</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Bạn bè</a></li>
                            <li><a href="#">Ảnh</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Xem thêm</a></li><i class="fa-solid fa-caret-up fa-rotate-180"></i>   


                        </ul>
                    </div>
                    <div class="baiviet">
                        <div class="img-baiviet">
                            <img src="assets/img/LOGOS.png" alt="">
                            <div class="info-baiviet">
                                <h3>FRUNI SRC</h3>
                                <P><a href="#">21 tháng 12, 2023 - Sài Gòn</a></P>
                                <div class="noidung-baiviet">
                                    <p>Ghế văn phòng cao cấp năm 2023</p>
                                    <p>#furni #noithat</p>
                                <div class="noidung-baiviet-img">
                                    <img src="assets/img/14.jpg" alt="" class="sinhnhat">
                                    <img src="assets/img/15.jpg" alt=""class="sinhnhat">

                                </div>
                                

                                </div>
                            </div>
                        </div>



                        </div>
                    </div>
                </div>
                <div  class="mid">
                    <h2> CATALOG</h2>
                    <div class="midtop">
                        <div class="midtop-img">
                            <img src="assets/img/PDF1.png" alt="">
                            <p>Bảng báo giá 2014</p>
                        </div> 
                        <div class="midtop-img">
                            <img src="assets/img/PDF1.png" alt="">
                            <p>Bảng báo giá 2015</p>
                        </div>   

                    </div>
                    <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
                    <p class="content">Chúng tôi sẽ cập nhật sản phẩm mới và xu hướng nội thất mới của thế mới cho bạn.</p>
                    
                </div>

                <div class="right">
                    <h2>KHÔNG GIAN ĐẸP</h2>
                    <div class="boxcenter">
                        <div class="top">
                            <div class="top-img">
                                <img src="assets/img/bannerfake.png" alt="">
                            </div>
                            <div class="top-content">
                                <h3><a href="#">10+ Mẫu Bộ Bàn Ghế Hồ ...</a></h3>
                                <p>Những mẫu bàn ghế hồ bơi, mang hơi thở của thiên nhiên và ánh sáng mặt ...</p>
                            </div>
                            
                        </div>
                        <div class="top">
                            <div class="top-img">
                                <img src="assets/img/bannerfake.png" alt="">
                            </div>
                            <div class="top-content">
                                <h3><a href="#">Bộ bàn ăn cổ điển ...</a></h3>
                                <p>Những mẫu bàn ghế hồ, mang hơi thở của thiên nhiên và ánh sáng mặt ...</p>
                            </div>
                            
                        </div>
                        <div class="top">
                            <div class="top-img">
                                <img src="assets/img/bannerfake.png" alt="">
                            </div>
                            <div class="top-content">
                                <h3><a href="#">Top 5 ghế băng chờ ngoài...</a></h3>
                                <p>Những mẫu bàn ghế hồ bơi, mang hơi thở của thiên nhiên và ánh sáng mặt ...</p>
                            </div>
                            
                        </div>


                        </div>
                    </div>
                </div>

            </div>

        </section>

    
        <script>
            
            document.addEventListener("scroll", (event) => {
        
        let scroll = this.scrollY;
        let header = document.getElementsByClassName("thanhcuoncroll");
    
        if (scroll > 100) {
          header[0].classList.add('scroll')
        } else {
          header[0].classList.remove('scroll')
        }
        console.log(scroll);
    
    
      });
      
      // banner
      let banners = [
          'assets/img/banner1.jpg',
          'assets/img/banner2.jpg',
          'assets/img/banner3.jpg'
          
      ];
      var imgBannerNode = document.querySelector('#img-banner');
      var currenIndex = 0;
      imgBannerNode.src = banners[0];


      function onClickLeft(){
          currenIndex = currenIndex - 1;
          if(currenIndex < 0){
              
              currenIndex = banners.length  - 1;
          }
          imgBannerNode.src = banners[currenIndex];
          
      }
      function onClickRight(){
          currenIndex = currenIndex + 1
          if(currenIndex > banners.length - 1){
              currenIndex = 0;
          }
          imgBannerNode.src = banners[currenIndex];   

          setTimeout(onClickRight, 5000);
      }
      onClickRight();
            </script>
    