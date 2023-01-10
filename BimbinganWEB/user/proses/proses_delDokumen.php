<?php
    $id_dokumen = $_GET['id_dokumen'];

        $delete = "DELETE FROM dokumen WHERE id_dokumen = '$id_dokumen'";
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
