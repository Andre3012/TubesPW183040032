<?php 

require 'function.php';

$id = $_GET['id'];

$flm = query("SELECT * FROM film WHERE id = '$id'")['0'];

if(isset($_POST['ubah'])){
	if(ubah($_POST) > 0) {
		echo "<script>
			alert('data berhasil diubah');
			document.location.href='index.php';
			</script>";
	}else {
		echo "<script>
			alert('data gagal diubah');
			document.location.href='index.php';
			</script>";
			}
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Data Film</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h3>Form Ubah Data Film</h3>

	<form method="post" action="">
		<!-- <input type="hidden" name="id" value="<?= $mhs['id']; ?>"> -->
		<ul>
			<li>
				<label>Id : </label><br>
				<input type="text" name="id" required value="<?= $flm['id']; ?>">
			</li>
			<li>
				<label>Foto : </label><br>
				<input type="text" name="foto" required value="<?= $flm['foto']; ?>">
			</li>
			<li>
				<label>Judul_Film : </label><br>
				<input type="text" name="judul_film" required value="<?= $flm['judul_film']; ?>">
			</li>
			<li>
				<label>Genre : </label><br>
				<input type="text" name="genre" required value="<?= $flm['genre']; ?>">
			</li>
			<li>
				<label>Sutradara : </label><br>
				<input type="text" name="sutradara" required value="<?= $flm['sutradara']; ?>">
			</li>
			<li>
				<label>Jadwal_Tayang : </label><br>
				<input type="text" name="jadwal_tayang" required value="<?= $flm['jadwal_tayang']; ?>">
			</li>
			<li>
				<button type="submit" name="ubah">ubah data</button>
			</li>
		</ul>
	</form>

</body>
</html>