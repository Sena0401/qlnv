<?php
include("../connect.php");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}

$MAPB = $_POST['MAPB'];
$TENPB = $_POST[''];

if (isset($_POST["capnhat"])) {
    $sql = "INSERT INTO nhanvien VALUES ('$MASACH','$HOTENNV','$NGAYSINH','$SOCCCD','$GIOITINH','$NGAYVAOLAM','$HESOLUONG','$MACV','$TDHV','$MAPB')";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:nhansu.php');
