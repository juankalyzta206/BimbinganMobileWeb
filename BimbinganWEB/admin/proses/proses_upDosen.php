<?php
include "../../koneksi/koneksi.php";

if(isset($_POST['upDosen'])){
  
  $nama_usr       = $_POST['nama_dosen'];
  $email_usr      = $_POST['email_dosen'];
  $tlp_usr        = $_POST['telp_dosen'];
  $alamat_usr     = $_POST['alamat_dosen'];
  $username       = $_POST['nip'];
  $password       = $_POST['password_dosen'];

        $sql = mysqli_query($connect, "UPDATE dosen SET nama_dosen='$nama_usr', email_dosen='$email_usr', telp_dosen='$tlp_usr', alamat_dosen='$alamat_usr', password_dosen='$password' WHERE nip='$username'");
    

        if ($sql) {?>
          <script language="JavaScript">
            alert('Berhasil Diubah');
            document.location="../index.php";
          </script>
          <?php
        } else {?>
          <script language="JavaScript">
            alert('Data gagal diubah, silakan cek kembali');
            window.history.go(-1);
              </script>
          <?php
        }
      }
?>
