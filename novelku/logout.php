<!-- simpan dengan nama logout.php -->
<?php
if(defined("GELANG") === false)
{
    // tidak punya gelang
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}

// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "<script>
    window.location.replace('index.php?page=login');
</script>";
?>