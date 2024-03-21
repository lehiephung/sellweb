<?php
session_start();

// Kết nối đến cơ sở dữ liệu (Đảm bảo bạn có file connect.php hoặc thay thế nó bằng đoạn mã kết nối cơ sở dữ liệu của bạn)
include('connect.php');

// Lấy id sản phẩm từ URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Kiểm tra kết nối cơ sở dữ liệu
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Kiểm tra id sản phẩm có hợp lệ hay không
if ($id <= 0) {
    die("ID sản phẩm không hợp lệ.");
}

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM sanpham WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Kiểm tra xem giỏ hàng đã được tạo chưa
        if (!isset($_SESSION['giohang'])) {
            $_SESSION['giohang'] = array();
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($_SESSION['giohang'][$id])) {
            // Nếu tồn tại, tăng số lượng lên 1
            $_SESSION['giohang'][$id]++;
        } else {
            // Nếu chưa tồn tại, thêm sản phẩm vào giỏ hàng với số lượng là 1
            $_SESSION['giohang'][$id] = 1;
        }

        // Chuyển hướng người dùng đến trang giỏ hàng
        header("location: cart.php");
        exit();
    } else {
        die("Không tìm thấy sản phẩm với ID: $id");
    }

    // Giải phóng bộ nhớ sau khi sử dụng kết quả truy vấn
    mysqli_free_result($result);
} else {
    die("Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($conn));
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>
