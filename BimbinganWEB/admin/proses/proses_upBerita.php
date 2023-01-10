<?php
include "../../koneksi/koneksi.php";

  $id_admin   = $_POST['id_admin'];
  $id_berita   = $_POST['id_berita'];
  $tgl_berita     = $_POST['tgl_berita'];
  $jam_berita    = $_POST['jam_berita'];
  $judul_berita    = $_POST['judul_berita'];
  $isi_berita    = $_POST['isi_berita'];
  $gambar_berita = $_FILES['gambar_berita']['name'];


if($gambar_berita != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $gambar_berita); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_berita']['tmp_name'];   
$nmgbr = "GBR";
  $nama_gambar_baru = $nmgbr.'-'.$gambar_berita;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../gambarberita/'.$nama_gambar_baru); 
                  $query = "UPDATE berita SET judul='$judul_berita', isi='$isi_berita', tgl_berita='$tgl_berita', jam_berita='$jam_berita', gambar_berita='$nama_gambar_baru', id_admin='$id_admin' WHERE id_berita ='$id_berita'";
                  $result = mysqli_query($connect, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($connect).
                           " - ".mysqli_error($connect));
                  } else {
                    echo "<script>alert('Berita Berhasil Diubah!.');
                            window.location='../index.php'; </script>";
                  }

            } else {     
                echo "<script>alert('Ekstensi Gambar yang boleh hanya jpg atau png.');
                        window.history.go(-1);</script>";
            }
} else {
   $query = "UPDATE berita SET judul='$judul_berita', isi='$isi_berita', tgl_berita='$tgl_berita', jam_berita='$jam_berita' , id_admin='$id_admin' WHERE id_berita='$id_berita'";
                  $result = mysqli_query($connect, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($connect).
                           " - ".mysqli_error($connect));
                  } else {
                    echo "<script>alert('Data Berhasil Diubah.');window.location='../index.php';</script>";
                  }
}

 

