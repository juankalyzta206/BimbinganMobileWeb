<!DOCTYPE html>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="../assets/css/style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <section id="contacts" class="contact grey lighten-3 scrollspy">
            <div class="container">
              <h3 class="light grey-text text-darken-3 center">Data Mahasiswa</h3>
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
                    <form method="POST" action="proses/proses_addMhs.php">
                      <div class="card-panel">
                        <h5>Form Tambah Data Mahasiswa</h5>
                          <div class="input-field">
                            <input type="text" name="nim" id="nim" required class="validate">
                            <label for="nim">NIM</label>
                          </div>
                          <div class="input-field">
                            <input type="text" name="nama_mhs" id="nama_mhs" required class="validate">
                            <label for="nama_mhs">Nama Mahasiswa</label>
                          </div>
                          <div class="input-field">
                            <input type="email" name="email_mhs" id="email_mhs" required class="validate">
                            <label for="email_mhs">E-Mail</label>
                            <span class="helper-text" data-error="Email Tidak Valid" data-success="Email Valid">Contoh : nama@gmail.com</span>
                          </div>
                          <div class="input-field">
                            <input type="password" name="password_mhs" id="password_mhs" required class="validate">
                            <label for="password_mhs">Password</label>
                          </div>
                          <div class="input-field">
                            <input type="text" name="telp_mhs" id="telp_mhs" required class="validate">
                            <label for="telp_mhs">Telepon</label>
                          </div>
                          <div class="input-field">
                            <input type="text" name="alamat_mhs" id="alamat_mhs" required class="validate">
                            <label for="alamat_mhs">Alamat</label>
                          </div>


                          <div class="input-field">
                            <select id="select" name="dosen" require>
                            <option value="" disabled selected>- Pilih Dosen Pembimbing -</option>

                            <?php $sql="SELECT * FROM dosen";

                              $hasil=mysqli_query($connect,$sql);
                              $no=0;
                              while ($data = mysqli_fetch_array($hasil)) {
                              $no++;
                              ?>
                              <option value="<?php echo $data['nip'];?>"><?php echo $data['nama_dosen'];?></option>
                              <?php 
                              }
                              ?>
                            </select>
                            <label for="dosen">Dosen Pembimbing</label>
                          </div>


                          <button type="submit" name="addMhs" value="addMhs" class="btn blue darken-2" style="border-radius: 10%;"> Tambahkan </button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </section>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script>
      const select = document.querySelectorAll('#select');
            M.FormSelect.init(select);
    </script>

    </body>
</html>