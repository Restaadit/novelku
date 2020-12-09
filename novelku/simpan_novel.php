<?php 
require_once "koneksi.php";
if (defined("GELANG")===false) {
    die("Anda tiak boleh membuka halaman ini secara langsung!");
}
$judul=$_POST['judul_novel'];
$cover=$_POST['file_cover'];
$novel=$_POST['file_novel'];
$sinopsis=$_POST['sinopsis'];
$tgl_terbit=$_POST['tgl_terbit'];
$user=$_POST['id_user'];
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="UPDATE novel SET judul_novel='$judul',file_cover='$cover',file_novel='$novel',sinopsis='$sinopsis',tgl_terbit='$tgl_terbit',id_user='$user'";
}else {
    $sql="INSERT INTO novel (judul_novel,file_cover,file_novel,sinopsis,tgl_terbit,id_user) VALUES ('$judul','$cover','$novel','$sinopsis','$tgl_terbit','$user')";
}
mysqli_query($conn, $sql);
echo "<script>
window.location.replace('index.php?page=novel');
</script>"
?>