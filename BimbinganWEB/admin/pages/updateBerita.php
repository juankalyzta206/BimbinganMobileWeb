<section id="contacts" class="contact grey lighten-3 scrollspy" style="margin: 1%;">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Kelola Berita</h3>
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
                $username = $_GET['id_berita'];
                $data = mysqli_query($connect, "SELECT * FROM berita WHERE id_berita = '$username'");
                while($d = mysqli_fetch_array($data)){
            ?>
          <form method="POST" action="../admin/proses/proses_upBerita.php" enctype="multipart/form-data" >
              <div class="card-panel">
                  <h5>Form Update Berita</h5>

                  <div class="input-field">
                      <input type="text" name="id_admin" id="id_admin" readonly class="validate" value="<?php echo $d['id_admin']?>">
                      <label for="id_admin">Penginput</label>
                  </div>

                  <div class="input-field">
                    <input type="text" name="tgl_berita" id="tgl_berita" class="datepicker" value="<?php echo $d['tgl_berita']?>">  
                    <label for="tgl_berita">Tanggal Berita</label>
                  </div>

                  <div class="input-field">
                    <input type="text" name="jam_berita" id="jam_berita" class="timepicker" value="<?php echo $d['jam_berita']?>">
                      <label for="jam_berita">Jam Berita</label>
                  </div>

                  <div class="input-field">
                      <input type="text" name="judul_berita" id="judul_berita" class="validate" value="<?php echo $d['judul']?>">
                      <label for="judul_berita">Judul</label>
                  </div>

                  <div class="input-field">
                    <textarea id="isi_berita" name="isi_berita" class="materialize-textarea"><?php echo $d['isi']?></textarea>
                    <label for="isi_berita">Isi Berita</label>
                  </div>

                  <div class="file-field input-field">
                  <img src="gambarberita/<?php echo $d['gambar_berita']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"><br><br><br><br><br>
                  <span class="helper-text red-text" data-error="Error" data-success="Success">Abaikan jika gambar tidak berubah</span>
                    <div class="btn">
                      <span>Gambar Berita</span>
                      <input type="file" name="gambar_berita">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>

                  <input type="text" name="id_berita" id="id_berita" readonly value="<?php echo $d['id_berita']?>">
                  
                  <button type="submit" name="upBerita" value="upBerita" class="btn waves-effect waves-green teal">Update</button>
              </div>
          </form>
        <?php
            }
        ?>
        </div>
      </div>
  </div>
</section>
