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
      <!-- <link type="text/css" rel="stylesheet" href="assets/material-icons/css/material-icons.css"  media="screen,projection"/> -->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style>
      .parallax-container {
        height : 100;
      }
    </style>

    <body id="home" class="scrollspy">
    <!-- navbar -->
    <div class="navbar-fixed">
            <nav class="blue darken-2">
              <div class="container"> 
                <div class="nav-wrapper">
                  <a href="#" target="_blank" class="brand-logo">Beta Test</a> 
                  
                </div>
              </div>
            </nav>
        </div>
        
      
        <section class="about scrollspy">
          <div class="container">
            <div class="row">
              <div class="col m6 s12 center">
              <img src="assets/img/logotangerang.png" class="responsive-img materialboxed center" width="340px" height="185px">
            </div>
              <div class="col m6 light">
                <h5>Website Administrasi RT../RW...</h5>
                <p>Login dengan Username & Password Anda Agar Dapat Menggunakan Sistem Bimbingan Online
                </p>
              </div>
              <form method="post" action="login/proses/proses_log.php">
                <div class="col m6 light">
                  <div class="card-panel center">
                    <h5>Silahkan Login Terlebih Dahulu!</h5>
                      <div class="input-field">
                        <input type="text" name="username" id="username" required class="validate">
                          <label for="username">Username</label>
                      </div>
                      <div class="input-field">
                        <input type="password" name="password" id="password" class="form-control validate">
                          <label for="password">Password</label>
                      </div>
                      <button type="submit" class="btn blue darken-2" value="Login" name="submit" style="border-radius: 10%;"> Login </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>

        <section class="clients scrollspy">
          <div class="parallax-container">
            <div class="parallax"><img src="assets/img/logotangerang.png"></div>

              <div class="container clients">
                  <div class="row">
                    <div class="col m4 s12 center">
                      <img src="#" alt="">
                    </div>
                    <div class="col m4 s12 center">
                      <img src="#" alt="">
                    </div>
                    <div class="col m4 s12 center">
                        <img src="#" alt="">
                    </div>
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