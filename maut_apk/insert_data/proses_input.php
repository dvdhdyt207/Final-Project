<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$mp = $_POST['mp'];

// Cek apakah NIP atau ID Guru sudah digunakan
$datac = $kon->query("SELECT * FROM tbl_guru WHERE nip = '$nip'");
$cek = $datac->num_rows;

if ($cek > 0) {
    echo '<script>alert("Gagal menyimpan data. NIP Sudah digunakan."); window.location.href="list.php";</script>';
} else {
    // Memasukkan data ke dalam tabel tbl_guru
    $sql_tbl_guru = "INSERT INTO tbl_guru (nama, nip, mp) VALUES ('$nama', '$nip', '$mp')";
    $hasil = mysqli_query($kon, $sql_tbl_guru);

    $id_guru_terakhir = mysqli_insert_id($kon);

    if($hasil){
        echo "<script>
                alert('Data Berhasil di Tambahkan');
                document.location='list.php';
              </script>";
    }
    else{
        echo "<script>
                alert('Data Gagal di Tambahkan');
                document.location='list.php';
              </script>";
    }

}

mysqli_close($kon);
?>
