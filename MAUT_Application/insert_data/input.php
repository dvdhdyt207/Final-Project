<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>FORM INPUT</title>
</head>
<body>
    
    <!-- start sidebar -->

    <div class="sidebar collapsed position-fixed top-0 start-0 bottom-0 bg-light border-end">
        <div class="d-flex align-item-center p-3">
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-success fs-4">MENU</a>
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item active">
                <a href="../dashboard/dashboard.php"> <i class="ri-dashboard-line sidebar-menu-item-icon"></i> Dashboard</a>
            </li>
            <br>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Pages</li>

            <li class="sidebar-menu-item">
                <a href="list.php" >
                    <i class="ri-table-line sidebar-menu-item-icon"></i> Tabel Guru
                </a>
            </li>
            <br>
            <li class="sidebar-menu-item">
                <a href="../penilaian_guru/list_guru.php" >
                    <i class="ri-table-view sidebar-menu-item-icon"></i> Penilaian
                </a>
            </li>
            <br>
            <li class="sidebar-menu-item">
                <a href="../maut_proses/hasil_penilaian.php" >
                    <i class="ri-table-fill sidebar-menu-item-icon"></i> Tabel Kriteria
                </a>
            </li>
            <br>
            <li class="sidebar-menu-item">
                <a href="../maut_proses/hasil_akhir.php" >
                    <i class="ri-table-fill sidebar-menu-item-icon"></i> Hasil Penilaian
                </a>
            </li>
            <br>
            <li class="sidebar-menu-item">
                <a href="../bobot/bobot.php" >
                    <i class="ri-table-view sidebar-menu-item-icon"></i> Edit Bobot
                </a>
            </li>
        </ul>
    </div>

    <!-- end sidebar -->

    <!-- start main -->

    <main class="bg-light">
        <div class="p-2">

            <!-- start navbar -->

            <nav class="px-3 py-1 bg-white rounded-md shadow">
                <i class="ri-menu-line sidebar-toggle me-3"></i>
                <h5 class="fw-bold mb-0">Aplikasi PKG</h5>
                <div class="dropdown ms-auto">
                    <div class="d-flex align-item-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-1 mt-2">Admin</span>
                        <img class="navbar-profile-image" src="../img/user-icon.png" alt="image">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="../login/logout.php">Log Out</a></li>
                    </ul>
                </div>
            </nav>

            <!-- end navbar -->

            <!-- start content -->
            <div class="container mt-5">
                <form method="post" action="proses_input.php">
                    <h5 class="mb-4">Input Data Guru</h5>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Guru:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP:</label>
                        <input type="text" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="mp" class="form-label">Mata Pelajaran:</label>
                        <input type="text" class="form-control" id="mp" name="mp" required>
                    </div>
                    <div class="mb-3">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <a href="list.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
            <!-- end content -->

        </div>
    </main>  

     <!-- end main -->
    

    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/script.js"></script>
</body>
</html>