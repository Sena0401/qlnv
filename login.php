<?php
include("connect.php");
if (isset($_POST['submit'])) {
    session_start();
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $query = "SELECT * FROM admin WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'";
    $result = mysqli_query($connect, $query);
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($num_row > 0) {

        header('location:Nhansu/home.php');
        $_SESSION['id'] = $row['user_id'];
    } else { ?>
        <div class="alert alert-danger">Access Denied</div>
<?php
    }
}
?>