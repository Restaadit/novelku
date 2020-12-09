<?php
require_once "koneksi.php";
if (defined("GELANG")===false)
{
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}
$id=$_GET['id'];
$sql="SELECT * FROM genres WHERE id_genre=".$id;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="?page=simpan_genre&id=<?= $row['id_genre'];?>" method="post">
                <div class="form-group">
                    <label>Masukkan Genre</label>
                    <input type="text" name="nama_genre" value="<?= $row['nama_genre'];?>" class="form-control"
                        placeholder="Misal: Sci-Fi">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>
