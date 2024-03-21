<?php
session_start();
?>
<?php
include 'connect1.php';
if (isset($_POST['dangnhap'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SElECT * FROM taikhoan WHERE password = '$password' AND email='$email'  LIMIT 1 ";
	$result = $conn->query($sql)->fetch_assoc();
	$row = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($row);
	echo "<script>";
	if ($count > 0) {
		$row_data = mysqli_fetch_array($row);
		$_SESSION['taikhoan'] = $row_data['tenkhachang'];
		//$_SESSION['taikhoan'] = $email;
		$_SESSION['id_khachang'] = $row_data['id_khachang'];
		echo "alert('Đăng Nhập Thành Công');";
		header('location:index.php');
	} else {

		echo "alert('Tài Khoản Không Tồn Tại');";

		header('location:dangnhap.php');
	}
	echo "</script>";
	if ($result['role'] == "admin") header('Location:http://localhost/sellweb/admin/index.php');
}

?>