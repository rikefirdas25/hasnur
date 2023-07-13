<?php
include 'header.php';
?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data kursus</h4>
<form action="save_course.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>Kode kursus</td>
                <td><input name="kode_kursus" type="textbox" placeholder="Kode_kursus" class="form-control"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input name="judul" type="textbox" placeholder="Judul" class="form-control"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input name="deskripsi" type="textbox" placeholder="Dekripsi" class="form-control"></td>
            </tr>
            <tr>
              <td>Durasi</td>
              <td><input name="durasi" type="textbox" placeholder="Durasi" class="form-control"></td>
          </tr>
          <tr>
              <td>Materi</td>
              <td><input name="materi" type="textbox" placeholder="Materi" class="form-control"></td>
          </tr>
        

            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-primary">
            Tambahkan Data</button>
                <a href="index.php" class="btn btn-danger">
                    Batal</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php
include 'foother.php';
?>
