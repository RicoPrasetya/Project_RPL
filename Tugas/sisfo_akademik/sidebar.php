    <div class="sidebar">
        <div class="logo">
            <i class="fas fa-school"></i> <!-- Tambahkan ikon Font Awesome di sini -->
            <h1>SISFO<br>AKADEMIK</h1> <!-- Gunakan <br> untuk membuat line break -->
        </div>
        <div class="menu">
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span></a></li>
                <li><a href="data-pengguna.php"><i class="fas fa-user"></i>
                <span>Data Pengguna</span></a></li>
                <li><a href="materi.php"><i class="fas fa-book-open"></i>
                <span>Materi</span></a></li>
                <li><a href="absensi.php"><i class="fas fa-calendar-check"></i>
                <span>Absensi</span></a></li>
                <li><a href="tugas.php"><i class="fas fa-book"></i>
                <span>Tugas</span></a></li>
                <li><a href="nilai.php"><i class="fas fa-check"></i>
                <span>Nilai</span></a></li>
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