<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
include('../connect.php');


$MAPB = $_GET['MAPB'];

$query = "SELECT * FROM phongban WHERE MAPB ='$MAPB'";
$ketqua = mysqli_query($connect, $query);
$row = mysqli_fetch_array($ketqua);
?>
<div id="content" class="p-4 p-md-5 pt-5">

    <form class="p-md-3" action="capnhat_pb.php" method="post">
        <h5 class="text-center">Thêm Phòng Ban Mới</h5>
        <div class="mb-3">
            <label for="exampleInputMAPB" class="form-label">Mã Phòng Ban</label>
            <input class="form-control" type="text" name="MAPB" placeholder="Mã Phòng Ban" value="<?php echo $row['MAPB']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Tên Phòng Ban</label>
            <input class="form-control" type="text" name="TENPB" placeholder="Tên Phòng Ban" value="<?php echo $row['TENPB']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputDate" class="form-label">Chi Tiết</label>
            <input class="form-control" type="text" name="CHITIET" placeholder="" value="<?php echo $row['CHITIET']; ?>">
        </div>
           <div class="modal-footer">
            <a class="btn btn-secondary" href="phongban.php" >Close</a>
            <input class="btn btn-primary" type="submit" name="capnhat">
        </div>
    </form>
   
</div>
<?php include('footer.php') ?>