<?php
    $username = $_GET['nim'];

        $sql = mysqli_query($connect,"DELETE FROM mhs WHERE nim='$username'");

        if ($sql) {?>
          <script language="JavaScript">
            alert('Berhasil Dihapus');
            document.location="index.php";
          </script>
          <?php
        } else {?>
          <script language="JavaScript">
            alert('Data gagal dihapus, silakan cek kembali');
            window.history.go(-1);
              </script>
            <?php
        }
        ?>

?>
