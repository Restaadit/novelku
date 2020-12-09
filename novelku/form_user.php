<?php 
if (defined("GELANG")===false) {
    die("anda tidak dapat membuka halaman ini secara langsung!");
}
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="?page=simpan_user" method="post">
                <div class="form-group">
                    <label>Masukkan Nama User</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Nama User ">
                    <label>Masukkan E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Email ">
                    <label>Masukkan Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password ">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>