<?php 

    include 'koneksi/koneksi.php';
    session_start();
    if(isset($_POST['submit'])){
        
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        if($_POST['jurusan'] == 'TKJ'){
            $generateId = "TKJ".date('Y').sprintf("%05s", $d->id + 1);
        }else {
            $generateId = "AKN".date('Y').sprintf("%05s", $d->id + 1);
        }
       
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
            
        	'".$generateId."',
			'".date('Y-m-d')."',
            '".$_POST['nm']."',
            '".$_POST['tmpt_lahir']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['jk']."',
            '".$_POST['anak_ke']."',
            '".$_POST['jmlh_sodara']."',
            '".$_POST['tinggal_brsma']."',
            '".$_POST['jurusan']."',
            '".$_POST['no_hp']."',
			'".$_POST['almt']."',
            '".$_POST['nama_ayah']."',
            '".$_POST['tmpt_lahir_ayah']."',
            '".$_POST['tgl_lahir_ayah']."',
            '".$_POST['p_akhir_ayah']."',
            '".$_POST['pekerjaan_ayah']."',
            '".$_POST['agama_ayah']."',
            '".$_POST['nama_ibu']."',
            '".$_POST['tmpt_lahir_ibu']."',
            '".$_POST['tgl_lahir_ibu']."',
            '".$_POST['p_akhir_ibu']."',
            '".$_POST['pekerjaan_ibu']."',
            '".$_POST['agama_ibu']."'
        )");

        $nama = $_SESSION['nama'];
        $email =$_SESSION['email'];
        $password = $_SESSION['password'];


        mysqli_query ($conn, "INSERT INTO tb_akun VALUES
        (NULL,'$generateId','$nama','$email','$password','".$_POST['level'] = "user"."')");

            if($insert){
                echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
            }else{
                echo'huft'.mysqli_error($conn);
            }

    }


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
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <header>Registrasi</header>

        <form action="#" method="post">
            <div class="form first">
                <div class="details personal">
            <!-- Awal form first -->
                    <span class="title">Data Pibadi</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input name="nm" type="text" placeholder="Masukkan Nama Anda" required>
                        </div>

                        <div class="input-field">
                            <label>Tempat Lahir</label>
                            <input name="tmpt_lahir" type="text" placeholder="Masukkan Tempat Lahir " required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" placeholder="Masukkan Tanggal Lahir" required>
                        </div>

                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select name="jk" required>
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Anak Ke -</label>
                            <input name="anak_ke" type="number" placeholder="Masukkan Anak Ke -" required>
                        </div>

                        <div class="input-field">
                            <label>Jumlah Sodara Kandung</label>
                            <input name="jmlh_sodara" type="number" placeholder="Jumlah Sodara Kandung" required>
                        </div>

                        <div class="input-field">
                            <label>Tinggal Bersama</label>
                            <input name="tinggal_brsma" type="text" placeholder="Tinggal Bersama" required>
                        </div>

                        <div class="input-field">
                            <label>Jurusan</label>
                            <select name="jurusan" required>
                                <option disabled selected>Pilih Jurusan</option>
                                <option>TKJ</option>
                                <option>Akuntansi</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nomor HP</label>
                            <input name="no_hp" type="number" placeholder="Masukkan Nomor HP" required>
                        </div>

                        <div class="input-field">
                            <label>Alamat</label>
                            <input name="almt" type="text" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            <!-- Akhir form first -->
            </div>
            <!-- Awal form second -->
            <div class="form second">
                    <span class="title">Data Ayah</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Ayah</label>
                            <input name="nama_ayah" type="text" placeholder="Masukkan Nama Ayah" required>
                        </div>

                        <div class="input-field">
                            <label>Tempat Lahir</label>
                            <input name="tmpt_lahir_ayah" type="text" placeholder="Masukkan Tempat Lahir " required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input name="tgl_lahir_ayah" type="date" placeholder="Masukkan Tanggal Lahir" required>
                        </div>

                        <div class="input-field">
                            <label>Pendidikan Terakhir</label>
                            <input name="p_akhir_ayah" type="text" placeholder="Pendidikan Terakhir" required>
                        </div>

                        <div class="input-field">
                            <label>Pekerjaan</label>
                            <input name="pekerjaan_ayah" type="text" placeholder="Pekerjaan" required>
                        </div>

                        <div class="input-field">
                            <label>Agama</label>
                            <input name="agama_ayah" type="text" placeholder="Agama" required>
                        </div>
                    </div>

                    <span class="title">Data Ibu</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Ibu</label>
                            <input name="nama_ibu" type="text" placeholder="Masukkan Nama Ayah" required>
                        </div>

                        <div class="input-field">
                            <label>Tempat Lahir</label>
                            <input name="tmpt_lahir_ibu" type="text" placeholder="Masukkan Tempat Lahir " required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input name="tgl_lahir_ibu" type="date" placeholder="Masukkan Tanggal Lahir" required>
                        </div>

                        <div class="input-field">
                            <label>Pendidikan Terakhir</label>
                            <input name="p_akhir_ibu" type="text" placeholder="Pendidikan Terakhir" required>
                        </div>

                        <div class="input-field">
                            <label>Pekerjaan</label>
                            <input name="pekerjaan_ibu" type="text" placeholder="Pekerjaan" required>
                        </div>

                        <div class="input-field">
                            <label>Agama</label>
                            <input name="agama_ibu" type="text" placeholder="Agama" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button name="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </> 
            </div>
            <!-- Akhir form second -->
        </form>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
