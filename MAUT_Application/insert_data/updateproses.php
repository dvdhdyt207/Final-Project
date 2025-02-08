<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nip      = $_POST['nip'];
$nama     = $_POST['nama'];
$mp       = $_POST['mp'];

// query SQL untuk update data
$query="UPDATE tbl_guru SET nama='$nama',mp='$mp' where nip='$nip'";
mysqli_query($kon, $query);


if($hasil){
    echo "<script>
            alert('Data Berhasil diupdate');
            document.location='list.php';
          </script>";
}
else{
    echo "<script>
            alert('Data Gagal dipdate');
            document.location='list.php';
          </script>";
}


?>
