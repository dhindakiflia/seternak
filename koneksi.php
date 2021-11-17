<?php

$host = "localhost";
$user = "postgres";
$pass = "12345678";
$port = "5433";
$dbname = "seternak";
$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
// // header("Access-Control-Allow-Origin: *");

// if ($conn)
// {
//     echo "Berhasil";
// }else
// {
//     echo "gagal";
// }

?>
