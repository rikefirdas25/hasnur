<?php
//membuat variabel dan menyimpan data
$kode_course          = $_POST['kode_course'];
$judul           = $_POST['judul'];
$deskripsi        = $_POST['deskripsi'];
$durasi        = $_POST['durasi'];
$materi      = $_POST['materi'];



include ('koneksi.php');
//menyimpan dan menginput data ke tabel course
$query = " INSERT INTO course (kode_course, judul, deskripsi, durasi, materi)
VALUES('$kode_course','$judul','$deskripsi','$durasi','$materi')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status)
?>