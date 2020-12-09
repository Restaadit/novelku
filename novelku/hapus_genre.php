<?php
require_once "koneksi.php";
if (defined("GELANG")===false)
{
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="UPDATE genres SET soft_delete=1 WHERE id_genre='$id'";
    mysqli_query($conn,$sql);
}
mysqli_query($conn,$sql);
echo "<script>
window.location.replace('index.php?page=genre');
</script>";
?>
