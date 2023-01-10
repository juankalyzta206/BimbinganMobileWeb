<?php

 

	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$nip = $_GET['nip'];
	

	//Importing database
	require_once('koneksi.php');

	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM dosen  WHERE nip='$username'";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
        "nip"=>$row['nip'],
        "nama_dosen"=>$row['nama_dosen'],
        "email_dosen"=>$row['email_dosen'],
        "telp_dosen"=>$row['telp_dosen'],
        "alamat_dosen"=>$row['alamat_dosen'],		
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
