<?php   
        session_start();

        if (isset($_SESSION['LOGIN'])) {
            header("location: web.php");
            exit();
        }

        require_once("koneksi.php");

        if (isset($_POST['SUBMIT'])) {
            $email = trim($_POST['EMAIL']);
            $password = trim($_POST['PASSWORD']);

            if ($email == ""  || $password == "") {
                header("location: loginerror.php?kosong");
                exit();
            }

            $sql = mysqli_query($koneksi, "SELECT * FROM tabel WHERE email='$email' AND password='$password' ");

            //Menghitung jumlah data yang ditentukan
            $cek = mysqli_num_rows($sql);
            if ($cek != 0) {
                $data = mysqli_fetch_assoc($sql);
                $_SESSION['LOGIN'] = 1;
                $_SESSION['email'] = $data['email'];
                $_SESSION['nama'] = $data['nama'];

                if ($data["tipe_user"] == "admin") {
                    $_SESSION['tipe_user'] == "admin";
                    header("location: dashboard.php");

                }elseif ($data["tipe_user"] == "pengguna") {
                    $_SESSION['tipe_user'] == "pengguna";
                    $_SESSION['nama'] == $nama;
                    header("location: web.php");
                }

            }else{
                header("location: loginerror.php?salah");
                exit();
            }
        }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZERO SOUND</title>

    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="abc.css">

    <!-- gogle fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Indie+Flower|Pacifico|Simonetta|Yeon+Sung&display=swap" rel="stylesheet">
    <!-- google fonts -->
</head>
<body>

    <div class="container" style="margin-top: 130px;">
        <div class="row">
            <div class="col-md-6 m-auto">

            <p>&larr; <a href="index.php">Home</a>

            <h4> HAIYYUUUU MASUK!</h4>
            <p>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>

            <form action="" method="POST">

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="EMAIL" placeholder="Alamat Email" />
                </div>


                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="PASSWORD" placeholder="Password" />
                </div>

                <input type="submit" class="btn btn-success btn-block" name="SUBMIT" value="Masuk" />

            </form>   
            </div>
        </div>
    </div>
    
</body>
</html>