<?php
$kode_course= $_GET['kode_course'];
include('koneksi.php');
$delete = mysqli_query($connect," delete from course where kode_kursus='$kode_course");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>