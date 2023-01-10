<?php

	
	include_once "koneksi.php";

	class usr{}
	
	$nip = $_POST["nip"];
	$password_dosen = $_POST["password_dosen"];
	
	if ((empty($nip)) || (empty($password_dosen))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	}
	
	$query = mysqli_query($con, "SELECT * FROM dosen WHERE nip='$nip' AND password_dosen='$password_dosen'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['nip'];
		$response->nip = $row['nip'];
		$response->nip = $row['nip'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Username atau password salah";
		die(json_encode($response));
	}

	// $r = mysqli_query($con,$query);
	
	// //Memasukkan Hasil Kedalam Array
	// $result = array();
	// $row = mysqli_fetch_array($r);
	// array_push($result,array(
    //     "nip"=>$row['nip'],
    //     "nama_dosen"=>$row['nama_dosen'],
    //     "email_dosen"=>$row['email_dosen'],
    //     "telp_dosen"=>$row['telp_dosen'],
    //     "alamat_dosen"=>$row['alamat_dosen'],
	// 	));
	
	mysqli_close($con);

?>