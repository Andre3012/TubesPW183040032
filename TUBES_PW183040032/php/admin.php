<?php 

session_start();

if(!isset($_SESSION['username'])) {
	header("Location: login.php");
	exit;

}

require 'function.php';
$film = query("SELECT * FROM film");

if(isset($_GET['cari']) ) {
	$keyword = $_GET['keyword'];
	$query = "SELECT * FROM film WHERE
				judul_film LIKE '%$keyword%'";
	$film = query($query);
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Film</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


	<h1><center>Daftar Film</center></h1>
	<a href="logout.php">Logout</a>
	<br><br>
	<a href="tambah.php">Tambah data film</a>
	<br><br>


	<form action="" method="get">
		<input type="text" name="keyword" autofocus>
		<button type="submit" name="cari">Cari</button>
	</form>

	<br>
	<br>

	<table border ="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>id</th>
			<th>foto</th>
			<th>judul_film</th>
			<th>genre</th>
			<th>sutradara</th>
			<th>jadwal_tayang</th>
			<th>Aksi</th>
		</tr>

			<?php if(empty($film)) : ?>

				<tr>
					<td coldspan="6"> data tidak dapat ditemukan</td>
				</tr>

			<?php endif; ?>
		<?php $i = 1; ?>
		<?php foreach ($film as $flm) : ?>
		<tr>
			<td><?= $flm['id']; ?></td>
			<td><img style="height: 300px;" src="../foto/<?= $flm['foto']; ?>"></td>
			<td><?= $flm['judul_film']; ?></td>
			<td><?= $flm['genre']; ?></td>
			<td><?= $flm['sutradara']; ?></td>
			<td><?= $flm['jadwal_tayang']; ?></td>
			<td>
				<a href="ubah.php?id=<?= $flm['id']; ?>" onclick="return confirm('really');">ubah</a> | 
				<a href="hapus.php?id=<?= $flm['id']; ?>" onclick="return confirm('really');">hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
</body>
</html>