<?php
include('../connect.php');

$USERNAME = $_GET['USERNAME'];

mysqli_query($connect, "DELETE FROM admin WHERE USERNAME = '$USERNAME'");

header('location:admin.php');
