<?php
//membuat variabel dan menyimpan data
$kode_kursus          = $_POST['kode_kursus'];
$judul           = $_POST['judul'];
$deskripsi           = $_POST['deskripsi'];
$durasi          = $_POST['durasi'];
$materi       = $_POST['materi'];




//memanggil koneksi
include ('koneksi.php');
//query update ke tabel course
$query = "UPDATE course SET judul='$judul', deskripsi='$deskripsi',durasi='$durasi',
materi='$materi',  where  kode_kursus='$kode_kursus'";


$update = mysqli_query($connect,$query);
//check status apakah query berhasil atau tidak
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
//redirect ke halaman index
header("location:index.php?status=".$status)
?>
