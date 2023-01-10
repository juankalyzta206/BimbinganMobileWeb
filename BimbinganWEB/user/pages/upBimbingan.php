  <section class="contact grey lighten-3 scrollspy" style="margin: 1%;">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Update Permintaan Bimbingan</h3>
        <div class="row">
        <div class="col m5 s12">
          
          <ul class="collection with-header">
            <li class="collection-header"><h5>Universitas Pamulang</h5></li>
            <li class="collection-item">Jl. Surya Kencana No.1, Pamulang Barat</li>
            <li class="collection-item">Kec. Pamulang, Kota Tangerang Selatan</li>
            <li class="collection-item">Banten 15417</li>
          </ul>

          </div>

          <?php
            $username = $_GET['id_bimbingan'];
            $data = mysqli_query($connect,"SELECT * FROM bimbingan WHERE id_bimbingan='$username'");
            while($d = mysqli_fetch_array($data)){
        ?>

          <div class="col m7 s12">
            <form method="POST" action="../user/proses/proses_upBimbingan.php">
                <div class="card-panel">
                    <h5>Update Permintaan Bimbingan</h5><br>

                    <div class="input-field">
                        <input type="text" name="nim" id="nim" readonly class="validate" value="<?php echo $d['nim'];?>">
                        <label for="nim">NIM</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="tgl" id="tgl" value="<?php echo $d['tgl'];?>" class="datepicker">
                        <label for="tgl">Tanggal Bimbingan</label>
                    </div>

                    <div class="input-field">
                    <input type="text" name="jam" id="jam" value="<?php echo $d['jam'];?>" class="timepicker">
                        <label for="jam">Jam Bimbingan</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="text" name="id_bimbingan" id="id_bimbingan" readonly class="validate" value="<?php echo $d['id_bimbingan'];?>">
                        <label for="nim">ID</label>
                    </div>
                    
                    <button type="submit" name="upBimb" value="upBimb" class="btn waves-effect waves-green teal">Kirim</button>
                </div>
                <?php
                }
                ?>
            </form>
          </div>
        </div>
    </div>
  </section>
