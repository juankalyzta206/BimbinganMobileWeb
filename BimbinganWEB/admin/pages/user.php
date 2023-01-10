
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
                                        <td> ID </td>
                                        <td> : </td>
                                        <td> <?php echo $id_admin;?> </td>
                                    </tr>
                                    <tr>
                                        <td> Nama Lengkap </td>
                                        <td> : </td>
                                        <td> <?php echo $nama_admin;?> </td>
                                    </tr>
                                    <tr>
                                        <td> E-Mail </td>
                                        <td> : </td>
                                        <td> <?php echo $email_admin;?> </td>
                                    </tr>
                                    <tr>
                                        <td> Telepon </td>
                                        <td> : </td>
                                        <td> <?php echo $telp_admin;?> </td>
                                    </tr>
                                    <tr>
                                        <td> Alamat Lengkap</td>
                                        <td> : </td>
                                        <td> <?php echo $alamat_admin;?> </td>
                                    </tr>
                                
                                </table>
                            </div>
                        
                        </div>
                    </div><br><br>
                        &nbsp;&nbsp;&nbsp;<a href="#modal2" class="btn waves-effect waves-light red modal-trigger">Update Password</a>
                    
                    <div id="modal1" class="modal">
                        <form method="POST" action="../admin/proses/proses_user.php">
                            <div class="modal-content">
                            
                                <h4>Update Profile</h4>
                                <br>
                                    <div class="input-field">
                                        <input type="text" name="id_admin" id="id_admin" required class="validate" readonly value="<?php echo $data['id_admin']?>">
                                        <label for="id_admin">ID</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="nama_admin" id="nama_admin" required class="validate" value="<?php echo $data['nama_admin']?>">
                                        <label for="nama_admin">Nama Lengkap</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="email_admin" id="email_admin" required class="validate" value="<?php echo $data['email_admin']?>">
                                        <label for="email_admin">E-Mail</label>
                                        <span class="helper-text" data-error="Email Tidak Valid" data-success="Email Valid">Contoh : nama@gmail.com</span>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="telp_admin" id="telp_admin" required class="validate" value="<?php echo $data['telp_admin']?>" onkeypress="return angka(event)">
                                        <label for="telp_admin">Telepon</label>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="alamat_admin" id="alamat_admin" class="materialize-textarea" ><?php echo $data['alamat_admin']?></textarea>
                                        <label for="alamat_admin">Alamat</label>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="modal-close btn waves-effect waves-black red">Batal</button>
                                <button type="submit" name="ubah" value="ubah" class="btn waves-effect waves-green ">Update</button>
                            </div>
                        </form>
                    </div>

                    <div id="modal2" class="modal">
                        <form method="POST" action="../admin/proses/proses_user.php" enctype="multipart/form-data">  
                            <div class="modal-content">
                                <h5>Update Password</h5>
                                <br>
                                <div class="file-field input-field">
                                    <div class="input-field">
                                        <input type="text" name="id_admin" id="id_admin" required class="validate" readonly value="<?php echo $data['id_admin']?>">
                                        <label for="id_admin">ID</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password_admin" id="password_admin" required class="validate">
                                        <label for="password_admin">Password Lama</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password_admin_baru" id="password_admin_baru" required class="validate">
                                        <label for="password_admin">Password Baru</label>
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
