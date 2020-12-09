<?php
    // simpan dengan nama form_genre.php
    if(defined("GELANG") === false)
    {
        // tidak punya gelang
        die("Anda tidak boleh membuka halaman ini secara langsung!");
    }
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="?page=simpan_genre" method="post">
                <div class="form-group">
                    <label>Masukkan Genre</label>
                    <input type="text" name="nama_genre" class="form-control" placeholder="Misal: Sci-Fi">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>