// dashboard-script.js

function toggleSidebar() {
    var sidebar = document.querySelector('.sidebar');
    var toggleIcon = document.getElementById('toggle-icon');

    sidebar.classList.toggle('collapsed');

    // Mengubah teks pada tombol berdasarkan status sidebar
    toggleIcon.innerText = sidebar.classList.contains('collapsed') ? '>' : '<';
}