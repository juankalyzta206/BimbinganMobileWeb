    <?php
        $query = "SELECT max(id_berita) as maxKode FROM berita";
        $hasil = mysqli_query($connect,$query);
        $data  = mysqli_fetch_array($hasil);
        $kode = $data['maxKode'];
        $noUrut = (int) substr($kode, 3, 3);
        $noUrut++;
        $char = "BRT";
        $newID = $char . sprintf("%03s", $noUrut);
    ?>
    

<section class="contact grey lighten-3 scrollspy" style="margin: 1%;">
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
          <form method="POST" action="../admin/proses/proses_addBerita.php" enctype="multipart/form-data" >

              <div class="card-panel">
                  <h5>Form Input Berita</h5>

                  <div class="input-field">
                      <input type="text" name="id_admin" id="id_admin" readonly class="validate" value="<?php echo $row['id_admin']?>">
                      <label for="id_admin">Penginput</label>
                  </div>

                  <div class="input-field">
                    <input type="text" name="tgl_berita" id="tgl_berita" class="datepicker">  
                    <label for="tgl_berita">Tanggal Berita</label>
                  </div>

                  <div class="input-field">
                    <input type="text" name="jam_berita" id="jam_berita" class="timepicker">
                      <label for="jam_berita">Jam Berita</label>
                  </div>

                  <div class="input-field">
                      <input type="text" name="judul_berita" id="judul_berita" class="validate">
                      <label for="judul_berita">Judul</label>
                  </div>

                  <div class="input-field">
                    <textarea id="isi_berita" name="isi_berita" class="materialize-textarea"></textarea>
                    <label for="isi_berita">Isi Berita</label>
                  </div>
                  
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Gambar Berita</span>
                      <input type="file" name="gambar_berita">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>

                  <input type="hidden" name="id_berita" id="id_berita" value="<?php echo $newID?>">
                  
                  <button type="submit" name="addBerita" value="addBerita" class="btn waves-effect waves-green teal">Simpan</button>
              </div>
          </form>
        </div>
      </div>
  </div>
</section>
