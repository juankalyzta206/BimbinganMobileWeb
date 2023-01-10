<div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo" data-target="slide-out">Menu</a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?page=dataBimbingan">Data Bimbingan</a></li>
                    <li><a href="index.php?page=dataDokumen">Data Dokumen</a></li>
                    <li><a href="index.php?page=user">Profil</a></li>
                    <li><a href="javascript: if (confirm('Apakah anda yakin ingin keluar?')) { window.location.href='logout.php' } else { void('') }; " class="waves-effect">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  </div>

  <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="../assets/img/sidebar/abstrak.jpg"  width="300" >
                    </div>
                            <a href="index.php?page=user"><img class="circle" src="../assets/img/sidebar/work-table.jpg"></a>
                            <span class=" white-text name"><?php echo $nama_mhs;?> - <i>[User]</i></span>
                            <span class="white-text email"><?php echo $email_mhs?></span>
                </div>
            </li>
            <li><a href="index.php" class="waves-effect"><i class="material-icons">home</i>Beranda</a></li>
            <li><a href="index.php?page=dataBimbingan" class="waves-effect"><i class="material-icons">cloud</i>Data Bimbingan</a></li>
            <li><a href="index.php?page=dataDokumen" class="waves-effect"><i class="material-icons">cloud</i>Data Dokumen</a></li>
            <li><a href="index.php?page=user" class="waves-effect"><i class="material-icons">cloud</i>Profil</a></li>

            <br>
            <br>
            <br>

            <li><a href="javascript: if (confirm('Apakah anda yakin ingin keluar?')) { window.location.href='logout.php' } else { void('') }; " class="waves-effect"><i class="material-icons">exit_to_app</i>Log Out</a></li>
            
        </ul>
