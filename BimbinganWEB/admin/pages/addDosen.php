<!DOCTYPE html>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="../assets/css/style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <section class="contact grey lighten-3 scrollspy">
            <div class="container">
              <h3 class="light grey-text text-darken-3 center">Data Dosen</h3>
                <div class="row">
                <div class="col m5 s12">
          
                  <ul class="collection with-header">
                    <li class="collection-header"><h5>Universitas Pamulang</h5></li>
                    <li class="collection-item">Jl. Surya Kencana No.1, Pamulang Barat</li>
                    <li class="collection-item">Kec. Pamulang, Kota Tangerang Selatan</li>
                    <li class="collection-item">Banten 15417</li>
                  </ul>

                </div>

                  <div class="col m7 s12">
                    <form method="POST" action="proses/proses_addDosen.php">
                      <div class="card-panel">
                        <h5>Form Tambah Data Dosen</h5>

                          <div class="input-field">
                            <input type="text" name="nama_dosen" id="nama_dosen" required class="validate">
                            <label for="nama_dosen">Nama Dosen</label>
                          </div>

                          <div class="input-field">
                            <input type="email" name="email_dosen" id="email_dosen" required class="validate">
                            <label for="email_dosen">E-Mail</label>
                            <span class="helper-text" data-error="Email Tidak Valid" data-success="Email Valid">Contoh : nama@gmail.com</span>
                          </div>

                          <div class="input-field">
                            <input type="text" name="nip" id="nip" required class="validate">
                            <label for="nip">NIP</label>
                          </div>

                          <div class="input-field">
                            <input type="password" name="password_dosen" id="password_dosen" required class="validate">
                            <label for="password_dosen">Password</label>
                          </div>
                          
                          <div class="input-field">
                            <input type="text" name="telp_dosen" id="telp_dosen" required class="validate">
                            <label for="telp_dosen">Telepon</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="alamat_dosen" id="alamat_dosen" required class="validate">
                            <label for="alamat_dosen">Alamat</label>
                          </div>
                          
                          <button type="submit" name="addDosen" value="addDosen" class="btn blue darken-2" style="border-radius: 10%;"> Tambahkan </button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </section>


    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>

    </body>
</html>