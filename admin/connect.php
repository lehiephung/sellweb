<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sellweb";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Đặt bộ mã tự động là utf-8 đối với kết nối này
if (!mysqli_set_charset($conn, "utf8")) {
    printf("Lỗi khi đặt bộ mã tự động utf8: %s\n", mysqli_error($conn));
}
