<!-- simpan dengan nama proses_login.php -->
<?php
if(defined("GELANG") === false)
{
    // tidak punya gelang
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}

// ambil data email dan password dari form
$email = $_POST['email'];
$password = $_POST['password']; // ==> masih berbentuk PLAIN TEXT, belum enkripsi

// lalu kita akan query ke tabel user
$sql = "SELECT * FROM user WHERE email='$email' AND `password`=PASSWORD('".$password."')";

// kolom password sy beri backtick supaya tidak error querynya...krn "password" termasuk reserved word di mysql
// password => fungsi mysql

// lalu kita jalankan query
$result = mysqli_query($conn, $sql);

// kita cek ada hasilnya gak?
if(mysqli_num_rows($result) == 1) 
{
    // ini artinya ada record usernya
    // kita beri session -> baca tentang session nanti ya..
    // session sebagai penanda kalau user ini sudah login...dan untuk menyimpan bbrp info terkait user tsb
    // supaya kita tdk perlu query lagi nanti
    $row = mysqli_fetch_assoc($result); // ini adalah data user
    
    $_SESSION['email'] = $row['email'];
    $_SESSION['is_login'] = true;
    $_SESSION['nama_user'] = $row['nama_user'];
    $_SESSION['id_role'] = $row['id_role'];

    // redirect
    echo "<script>
        window.location.replace('index.php?page=default');
    </script>";
}
else
{
    // artinya tidak ada user/salah user/password
    // Redirect ke halaman login
    echo "<script>
        window.location.replace('index.php?page=login');
    </script>";
}





