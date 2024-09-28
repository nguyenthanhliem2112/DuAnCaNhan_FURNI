<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/dangnhap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <main>
        <div class="container">
            <div class="row">
               <div class="boxcenter">
                <h1>ĐĂNG NHẬP</h1>
                <form action="Model/m_login.php" method="POST" enctype="multipart/form-data">
                    <div class="taikhoan">
                        <div class="email">
                            <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="uname">
                            
                        </div> 

                    </div>
                    <div class="matkhau">
                        <div class="password">
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="pw">
                        </div>
                    </div>
                    <div class="quenmatkhau">
                        <a href=""></a>
                    </div>
                <div class="btn-1">
                <input class="input" type="submit" value="Đăng nhập" class="btn float-right login_btn">
                    <a href="#"><input type="button" value="Nhập lại" name="" id=""></a>
                </div>
                </form>
               
               </div>
            </div>
        </div>
        
        
    </main>

</body>
</html>