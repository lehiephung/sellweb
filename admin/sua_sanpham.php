<?php
require ('connect.php');

// Kiểm tra xem biến $_GET['id'] đã được truyền qua URL hay không
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

include 'menu_header_admin.php';
    
$sql_sua_sp = "SELECT * FROM sanpham WHERE id = '$id' LIMIT 1";
$query_sua_sp = mysqli_query($conn, $sql_sua_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php
while($row_sua = mysqli_fetch_array($query_sua_sp)){
?>
<form action="xuly_sua_sanpham.php?id_sanpham=<?php echo $_GET['id']?>" method="post" role="form" enctype="multipart/form-data">
    <h3>Quản lý Sản Phẩm</h3>
    <h5 style="font-size: 24px; color: red;">Bạn Phải Chọn Hình Để Cập Nhật</h5> 
    <div class="form-group">
        <input type="file" class="form-control" name="hinh" required>
        <img src="/../sellweb (1)/admin/img_product/<?php echo$row_sua["hinhanh"]?>" width="200px">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['tensp']?>" name="tensp" required>
        <label for="">Tên Sản Phẩm</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['gia']?>" name="gia" required>
        <label for="">Giá</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['giacu']?>" name="giacu" required>
        <label for="">Giá Cũ</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['loaisp']?>" name="loaisp" required>
        <label for="">Loại sản phẩm</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['chatlieu']?>" name="chatlieu" required>
        <label for="">Chất liệu</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['xuatxu']?>" name="xuatxu" required>
        <label for="">Xuất xứ</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['mausac']?>" name="mausac" required>
        <label for="">Màu sắc</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row_sua['kichthuoc']?>" name="kichthuoc" required>
        <label for="">Kích thước</label>
    </div>
    <h5 style="font-size: 24px;">Tóm Tắt Sơ Lược</h5> 
    <div class="form-group">
        <textarea rows="10" width="100%" cols="150px" name="tomtat"><?php echo !empty($row_sua['tomtat']) ? $row_sua['tomtat'] : '' ?></textarea>
    </div>
    <input type="submit" value="Sửa Sản Phẩm" name="suasanpham" id="btn-login"><br>
</form> 
<?php
}
?> 
</html>
