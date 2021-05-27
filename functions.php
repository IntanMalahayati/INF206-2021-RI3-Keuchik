<?php
$conn = mysqli_connect("localhost", "root", "", "db");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
	global $conn;

	$nik =  $data["nik"];
	$nama = stripcslashes($data["name"]);
	$nohp = stripcslashes($data["nohp"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT NIK FROM warga WHERE NIK = '$nik'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('Anda sudah terdaftar!')
		      </script>";
		return false;
	}

	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO warga VALUES('$nik', '$nama', '$nohp', '$password')");

	return mysqli_affected_rows($conn);
}

function pengajuan($data){
	global $conn;

	$nama =  stripcslashes($data["nama"]);
	$nik = $data["nik"];
	$usia = stripcslashes($data["usia"]);
	$alamat = stripcslashes($data["alamat"]);
	$email = stripcslashes($data["email"]);
	$nohp = stripcslashes($data["nohp"]);
	$kegiatan = stripcslashes($data["kegiatan"]);
	$dlmrangka = stripcslashes($data["dlmrangka"]);
	$tanggal = $data["tanggal"];
	$waktu = $data["waktu"];
	$tempat = stripcslashes($data["tempat"]);
	$pj = stripcslashes($data["pj"]);
	$ket = $data["ket"];

	mysqli_query($conn, "INSERT INTO kegiatan VALUES('$nama', '$nik', '$usia', '$alamat',
													 '$email', '$nohp', '$kegiatan', '$dlmrangka',
													 '$tanggal', '$waktu', '$tempat',
													 '$pj', '$ket')");

	return mysqli_affected_rows($conn);
}
?>