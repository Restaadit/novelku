<?php 
require_once "koneksi.php";
if (defined("GELANG")===false)
{
    die("Anda tidak boleh membuka halaman ini secara langsung!");
} 
$sql="SELECT * FROM user WHERE soft_delete=0";
$result=mysqli_query($conn, $sql);
?>
<div class="container">
    <br>
    <a href="?page=form_user" class="btn btn-primary">Tambah Baru</a>
    <br>
    <br>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <th>No. </th>
                    <th>Nama User</th>
                    <th>E-Mail</th>
                    <th>Passwword</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                if (mysqli_num_rows($result)>0) 
                {
                    $no=0;
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $no++;
                        echo "<tr>
                        <td>".$no."</td>
                        <td>".$row['nama_user']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['password']."</td>
                        <td>
                        <a href='?page=form_edit_user&id=".$row['id_user']."'>Edit</a> | 
                        <a style='color:red;' href='?page=hapus_user&id=".$row['id_user']."'>Hapus</a>
                        </td>
                        </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>