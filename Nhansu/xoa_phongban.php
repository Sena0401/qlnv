<?php
include('../connect.php');

$MAPB = $_GET['MAPB'];

mysqli_query($connect, "DELETE FROM phongban WHERE MAPB = '$MAPB'");

header('location:phongban.php');
