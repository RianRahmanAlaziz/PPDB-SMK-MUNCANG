<?php 
    include '../../koneksi/koneksi.php';

    if(isset($_GET['id'])){
        $delete = mysqli_query($conn,"DELETE FROM tb_guru 
        WHERE id = '".$_GET['id']."' ");
        echo '<script>window.location="data-guru.php"</script>';
    }


 ?>