<?php
  include 'header.php';
  include 'navbar.php';

  if(isset($_GET['page'])){
      switch($_GET['page']){

          case 'beranda'  : include 'pages/beranda.php'; break;
          case 'user'  : include 'pages/user.php'; break;
		  case 'add_user'  : include 'pages/add_usr.php'; break;
          case 'update_user'  : include 'pages/update_usr.php'; break;
          case 'addDosen'   : include 'pages/addDosen.php'; break;
          case 'addMhs'   : include 'pages/addMhs.php'; break;
          case 'addBerita'   : include 'pages/addBerita.php'; break;
          case 'dataDosen' : include 'pages/dataDosen.php'; break;
          case 'dataMhs' : include 'pages/dataMhs.php'; break;
          case 'upDosen' : include 'pages/upDosen.php'; break;
          case 'delDosen' : include 'proses/proses_delDosen.php'; break;
          case 'upMhs' : include 'pages/upMhs.php'; break;
          case 'delMhs' : include 'proses/proses_delMhs.php'; break;
          case 'dataBerita' : include 'pages/dataBerita.php'; break;
          case 'delBerita' : include 'proses/proses_delBerita.php'; break;
          case 'upBerita' : include 'pages/updateBerita.php'; break;

          default : include 'pages/404.php';
      }
  }else{
      include 'pages/beranda.php';
  }
  
  include 'footer.php';

?>