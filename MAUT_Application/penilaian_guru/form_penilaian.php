<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>FORM PENILAIAN GURU</title>

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
            <div class="container mt-4">
                <h5 class="mb-4">Form Penilaian Kinera Guru</h5>
                <form action="proses_penilaian.php" method="post">

                    <?php
                    include '..//insert_data/koneksi.php';
                    $idg = $_GET['id_guru'];
                    $igr = mysqli_query($kon, "select * from tbl_guru where id_guru='$idg'");
                    $rows = mysqli_fetch_array($igr);
                    ?>

                    <input type="hidden" value="<?php echo $rows['id_guru']; ?>" name="id_guru">
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA GURU:</label>
                        <input type="text" class="form-control" id="nama" value="<?php echo $rows['nama']; ?>" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="mp" class="form-label">Mata Pelajaran:</label>
                        <input type="text" class="form-control" id="mp" value="<?php echo $rows['mp']; ?>" name="mp" required>
                    </div> <br>

                    <!-- Move the table inside the form -->
                    <table>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">Aspek Yang Di Amati: Pelaksanaan Pembelajaran</th>
                            <th class="text-center">Sesuai</th>
                            <th class="text-center">Kurang Sesuai</th>
                            <th class="text-center">Tidak Sesuai</th>
                        </tr>
                        <?php
                        $criteria = array(
                            "Orientasi" => array(
                                "Guru menyiapakan fisik dan psikis peserta didik dengan menyapa dan memberi salam",
                                "Membuka dengan berdoa"
                            ),
                            "Motivasi" => array(
                                "Guru mengajukan pertanyaan pemantik yang menantang untuk memotivasi peserta didik",
                                "Guru menyiapkan manfaat hal ini akan dipelajari dalam kehidupan sehari-hari"
                            ),
                            "Apersepsi" => array(
                                "Guru menyiapkan manfaat hal yang akan dipelajari dalam kehidupan sehari-hari",
                                "Guru mengaitkan materi dengan materi pembelajaran sebelumnya"
                            ),
                            "Penguasaan materi pembelajaran" => array(
                                "Guru menyiapkan materi ajar dengan mencari jawaban pertanyaan pemantik sesuai dengan tujuan pembelajaran",
                                "Guru mengaitkan materi dengan pengetahuan lain yang relevan, perkembangan iptek, budaya positif, dan kehidupan nyata",
                                "Guru menyajikan pembahasan materi pembelajaran dengan tepat",
                                "Guru menyajikan materi secara sistematis (mudah ke sulit, dari konkret ke abstrak)"
                            ),
                            "Penerapan strategi pembelajaran yang mendidik" => array(
                                "Guru melaksanakan pembelajaran sesuai dengan kompetensi yang akan dicapai menggunakan kelompok yang berbeda (bisa atas dasar gaya belajar peserta didik)",
                                "Guru melaksanakan pembelajaran menumbuhkan partisipasi aktif peserta didik dalam mengajukan pertanyaan",
                                "Guru melaksanakan pembelajaran yang menumbuhkan partisipasi aktif peserta didik dalam mengemukakan pendapat (mendorong dan menumbuhkan KSE/kesadaran sosial dan emosional peserta didik)",
                                "Guru melaksanakan pembelajaran yang mengembangkan keterampilan peserta didik sesuai dengan materi ajar (menumbuhkan manajemen perseta didik)",
                                "Guru melaksanakan pembelajaran yang bersifat kontekstual sesuai dengan gaya belajar peserta didik (diferensial proses)",
                                "Guru melaksanakan pembelajaran yang memungkinkan tumbuhnya kebiasaan dan sikap positif (nurturan effect) (menumbuhkan KSE peserta didik)",
                                "Guru melaksanakan pembelajaran sesuai dengan alokasi waktu yang direncanakan"
                            ),
                            "Aktivitas pembelajaran HOTS dan kecakapan abad 21 (4C)" => array(
                                "Guru melaksanakan pembelajaran yang mengasah kemampuan kreativitas peserta didik (menumbuhkan KSE peserta didik)",
                                "Guru melaksanakan pembelajaran yang mengasah kemampuan kritis peserta didik (menumbuhkan KSE peserta didik)",
                                "Guru melaksanakan pembelajaran yang mengasah kemampuan komunikasi peserta didik (menumbuhkan KSE peserta didik)",
                                "Guru melaksanakan pembelajaran yang mengasah kemampuan kolaborasi peserta didik (menumbuhkan KSE peserta didik)"
                            ),
                            "Kualitas pembelajaran manajemen kelas" => array(
                                "Guru menciptakan suasana kelas yang kondusif untuk proses belajar mengajar (sesuai dengan kesepakatan kelas dan KSE)",
                                "Guru menerapkan prinsip disiplin positif reinforcement atau pembentukan perilaku adaptif dalam menegakkan aturan kelas yang telah disepakati bersama"
                            ),
                            "Kualitas pembelajaran dukungan afektif" => array(
                                "Guru mengomunikasikan pesan bahwa guru percaya akan kemampuan semua peserta untuk belajar dan berprestasi secara akademik",
                                "Guru memberikan perhatian dan bantuan dengan kebutuhan belajar setiap peserta didik",
                                "Guru melakukan evaluasi terhadap hasil pekerjaan dan perilaku peserta didik dengan cara yang mendorong peserta didik untuk selalu meningkatkan kemampuannya"
                            ),
                            "Kualitas pembelajaran aktivitas kognitif dan diferensial" => array(
                                "Guru melaksanakan praktik adaptasi pengajaran sebagai respon atas umpan balik dan respon peserta didik terhadap kebutuhan belajarnya. Guru dapat memberikan konten materi berbeda dalam capaian pembelajaran yang sama di beberapa kelompok (difrensial konten)",
                                "Guru memberikan penjelasan dengan kelompok yang berada dengan proses diferensial yang terstruktur tentang materi pelajaran, serta pemberian contoh tentang cara menerapkannya (differensial proses)",
                                "Guru melakukan praktik pengajaran yang mendorong kolaborasi dan komunikasi antar peserta didik dalam konteks memaknai dan memahami materi ajar"
                            ),
                            "Pembelajaran Literasi dan Numerasi" => array(
                                "Guru melakukan pembelajaran yang mendorong keterampilan literasi peserta didik",
                                "Guru melakukan pengajaran yang mendorong keterampilan numerasi peserta didik"
                            ),
                            "Pemanfaatan sumber belajar / media pembelajaran" => array(
                                "Guru menunjukkan keterampilan dalam pengukuran sumber belajar yang bervariasi (diferensial proses)",
                                "Guru menunjukkan keterampilan dalam penggunaan media pembelajaran",
                                "Guru melibatkan peserta didik dalam pemanfaatan sumber belajar (manajemen diri peserta didik)",
                                "Guru melibatkan peserta didik dalam pemanfaatan media pembelajaran (berpusat pada peserta didik)",
                                "Menghasilkan kesan yang menarik"
                            ),
                            "Penggunaan bahasa yang benar dan tepat" => array(
                                "Guru dapat menggunakan bahasa lisan secara jelas dan lancar (komunikasi efektif)",
                                "Guru dapat menggunakan bahasa tulis yang baik dan benar"
                            ),
                            "Proses rangkuman, refleksi, dan tindak lanjut" => array(
                                "Guru memfasilitasi dan membimbing peserta didik merangkum materi pelajaran (refleksi)",
                                "Guru menunjukkan aktivitas belajar yang bertujuan meningkatkan pengetahuan dan keterampilan mengajar",
                                "Guru menunjukkan aktivitas untuk mengevaluasi dan merefleksikan praktik pengajaran yang telah di terapkan, terutama dari sisi dampaknya terhadap belajar peserta didik",
                                "Guru melaksanakan tindakan lanjut dengan memberikan arahan kegiatan berikutnya dan tugas perbaikan dan pengayaan secara individu atau kelompok"
                            ),
                            "Pelaksanaan penilaian hasil belajar" => array(
                                "Guru melaksanakan penilaian produk melalui proyek/hasil produk (differensial produk)",
                                "Guru melaksanakan penilaian pengetahuan melalui formatif",
                                "Guru melaksanakan penilaian sikap peserta didik, observasi sikap peserta didik"
                            )
                        );

                        $index = 1;

                        foreach ($criteria as $main_criteria => $sub_criteria) {
                            echo "<tr>";
                            echo "<td>" . $index++ . "</td>";
                            echo "<td colspan='4'>$main_criteria</td>";
                            echo "</tr>";

                            foreach ($sub_criteria as $subIndex => $sub_criteria) {
                                echo "<tr>";
                                echo "<td></td>";
                                echo "<td>$sub_criteria</td>";

                                echo "<td><input type='radio' name='nilai[$main_criteria][$subIndex]' value='2'>2</td>";
                                echo "<td><input type='radio' name='nilai[$main_criteria][$subIndex]' value='1'>1</td>";
                                echo "<td><input type='radio' name='nilai[$main_criteria][$subIndex]' value='0'>0</td>";

                                echo "</tr>";
                            }
                        }
                        ?>
                    </table> <br>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Kirim">
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