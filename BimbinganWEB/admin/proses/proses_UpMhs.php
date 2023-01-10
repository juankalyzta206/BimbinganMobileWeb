<?php
include "../../koneksi/koneksi.php";

//Proses Tambah
if(isset($_POST['upMhs'])){
  
  $nama_mhs       = $_POST['nama_mhs'];
  $email_mhs      = $_POST['email_mhs'];
  $telp_mhs       = $_POST['telp_mhs'];
  $alamat_mhs     = $_POST['alamat_mhs'];
  $check_nim       = $_POST['nim'];
  $password_mhs   = $_POST['password_mhs'];
  $nip            = $_POST['dosen'];

        $sql = mysqli_query($connect, "UPDATE mhs SET nama_mhs='$nama_mhs', email_mhs='$email_mhs', telp_mhs='$telp_mhs', alamat_mhs='$alamat_mhs', password_mhs='$password_mhs', nip='$nip' WHERE nim='$check_nim'");
    
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
