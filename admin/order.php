<?php
include("../admin/includes/header.php");
include_once '../Model/m_danhmuc.php';
include_once '../Model/m_products.php';
include_once '../Model/m_giohang.php';


$danhmuc= getCategory_Home_List(); 
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Đơn hàng</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                           
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Người mua</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Code</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sản phẩm</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Địa chỉ</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số điện thoại</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tổng tiền</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ghi chú</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phương thức thanh toán</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                     $iduser=0;
                                     $idorder=0;
                                     if(isset($_POST['btn_order'])){
             
                                             $fullname =$_POST['fullname'];
                                             $phone =$_POST['phone'];
                                             $address =$_POST['address']; 
                                             $pword =rand(100000,999999);
                                             $email = $_POST['email'];
                                             $ghichu = $_POST['ghichu'];
                                             $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
                                             if(!isset($_SESSION['uname'])){
                                                     $iduser = insert_user_returnID($fullname, $pword, $email, $phone);
             
                                             }else{
                                                     $iduser= $_SESSION['uname']['id'];
                                             }
                                             $today=date("mdY");
                                             $today_code=$today;
                                             $stt_code=get_id_oder_lastest()+1;
                                             $ordercode= "FRU". $today_code.$stt_code;
                                             $total=get_total();
             
                                                  $idorder=insert_order_returnID($iduser,$ordercode, $total, $fullname, $phone, $address,$ghichu,$phuongthucthanhtoan);
                                            }
                                    foreach($_SESSION['giohang'] as $item){
                                        extract($item);
                                        $html_donhang.=' <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$item['id_donhang'].'</p>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">'.$fullname.'</h6>
                                                        <p class="text-xs text-secondary mb-0">'.$uname.'</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$ma.'</p>
                                            </td>
                                        
                                            <td>
                                            <a href="./order-detail.php?id_order=">'.$ten.'</a>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$diachi.'</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$dienthoai.'</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$gia.'</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$ghichu.'</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">'.$phuongthucthanhtoan.'</p>
                                            </td>
                                     
                                     
                                        </tr>';
                                    }
                                    ?>
                                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
