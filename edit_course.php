<?php 
include 'header.php';

$kode_course= $_GET['course'];
$query = mysqli_query($connect, "select *from course where course= '$ckode_course'");
$course = mysqli_fetch_array ($query);



?>
<div class="container" style="margin-top: 50px;">
    <h4> Edit Data course</h4>
    <Form action="update_nasabah.php" method="post">
    <table class="table table-bordered">
            <tr>
                <td>kode_kursus</td>
                <td><input type="text" name="kode_kursus" value="<?php echo $course['kode_kursus'] ?>" Placeholder="kode_kursus" class="form-control"></td>
            </tr>
            
            <tr>
                <td>judu;</td>
                <td><input type="text" name="judul" value="<?php echo $course['judul'] ?>" Placeholder="judul" class="form-control"></td>
            </tr>

            <tr>
                <td>deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?php echo $course['deskripsi'] ?>" Placeholder="deskripsi" class="form-control"></td>
            </tr>

            <tr>
              <td>durasi</td>
              <td><input type="text" name="durasi" value="<?php echo $course['durasi'] ?>" Placeholder="durasi" class="form-control"></td>
          </tr>

          <tr>
              <td>materi</td>
              <td><input type="text" name="nomor_hp" value="<?php echo $materi['mate'] ?>" Placeholder="materi" class="form-control"></td>
          </tr>  
                
                <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">
            <i class =" fa fa-floppy-o" aria -hidden="true"></i>
            Simpan Perubahan</button>
                <a href="index.php" class="btn btn-primary">
                    <i class ="fa fa-reply" aria hidden="true"></i>
                    Batal</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php 
include 'foother.php';
?>
