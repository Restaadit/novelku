<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Novelku - Read Whatever You Want</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
    <?php
            // tandai pake gelang
            define("GELANG",1);

            require_once "koneksi.php";

            // cek kalau sudah login, ambil data menu
			if(isset($_SESSION['is_login']))
			{
				// query ke tabel menu
				$sql = "select * from menu_role as a 
                inner join menus as b on a.id_menu=b.id_menu 
                where a.id_role=".$_SESSION['id_role'];
                
				$menus = mysqli_query($conn, $sql);
			}
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="/">Novelku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Subscribe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Write</a>
                    </li>
                    <?php 
                if(isset($_SESSION['is_login']) == false)
                {
                      echo '<li class="nav-item">
                          <a class="nav-link btn btn-success sign_in_button" href="?page=login">Sign In</a>
                      </li>';
                }
                else
                {
                      while ($row = mysqli_fetch_assoc($menus)) 
                      {
                            echo '<li class="nav-item">
                                <a class="nav-link" href="?page='.$row['file'].'">'.$row['nm_menu'].'</a>
                              </li>';  
                      }
                      echo '<li class="nav-item">
                          <a class="nav-link btn btn-success sign_in_button" href="?page=logout">Logout</a>
                      </li>';
                }
                ?>
                </div>
                </ul>
            </div>
        </nav>
        <?php 
        if(isset($_GET['page'])){
        //ada variable page
        $page=$_GET['page'];
        //siapkan file .php yang diinginkan
        $file_php=$page.".php";
         // cek file ada atau tidak?
                if(file_exists($file_php))
                {
                    // pengecekan login
                    $kecuali = ['login'];
                    
                    // kalau tidak ada di halaman perkecualian dan kondisinya belum login
                    if(!in_array($page,$kecuali) && isset($_SESSION['is_login']) == false)
                    {
                        echo "<script>
                            window.location.replace('index.php?page=login');
                        </script>";   
                    }
                    
                    // ada filenya...
                    require_once $file_php;
                }else{
            //tidak ada
            require_once "404.php";
        }
    }
    else{
        require_once "default.php";
    }
    ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
        integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>

</body>

</html>