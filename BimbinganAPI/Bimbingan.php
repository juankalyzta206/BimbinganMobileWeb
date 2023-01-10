<?php
		//Import File Koneksi database
		require_once('koneksi.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nim = $_POST['nim'];
        $hasil = $_POST['hasil'];
        $tgl_berita = date("Y-m-d");
        $jam_berita = date("h:i:s");
		$nip = $_POST['nip'];

$MAX = "SELECT max(id_bimbingan) as kodeTerbesar FROM bimbingan";
$query = mysqli_query($con,$MAX);
$data = mysqli_fetch_array($query);
$kodeBimbingan = $data['kodeTerbesar'];
 
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBimbingan, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "BIM";
$kodeBimbingan = $huruf . sprintf("%03s", $urutan);

		$sql = "INSERT INTO bimbingan (id_bimbingan,nim,hasil,tgl,jam,nip) VALUES ('$kodeBimbingan','$nim','$hasil','$tgl_berita','$jam_berita','$nip')";
		

		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil';
		}else{
			echo 'Gagal'; 
		}
		
		mysqli_close($con);
	}
?>
