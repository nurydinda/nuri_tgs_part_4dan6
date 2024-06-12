<?php 
require 'config.php';

$id = $_GET["id"];

// cek kondisi
if( hapus($id) > 0 ) {
	// kondisi pertama
	echo "
		<script>
			alert('Data berhasil dihapus!');
			document.location.href = '/BELAJAR_PHP/pertemuan6';
		</script>
	";
} else {
	// kondisi kedua
	echo "
		<script>
			alert('Data gagal ditambahkan!');
			document.location.href = 'latihan.php';
		</script>
	";
}

?>