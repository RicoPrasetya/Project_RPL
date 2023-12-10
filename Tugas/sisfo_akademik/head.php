<!-- dashboard.php -->

<?php
session_start();

require 'koneksi.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil nama pengguna dari sesi
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISFO AKADEMIK - Dashboard</title>

    <!-- Hubungkan file CSS -->
    <link rel="stylesheet" type="text/css" href="css/common-style.css">