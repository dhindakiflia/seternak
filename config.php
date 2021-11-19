<?php
$host = 'localhost';
$dbname = 'db-seternak2';
$user = 'postgres';
$port = '5432';
$password = 'password';
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);  
?>