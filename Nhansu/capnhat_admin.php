<?php
include("../connect.php");



$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];




if (isset($_POST["capnhat"])) {
    $sql = "UPDATE admin SET USERNAME='$USERNAME', PASSWORD=' $PASSWORD' WHERE USERNAME = '$USERNAME'";
    $ketqua = mysqli_query($connect, $sql);
}


header('location:admin.php');
