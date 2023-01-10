<?php
include "../../koneksi/koneksi.php";


    if(isset($_POST['add'])) {
    
        $id_bimbingan = $_POST['id_bimbingan'];
        $username     = $_POST['nim'];
        $tgl          = $_POST['tgl'];
        $jam          = $_POST['jam'];
        $nip          = $_POST['nip'];
        
        $query ="INSERT INTO bimbingan VALUES('$id_bimbingan', '$username', '$tgl', '$jam', '', '$nip')";
        $sql = mysqli_query($connect, $query);
            if ($sql) {?>
                <script language="JavaScript">
                        alert('Input Diterima');
                        document.location="../index.php?page=beranda";
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