    <?php error_reporting(0); ?>

    <?php
        session_start();
        if(empty($_SESSION['nim'])){
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
    if(!isset($_SESSION['nim'])){
    ?>
        <script >
            alert("Silakan Login Terlebih Dahulu");
            document.location="../index.php";
        </script>
    <?php
    }
    ?>

    <?php
        $username=$_SESSION['nim'];
        $akses = "SELECT * FROM mhs WHERE nim = '$username'";
        $sql = mysqli_query($connect, $akses);
        $row=mysqli_fetch_array($sql);
        $akses1=$row['nim'];
        if($akses1!="$username"){
    ?>
        <script >
            alert("Anda Tidak Memiliki Hak Akses Untuk Halaman Ini !");
            document.location="../index.php";
        </script>
    <?php
    }
    ?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="../assets/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script language="javascript">
    function angka(evt) //Number
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

      return true;
    }
    function besar(evt) //Uppercase
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 65 || charCode > 90))
          return false;

      return true;
    }
    function kecil(evt) //Lowercase
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
        if (charCode > 31 && (charCode < 97 || charCode > 122))
          return false;

      return true;
    }
    function huruf(evt) //Alphabet + spc
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
        $username=$_SESSION['nim'];
         $query = "SELECT a.*, b.* FROM mhs a, dosen b WHERE nim='".$username."' AND a.nip=b.nip";
        $sql      = mysqli_query($connect, $query);
        $data     = mysqli_fetch_array($sql);
        
        $nama_mhs    = $data['nama_mhs'];
        $email_mhs   = $data['email_mhs'];
        $telp_mhs    = $data['telp_mhs'];
        $alamat_mhs  = $data['alamat_mhs'];
        $nim         = $data['nim'];

        $nip          = $data['nip'];
        $nama_dosen   = $data['nama_dosen'];
        $alamat_dosen = $data['alamat_dosen'];
        $email_dosen  = $data['email_dosen'];
        $telp_dosen   = $data['telp_dosen'];
    ?>
    </head>

    <body>
