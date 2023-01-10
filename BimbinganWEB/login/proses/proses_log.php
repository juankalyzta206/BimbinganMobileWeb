<?php



  include "../../koneksi/koneksi.php";
  $username = $_POST['username'];
  $password = $_POST['password'];

  $loginadmin = mysqli_query($connect, "SELECT * FROM admin WHERE id_admin = '$username' AND password_admin ='$password'");
  $row=mysqli_fetch_array($loginadmin);

    if ($row['id_admin'] == $username AND $row['password_admin'] == $password)
    {
      session_start();
      $_SESSION['id_admin'] = $row['id_admin'];
      $_SESSION['password_admin'] = $row['password_admin'];
    ?>
      <script language="JavaScript">
          alert('Selamat Datang Admin!');
          document.location="../../admin/";
      </script>
    <?php
    }

    $loginmhs = mysqli_query($connect, "SELECT * FROM mhs WHERE nim = '$username' AND password_mhs ='$password'");
  $mhs=mysqli_fetch_array($loginmhs);

    if ($mhs['nim'] == $username AND $mhs['password_mhs'] == $password)
    {
      session_start();
      $_SESSION['nim'] = $mhs['nim'];
      $_SESSION['password_mhs'] = $mhs['password_mhs'];
    ?>
      <script language="JavaScript">
          alert('Selamat Datang Mahasiswa!');
          document.location="../../user/";
      </script>
    <?php
    }else
    {
      ?>
      <script language="JavaScript">
          alert('username atau Password tidak sesuai. Silahkan diulang kembali!');
          document.location="../../index.php";
      </script>
      <?php
    }

    ?>

