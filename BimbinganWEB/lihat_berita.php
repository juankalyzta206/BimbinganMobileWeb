<!DOCTYPE html> 
<?php
include "koneksi/koneksi.php";
?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- <link type="text/css" rel="stylesheet" href="assets/css/material-icons.css"  media="screen,projection"/> -->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    
    <div class="navbar-fixed">
            <nav class="blue darken-2">
              <div class="container"> 
                <div class="nav-wrapper">
                  <a href="http://unpam.ac.id/" target="_blank" class="brand-logo">Universitas Pamulang</a> 
                  <ul class="right hide-on-med-and-down">
                  <li><a href="index.php " class="waves-effect">Log In</a></li>
                    </ul>
                </div>
              </div>
            </nav>
        </div>
        
      <div class="container">
        <?php

            $id = $_GET['id_berita'];

            $data = mysqli_query($connect, "SELECT a.*, b.nama_admin FROM berita a, admin b WHERE id_berita='$id' AND a.id_admin=b.id_admin");

            $d = mysqli_fetch_array($data);

            ?>

              <h4 class="blue-text center"><?php echo $d['judul']?></h4>
              <h6 class="grey-text center">Posted By : <?php echo $d['nama_admin']?></h6>
              <h6 class="grey-text center"><?php echo date("l, d / M / Y ", strtotime($d['tgl_berita'])), date("H:i", strtotime($d['jam_berita'])) ?></h6>
              <div class="center">
              <img src="admin/gambarberita/<?php echo $d['gambar_berita']; ?>" style="width: 75%">
              </div>
              <p class="black-text"><?php echo $d['isi'] ?></p><br><br><br>

        </div>

        <footer class="page-footer blue darken-4 white-text center">
          <div class="footer-copyright">
            <div class="container center">
              &copy; 2019 Copyright By Me
            </div>
          </div>
        </footer>

      
    </body>
  </html>