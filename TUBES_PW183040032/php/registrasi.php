<?php 
require 'function.php';

if (isset ($_POST['registrasi'])) {
	if ($_POST['password1'] != $_POST['password2']) {
		echo "<script>
			   alert ('konfirmasi password salah!');
			   </script>";
	}else {
		if ( registrasi($_POST) > 0 ) {
			echo "<script>
				alert('user berhasil ditambahkan!');
				</script>";
		}else {
			echo "<script>
				alert('username sudah ada!');
				</script>";
		}
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h3>Form Registrasi</h3>
	<form action="" method="post">
			<table>
				<td>
					<ul>
						<li>
							<label> Username :</label><br>
							<input type="text" name="username"required>
						</li>
						<li>
							<label> Password :</label><br>
							<input type="password" name="password1"required min="5">
						</li>
						<li>
							<label> Konfirmasi Password :</label><br>
							<input type="password" name="password2"required>
						</li>
						<li>
							<td colspan="3">
							<button type="submit" name="registrasi">Registrasi</button>
						</li>
					</ul>		
				</td>
			</table>
	</form>

		<a href="index.php">Kembali kehalaman Login</a>

</body>
</html>