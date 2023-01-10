<?php
include "../../koneksi/koneksi.php";

  $id_dokumen   = $_POST['id_dokumen'];
  $nim   = $_POST['nim'];
  $tgl_dokumen     = date('y-m-d');
  $dokumen = $_FILES['dokumen']['name'];

if($dokumen != "") {
  $ekstensi_diperbolehkan = array('pdf','docx', 'xlsx', 'pptx'); 
  $x = explode('.', $dokumen); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['dokumen']['tmp_name'];   
    $nmgbr = "DOC";
  $nama_dokumen_baru = $nmgbr.'-'.$dokumen; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../dokumen/'.$nama_dokumen_baru); 
                  $query = "INSERT INTO dokumen (id_dokumen, nama_dokumen, tgl_dokumen, nim) VALUES ('$id_dokumen', '$nama_dokumen_baru', '$tgl_dokumen', '$nim')";
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
   $query = "INSERT INTO dokumen (id_dokumen, nama_dokumen, tgl_dokumen, nim) VALUES ('$id_dokumen', NULL, '$tgl_dokumen', '$nim')";
                  $result = mysqli_query($connect, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($connect).
                           " - ".mysqli_error($connect));
                  } else {
                    echo "<script>alert('Dokumen berhasil ditambah.');window.location='../index.php';</script>";
                  }
}

?>
