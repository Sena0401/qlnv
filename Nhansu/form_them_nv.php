<button type="button" id="sidebarToggle" class="bi bi-person-plus btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm Nhân Viên Mới</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="them_nv.php" method="post">
                <h5 class="text-center">Thêm Nhân Viên Mới</h5>
                <div class="mb-3">
                    <label for="exampleInputMaNV" class="form-label">Mã Nhân Viên</label>
                    <input class="form-control" type="text" name="MASACH" placeholder="Mã Nhân Viên">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Tên Nhân Viên</label>
                    <input class="form-control" type="text" name="HOTENNV" placeholder="Họ Tên Nhân Viên">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Ngày Sinh</label>
                    <input class="form-control" type="date" name="NGAYSINH" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputIDnation" class="form-label">Số CCCD/CMND</label>
                    <input class="form-control" type="text" name="SOCCCD" placeholder="Số CCCD/CMND">
                </div>
                <div class="mb-3">
                    <label for="exampleInputGender" class="form-label">Giới Tính</label>
                    <input class="form-control" type="text" name="GIOITINH" placeholder="Giới Tính">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDateIn" class="form-label">Ngày Vào Làm</label>
                    <input class="form-control" type="date" name="NGAYVAOLAM" placeholder="Ngày Vào Làm">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDateIn" class="form-label">Hệ Số Lương</label>
                    <input class="form-control" type="number" name="HESOLUONG" placeholder="Hệ Số Lương">
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
                    <input class="form-control" type="text" name="TDHV" placeholder="Trình Độ Học Vấn">
                </div>
                <div class="mb-3">
                    <div class="control-group">
                        <label class="control-label" for="inputPB">Tên Phòng Ban</label>
                        <select class="form-select" name="MAPB" >
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="capnhat">
                </div>
            </form>
        </div>
    </div>
</div>