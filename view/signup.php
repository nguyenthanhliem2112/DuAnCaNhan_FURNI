<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/dangky.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <main>
        <div class="container">
            <div class="row">
               <div class="boxcenter">
                <h1>ĐĂNG KÝ</h1>
                <form action="Model/m_signup.php" method="POST" enctype="multipart/form-data">
                <div class="taikhoan">
                            <div class="email">
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên đầy đủ">                           
                            </div> 

                        </div>
                        <div class="matkhau">
                            <div class="password">
                                <input type="text" class="form-control" name="usr" placeholder="Tên đăng nhập *">
                            </div>
                        
                        </div>
                        <div class="matkhau2">
                            <div class="password2">
                                <input type="password" class="form-control" name="pwd" placeholder="Nhập mật khẩu *">
                            </div>
                        </div>
                        
                
                <div class="btn-1">
                <a href="#"><input type="submit" name="submit" value="Đăng ký"></a>
                    <a href="index.php?mod=act=trangchu"><input type="button" value="Hủy"></a>

                </div>
                </form>
            
               
               </div>
            </div>
        </div>
        
        
    </main>
</body>
</html>