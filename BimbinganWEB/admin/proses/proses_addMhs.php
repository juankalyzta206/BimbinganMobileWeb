<?php
include "../../koneksi/koneksi.php";

if(isset($_POST['addMhs'])){
  
  $nama_mhs       = $_POST['nama_mhs'];
  $email_mhs      = $_POST['email_mhs'];
  $telp_mhs       = $_POST['telp_mhs'];
  $alamat_mhs     = $_POST['alamat_mhs'];
  $nim            = $_POST['nim'];
  $password_mhs   = $_POST['password_mhs'];
  $dosen          = $_POST['dosen'];

  $foto           = time()."_admin-user.png";

  $check_nim      = mysqli_query($connect, "SELECT * FROM mhs WHERE nim === $nim");
  
        $query =" INSERT INTO mhs VALUES('$nim', '$nama_mhs', '$password_mhs', '$email_mhs', '$telp_mhs', '$alamat_mhs', '$dosen')";
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
