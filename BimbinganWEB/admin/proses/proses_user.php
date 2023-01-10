<?php
include "../../koneksi/koneksi.php";


    if(isset($_POST['ubah'])) {
    
        $id_admin     = $_POST['id_admin'];
        $nama_admin   = $_POST['nama_admin'];
        $email_admin  = $_POST['email_admin'];
        $telp_admin   = $_POST['telp_admin'];
        $alamat_admin = $_POST['alamat_admin'];
        
        $query = "UPDATE admin SET nama_admin='$nama_admin',email_admin='$email_admin',telp_admin='$telp_admin',alamat_admin='$alamat_admin' WHERE id_admin='$id_admin'";
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

        $id_admin       = $_POST['id_admin'];
        $password_admin_baru  = $_POST['password_admin_baru'];

        $query = "UPDATE admin SET password_admin='$password_admin_baru' WHERE id_admin='$id_admin'";
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