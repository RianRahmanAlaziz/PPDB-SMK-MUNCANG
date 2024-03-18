<?php 
    include 'koneksi/koneksi.php';
    session_start();

    if (isset($_POST['submit'])){
      $nama = $_SESSION['nama'] = $_POST['nama'];
      $email =$_SESSION['email'] = $_POST['email'];
      $password = $_SESSION['password'] = MD5($_POST['password']);
      $cpassword = $_POST['cpassword'];
  
      $cek_user = mysqli_query($conn, "SELECT * FROM tb_akun WHERE email = '$email'");
      $cek_login = mysqli_num_rows($cek_user);
  
      if($cek_login >0 ){
        echo "<script>
              alert('Email Sudah Terdaftar');
              window.location = 'daftar-akun.php';
        </script>";
      }else{
        echo '<script> window.location="pendaftaran.php" </script>';
      }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/daftar-akun.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="icon" href="assets/img/icon.png">
      <title>Daftar Akun</title>
  </head>
  <body>
    <div class="container">
      <header>Daftar Akun</header>
      <form action="" method="post">
      <div class="field">
          <div class="input-field">
            <input type="text" placeholder="Masukan Nama Lengkap" class="email" name="nama" requerd />
          </div>
        </div>
        <div class="field email-field">
          <div class="input-field">
            <input type="email" placeholder="Masukan email" class="email" name="email" requerd />
          </div>
          <span class="error email-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Tolong Masukkan Email yang benar</p>
          </span>
        </div>
        <div class="field create-password">
          <div class="input-field">
            <input type="password" placeholder="Buat password" class="password" name="password" required/>
            <i class="bx bx-hide show-hide"></i>
          </div>
          <span class="error password-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">
            Silakan masukkan minimal 8 karakter dengan nomor, simbol, kecil dan huruf kapital.
            </p>
          </span>
        </div>
        <div class="field confirm-password">
          <div class="input-field">
            <input type="password" placeholder="Konfirmasi password" class="cPassword" name="cpassword"/>
            <i class="bx bx-hide show-hide"></i>
          </div>
          <span class="error cPassword-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Kata sandi tidak cocok</p>
          </span>
        </div>
        <div class="input-field button">
          <input type="submit" value="Kirim" name="submit" />
        </div>
      </form>
    </div>

    <script src="assets/js/daftar-akun.js"></script>
  </body>
</html>

