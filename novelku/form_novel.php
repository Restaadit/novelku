<?php 
require_once "koneksi.php";
if(defined("GELANG")===false){
    die("Anda tidak dapat membuka halaman ini secara langsung!");
}
$sql="SELECT * FROM user WHERE soft_delete=0";
$result_user=mysqli_query($conn,$sql);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="?page=simpan_novel" method="post">
                <div class="form-group">
                    <label>Masukkan Judul Novel</label>
                    <input type="text" name="judul_novel" class="form-control" placeholder="Judul Novel ea">
                    <label>Masukkan File Cover</label>
                    <input type="file" name="file_cover" class="form-control">
                    <label>Masukkan File Novel</label>
                    <input type="file" name="file_novel" class="form-control">
                    <label>Masukkan Sinopsis</label>
                    <input type="text" name="sinopsis" class="form-control" placeholder="Sinopsis ea">
                    <label>Masukkan Tanggal Terbit</label>
                    <input type="date" name="tgl_terbit" class="form-control">
                    <label>Masukkan user</label>
                    <select name="id_user" class="form-control">
                        <?php 
                    while($row=mysqli_fetch_assoc($result_user))
                    {
                        echo"<option value='".$row['id_user'],"'>".$row['nama_user']."</option>";
                    } ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>