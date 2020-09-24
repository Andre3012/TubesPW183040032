<?php 
session_start();

if(isset($_SESSION['username']) ){
	header("Location: index.php");
	exit;
}

require 'function.php';

if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5(md5($_POST['password']));
	
	$cek_user = mysqli_query($conn, "SELECT * FROM users
		WHERE user_id = '$username' AND user_password = '$password' ");

	if ( mysqli_num_rows($cek_user) == 1 ) {
		// login berhasil
		$_SESSION['username'] = $username;
		header("Location: index.php");
		exit;
	} else {
		// login gagal
		$error = 'Username / Password Salah!';
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">login</p>
 			<?php if( isset($error) ) : ?>
			<p style="color: blue; font-style: italic;"><?= $error; ?></p>

		<?php endif; ?>

		<form action="" method="post">

		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<button type="submit" class="tombol_login" value="LOGIN" name="login">Login</button>
 
			<br/>
			<br/>
			
		</form>
		
	</div>


</body>
</html>