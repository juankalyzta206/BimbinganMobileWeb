
        <section class="services grey lighten-3" style="margin: 1%;">
            <div class="container">
                <div class="row">
                    <h3 class="light center grey-text text-darken-3">My Profile</h3>
                    <div class="col m12 s12">
                        <div class="card center">
                            <i class="material-icons small" style="padding: 2%; margin: 1%;">person</i></i></i><span class="card-title light" style="margin: 3%;"><b>Profile</b></span>
                            <hr>    
                            <a href="#modal1" class="btn-floating halfway-fab waves-effect waves-light red modal-trigger"><i class="material-icons">update</i></a>
                            
                            <div class="card-content">
                                <table border="0">

                                    <tr>
                                        <td> NIM </td>
                                        <td> : </td>
                                        <td> <?php echo $nim;?> </td>
                                    </tr>
                                    <tr>
                                        <td> Nama Lengkap </td>
                                        <td> : </td>
                                        <td> <?php echo $nama_mhs;?> </td>
                                    </tr>
                                    <tr>
                                        <td> E-Mail </td>
                                        <td> : </td>
                                        <td> <?php echo $email_mhs;?> </td>
                                    </tr>
                                    <tr>
                                        <td> Telepon </td>
                                        <td> : </td>
                                        <td> <?php echo $telp_mhs;?> </td>
                                    </tr>
                                    <tr>
                                        <td> Alamat Lengkap</td>
                                        <td> : </td>
                                        <td> <?php echo $alamat_mhs;?> </td>
                                    </tr>
                                
                                </table>
                            </div>
                        
                        </div>
                    </div><br><br>
                        &nbsp;&nbsp;&nbsp;<a href="#modal2" class="btn waves-effect waves-light red modal-trigger">Update Password</a>
                    
                    <div id="modal1" class="modal">
                        <form method="POST" action="../user/proses/proses_user.php">
                            <div class="modal-content">
                            
                                <h4>Update Profile</h4>
                                <br>
                                    <div class="input-field">
                                        <input type="text" name="nim" id="nim" required class="validate" readonly value="<?php echo $data['nim']?>">
                                        <label for="nim">NIM</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="nama_mhs" id="nama_mhs" required class="validate" value="<?php echo $data['nama_mhs']?>">
                                        <label for="nama_mhs">Nama Lengkap</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="email_mhs" id="email_mhs" required class="validate" value="<?php echo $data['email_mhs']?>">
                                        <label for="email_mhs">E-Mail</label>
                                        <span class="helper-text" data-error="Email Tidak Valid" data-success="Email Valid">Contoh : nama@gmail.com</span>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="telp_mhs" id="telp_mhs" required class="validate" value="<?php echo $data['telp_mhs']?>" onkeypress="return angka(event)">
                                        <label for="telp_mhs">Telepon</label>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="alamat_mhs" id="alamat_mhs" class="materialize-textarea" ><?php echo $data['alamat_mhs']?></textarea>
                                        <label for="alamat_mhs">Alamat</label>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="modal-close btn waves-effect waves-black red">Batal</button>
                                <button type="submit" name="ubah" value="ubah" class="btn waves-effect waves-green ">Update</button>
                            </div>
                        </form>
                    </div>

                    
                    <div id="modal2" class="modal">
                        <form method="POST" action="../user/proses/proses_user.php" enctype="multipart/form-data">  
                            <div class="modal-content">
                                <h5>Update Password</h5>
                                <br>
                                <div class="file-field input-field">
                                    <div class="input-field">
                                        <input type="text" name="nim" id="nim" required class="validate" readonly value="<?php echo $data['nim']?>">
                                        <label for="nim">NIM</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password_mhs" id="password_mhs" required class="validate">
                                        <label for="password_mhs">Password Lama</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password_mhs_baru" id="password_mhs_baru" required class="validate">
                                        <label for="password_mhs">Password Baru</label>
                                    </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="modal-close btn waves-effect waves-black red">Batal</button>
                                <button type="submit" name="update2" value="update2" class=" waves-effect waves-green btn">Update</button>
                            </div>
                        </form>

                </div>
            </div>
        </section>
