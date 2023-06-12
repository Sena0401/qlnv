<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <section class="intro">
        <div class="h-100 ">
            <div class=" mask d-flex align-items-center h-100">
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
                                    $query = "SELECT * FROM phongban WHERE TENPB  like '%$search%'";
                                } else {
                                    $query = "SELECT * FROM phongban ";
                                }
                                $ketqua = mysqli_query($connect, $query);


                                ?>
                                <h1>DANH SÁCH NHÂN VIÊN NHÀ HÀNG</h1>
                                <div class="d-flex justify-content-between ">
                                    <?php include("form_them_pb.php"); ?>
                                    <form class="" action="" method="get">
                                        <div class=" input-group rounded  w-100 border border-info">
                                            <input type="text" name="search" class="form-control" placeholder="Search" />
                                            <input class="bi bi-search btn btn-primary" type="submit" value="Tìm">
                                            <input value="Tất Cả" class="btn btn-success   " type="button" onclick="window.location.href='phongban.php'">
                                        </div>
                                    </form>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã Phòng Ban</th>
                                            <th scope="col">Tên Phòng Ban</th>
                                            <th scope="col">Chi Tiết</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            while ($row = mysqli_fetch_array($ketqua)) {
                                                echo "<tr>";
                                                echo "<td scope=\"row\" style=\"color: #666666;\">" . $row["MAPB"] . "</td>";
                                                echo "<td>" . $row["TENPB"] . "</td>";
                                                echo "<td>" . $row["CHITIET"] . "</td>";


                                                echo "<td><center><a class=\"text-decoration-none bi bi-trash3 btn btn-danger \" href=\"xoa_phongban.php?MAPB=" . $row["MAPB"] . "\"> Xoá</a> </center> </td>";
                                                echo "<td><center><a class=\"text-decoration-none bi bi-pen btn btn-info\" href=\"chinhsua_pb.php?MAPB=" . $row["MAPB"] . "\"> Cập nhật</a></center></td>";
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