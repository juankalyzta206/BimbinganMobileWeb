<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM dosen";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"nip"=>$row['nip'],
			"nama_dosen"=>$row['nama_dosen'],
			"email_dosen"=>$row['email_dosen'],
			"telp_dosen"=>$row['telp_dosen'],
			"alamat_dosen"=>$row['alamat_dosen'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result4'=>$result));
	
	mysqli_close($con);
?>