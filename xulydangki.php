<?php

include 'connect1.php';
if(isset($_POST['btn-dangki'])){
	echo "<pre>";
	print_r($_POST);
	$email = $_POST['email'];
	$tenkhachhang = $_POST['tenkh'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$password = $_POST['password'];}

	if (!empty($email) && !empty($password)&& !empty($tenkhachhang)&& !empty($diachi)&& !empty($sdt)) {
   		// echo"<pre>";
   		// print_r($_POST);
   		 $sql= mysqli_query( $conn,"INSERT INTO `taikhoan`( `tenkhachhang`,`diachi`,`sdt`,`email`, `password`) VALUES ('$tenkhachhang','$diachi','$sdt','$email','$password')");
   		 echo"<script>";
			if ($sql) {
			echo "alert('Dang ki thành công');";
			$_SESSION['taikhoan'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($conn);
			header('location:dangnhap.php');
                }else{
                    echo "alert('Dang ki không thành công');";
                }
                echo "window.location = 'dangnhap.php';";
	echo"</script>";
}
?>