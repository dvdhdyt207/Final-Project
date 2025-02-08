<?php
include '../insert_data/koneksi.php';
// menyimpan data kedalam variabel
$bobot      = $_POST['bobot'];
$bbt     = $_POST['bbt'];

// query SQL untuk update data
$query="UPDATE tbl_bobot SET bobot='$bobot',bbt='$bbt' where bobot='$bobot'";
mysqli_query($kon, $query);


if($hasil){
    echo "<script>
            alert('Data Berhasil diupdate');
            document.location='bobot.php';
          </script>";
}
else{
    echo "<script>
            alert('Data Gagal dipdate');
            document.location='bobot.php';
          </script>";
}


?>
