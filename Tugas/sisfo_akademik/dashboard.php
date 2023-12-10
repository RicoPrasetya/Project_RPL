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
    <link rel="stylesheet" type="text/css" href="css/dashboard-style.css">
    <link rel="icon" href="img/logo_sisfo.jpeg" type="image/jpeg">
    <link rel="shortcut icon" href="img/logo_sisfo.jpeg" type="image/jpeg">
</head>
<body>

<div class="dashboard-container">
    <div class="sidebar">
        <div class="logo">
            <h1>SISFO AKADEMIK</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Data Pengguna</a></li>
                <li><a href="#">Materi</a></li>
                <li><a href="#">Absensi</a></li>
                <li><a href="#">Tugas</a></li>
                <li><a href="#">Nilai</a></li>
            </ul>
        </div>
        <div class="toggle-button" onclick="toggleSidebar()">
        <span id="toggle-icon">&gt;</span>
        </div>
    </div>
    <div class="content">
        <div class="header">
            <div class="user-info">
                <img src="img/logo_sisfo.jpeg" alt="Foto Pengguna">
                <p><?php echo $username; ?></p>
            </div>
            <div class="separator"></div>
            <a href="logout.php">Logout</a>
        </div>
        <hr>
        <h2>Dashboard</h2>

        <!-- Sisa dari konten dasbor -->
        <footer class="footer">
        <p class="footer-text">SISFO AKADEMIK 2023</p>
        </footer>
        <script src="js/dashboard-script.js"></script>
    </div>
</div>

</body>
</html>