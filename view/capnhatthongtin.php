<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/capnhatthongtin.css">
</head>
<body>
    <h1 id="capnhatthongtin">Cập nhật thông tin</h1>
    <form id="thongtin" action='<?php echo 'Model/m_capnhatthongtin.php?name=' . $_COOKIE['name']?> method="POST" enctype="multipart/form-data"'>
        <label for="name">Tên đầy đủ:</label>
        <input type="text" id="name" name="name" value=" <?= $_COOKIE['name'] ?? ''; ?>" disabled="true"><br><br>
        <label for="phone">Số điện thoại:</label>
        <input type="tel" id="phone" name="phone"><br><br>
        <label for="pword">Địa chỉ:</label>
        <input type="address" id="address" name="address"><br><br>
        <label for="pword">Đổi mật khẩu:</label>
        <input type="pword" id="pword" name="pword"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <button type="submit" class="btn-capnhat">Cập nhật</button>
    </form>
</body>
</html>