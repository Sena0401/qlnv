<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
include('../connect.php');


$MANV = $_GET['MANV'];

$query = "SELECT * FROM nhanvien WHERE MANV ='$MANV'";
$ketqua = mysqli_query($connect, $query);
$row = mysqli_fetch_array($ketqua);
?>
<div id="content" class="p-4 p-md-5 pt-5">

    <form class="p-md-3" action="capnhat_nv.php" method="post">
        <h5 class="text-center">Thêm Nhân Viên Mới</h5>
        <div class="mb-3">
            <label for="exampleInputMaNV" class="form-label">Mã Nhân Viên</label>
            <input class="form-control" type="text" name="MANV" placeholder="Mã Nhân Viên" value="<?php echo $row['MANV']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Tên Nhân Viên</label>
            <input class="form-control" type="text" name="HOTENNV" placeholder="Họ Tên Nhân Viên" value="<?php echo $row['HOTENNV']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputDate" class="form-label">Ngày Sinh</label>
            <input class="form-control" type="date" name="NGAYSINH" placeholder="" value="<?php echo $row['NGAYSINH']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputIDnation" class="form-label">Số CCCD/CMND</label>
            <input class="form-control" type="text" name="SOCCCD" placeholder="Số CCCD/CMND" value="<?php echo $row['SOCCCD']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputGender" class="form-label">Giới Tính</label>
            <input class="form-control" type="text" name="GIOITINH" placeholder="Giới Tính" value="<?php echo $row['GIOITINH']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputDateIn" class="form-label">Ngày Vào Làm</label>
            <input class="form-control" type="date" name="NGAYVAOLAM" placeholder="Ngày Vào Làm" value="<?php echo $row['NGAYVAOLAM']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputDateIn" class="form-label">Hệ Số Lương</label>
            <input class="form-control" type="number" name="HESOLUONG" placeholder="Hệ Số Lương" value="<?php echo $row['HESOLUONG']; ?>">
        </div>
        <div class="mb-3">
            <div class="control-group">
                <label class="control-label" for="inputtheloai">Chức Vụ</label>
                <select class="form-select" name="MACV">
                    <option></option>
                    <?php
                    include("../connect.php");
                    $cat_query = mysqli_query($connect, "select * from chucvu");
                    while ($cat_row = mysqli_fetch_array($cat_query)) {
                    ?>
                        <option value="<?php echo $cat_row['MACV']; ?>"><?php echo $cat_row['TENCV']; ?></option>
                    <?php  } ?>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputTDHV" class="form-label">TDHV</label>
            <input class="form-control" type="text" name="TDHV" placeholder="Trình Độ Học Vấn" value="<?php echo $row['TDHV']; ?>">
        </div>
        <div class="mb-3">
            <div class="control-group">
                <label class="control-label" for="inputPB">Tên Phòng Ban</label>
                <select class="form-select" name="MAPB">
                    <option></option>
                    <?php
                    include("../connect.php");
                    $cat_query = mysqli_query($connect, "select * from phongban");
                    while ($cat_row = mysqli_fetch_array($cat_query)) {
                    ?>
                        <option value="<?php echo $cat_row['MAPB']; ?>"><?php echo $cat_row['TENPB']; ?></option>
                    <?php  } ?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" href="nhansu.php" >Close</a>
            <input class="btn btn-primary" type="submit" name="capnhat">
        </div>
    </form>
   
</div>
<?php include('footer.php') ?>