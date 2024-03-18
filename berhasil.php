<?php 

    include 'koneksi/koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" href="assets/img/icon.png">
    <title>Pendaftaran berhasil</title>
</head>
<body>
    <div class="container">
        <header>Pendaftaran Berhasil</header>
            <h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="index.php">Silahkan Login</a>

    </div>

</body>
</html>
