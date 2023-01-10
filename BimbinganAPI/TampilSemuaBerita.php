<?php 


	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM berita";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_berita"=>$row['id_berita'],
            "judul"=>$row['judul'],
            "isi"=>$row['isi'],
            "tgl_berita"=>$row['tgl_berita'],
            "jam_berita"=>$row['jam_berita'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result2'=>$result));
	
	mysqli_close($con);
?>