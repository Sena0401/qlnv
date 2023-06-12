<?php
include("../connect.php");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}

$MAPB = $_POST['MAPB'];
$TENPB = $_POST['TENPB'];
$CHITIET = $_POST['CHITIET'];

if (isset($_POST["capnhat"])) {
    $sql = "INSERT INTO phongban VALUES ('$MAPB','$TENPB','$CHITIET')";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:phongban.php');
