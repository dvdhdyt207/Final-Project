<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>DASHBOARD</title>
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
                <a href="dashboard.php"> <i class="ri-dashboard-line sidebar-menu-item-icon"></i> Dashboard</a>
            </li>
            <br>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Pages</li>

            <li class="sidebar-menu-item">
                <a href="../insert_data/list.php" >
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

            <!-- star navbar -->

            <nav class="px-3 py-1 bg-white rounded-md shadow">
                <i class="ri-menu-line sidebar-toggle me-3"></i>
                <h5 class="fw-bold mb-0 ">Aplikasi PKG</h5>
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

            <!-- star navbar -->

            <!-- star content -->

                <div class="card mb-3 mt-3 border border-success">
                    <div class="card-body">
                        <p class="card-text mb-0">Selamat datang di Aplikasi Penilaian Kinerja Guru MAN 1 Bukittinggi </p>
                        <p class="card-text2 mb-0">Semoga harimu menyenangkan!</p>
                    </div>
                </div>

                <div class="carousel-container text-center">
                    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/man1ft.jpg" class="d-block w-100" alt="image 1" style="max-width: 600px; height: 450px; margin: 0 auto;">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/sklh.png" class="d-block w-100" alt="image 2" style="max-width: 600px; height: 450px; margin: 0 auto;">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
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