<?php
require ('connect.php');
  
$id = $_GET['id'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinh_tmp = $_FILES['hinhanh']['tmp_name'];
$tensp = $_POST['tensp'];
$tacgia = $_POST['tacgia'];
$gia = $_POST['gia'];
$giacu = $_POST['giacu'];
$loaisp = $_POST['loaisp'];
$chuyenmuc_id = $_POST['id_theloai'];
$xuatxu = $_POST['xuatxu'];
$mausac = $_POST['mausac'];
$chatlieu = $_POST['chatlieu'];
$kichthuoc = $_POST['kichthuoc'];
$tomtat = $_POST['tomtat'];

if(isset($_POST['suasanpham'])) {
	if($hinhanh != '') {
		move_uploaded_file($hinh_tmp, 'img_product/' . $hinhanh);
		$sql = "SELECT * FROM sanpham WHERE id = '$id' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($query)) {
			unlink('img_product/' . $row['hinhanh']);
		}
		$sql_sua = "UPDATE sanpham SET hinh='$hinhanh', tensanpham='$tensp', tacgia='$tacgia', gia='$gia', giacu='$giacu', loaisp='$loaisp', id_theloai='$id_theloai',xuatxu='$xuatxu',mausac='$mausac',chatlieu='$chatlieu',kichthuoc='$kichthuoc', tomtat='$tomtat' WHERE id='$id'";
	} else {
		$sql_sua = "UPDATE sanpham SET tensanpham='$tensp', tacgia='$tacgia', gia='$gia', giacu='$giacu', loaisp='$loaisp',id_theloai='$id_theloai',mausac='$mausac',xuatxu='$xuatxu',chatlieu='$chatlieu',kichthuoc='$kichthuoc', tomtat='$tomtat' WHERE id='$id'";
	}
	mysqli_query($conn, $sql_sua);
	header('location:sanpham.php');
}
?>
