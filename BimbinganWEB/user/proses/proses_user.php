<?php
include "../../koneksi/koneksi.php";


    if(isset($_POST['ubah'])) {
    
        $nim       = $_POST['nim'];
        $nama_mhs       = $_POST['nama_mhs'];
        $email_mhs      = $_POST['email_mhs'];
        $telp_mhs        = $_POST['telp_mhs'];
        $alamat_mhs     = $_POST['alamat_mhs'];
        
        $query = "UPDATE mhs SET nama_mhs='$nama_mhs',email_mhs='$email_mhs',telp_mhs='$telp_mhs',alamat_mhs='$alamat_mhs' WHERE nim='$nim'";
        $sql = mysqli_query($connect, $query);
            if ($sql) {?>
                <script language="JavaScript">
                        alert('Data berhasil diubah');
                        document.location="../index.php?page=user";
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

    if(isset($_POST['update2'])) {

        $nim       = $_POST['nim'];
        $password_mhs_baru  = $_POST['password_mhs_baru'];

        $query = "UPDATE mhs SET password_mhs='$password_mhs_baru' WHERE nim='$nim'";
        $sql = mysqli_query($connect, $query);
            if ($sql) {?>
                <script language="JavaScript">
                        alert('Password berhasil diubah');
                        document.location="../index.php?page=user";
                </script>
                <?php
                } else {?>
                    <script language="JavaScript">
                        alert('Password gagal diubah, silakan cek kembali');
                        window.history.go(-1);
                    </script>
                <?php
                }
    }


?>