<?php
include("../connect.php");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}
mysqli_query($connect, "SET NAMES 'utf8'");

$MASACH = $_POST['MASACH'];
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
    $sql = "INSERT INTO nhanvien VALUES ('$MASACH','$HOTENNV','$NGAYSINH','$SOCCCD','$GIOITINH','$NGAYVAOLAM','$HESOLUONG','$MACV','$TDHV','$MAPB')";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:nhansu.php');
