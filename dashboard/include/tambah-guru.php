<?php 
session_start();
include '../../koneksi/koneksi.php';


    if(isset($_POST['submit'])){

      $nama = $_POST['nm'];
      $tmpt_lhr = $_POST['tmpt_lahir'];
      $tgl_lhr = $_POST['tgl_lahir'];
      $jk = $_POST['jk'];
      $mapel = $_POST['mapel'];
      $no_hp = $_POST['no_hp'];
      $almt = $_POST['almt'];

      $in = mysqli_query($conn,"INSERT INTO tb_guru VALUES(
        NULL,'$nama','$tmpt_lhr','$tgl_lhr','$jk','$mapel','$no_hp','$almt'
      )");

      if($in){
        echo '<script>alert("Tambah Guru Berhasil")</script>';
        echo '<script>window.location="data-guru.php"</script>';
      }else{
        echo 'gagal'.mysqli_error($conn);
      }

    }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../../assets/img/icon.png">
     <title>Tambah Guru</title>
   </head>
<body>
<div class="sidebar close">
    <div class="logo-details">
    <i class='bx bxs-school icon'></i>
      <div class="logo_name">AL-KAUTSAR</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <!-- dashboard User -->
  <?php 
     $level = $_SESSION['a_global']->level == 'user';
     if($level){
   ?>
      <li>
       <a href="data-user.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Data User</span>
       </a>
       <span class="tooltip">Data User</span>
     </li>
     <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="links_name">Cetak Pendaftaran</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="include/cetak-pendaftaran.php">Cetak Pendaftaran</a></li>
        <li><a href="#">HTML & CSS</a></li>
        <li><a href="#">JavaScript</a></li>
        <li><a href="#">PHP & MySQL</a></li>
      </ul>
    </li>
    <?php 
            }else{
         ?>
    <!-- akhir dashboard User -->
    <!-- dashboard admin -->
      <li>
        <div class="iocn-link">
          <a href="data-peserta.php">
            <i class='bx bx-collection' ></i>
            <span class="links_name">Data Siswa</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="data-peserta.php">Data Siswa</a></li>
          <li><a href="data-guru.php">Data Guru</a></li>
          <li><a href="data-mapel.php">Data Pelajaran</a></li>
        </ul>
      </li>
     <?php } ?>
     <!-- akhir dashboard admin -->
    <li class="profile">
    <a href="../../logout.php">
        <i class='bx bx-log-out'></i>
        <span class="links_name">Log Out</span>
      </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
  <div class="container">
        
  <form action="" method="post">
            <div class="form first">
                <div class="details personal">
            <!-- Awal form first -->
                    <span class="title">Masukan Data</span>
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
                                <option disabled selected> Jenis Kelamin</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Mata Pelajaran</label>
                            <select name="mapel" required>
                                <option disabled selected>Mata Pelajaran</option>
                                <?php 
                                  $guru = mysqli_query($conn, "SELECT * FROM tb_pelajaran");
                                  while($row = mysqli_fetch_array($guru)){
                                 ?>
                                 <option value="<?php echo $row['kode_pelajaran'] ?>"><?php echo $row['nm_pelajaran'] ?></option>
                                 <?php } ?>
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

                    <button name="submit" class="nextBtn">
                        <span class="btnText">Simpan</span>
                    </button>
                </div> 
            </div>

        </form>

    </div>
  </section>
  <script src="../../assets/js/dashboard.js"></script>
</body>
</html>
