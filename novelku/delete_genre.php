<?php
// filename: simpan_genre.php

if(defined("GELANG") === false)
{
    // tidak punya gelang
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}

if(isset($_GET['id']))
{
    // hapus data
    $id = $_GET['id'];
    $sql = "UPDATE genre SET soft_delete=1 where id_genre='$id'";
}


mysqli_query($conn, $sql);


//redirect

echo"<script>
    window.location.replace('index.php?page=genre');
    </script>";