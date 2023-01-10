<?php 


	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id_berita = $_GET['id_berita'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM berita WHERE id_berita=$id_berita";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
        "id_berita"=>$row['id_berita'],
        "judul"=>$row['judul'],
        "isi"=>$row['isi'],
        "tgl_berita"=>$row['tgl_berita'],
        "jam_berita"=>$row['jam_berita'],
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result3'=>$result));
	
	mysqli_close($con);
?>