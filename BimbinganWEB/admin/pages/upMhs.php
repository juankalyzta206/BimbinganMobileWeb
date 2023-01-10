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
                    $username = $_GET['nim'];
                    $data = mysqli_query($connect,"SELECT a.*, b.* FROM mhs a, dosen b WHERE nim='$username' AND a.nip=b.nip");
                    while($d = mysqli_fetch_array($data)){
                ?>
                    <form method="POST" action="proses/proses_upMhs.php">
                      <div class="card-panel">
                        <h5>Update Data Mahasiswa</h5>

                          <div class="input-field">
                            <input type="text" name="nim" id="nim" value="<?php echo $d['nim']; ?>" readonly class="validate">
                            <label for="nim">NIM</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $d['nama_mhs']; ?>" required class="validate">
                            <label for="nama_mhs">Nama Mahasiswa</label>
                          </div>

                          <div class="input-field">
                            <input type="email" name="email_mhs" id="email_mhs" value="<?php echo $d['email_mhs']; ?>" required class="validate">
                            <label for="email_mhs">E-Mail</label>
                            <span class="helper-text" data-error="Email Tidak Valid" data-success="Email Valid">Contoh : nama@gmail.com</span>
                          </div>

                          <div class="input-field">
                            <input type="password" name="password_mhs" value="<?php echo $d['password_mhs']; ?>" id="password_mhs" required class="validate">
                            <label for="password_mhs">Password</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="telp_mhs" id="telp_mhs" value="<?php echo $d['telp_mhs']; ?>" required class="validate">
                            <label for="telp_mhs">Phone</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="alamat_mhs" id="alamat_mhs" value="<?php echo $d['alamat_mhs']; ?>" required class="validate">
                            <label for="alamat_mhs">Alamat</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="dosen" id="dosen" class="validate" value="<?php echo $d['nip']?>">
                            <label for="dosen">NIP Dosen</label>
                            <span class="helper-text red-text">Masukkan NIP Dosen Jika Ingin Mengubah!</span>
                          </div>

                          <button type="submit" name="upMhs" value="upMhs" class="btn blue darken-2" style="border-radius: 10%;"> Ubah </button>
                      </div>
                    </form>
                    <?php
                    }
                    ?>
                  </div>
                </div>
            </div>
          </section>