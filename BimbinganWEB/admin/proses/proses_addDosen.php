<?php
include "../../koneksi/koneksi.php";

if(isset($_POST['addDosen'])){
  
  $nama_usr       = $_POST['nama_dosen'];
  $email_usr      = $_POST['email_dosen'];
  $tlp_usr        = $_POST['telp_dosen'];
  $alamat_usr     = $_POST['alamat_dosen'];
  $username       = $_POST['nip'];
  $password       = $_POST['password_dosen']; 

  $foto           = time()."_admin-user.png";

  $check_nim      = mysqli_query($connect, "SELECT * FROM dosen WHERE nip === $username");
  
        $query = "INSERT INTO dosen VALUES('$username', '$nama_usr', '$password', '$email_usr', '$tlp_usr', '$alamat_usr')";
        $sql = mysqli_query($connect, $query);
    

        if ($sql) {?>
          <script language="JavaScript">
            alert('Berhasil Ditambahkan');
            document.location="../index.php";
          </script>
          <?php
        } else {?>
          <script language="JavaScript">
            alert('Data gagal disimpan, silakan cek kembali');
            window.history.go(-1);
              </script>
          <?php
        }
      }
?>
