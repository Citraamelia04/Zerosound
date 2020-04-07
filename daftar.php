<?php
   session_start();

   if(isset($_SESSION['LOGIN'])) {
   header('location: web.php'); }
?>


<!DOCTYPE html>
<html>
<head>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
							<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
							<link rel="stylesheet" type="text/css" href="daftar.css">

	<title>ZERO SOUND</title>
</head>
<body>
	
	<div id="kotak">
		
			<div class="judul">
				<h3>HAIYYUUUUU DAFTAR!</h3>
			</div>
			<form method="POST" action="actiondaftar.php">
				
				<i class="fas fa-user fa-lg"></i><label>Nama</label>
				<input class="isi" type="text" name="nama" placeholder="Namamu" required>
				<div class="border_bawah"></div>

				<i class="fas fa-envelope fa-lg"></i><label>Email</label>
				<input class="isi" type="email" name="email" placeholder="Alamat Email" required>
				<div class="border_bawah"></div>

				<i class="fas fa-lock fa-lg"></i><label>Password</label>
				<input class="isi" type="password" name="password" placeholder="Kata Sandi" required>
				<div class="border_bawah"></div>

				 <input type="hidden" readonly class="form-control-plaintext" id="staticEmail" name="tipe_user" value="pengguna">

				<div class="bawah">
				<input id="submit-btn" type="submit" name="SUBMIT" value="DAFTAR"><br>
				<a href="login.php" id="daftar">Sudah punya akun? Masuk di sini</a>


			</form>
		</div>
	</div>






				<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>