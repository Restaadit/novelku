<?php
require_once "koneksi.php";
if (defined("GELANG")===false)
{
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}
$sql="select * from genre where soft_delete=0";
$result=mysqli_query($conn,$sql);
 ?>
<div class="container">
    <br>
    <a href="?page=form_genre" class="btn btn-primary">Tambah Baru</a>
    <br>
    <br>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <th>No. </th>
                    <th>Nama Genre</th>
                    <th>Aksi</th>
                </tr>
                <?php
            if(mysqli_num_rows($result)>0)
            {
                $no=0;
                while($row=mysqli_fetch_assoc($result))
                {
                    $no++;
                    echo "<tr>
                    <td>".$no."</td>
                    <td>".$row['nama_genre']."</td>
                    <td>
                    <a href='?page=form_edit_genre&id=".$row['id_genre']."'>Edit</a> |
                    <a style='color:red;' href='?page=hapus_genre&id=".$row['id_genre']."'>Hapus</a>
                    </td>
                    </tr>";
                }
            }
            ?>
            </table>
        </div>
    </div>
</div>
