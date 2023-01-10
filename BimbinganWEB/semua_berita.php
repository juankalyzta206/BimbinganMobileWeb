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

    <style>
      .parallax-container {
        height : 100;
      }
    </style>

    <body id="home" class="scrollspy">
    
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
        
      
        <section class="services grey lighten-2 scrollspy">
          <div class="container">
            <div class="row">
              <h3 class="light center blue-text text-darken-3">Semua Berita</h3>
              &nbsp;&nbsp;&nbsp;<a href="index.php" class="btn blue darken-2"><i class="material-icons left">arrow_back</i> Kembali</a><br><br>
              <div class="row">
                <?php 
                    $data = mysqli_query($connect,"SELECT * FROM berita ORDER BY tgl_berita DESC, jam_berita");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <div class="col s12 m4">
                  <div class="card">
                    <div class="card-image">
                    <img src="admin/gambarberita/<?php echo $d['gambar_berita']; ?>"  width="350px" height="197px">
                    </div>
                    <div class="card-content">
                    <span class="card-title"><?php echo $d['judul']; ?></span>
                      <p><?php echo substr($d['isi'], 0, 50); ?>...</p>
                    </div>
                    <div class="card-action">
                      <a href="lihat_berita.php?id_berita=<?php echo $d['id_berita']; ?>">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <?php
                    }
                ?>
              </div>
            </div>
            
          </div>
        </section>

        <footer class="page-footer blue darken-4 white-text center">
          <div class="footer-copyright">
            <div class="container center">
              &copy; 2019 Copyright By Me
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>

      <script>

        const sidenav =  document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
          M.ScrollSpy.init(scroll, {
            scrollOffset : 50
          });

      </script>
    </body>
  </html>