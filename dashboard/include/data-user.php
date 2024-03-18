<?php 
session_start();
    include '../../koneksi/koneksi.php';
    $peserta = mysqli_query($conn, "SELECT * FROM tb_akun JOIN tb_pendaftaran ON(tb_akun.id_user = tb_pendaftaran.id_pendaftaran) WHERE id_user = '".$_SESSION['a_global']->id_user."' ");
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
      <a href="cetak-pendaftaran.php" target="_blank">
          <i class='bx bx-collection' ></i>
          <span class="links_name">Cetak Pendaftaran</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="cetak-pendaftaran.php" target="_blank">Cetak Pendaftaran</a></li>

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
    <h2>Detail User</h2>
        <table class="table-data" border="0">
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo $p->id_pendaftaran ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $p->nm_peserta ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmpt_lahir.', '.$p->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $p->jk ?></td>
            </tr>
            <tr>
                <td>Anak ke-</td>
                <td>:</td>
                <td><?php echo $p->anak_ke ?></td>
            </tr>
            <tr>
                <td>Jumlah Sodara Kandung</td>
                <td>:</td>
                <td><?php echo $p->jmlh_sodara ?></td>
            </tr>
            <tr>
                <td>Tinggal Bersama</td>
                <td>:</td>
                <td><?php echo $p->tinggal_brsma ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $p->jurusan ?></td>
            </tr>
            <tr>
                <td>Nomor Hp</td>
                <td>:</td>
                <td><?php echo $p->no_hp ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->almt_peserta ?></td>
            </tr>
        </table>
    </div>
    
        <div class="container">
        <h2>Data Orang Tua</h2>
        <table class="table-data box" border="0">
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td><?php echo $p->nama_ayah ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmpt_lahir_ayah.', '.$p->tgl_lahir_ayah ?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><?php echo $p->p_akhir_ayah ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>:</td>
                <td><?php echo $p->pekerjaan_ayah ?></td>
            </tr>
            
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $p->agama_ayah ?></td>
            </tr>
        </table>
        <table class="table-data box" border="0">
        <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><?php echo $p->nama_ibu ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmpt_lahir_ibu.', '.$p->tgl_lahir_ibu ?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><?php echo $p->p_akhir_ibu ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td><?php echo $p->pekerjaan_ibu ?></td>
            </tr>
            
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $p->agama_ibu ?></td>
            </tr>
        </table>
        </div>
  </section>  
  <script src="../../assets/js/dashboard.js"></script>
</body>
</html>
