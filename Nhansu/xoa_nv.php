<?php
include('../connect.php');

$MANV = $_GET['MANV'];

mysqli_query($connect, "DELETE FROM nhanvien WHERE MANV = '$MANV'");

header('location:nhansu.php');
