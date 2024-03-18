<?php 
    session_start();
    include 'koneksi/koneksi.php';

    if(isset($_POST['login'])) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, MD5($_POST['password']));

        $cek = mysqli_query($conn, "SELECT * FROM tb_akun WHERE email = '".$email."' AND password = '".$password."' ");

        if(mysqli_num_rows($cek) >0 ){
            $a = mysqli_fetch_object($cek);
            $_SESSION['a_global'] = $a;
            
            echo '<script> window.location="dashboard/index.php" </script>';
        }else{
            echo '<script> alert("Username atau Password salah") </script>';
        }
    }

 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/login.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="assets/img/icon.png">
        <title>Login</title>
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="" method="post">
                        <div class="field input-field">
                            <input name="email" type="email" placeholder="Email" class="input" required>
                        </div>

                        <div class="field input-field">
                            <input name="password" type="password" placeholder="Password" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <!-- <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div> -->

                        <div class="field button-field">
                            <button name="login">Login</button>
                        </div>
                    </form>

                </div>  
            </div>
        </section>

        <!-- JavaScript -->
        <script src="assets/js/login.js"></script>
    </body>
</html>
