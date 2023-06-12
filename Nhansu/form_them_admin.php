<button type="button" id="sidebarToggle" class="bi bi-person-plus btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm Admin Mới</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="them_admin.php" method="post">
                <h5 class="text-center">Thêm Admin Mới</h5>
                <div class="mb-3">
                    <label for="exampleInputMaNV" class="form-label">UserName</label>
                    <input class="form-control" type="text" name="USERNAME" placeholder="UserName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Password</label>
                    <input class="form-control" type="text" name="PASSWORD" placeholder="Password">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" value="Thêm" name="capnhat">
                </div>
            </form>
        </div>
    </div>
</div>