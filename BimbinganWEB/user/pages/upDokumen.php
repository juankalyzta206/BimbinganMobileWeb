
         <section class="contact grey lighten-3 scrollspy" style="margin: 1%;">
            <div class="container">
              <h3 class="light grey-text text-darken-3 center">Dokumen</h3>
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
                        $username = $_GET['id_dokumen'];
                        $data = mysqli_query($connect, "SELECT * FROM dokumen WHERE id_dokumen = '$username'");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                        <form method="POST" action="../user/proses/proses_upDokumen.php"  enctype="multipart/form-data">
                        <div class="card-panel">
                            <h5>Form Upload Dokumen</h5><br>

                            <div class="input-field">
                                <input type="text" name="id_dokumen" id="id_dokumen" readonly class="validate" value="<?php echo $d['id_dokumen']?>">
                                <label for="id_dokumen">ID</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="nim" id="nim" readonly class="validate" value="<?php echo $d['nim']?>">
                                <label for="nim">NIM</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="tgl_dokumen" id="tgl_dokumen" readonly class="validate" value="<?php echo $d['tgl_dokumen']?>">
                                <label for="tgl_dokumen">Tanggal Dokumen</label>
                            </div>
                    
                            <div class="row">
                                <div class="file-field input-field">
                            <div class="btn green">
                            <span>Dokumen</span>
                            <input type="file" name="dokumen" >
                            </div>
                            <div class="file-path-wrapper">
                            <input type="text" class="file-path" value="<?php echo $d['nama_dokumen']?>" placeholder="Choose an file">
                            </div>
                            </div>

                            <button type="submit" name="upDokumen" value="upDokumen" class="btn waves-effect waves-green teal">Kirim</button>
                        </div>
                        </form>
                        <?php
                        }
                        ?>
                  </div>
                </div>
            </div>
        </section>






                    