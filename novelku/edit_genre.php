<?php
    // simpan dengan nama form_edit_genre.php
    if(defined("GELANG") === false)
    {
        // tidak punya gelang
        die("Anda tidak boleh membuka halaman ini secara langsung!");
    }

    $id = $_GET['id'];
    // lakukan query ke database
    $sql = "select * from genre where id_genre=".$id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
    <div class="row">
        <div class="col">

            <form action="?page=simpan_genre&id=<?php echo $row['id_genre'];?>" method="post">

                <div class="form-group">
                    <label>Masukkan Genre</label>
                    <input type="text" name="nama_genre" value="<?php echo $row['nama_genre'];?>" class="form-control" placeholder="Misal: Sci-Fi">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan" />

            </form>   

        </div>
    </div>
    </div>
