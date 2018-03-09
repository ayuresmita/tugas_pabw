<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'tugas2.php';
		if (isset($_POST['pilihan'])) {
			$pil = $_POST['pilihan'];
		}
		if ($pil == "Segitiga") {
			 header('Location: segitiga.php');
		}
		else if ($pil == "Bujur Sangkar") {
			header('Location: bujur sangkar.php');
		}
		else if ($pil == "Lingkaran") {
			header('Location: lingkaran.php');
		}
		else {
			header('Location: persegi panjang.php');
		}
	?>
</body>
</html>