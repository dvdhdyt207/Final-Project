<?php
// Menghubungkan ke database
include "../insert_data/koneksi.php";
$id_guru    = $_POST['id_guru'];

// proses maut
$nilai = $_POST['nilai'];

// Inisialisasi variabel nilai kriteria
$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;

foreach ($nilai as $main_criteria => $sub_criteria) {
    foreach ($sub_criteria as $subIndex => $value) {
        // Menyesuaikan nilai ke variabel sesuai dengan kriteria yang digabung
        switch ($main_criteria) {
            case 'Orientasi':
            case 'Motivasi':
            case 'Apersepsi':
            case 'Penggunaan bahasa yang benar dan tepat':
                $c1 += $value;
                break;

            case 'Penguasaan materi pembelajaran':
            case 'Penerapan strategi pembelajaran yang mendidik':
            case 'Aktivitas pembelajaran HOTS dan kecakapan abad 21 (4C)':
                $c2 += $value;
                break;

            case 'Kualitas pembelajaran manajemen kelas':
            case 'Kualitas pembelajaran dukungan afektif':
            case 'Kualitas pembelajaran aktivitas kognitif dan diferensial':
                $c3 += $value;
                break;

            case 'Pembelajaran Literasi dan Numerasi':
            case 'Pemanfaatan sumber belajar / media pembelajaran':
                $c4 += $value;
                break;

            case 'Proses rangkuman, refleksi, dan tindak lanjut':
            case 'Pelaksanaan penilaian hasil belajar':
                $c5 += $value;
                break;
        }
    }
}

// Query untuk menyimpan nilai ke dalam tabel
$sql_tbl_penilaian = "INSERT INTO tbl_penilaian (id_guru, c1, c2, c3, c4, c5) VALUES ('$id_guru', '$c1', '$c2', '$c3', '$c4', '$c5')";

// Mengeksekusi query
$hasil_penilaian = mysqli_query($kon, $sql_tbl_penilaian);

// Mengecek hasil query
if (!$hasil_penilaian) {
    die("Error: " . mysqli_error($kon));
}

// Menutup koneksi ke database
mysqli_close($kon);

// Lanjutkan dengan pengolahan hasil sesuai kebutuhan Anda (contoh: pindah ke halaman lain atau tampilkan hasil)
header("Location: ../maut_proses/hasil_penilaian.php");
?>
