<?php 
require_once "koneksi.php";
if(defined("GELANG") === false)
{
    // tidak punya gelang
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}
$nama=$_POST['nama_user'];
$email=$_POST['email'];
$pass=$_POST['password'];
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="UPDATE user SET nama_user='$nama',email='$email',password='$pass' WHERE id_user='$id'";
}else{
    $sql = "INSERT INTO user (nama_user,email,password) VALUES ('$nama','$email','$pass')";
}
mysqli_query($conn, $sql);
echo "<script>
window.location.replace('index.php?page=user');
</script>"
?>