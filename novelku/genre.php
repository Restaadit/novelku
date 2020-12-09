<?php
    // simpan dengan nama genre.php
    if(defined("GELANG") === false)
    {
        // tidak punya gelang
        die("Anda tidak boleh membuka halaman ini secara langsung!");
    }

    // tuliskan query untuk mengambil data di dalam tabel
    $sql = "select * from genre where soft_delete=0";

    $result = mysqli_query($conn, $sql);
?>

<div class="container">
<br />
    <a href="?page=form_genre" class="btn btn-primary">Tambah Baru</a>
    <br /><br />
    <div class="row">
        <div class="col">
            <table class='table'>
                <tr>
                    <th>No.</th>
                    <th>Nama Genre</th>
                    <th>Aksi</th>
                </tr>

                <?php
                if(mysqli_num_rows($result) > 0) 
                {
                    $no = 0;
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $no++;
                        
                        echo"<tr>
                                <td>".$no."</td>
                                <td>".$row['nama_genre']."</td>
                                <td>
                                <a href='?page=edit_genre&id=".$row['id_genre']."'>Edit</a>
                                <a href='?page=delete_genre&id=".$row['id_genre']."'>Delete</a>
                                </td>
                            </tr>";
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
