<?php

require_once('koneksi.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){
			
		$MAX = "SELECT max(kd_headline) as kodeTerbesar FROM headline";
		$query = mysqli_query($con,$MAX);
		$data = mysqli_fetch_array($query);
		$kodeBrt = $data['kodeTerbesar'];
		 
		// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
		// dan diubah ke integer dengan (int)
		$urutan = (int) substr($kodeBrt, 3, 3);
		 
		// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
		$urutan++;
		 
		// membentuk kode barang baru
		// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
		// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
		// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
		$huruf = "HDL";
		$kodeBrt = $huruf . sprintf("%03s", $urutan);	
		//Mendapatkan Nilai Variable
		$judul = $_POST['judul'];
		$tgl_input = date("Y-m-d h:i:s");
        $isi = $_POST['isi'];
 		$nip = $_POST['id_berita'];
		$sql = "INSERT INTO headline (kd_headline,judul,isi,nip,tgl_input) VALUES ('$kodeBrt','$judul','$isi','$nip','$tgl_input')";
		
		//Import File Koneksi database
	
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil';
		}else{
			echo 'Gagal';
		}
		
		mysqli_close($con);
	}
?>