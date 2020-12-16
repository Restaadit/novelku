<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "novelku";

    //create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    //check connection
    if($conn == false)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
 function cek_akses($page,$conn)
    {
        if(stristr($page,"form_edit_") !== false)
        {
            $mode = "is_update";
            $replace = "form_edit_";   
        }
        elseif(stristr($page,"form_") !== false)
        {
            $mode = "is_create";
            $replace = "form_";   
        }
        elseif(stristr($page,"hapus_") !== false)
        {
            $mode = "is_delete";
            $replace = "hapus_";   
        }
        elseif(stristr($page,"simpan_") !== false)
        {
            $mode = "is_create";
            $replace = "simpan_";   
        }
        else
        {
            $mode = "is_read";
            $replace = false;
        }

        if($replace)
        {
            $menu = str_replace($replace,"",$page);
        }
        else
        {
            $menu = $page;
        }

        $sql = "select * from menu_role as a 
        inner join menus as b on a.id_menu=b.id_menu 
        where b.file='$menu' and $mode=1 and a.id_role=".$_SESSION['id_role'];
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
?>
