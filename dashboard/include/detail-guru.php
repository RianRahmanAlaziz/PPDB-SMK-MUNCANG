<?php 
session_start();
    include '../../koneksi/koneksi.php';
    $peserta = mysqli_query($conn, "SELECT * FROM tb_guru WHERE id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../../assets/img/icon.png">
     <title>Data Guru</title>
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
       <a href="include/data-user.php">
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
          <li><a href="#">Data Pelajaran</a></li>
          <li><a href="#">-</a></li>
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
    <h2>Detail Guru</h2>
        <table class="table-data" border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $p->nm_guru ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmpt_lhr.', '.$p->tgl_lhr ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $p->jk ?></td>
            </tr>
            <tr>
                <td>Nomor Hp</td>
                <td>:</td>
                <td><?php echo $p->no_hp ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
        </table>
    </div>
        
  </section>  
  <script src="../../assets/js/dashboard.js"></script>
</body>
</html>
