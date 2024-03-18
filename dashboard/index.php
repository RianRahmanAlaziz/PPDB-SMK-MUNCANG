<?php 
session_start();
include '../koneksi/koneksi.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/style1.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../assets/img/icon.png">
     <title>Dashboard</title>
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
        <a href="index.php">
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
       <a href="include/data-user.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Data User</span>
       </a>
       <span class="tooltip">Data User</span>
     </li>
     <li>
      <div class="iocn-link">
        <a href="include/cetak-pendaftaran.php" target="_blank">
          <i class='bx bx-collection' ></i>
          <span class="links_name">Cetak Pendaftaran</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="include/cetak-pendaftaran.php" target="_blank">Cetak Pendaftaran</a></li>
      </ul>
    </li>
    <!-- <li>
       <a href="#">
       <i class='bx bxs-book-alt'></i>
         <span class="links_name">pelajaran</span>
       </a>
       <span class="tooltip">pelajaran</span>
     </li> -->
    <?php 
            }else{
         ?>
    <!-- akhir dashboard User -->
    <!-- dashboard admin -->
      <li>
        <div class="iocn-link">
          <a href="include/data-peserta.php">
            <i class='bx bx-collection' ></i>
            <span class="links_name">Data Siswa</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="include/data-peserta.php">Data Siswa</a></li>
          <li><a href="include/data-guru.php">Data Guru</a></li>
          <li><a href="include/data-mapel.php">Data Pelajaran</a></li>
          <li><a href="#">-</a></li>
        </ul>
      </li>
     <?php } ?>
     <!-- <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li> -->
    <li class="profile">
    <a href="../logout.php">
        <i class='bx bx-log-out'></i>
        <span class="links_name">Log Out</span>
      </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="container">
        <header>Selamat datang <?php echo $_SESSION['a_global']->nama ; ?></header>
       <div class="box1 swiper">
       <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="../assets/img/showImg/bola.jpg" alt="" />
            </div>
            <div class="profile-details">
              <div class="name-job">
                <h3 class="name">Class Meeting</h3>
                <h4 class="job">Final Sepak bola</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="../assets/img/showImg/voli.jpg" alt="" />
            </div>
            <div class="profile-details">
              <div class="name-job">
                <h3 class="name">Class Meeting</h3>
                <h4 class="job">Final Volly</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="../assets/img/showImg/pelantikan.jpg" alt="" />
            </div>
            <div class="profile-details">
              <div class="name-job">
                <h3 class="name">Kegiatan</h3>
                <h4 class="job">Pelantikan Paskibra</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="../assets/img/showImg/jumat.jpg" alt="" />
            </div>
            <div class="profile-details">
              <div class="name-job">
                <h3 class="name">Jum'at Berkah</h3>
                <h4 class="job">Istigosah Bersama </h4>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>

       </div>

    </div>
    
  </section>
  
  <script src="../assets/js/dashboard.js"></script>
  <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/script1.js"></script>
</body>
</html>
