<?php 

session_start();
include '..//insert_data/koneksi.php';

$username = $_POST['username'];
$pw 	  = $_POST['pw'];

// menyeleksi data user dengan username dan pw yang sesuai
$login = mysqli_query($kon,"select * from user where username='$username' and pw='$pw'");
$cek = mysqli_num_rows($login);

// cek apakah username dan pw di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['lv']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['lv'] = "admin";

		echo "<script>
            alert('Login Berhasil Sebagai Admin');
            document.location='../dashboard/dashboard.php';
          </script>";

	}else{

		echo "<script>
            alert('Login Gagal Periksa Usernama dan Password');
            document.location='index.php';
          </script>";
	}

	
}else{
	echo "<script>
            alert('Login Gagal Periksa Usernama dan Password');
            document.location='index.php';
          </script>";
}



?>