<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
include('../connect.php');


$USERNAME = $_GET['USERNAME'];

$query = "SELECT * FROM admin WHERE USERNAME ='$USERNAME'";
$ketqua = mysqli_query($connect, $query);
$row = mysqli_fetch_array($ketqua);
?>
<div id="content" class="p-4 p-md-5 pt-5">

    <form class="p-md-3" action="capnhat_admin.php" method="post">
        <h5 class="text-center">Chỉnh Sửa Admin</h5>
        <div class="mb-3">
            <label for="exampleInputMaNV" class="form-label">Tên Đăng Nhập</label>
            <input class="form-control" type="text" name="USERNAME" placeholder="Tên Đăng Nhập"
                value="<?php echo $row['USERNAME']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Mật Khẩu</label>
            <input class="form-control" type="text" name="PASSWORD" placeholder="Mật Khẩu"
                value="<?php echo $row['PASSWORD']; ?>">
        </div>

        <div class="modal-footer">
            <a class="btn btn-secondary" href="nhansu.php">Close</a>
            <input class="btn btn-primary" type="submit" name="capnhat">
        </div>
    </form>

</div>
<?php include('footer.php') ?>