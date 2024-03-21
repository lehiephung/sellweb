<?php
    require ('connect.php');
    if(isset($_GET['id'])){
    $id=$_GET['id'];
}
    $sql= "SElECT * FROM sanpham WHERE id = '$id' LIMIT 1 ";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('img_product/'.$row['hinhanh']);
    }
    $sql_xoa="DELETE FROM `sanpham` WHERE `id` =$id";
    $ketqua=mysqli_query($conn,$sql_xoa);

    echo "<script>";
                if($ketqua){
                    echo "alert('Xóa thành công');";
                }else{
                    echo "alert('Xóa không thành công');";
                }
                echo "window.location = 'sanpham.php';";
            echo "</script>";
?>