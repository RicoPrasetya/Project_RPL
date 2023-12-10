<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sisfo_akademik";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "<script>alert('Database Tidak Terhubung');</script>";
    die();
}
?>