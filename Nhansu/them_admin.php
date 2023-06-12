<?php
include("../connect.php");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}

$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];


if (isset($_POST["capnhat"])) {
    $sql = "INSERT INTO admin VALUES ('$USERNAME','$PASSWORD')";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:admin.php');
