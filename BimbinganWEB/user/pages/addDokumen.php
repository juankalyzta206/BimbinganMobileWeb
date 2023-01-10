
<?php
    include "../../koneksi/koneksi.php";
    $query = "SELECT max(id_dokumen) as maxKode FROM dokumen";
    $hasil = mysqli_query($connect,$query);
    $data  = mysqli_fetch_array($hasil);
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 3, 3);
    $noUrut++;
    $char = "DOC";
    $newID = $char . sprintf("%03s", $noUrut);
  ?>

    <?php
        $username=$_SESSION['nim'];
         $query = "SELECT * FROM mhs WHERE nim='".$username."'";
        $sql      = mysqli_query($connect, $query);
        $data     = mysqli_fetch_array($sql);
        
        $username = $data['nim'];
    ?>


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
                    <form method="POST" action="../user/proses/proses_addDokumen.php"  enctype="multipart/form-data">
                      <div class="card-panel">
                        <h5>Form Upload Dokumen</h5><br>

                          <div class="input-field">
                            <input type="text" name="nim" id="nim" readonly class="validate" value="<?php echo $data['nim']?>">
                            <label for="nim">NIM</label>
                          </div>
                 
                          <div class="row">
                            <div class="file-field input-field">
                          <div class="btn green">
                          <span>Dokumen</span>
                          <input type="file" name="dokumen">
                           </div>
                         <div class="file-path-wrapper">
                         <input type="text" class="file-path" placeholder="Choose an file">
                         </div>
                          </div>

                          <input type="hidden" name="id_dokumen" id="id_dokumen" value="<?php echo $newID?>">
                        <br><br>
                        <button type="submit" name="addDokumen" value="addDokumen" class="btn waves-effect waves-green teal">Kirim</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </section>


          
 

          
                  