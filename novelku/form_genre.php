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
                    <input type="text" class="form-control" name="nama_genre" placeholder="Misal: Sci-Fi">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan" />

            </form>   


        </div>
    </div>
</div>
</body>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
        integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>


</html>