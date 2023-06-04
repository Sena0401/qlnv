<?php
include("../connect.php");


$MANV = $_POST['MANV'];
$HOTENNV = $_POST['HOTENNV'];
$NGAYSINH = $_POST['NGAYSINH'];
$SOCCCD = $_POST['SOCCCD'];
$GIOITINH = $_POST['GIOITINH'];
$NGAYVAOLAM = $_POST['NGAYVAOLAM'];
$HESOLUONG = $_POST['HESOLUONG'];
$MACV = $_POST['MACV'];
$TDHV = $_POST['TDHV'];
$MAPB = $_POST['MAPB'];


if (isset($_POST["capnhat"])) {
    $sql = "UPDATE nhanvien SET MANV='$MANV', HOTENNV=' $HOTENNV',NGAYSINH='$NGAYSINH',SOCCCD='$SOCCCD',
        GIOITINH='$GIOITINH',NGAYVAOLAM='$NGAYVAOLAM',HESOLUONG='$HESOLUONG',MACV='$MACV',TDHV='$TDHV',MAPB='$MAPB' 
        WHERE MANV = '$MANV'";
    $ketqua = mysqli_query($connect, $sql);
}

echo "<script>";
if ($ketqua) {
    echo  "alert ('Cập nhật thành công !!');";
} else {
    echo "alert ('Cập nhật không thành công !!');";
}
echo "window.location='nhansu.php';";
echo "</script>";
