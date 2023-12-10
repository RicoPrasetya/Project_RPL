<?php
session_start();

require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $pesan_error = "Username atau password salah.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISFO AKADEMIK - Login</title>

    <!-- Hubungkan file CSS -->
    <link rel="stylesheet" type="text/css" href="css/login-style.css">

<!-- Tambahkan tag link untuk ikon situs web -->
    <link rel="icon" href="img/logo_sisfo.jpeg" type="image/jpeg">
    <link rel="shortcut icon" href="img/logo_sisfo.jpeg" type="image/jpeg">
</head>
<body>

<div class="login-container">
    <div class="logo-container">
        <img src="img/logo_sisfo.jpeg" alt="Logo SISFO AKADEMIK">
        <h1>SISFO AKADEMIK</h1>
    </div>

    <h2>Login</h2>

    <?php
    if (!empty($pesan_error)) {
        echo "<p style='color: red;'>$pesan_error</p>";
    }
    ?>

    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Login</button>
    </form>

    <p class="copyright">SISFO AKADEMIK 2023</p>
</div>

</body>
</html>