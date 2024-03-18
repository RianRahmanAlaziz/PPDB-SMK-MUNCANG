<?php 
session_start();
    include '../../koneksi/koneksi.php';
    setlocale(LC_TIME, 'id_ID.utf8');
    $hariIni = new DateTime();
    $peserta = mysqli_query($conn, "SELECT * FROM tb_akun JOIN tb_pendaftaran ON(tb_akun.id_user = tb_pendaftaran.id_pendaftaran) WHERE id_user = '".$_SESSION['a_global']->id_user."' "); $p = mysqli_fetch_object($peserta); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/cetak.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="icon" href="../../assets/img/icon.png" />
    <script>
      window.print();
    </script>
    <title>Bukti Pendaftaran</title>
  </head>
  <body>
    <div class="container">
      <center>
        <table width="625">
          <tr>
            <td>
              <center>
                <img src="../../assets/img/logo.jpeg" width="90" height="90" />
              </center>
            </td>
            <td>
              <center>
                <font size="4">YAYASAN TAUBAH</font><br />
                <font size="4">DINAS PENDIDIKAN DAN KEBUDAYAAN</font><br />
                <font size="5"><b>SMK AL-KAUTSAR MUNCANG</b></font
                ><br />
                <font size="2">Paket Keahlian : Teknik Komputer dan Jaringan</font><br />
                <font size="2"><i>Jl.RayaCiminyak - Sobang Km.01 Kec. Muncang Kab. Lebak-Banten</i></font>
              </center>
            </td>
          </tr>
          <tr>
            <td colspan="2"><hr /></td>
          </tr>
        </table>
        <br />
        <table>
          <tr class="text2">
            <td>Nomer</td>
            <td width="572">: -</td>
          </tr>
          <tr>
            <td>Perihal</td>
            <td width="564">: -</td>
          </tr>
        </table>
        <br />
        <br />
        <br />
        <table width="625" class="tb">
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
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <table align="right">
          <tr>
            <td>Muncang, ............</td>
          </tr>
          <tr>
            <td>Kepala Sekolah</td>
          </tr>
          <tr>
            <td>
              <br />
              <br />
              <br />
            </td>
          </tr>
          <tr>
            <td>DIKI SUBARKAH, S.Pd</td>
          </tr>
        </table>
      </center>
    </div>
  </body>
</html>
