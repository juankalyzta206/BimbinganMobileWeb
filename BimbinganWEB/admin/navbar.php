<div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo" data-target="slide-out">Dashboard</a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?page=dataDosen">Data Dosen</a></li>
                    <li><a href="index.php?page=dataMhs">Data Mahasiswa</a></li>
                    <li><a href="index.php?page=dataBerita">Berita</a></li>
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
                            <span class=" white-text name"><?php echo $nama_admin;?> - <i>[Admin]</i></span>
                            <span class="white-text email"><?php echo $email_admin?></span>
                </div>
            </li>
            <li><a href="index.php?page=dataDosen" class="waves-effect"><i class="material-icons">cloud</i>Data Dosen</a></li>
            <li><a href="index.php?page=dataMhs" class="waves-effect"><i class="material-icons">cloud</i>Data Mahasiswa</a></li>
            <li><a href="index.php?page=dataBerita" class="waves-effect"><i class="material-icons">cloud</i>Berita</a></li>
            <li><a href="index.php?page=user" class="waves-effect"><i class="material-icons">cloud</i>Profil</a></li>

            <br>
            <br>
            <br>

            <li><a href="javascript: if (confirm('Apakah anda yakin ingin keluar?')) { window.location.href='logout.php' } else { void('') }; " class="waves-effect"><i class="material-icons">exit_to_app</i>Log Out</a></li>
            
        </ul>