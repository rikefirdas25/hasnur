<?php
$kode_kursus= $_GET['kode_kursus'];
include('koneksi.php');
$delete = mysqli_query($connect," delete from course where kode_kursus='$kode_kursus");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>
