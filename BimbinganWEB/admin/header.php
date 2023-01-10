    <?php error_reporting(0); ?>

    <?php
        session_start();
        if(empty($_SESSION['id_admin'])){
    ?>
    <script>
        alert("Silahkan Login Terlebih Dahulu");
        document.location="../index.php";
    </script>
    <?php
                            }
    ?>

    <?php include"../koneksi/koneksi.php";
    session_start();
    if(!isset($_SESSION['id_admin'])){
    ?>
        <script >
            alert("Silakan Login Terlebih Dahulu");
            document.location="../index.php";
        </script>
    <?php
    }
    ?>

    <?php
        $username=$_SESSION['id_admin'];
        $akses = "SELECT * FROM admin WHERE id_admin = '$username'";
        $sql = mysqli_query($connect, $akses);
        $row=mysqli_fetch_array($sql);
        $akses1=$row['id_admin'];
        if($akses1!="$username"){
    ?>
        <script >
            alert("Anda Tidak Memiliki Hak Akses Untuk Halaman Ini !");
            document.location="../index.php";
        </script>

        <style>
          body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
          }

          main {
            flex: 1 0 auto;
          }
        </style>
    <?php
    }
    ?>

<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="../assets/css/style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script language="javascript">
    function angka(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

      return true;
    }
    function besar(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 65 || charCode > 90))
          return false;

      return true;
    }
    function kecil(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 97 || charCode > 122))
          return false;

      return true;
    }
    function huruf(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 32 && (charCode < 97 || charCode > 122))
          return false;

      return true;
    }


    
    </script>
    <!-- ////////////////// End Validate ////////////////// -->

    <?php
        $username=$_SESSION['id_admin'];
         $query = "SELECT * FROM admin WHERE id_admin='".$username."'";
        $sql      = mysqli_query($connect, $query);
        $data     = mysqli_fetch_array($sql);
        
        $nama_admin   = $data['nama_admin'];
        $email_admin  = $data['email_admin'];
        $telp_admin   = $data['telp_admin'];
        $alamat_admin = $data['alamat_admin'];
        $id_admin     = $data['id_admin']
    ?>

    <style type="text/css">
    body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }
    </style>
    </head>

    <body>