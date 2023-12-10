<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "test";

//conn
$con = mysqli_connect($host, $username, $password, $database);

//check
if(!$con)
{
    die("Gagal koneksi: ". mysqli_connect_error());
}


?>