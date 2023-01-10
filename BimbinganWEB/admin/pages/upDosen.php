        <section class="contact grey lighten-3 scrollspy">
            <div class="container">
              <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
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
                <?php
                    $username = $_GET['nip'];
                    $data = mysqli_query($connect,"SELECT * FROM dosen WHERE nip='$username'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                    <form method="POST" action="proses/proses_upDosen.php">
                      <div class="card-panel">
                        <h5>Form Update Data Dosen</h5>

                          <div class="input-field">
                            <input type="text" name="nama_dosen" id="nama_dosen" value="<?php echo $d['nama_dosen']; ?>" required class="validate">
                            <label for="nama_dosen">Nama Dosen</label>
                          </div>

                          <div class="input-field">
                            <input type="email" name="email_dosen" id="email_dosen" value="<?php echo $d['email_dosen']; ?>" required class="validate">
                            <label for="email_dosen">E-Mail</label>
                            <span class="helper-text" data-error="Email Tidak Valid" data-success="Email Valid">Helper text</span>
                          </div>

                          <div class="input-field">
                            <input type="text" name="nip" id="nip" value="<?php echo $d['nip']; ?>" readonly class="validate">
                            <label for="nip">NIP</label>
                          </div>

                          <div class="input-field">
                            <input type="password" name="password_dosen" id="password_dosen" required class="validate">
                            <label for="password_dosen">Password</label>
                          </div>
                          
                          <div class="input-field">
                            <input type="text" name="telp_dosen" id="telp_dosen" value="<?php echo $d['telp_dosen']; ?>" required class="validate">
                            <label for="telp_dosen">Telepon</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="alamat_dosen" id="alamat_dosen" value="<?php echo $d['alamat_dosen']; ?>" required class="validate">
                            <label for="alamat_dosen">Alamat</label>
                          </div>
                          
                          <button type="submit" name="upDosen" value="upDosen" class="btn blue darken-2" style="border-radius: 10%;"> Ubah </button>
                      </div>
                    </form>
                    <?php
                    }
                    ?>
                  </div>
                </div>
            </div>
          </section>