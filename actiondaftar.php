<?php 
	require_once("koneksi.php");

	$nama 		= $_POST['nama'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];
	$tipe_user	= $_POST['tipe_user'];

	$sql = mysqli_query($koneksi, "SELECT * FROM tabel WHERE email='$email'");
	$cek = mysqli_num_rows($sql);

	if ($cek > 0) {
		echo "<div align='center'>Akun Sudah Terdaftar!<a href='Daftar.php'>Back</a></div>";
   	}  else {
       $simpan = mysqli_query($koneksi, "INSERT INTO tabel (nama, email, password, tipe_user) VALUES ('$nama','$email', '$password', '$tipe_user')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='Masuk.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
?>