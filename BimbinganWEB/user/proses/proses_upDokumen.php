<?php
include "../../koneksi/koneksi.php";


  $id_dokumen   = $_POST['id_dokumen'];
  $nim          = $_POST['nim'];
  $tgl_dokumen  = $_POST['tgl_dokumen'];
  $dokumen = $_FILES['dokumen']['name'];

if($dokumen != "") {
  $ekstensi_diperbolehkan = array('pdf','docx', 'xlsx', 'pptx'); 
  $x = explode('.', $dokumen); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['dokumen']['tmp_name'];   
    $nmgbr = "Update-DOC";
  $nama_dokumen_baru = $nmgbr.'-'.$dokumen; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../dokumen/'.$nama_dokumen_baru); 
                 $query = "UPDATE dokumen SET nama_dokumen='$nama_dokumen_baru', tgl_dokumen='$tgl_dokumen', nim='$nim' WHERE id_dokumen='$id_dokumen'";
                  $result = mysqli_query($connect, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($connect).
                           " - ".mysqli_error($connect));
                  } else {
                    echo "<script>alert('Dokumen Berhasil Ditambah!.');
                            window.location='../index.php'; </script>";
                  }

            } else { 
                echo "<script>alert('Ekstensi Gambar yang boleh hanya pdf, docx, xlsx, pptx');
                        window.history.go(-1);</script>";
            }
} else {
$query = "UPDATE dokumen SET tgl_dokumen='$tgl_dokumen', nim='$nim' WHERE id_dokumen='$id_dokumen'";
                  $result = mysqli_query($connect, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($connect).
                           " - ".mysqli_error($connect));
                  } else {
                    echo "<script>alert('Dokumen berhasil ditambah.');window.location='../index.php';</script>";
                  }
}

?>
