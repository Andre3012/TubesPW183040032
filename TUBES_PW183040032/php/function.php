<?php 

$conn = mysqli_connect('localhost','root','','tugas_183040032');

function query($query) {
	global $conn;

$result = mysqli_query($conn, $query);

$rows = [];
		while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

}

function tambah($data){
	global $conn;

	$foto = htmlspecialchars($data['foto']);
	$judul_film = htmlspecialchars($data['judul_film']);
	$genre = htmlspecialchars($data['genre']);
	$sutradara = htmlspecialchars($data['sutradara']);
	$jadwal_tayang = htmlspecialchars($data['jadwal_tayang']);

	$query = "INSERT INTO film
				VALUES
				('', '$foto', '$judul_film', '$genre', '$sutradara',$jadwal_tayang')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM film WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;

	$id = $data['id'];

	$nrp = htmlspecialchars($data['foto']);
	$nama = htmlspecialchars($data['judul_film']);
	$email = htmlspecialchars($data['genre']);
	$jurusan = htmlspecialchars($data['sutradara']);
	$jurusan = htmlspecialchars($data['jadwal_tayang']);

	$query = "UPDATE film SET
				foto = '$foto',
				judul_film = '$judul_film',
				genre = '$genre',
				sutradara = '$sutradara',
				jadwal_tayang = '$jadwal_tayang'
				WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function registrasi ($data){
	global $conn;
	$username= $data ['username'];
	$password1 = $data['password1'];
	$password2 = $data ['password2'];



	//cek user

$cek_user = mysqli_query($conn, "SELECT * FROM user 
	WHERE username ='$username'");

if(mysqli_num_rows($cek_user) > 0)	{
	echo "<script>
			alert('Username Sudah Terdaftar!);
			document.location.href='registrasi.php';
		</script>";
		return false;
}

//cek pw tidak sesuai

if ($password1 != $password2) {
	echo "<script>
		alert ('Konfirmasi Password Tidak Sesuai!');
		document.location.href='registrasi.php';
	</script>";
	return false;
}

//username dan password


$password = password_hash ($password1, PASSWORD_DEFAULT);
$created_at= time();
$query = "INSERT INTO user VALUES
				('','$username','$password','created_at')";
				mysqli_query ($conn, $query);

				return mysqli_affected_rows($conn);








}

 ?>
