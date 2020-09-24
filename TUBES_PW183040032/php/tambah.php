<?php 

require 'function.php';
if(isset($_POST['tambah'])){
	if(tambah($_POST) > 0) {
	echo "<script>
			alert('data berhasil ditambahkan');
			document.location.href='index.php';
			</script>";
			}
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data Film</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h3>Form Tambah Data Film</h3>

	<form method="post" action="">
		<ul>
			<li>
				<label>id : </label><br>
				<input type="text" name="id" required>
			</li>
			<li>
				<label>Foto : </label><br>
				<input type="text" name="foto" required>
			</li>
			<li>
				<label>Judul_Film : </label><br>
				<input type="text" name="jadwal_film" required>
			</li>
			<li>
				<label>Genre : </label><br>
				<input type="text" name="genre" required>
			</li>
			<li>
				<label>Sutradara : </label><br>
				<input type="text" name="sutradara" required>
			</li>
			<li>
				<label>Jadwal_Tayang : </label><br>
				<input type="text" name="Jadwal_tayang" required>
			</li>
			<li>
				<button type="submit" name="tambah">tambah data</button>
			</li>
		</ul>
	</form>

</body>
</html>