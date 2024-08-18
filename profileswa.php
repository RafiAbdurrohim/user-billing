<?php
session_start();
// Simulasi data user
$userData = [
    'username' => 'John Doe',
    'nis' => '12345',
    'email' => 'johndoe@example.com',
    'telepon' => '08123456789',
    'photo_path' => ''
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Siswa</title>
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
        .profile-header {
            background: linear-gradient(45deg, #3a6ea5, #ff6b6b);
            padding: 30px 0;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid var(--text-color);
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
                    <a class="nav-link" href="pengaduanswa.php"><i class='bx bxs-message-dots'></i> Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bakatswa.php"><i class='bx bxs-group'></i> Bakat & Minat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="profileswa.php"><i class='bx bxs-universal-access'></i> Profile</a>
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
                        <a class="nav-link" href="pengaduanswa.php"><i class='bx bxs-message-dots'></i> Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bakatswa.php"><i class='bx bxs-group'></i> Bakat & Minat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profileswa.php"><i class='bx bxs-universal-access'></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class='bx bxs-log-out-circle'></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="content p-4">
        <h2 class="mb-4">Profile Siswa</h2>
        
        <!-- Profile Header -->
        <div class="profile-header text-center text-white mb-4">
        <img src="<?php echo (!empty($userData['photo_path'])) ? $userData['photo_path'] : 'https://bootdey.com/img/Content/avatar/avatar1.png'; ?>" alt="Profile Picture" class="profile-img mb-3">
            <h1><?php echo htmlspecialchars($userData['username']); ?></h1>
            <p>NIS: <?php echo htmlspecialchars($userData['nis']); ?></p>
        </div>

        <!-- Profile Form -->
        <div class="card">
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="upload-photo" class="form-label">Profile Picture</label>
                        <input id="upload-photo" type="file" name="upload-photo" class="form-control" onchange="displayUploadedPhoto(event)">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($userData['username']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="<?php echo htmlspecialchars($userData['nis']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($userData['email']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">No Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon" value="<?php echo htmlspecialchars($userData['telepon']); ?>">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" onclick="resetForm()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script>
function displayUploadedPhoto(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.querySelector('.profile-img');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

function resetForm() {
    document.querySelector('form').reset();
    document.querySelector('.profile-img').src = "<?php echo (!empty($userData['photo_path'])) ? '../' . $userData['photo_path'] : 'https://bootdey.com/img/Content/avatar/avatar1.png'; ?>";
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
</script>

</body>
</html>