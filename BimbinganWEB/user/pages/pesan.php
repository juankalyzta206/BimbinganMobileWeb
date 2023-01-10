
    <?php
        include "../../koneksi/koneksi.php";
        $query = "SELECT max(id_bimbingan) as maxKode FROM bimbingan";
        $hasil = mysqli_query($connect,$query);
        $data  = mysqli_fetch_array($hasil);
        $kode = $data['maxKode'];
        $noUrut = (int) substr($kode, 3, 3);
        $noUrut++;
        $char = "BIM";
        $newID = $char . sprintf("%03s", $noUrut);
    ?>

    <?php
        $username=$_SESSION['nim'];
         $query = "SELECT * FROM mhs Where nim='".$username."'";
        $sql      = mysqli_query($connect, $query);
        $data     = mysqli_fetch_array($sql);
        
        $username = $data['nim'];
        // $nip      = $data['nip'];
    ?>

  <section class="contact grey lighten-3 scrollspy" style="margin: 1%;">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Permintaan Bimbingan</h3>
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
            <form method="POST" action="../user/proses/proses_bimb.php">
                <div class="card-panel">
                    <h5>Form Pengajuan Bimbingan</h5>

                    <div class="input-field">
                        <input type="text" name="nim" id="nim" readonly class="validate" value="<?php echo $data['nim']?>">
                        <label for="nim">NIM</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="tgl" id="tgl" class="datepicker">  
                        <label for="tgl">Tanggal Bimbingan</label>
                    </div>
                    
                    <div class="input-field">
                    <input type="text" name="jam" id="jam" class="timepicker">
                        <label for="jam">Jam Bimbingan</label>
                    </div>

                    <input type="hidden" name="nip" id="nip" value="<?php echo $data['nip'] ?>">
                    
                    <input type="hidden" name="id_bimbingan" id="id_bimbingan" value="<?php echo $newID?>">
                    
                    <button type="submit" name="add" value="add" class="btn waves-effect waves-green teal">Kirim</button>
                </div>
            </form>
          </div>
        </div>
    </div>
  </section>
