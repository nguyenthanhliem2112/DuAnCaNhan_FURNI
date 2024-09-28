<?php 
    include_once '../Model/connect.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $conn = dbConnection();
    $sql = "DELETE FROM user WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $userId);
    if ($stmt->execute()) {
        
        header('Location:../admin/user.php'); 
    } else {
        echo "Xóa người dùng thất bại!";
    }
} else {
    echo "Không tìm thấy ID người dùng cần xóa.";
}
?>