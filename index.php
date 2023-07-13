<?php
include'header.php';
?>
      <div class="container" style="margin-top: 50px;">
        <h4>Data Course</h4>
        <a href ="add_course.php" class="btn btn-info">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>kode_kursus</th>
                <th>judul</th>
                <th>deskripsi</th>
                <th>durasi</th>
                <th>materi</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $course = mysqli_query($connect," select * from course");
            while($row=mysqli_fetch_array($course)){
            ?>
            <tr>
                <th><?php echo $nomor;?></td>
                <td><?php echo $row['kode_kursus']?></td>
                <td><?php echo $row['judul']?></td>
                <td><?php echo $row['deskripsi']?></td>
                <td><?php echo $row['durasi']?></td>
                <td><?php echo $row['materi']?></td>
                
                <td>
                    <a href="edit_course.php?nim=<?php echo $row['kode_kursus'];?>" class="btn btn-danger">Edit</a>
                    <a href="delete_course.php?nim=<?php echo $row['kode_kursus'];?> " class="btn btn-warning">Delete</a>
                </td>
            </tr>
          
            <?php
        $nomor++;
            }
            ?>
            </tbody>
        </table>

        </div>
        <?php
include'foother.php';
?>

   
