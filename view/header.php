<?php
    
  
    $html_danhmuc ='<li style="border: none;" >
                        <a href="?mod=page&act=trangchu"><i class="fa-solid fa-house" style="color: rgb(24, 142, 24);"></i></a>
                    <li>';
    foreach($danhmuc as $item) {
        extract($item);
        $html_danhmuc .= '<li >
                        <a href="?mod=page&act=products&id_danhmuc='.$id_danhmuc.'">'.$ten.'</a>
                    </li>';

}
?>
  <!-----------------------Start :: Header ------------------------->
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ Bàn Ghế - FURNI JSC</title>
    <link rel="stylesheet" href="assets/css/Trangchu.css">
    <link rel="stylesheet" href="assets/css/giohang.css">
    <link rel="stylesheet" href="assets/css/chitietsanpham.css">
    <script src="admin/assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/thuvien.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <header>
        <div class="boxlogo">
            <div class="row">
                <div class="left">
                    <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
                </div>
                <div class="right">
                    <p class="right-1">
                        <i class="fa-solid fa-phone" style="color:#0dc510;"></i>
                        <a href="#"> (08) 62 64 60 31 - 0968 90 94 96</a>
                    </p>
                    
                    <p class="right-2">
                    <a href="index.php?mod=page&act=viewgiohang" id="boxcart"><i class="fa-solid fa-cart-shopping" style="font-size: 20px; padding:0px 0px 10px 10px;" ></i>(<span></span>)</a>
                        <span class="right-2-1">
                            Chào quý khách |
                        </span>
                            
                        <span class="right-2-2">    
                            <a href="#">Sản phẩm đã xem</a>
                        </span>
                    </p>
                </div>
            </div>

        <nav class="thanhcuoncroll">
            <div class="boxmenu1">
                <div class="boxmenu1-thongtin ">
                    <a href="#">Giới thiệu</a>
                    <a href="#">Liên hệ</a>
                    <?php
                                if(isset($_COOKIE['name'])){
                                    echo '<a href="#" class="tenlogin">' . $_COOKIE['name'] . 
                                         '<span><i style="color:white; margin-left:5px;" class="fa-solid fa-sort-down"></i></span></a>';
                                    echo '<ul class="menu_content">';
                                    echo '<li><a href="index.php?mod=user&act=capnhatthongtin">Cập nhật thông tin</a></li>';
                                    echo '<li><a href="Model/m_logout.php">Đăng xuất</a></li>';
                                    echo '</ul>';

                                                                       
                                }else{
                                    echo '<a href="index.php?mod=user&act=login">Đăng nhập</a>';
                                    echo '<a href="index.php?mod=user&act=signup">Đăng ký</a>';
                                }
                            ?>
                </div>
               
             </div>
    
            <div class="boxmenu2 " >
                <ul>
                    <?=$html_danhmuc?>
                </ul>
                <form action="index.php?mod=page&act=products" method="post">
                        <input  type="text" name="kyw" class="btn-1" placeholder="Tìm kiếm . ." >
                        <input type="submit" name="timkiem" class="btn-22" value>
                </form>
            </div>

        </nav>

        </div>

    </header>
        <!-----------------------End :: Header ------------------------->
        