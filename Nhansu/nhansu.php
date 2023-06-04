<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <section class="intro">
        <div class="h-100 ">
            <div class=" mask d-flex align-items-center  h-100">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-12">
                            
                            <div class="table-responsive bg-white">
                                
                                <?php
                                include("../connect.php");

                                // Truy vấn
                                if (isset($_REQUEST["search"])) {
                                    $search = addslashes($_GET['search']);
                                    $key = $_GET['search'];
                                    $query = "SELECT * FROM chucvu, phongban,nhanvien  WHERE hotennv = like '%$search%' 
                                                                            AND chucvu.macv = nhanvien.macv 
                                                                             AND phongban.mapb = nhanvien.mapb ";
                                } else {
                                    $query = "SELECT * FROM chucvu, phongban,nhanvien  WHERE chucvu.macv = nhanvien.macv AND phongban.mapb = nhanvien.mapb ";
                                }
                                $ketqua = mysqli_query($connect, $query);


                                ?>
                                <h1>DANH SÁCH NHÂN VIÊN NHÀ HÀNG</h1>
                                <div class="d-flex justify-content-between ">
                                <?php include("form_them_nv.php"); ?>
                                <form class="" action="" method="get">
                                    <div class=" input-group rounded  w-100 border border-info">
                                        <input type="text" name="search" class="form-control" placeholder="Search" />
                                        <input class="bi bi-search btn btn-primary" type="submit" value="Tìm">
                                        <input value="Tất Cả" class="btn btn-success   " type="button" onclick="window.location.href='book.php'">
                                    </div>
                                </form>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã Nhân Viên</th>
                                            <th scope="col">Họ Tên Nhân Viên</th>
                                            <th scope="col">Ngày Sinh</th>
                                            <th scope="col">Số CCCD</th>
                                            <th scope="col">Giới Tính</th>
                                            <th scope="col">Ngày Vào Làm</th>
                                            <th scope="col">Hệ Số Lương</th>
                                            <th scope="col">Chức Vụ</th>
                                            <th scope="col">TĐHV</th>
                                            <th scope="col">Tên Phòng Ban</th>
                                            <th scope="col">Xóa</th>
                                            <th scope="col">Cập Nhật</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            while ($row = mysqli_fetch_array($ketqua)) {
                                                echo "<tr>";
                                                echo "<td scope=\"row\" style=\"color: #666666;\">" . $row["MANV"] . "</td>";
                                                echo "<td>" . $row["HOTENNV"] . "</td>";
                                                echo "<td>" . $row["NGAYSINH"] . "</td>";
                                                echo "<td>" . $row["SOCCCD"] . "</td>";
                                                echo "<td>" . $row["GIOITINH"] . "</td>";
                                                echo "<td>" . $row["NGAYVAOLAM"] . "</td>";
                                                echo "<td>" . $row["HESOLUONG"] . "</td>";
                                                echo "<td>" . $row["TENCV"] . "</td>";
                                                echo "<td>" . $row["TDHV"] . "</td>";
                                                echo "<td>" . $row["TENPB"] . "</td>";

                                                echo "<td><center><a class=\"text-decoration-none bi bi-trash3 btn btn-danger \" href=\"xoa_nv.php?MANV=" . $row["MANV"] . "\"> Xoá</a> </center> </td>";
                                                echo "<td><center><a class=\"text-decoration-none bi bi-pen btn btn-info\" href=\"chinhsua_nv.php?MANV=" . $row["MANV"] . "\"> Cập nhật</a></center></td>";
                                            }
                                            ?>
                                        </tr>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php include('footer.php') ?>