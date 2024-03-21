<?php
include 'connect.php';
 
$hinhanh = $_FILES['hinhanh']['name'];
$hinh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tensp= $_POST['tensp'];
$gia = $_POST['gia'];
$giacu = $_POST['giacu'];
$loaisp = $_POST['loaisp'];
$chuyenmuc_id =$_POST['chuyenmuc_id'];
$xuatxu = $_POST['xuatxu'];
$mausac = $_POST['mausac'];
$tomtat = $_POST['tomtat'];

if (isset($_POST['them_sanpham'])) {
	$sql_them = "INSERT INTO `sanpham` (`hinhanh`, `tensp`, `gia`, `giacu`, `loaisp`, `chuyenmuc_id`, `chatlieu`, `xuatxu`, `mausac`, `kichthuoc`) VALUES ('$hinhanh', '$tensp', '$gia', '$giacu', '$loaisp', '$chuyenmuc_id', '$chatlieu', '$xuatxu', '$mausac', '$kichthuoc')";
	mysqli_query($conn,$sql_them);
	move_uploaded_file($hinh_tmp,'img_product/'.$hinhanh);
	header('location:sanpham.php');
}




?>