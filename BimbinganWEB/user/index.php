<?php
  //Include file header.php
  include 'header.php';
  include 'navbar.php';

  if(isset($_GET['page'])){
      switch($_GET['page']){

        case 'beranda'        : include 'pages/beranda.php'; break;
        case 'user'           : include 'pages/user.php'; break;
        case 'addDokumen'     : include 'pages/addDokumen.php'; break;
        case 'pesan'          : include 'pages/pesan.php'; break;
        case 'pDosen'         : include 'pages/pDosen.php'; break;
        case 'dataBimbingan'  : include 'pages/dataBimbingan.php'; break;
        case 'dataDokumen'    : include 'pages/dataDokumen.php'; break;
        case 'upBimbingan'    : include 'pages/upBimbingan.php'; break;
        case 'delBimbingan'   : include 'proses/proses_delBimbingan.php'; break;
        case 'upDokumen'      : include 'pages/upDokumen.php'; break;
        case 'delDokumen'     : include 'proses/proses_delDokumen.php'; break;
        // case 'cetakBimb'      : include 'pages/cetakBimb.php'; break;

          default : include 'pages/404.php';
      }
  }else{
      include 'pages/beranda.php';
  }
  
  //Include file footer.php
  include 'footer.php';

?>