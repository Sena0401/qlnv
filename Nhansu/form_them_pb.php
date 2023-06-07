<button type="button" id="sidebarToggle" class="bi bi-person-plus btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm Phòng Ban Mới</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="them_pb.php" method="post">
                <h5 class="text-center">Thêm Phòng Ban Mới</h5>
                <div class="mb-3">
                    <label for="exampleInputMaNV" class="form-label">Mã Phòng Ban</label>
                    <input class="form-control" type="text" name="MAPB" placeholder="Mã Phòng Ban">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Tên Phòng Ban</label>
                    <input class="form-control" type="text" name="TENPB" placeholder="Tên Phòng Ban">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Chi Tiết</label>
                    <input class="form-control" type="text" name="CHITIEt" placeholder="Chi Tiết Phòng Ban">
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="capnhat">
                </div>
            </form>
        </div>
    </div>
</div>