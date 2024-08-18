<?php
session_start();
// Simulasi data user
$_SESSION['nama'] = 'User Neko';
$_SESSION['nis'] = '12345';

$nama = $_SESSION['nama'] ?? 'Nama tidak tersedia';
$nis = $_SESSION['nis'] ?? 'NIS tidak tersedia';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakat & Minat Siswa</title>
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
        .hero-banner {
            background: linear-gradient(45deg, #3a6ea5, #ff6b6b);
            padding: 50px 0;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        .feature-card {
            text-align: center;
            padding: 20px;
        }
        .feature-card img {
            max-width: 100px;
            margin-bottom: 15px;
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
                    <a class="nav-link" href="bimbinganswa.php"><i class='bx bxs-food-menu'></i> Bimbingan Konseling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="pengaduanswa.php"><i class='bx bxs-message-dots'></i> Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="bakatswa.php"><i class='bx bxs-group'></i> Bakat & Minat</a>
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
                        <a class="nav-link" href="bimbinganswa.php"><i class='bx bxs-food-menu'></i> Bimbingan Konseling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class='bx bxs-message-dots'></i> Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="bakatswa.php"><i class='bx bxs-group'></i> Bakat & Minat</a>
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
        <h2 class="mb-4">Bakat & Minat Siswa</h2>
        
        <!-- Hero Banner -->
        <div class="hero-banner text-center text-white mb-4">
            <h1>Temukan Potensimu</h1>
            <p>Tes Minat Bakat bersama Biling untuk mengetahui bakat dan minatmu!</p>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#minatBakatModal">
                Ikuti Tes Minat Bakat
            </button>
        </div>

        <!-- Feature Cards -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card">
                    <img src="https://kelas.work/assets/background/bg_minat1.webp" alt="Karakter Diri">
                    <h5>Mengetahui Karakter Diri</h5>
                    <p>Pahami kepribadian dan potensi unikmu</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card">
                    <img src="https://kelas.work/assets/background/bg_minat2.webp" alt="Rekomendasi">
                    <h5>Rekomendasi Karir</h5>
                    <p>Dapatkan saran pekerjaan atau jurusan kuliah yang sesuai</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card">
                    <img src="https://kelas.work/assets/background/bg_minat3.webp" alt="Gratis">
                    <h5>Tes Gratis</h5>
                    <p>Akses tes minat bakat tanpa biaya</p>
                </div>
            </div>
        </div>

        <!-- Testimonials or Success Stories -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Kisah Sukses</h5>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>"Berkat tes minat bakat di Biling, saya menemukan passion saya di bidang desain grafis!"</p>
                            <footer class="blockquote-footer">Sarah, Kelas 11</footer>
                        </div>
                        <div class="carousel-item">
                            <p>"Tes ini membuka mata saya terhadap bakat yang selama ini terpendam. Sekarang saya lebih percaya diri!"</p>
                            <footer class="blockquote-footer">Andi, Kelas 12</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Minat Bakat Form -->
<div class="modal fade" id="minatBakatModal" tabindex="-1" aria-labelledby="minatBakatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="minatBakatModalLabel">Form Bimbingan Bakat Minat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form onsubmit="alert('Form submitted successfully!'); return false;">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="<?php echo htmlspecialchars($nis); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="minat_akademis" class="form-label">Minat Akademis</label>
                        <input type="text" class="form-control" id="minat_akademis" name="minat_akademis" placeholder="Masukkan minat akademis Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="minat_seni" class="form-label">Minat Seni & Kreatif</label>
                        <input type="text" class="form-control" id="minat_seni" name="minat_seni" placeholder="Masukkan minat seni Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="minat_olahraga" class="form-label">Minat Olahraga</label>
                        <input type="text" class="form-control" id="minat_olahraga" name="minat_olahraga" placeholder="Masukkan minat olahraga Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="minat_karir" class="form-label">Minat Karir & Profesi</label>
                        <input type="text" class="form-control" id="minat_karir" name="minat_karir" placeholder="Masukkan minat karir Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="ekstrakurikuler" class="form-label">Kegiatan Ekstrakurikuler</label>
                        <input type="text" class="form-control" id="ekstrakurikuler" name="ekstrakurikuler" placeholder="Masukkan kegiatan ekstrakurikuler Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="hobi" class="form-label">Keterampilan & Hobi</label>
                        <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Masukkan keterampilan dan hobi Anda" required>
                    </div>
                    <button type="submit" class="btn btn-custom">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script>
function adjustContentPadding() {
    if (window.innerWidth < 768) {
        document.querySelector('.content').style.paddingTop = document.querySelector('.navbar').offsetHeight + 'px';
    } else {
        document.querySelector('.content').style.paddingTop = '0';
    }
}

window.addEventListener('load', adjustContentPadding);
window.addEventListener('resize', adjustContentPadding);
</script>

</body>
</html>