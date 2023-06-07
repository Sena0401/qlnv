<?php
include("../connect.php");


$MAPB = $_POST['MAPB'];
$TENPB = $_POST['TENPB'];
$CHITIET = $_POST['CHITIET'];



if (isset($_POST["capnhat"])) {
    $sql = "UPDATE phongban SET MAPB='$MAPB', TENPB=' $TENPB',CHITIET='$CHITIET' WHERE MAPB = '$MAPB'";
    $ketqua = mysqli_query($connect, $sql);
}


echo "</script>";
header('location:phongban.php');
