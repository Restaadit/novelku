<?php
require_once "koneksi.php";
// filename: simpan_genre.php

if(defined("GELANG") === false)
{
    // tidak punya gelang
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}

$genre = $_POST['nama_genre'];
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="UPDATE genre SET nama_genre='$genre' WHERE id_genre='$id'";
}else{
    $sql = "INSERT INTO genre (nama_genre) VALUES ('$genre')";
}
mysqli_query($conn, $sql);


echo "<script>
window.location.replace('index.php?page=genre');
</script>";