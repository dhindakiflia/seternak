<?php
    include '../koneksi.php';

    $id_forum = $_POST['id_forum'];
    $nama_forum = $_POST['nama_forum'];
    $link = $_POST['link'];
    $deskripsi_forum = $_POST['deskripsi_forum'];

    $query = pg_query("INSERT into forum (id_forum, nama_forum, deskripsi_forum, link) VALUES ('$id_forum','$nama_forum','$deskripsi_forum','$link')");


    if ($query){
        echo "<script>
        alert ('Data Successfully Added');
        </script>";
    }else{
        echo "<script>
        alert ('Error');
        </script>";
    }
?>
