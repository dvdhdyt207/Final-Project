<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nip   = $_GET['nip'];
// query SQL untuk delete data
$query="DELETE from tbl_guru where nip='$nip'";
mysqli_query($kon, $query);


if($hasil){
    echo "<script>
            alert('Data Berhasil dihapuas');
            document.location='list.php';
          </script>";
}
else{
    echo "<script>
            alert('Data Gagal dihapuas');
            document.location='list.php';
          </script>";
}
?>