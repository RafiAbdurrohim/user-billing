<?php
session_start();
// Simulasi data user
$_SESSION['nama'] = 'User Neko';
$_SESSION['nis'] = '12345';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Siswa</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3a6ea5;
            --secondary-color: #ff6b6b;
            --background-color: #2c3e50;
            --card-bg: #34495e;
            --text-color: #ecf0f1;
            --text-muted: #bdc3c7;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
        }
        #sidebar {
            background-color: #243342;
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            transition: all 0.3s;
        }
        #sidebar .nav-link {
            color: var(--text-muted);
        }
        #sidebar .nav-link:hover, #sidebar .nav-link.active {
            color: var(--text-color);
            background-color: rgba(255, 255, 255, 0.1);
        }
        .navbar {
            display: none;
            background-color: #243342 !important;
        }
        .content {
            width: 100%;
        }
        .card {
            background-color: var(--card-bg);
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .btn-custom {
            background-color: var(--secondary-color);
            border: none;
            color: var(--text-color);
        }
        .btn-custom:hover {
            background-color: #e74c3c;
            color: var(--text-color);
        }
        .progress {
            height: 10px;
            background-color: #455a64;
        }
        .progress-bar {
            background-color: var(--secondary-color);
        }
        @media (max-width: 767.98px) {
            #sidebar {
                display: none;
            }
            .navbar {
                display: block;
            }
            .content {
                margin-left: 0 !important;
            }
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar for desktop -->
    <div id="sidebar">
        <div class="p-4">
            <h3 class="text-white">Biling</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class='bx bxs-dashboard'></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class='bx bxs-food-menu'></i> Bimbingan Konseling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengaduanswa.php"><i class='bx bxs-message-dots'></i> Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bakatswa.php"><i class='bx bxs-group'></i> Bakat & Minat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profileswa.php"><i class='bx bxs-universal-access'></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class='bx bxs-log-out-circle'></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Navbar for mobile -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Biling</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class='bx bxs-dashboard'></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class='bx bxs-food-menu'></i> Bimbingan Konseling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengaduanswa.php"><i class='bx bxs-message-dots'></i> Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bakatswa.php"><i class='bx bxs-group'></i> Bakat & Minat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profileswa.php"><i class='bx bxs-universal-access'></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class='bx bxs-log-out-circle'></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="content p-4">
        <h2 class="mb-4">Bimbingan Konseling</h2>
        
        <!-- Progress Overview -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Perkembangan Konseling</h5>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Kamu sudah menyelesaikan 65% dari sesi konseling. Terus semangat!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Konseling dengan Psikolog Satu Persen</h5>
                        <p class="card-text">Konsultasikan masalahmu dengan psikolog profesional kami dan temukan solusi terbaikmu.</p>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#bimbinganModal">
                            Daftar Konseling
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Konseling Mendatang</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent text-white">Senin, 20 Agustus 2024 - 10:00 WIB</li>
                            <li class="list-group-item bg-transparent text-white">Rabu, 22 Agustus 2024 - 14:00 WIB</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Tips Kesehatan Mental</h5>
                <div id="mentalHealthTips" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>Luangkan waktu untuk melakukan aktivitas yang kamu sukai setiap hari.</p>
                        </div>
                        <div class="carousel-item">
                            <p>Jaga pola tidur yang teratur untuk meningkatkan mood dan produktivitas.</p>
                        </div>
                        <div class="carousel-item">
                            <p>Praktikkan mindfulness atau meditasi untuk mengurangi stres.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="bimbinganModal" tabindex="-1" aria-labelledby="bimbinganModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="bimbinganModalLabel">Form Bimbingan Konseling</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bimbinganForm">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control bg-secondary text-white" id="nama" name="nama" value="<?php echo htmlspecialchars($_SESSION['nama'] ?? ''); ?>" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS:</label>
                        <input type="text" class="form-control bg-secondary text-white" id="nis" name="nis" value="<?php echo htmlspecialchars($_SESSION['nis'] ?? ''); ?>" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas:</label>
                        <input type="text" class="form-control bg-secondary text-white" id="kelas" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="keluhan" class="form-label">Keluhan:</label>
                        <textarea class="form-control bg-secondary text-white" id="keluhan" name="keluhan" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-custom" onclick="submitForm()">Kirim Data</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script>
function submitForm() {
    // Simulate form submission
    alert('Form submitted successfully!');
    $('#bimbinganModal').modal('hide');
}


function adjustContentPadding() {
    if (window.innerWidth < 768) {
        document.querySelector('.content').style.paddingTop = document.querySelector('.navbar').offsetHeight + 'px';
    } else {
        document.querySelector('.content').style.paddingTop = '0';
    }
}

window.addEventListener('load', adjustContentPadding);
window.addEventListener('resize', adjustContentPadding);

document.addEventListener("DOMContentLoaded", function() {
    var sidebar = document.getElementById("sidebar");
    var sidebarCollapse = document.getElementById("sidebarCollapse");

    sidebarCollapse.addEventListener("click", function() {
        sidebar.classList.toggle("active");
    });

    // Close sidebar when clicking outside of it
    document.addEventListener("click", function(event) {
        var isClickInsideSidebar = sidebar.contains(event.target);
        var isClickOnToggleButton = sidebarCollapse.contains(event.target);

        if (!isClickInsideSidebar && !isClickOnToggleButton && sidebar.classList.contains("active")) {
            sidebar.classList.remove("active");
        }
    });
});
</script>

</body>
</html>