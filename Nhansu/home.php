<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('../connect.php');
//nv
$count_nv = "SELECT count(manv) as count_nv FROM nhanvien ";
$query = mysqli_query($connect, $count_nv);
$nv = mysqli_fetch_array($query);
//pb
$count_pb = "SELECT count(mapb) as count_pb FROM phongban ";
$query = mysqli_query($connect, $count_pb);
$pb = mysqli_fetch_array($query);
// admin
$count_ad = "SELECT count(username) as count_ad FROM admin ";
$query = mysqli_query($connect, $count_ad);
$ad = mysqli_fetch_array($query);
?>
<!-- Page Content  -->



<div class="  d-flex flex-row justify-content-evenly ms-5 mt-5">
    <!-- logo -->

    <!-- <img class="row text-center figure-img" style="margin-left: 300px;" width="50%"  src="img/logo.png" alt="logo" > -->
    <div class="d-flex border bg-white border-1 rounded h-25 w-auto me-5">
        
        <div class="bi bi-house p-3 bg-warning bg-gradient rounded " style="font-size: 50px;color:white;"></div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="ms-5 text-center">Có </h2>
            <i>
                <h3 class="ms-5 text-center ">
                    <?php echo $pb['count_pb']; ?> Phòng Ban

                </h3>
            </i>
        </div>
    </div>
    <div class="d-flex border bg-white border-1 rounded h-25 w-auto me-5">
        <div class="bi bi-check-circle p-3 bg-warning bg-gradient rounded " style="font-size: 50px;color:white;">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="ms-5 text-center">Có </h2>
            <i>
                <h3 class="ms-5 text-center ">
                    <?php echo $ad['count_ad']; ?> Tài khoản

                </h3>
            </i>
        </div>
    </div>
    <div class="d-flex border bg-white border-1 rounded h-25 w-auto">
        <div class="bi bi-person-circle p-3  bg-info bg-gradient rounded " style="font-size: 50px;color:white;">
        </div>
        <div class="d-flex flex-column justify-content-center">

            <h2 class="ms-5 text-center">Có </h2>
            <i>
                <h3 class="ms-5 text-center ">
                    <?php echo $nv['count_nv']; ?> Nhân Viên
                </h3>
            </i>
        </div>
    </div>
    
</div>

<?php include('footer.php') ?>