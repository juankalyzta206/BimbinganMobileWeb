<?php
    $username = $_GET['id_bimbingan'];

        $delete = "DELETE FROM bimbingan WHERE id_bimbingan = '$username'";
        $sql = mysqli_query($connect, $delete);

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
