<?php


require 'function.php';

$id = $_GET['id'];

if(hapus($id) > 0 ) {
	// data berhasil dihapus
		echo "<script>
			alert('data berhasil dihapus');
			document.location.href='index.php';
			</script>";
}else { 
  	// data gagal dihapus
		echo "<script>
			alert('data gagal dihapus');
			document.location.href='index.php';
			</script>";
  	}

 ?>