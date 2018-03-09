<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'tugas2.php';
		echo "<br>";
	?>
	<form method="post">
        <!-- Simpan pada 
        <br>
        <select name="penyimpanan">
            <option value="database">Database</option>
            <option value="text">File</option>
        </select>
        <br>
        <br> -->
		<label>Panjang sisi : </label>
		<input type="text" name="sisi">
		<input type="submit" name="submit1" value="Masukkan">
		<br>
		<br>
	</form>
	<?php
		/**
        ==========================================================
        Memanggil kelas
        ==========================================================
        **/
		include 'perhitungan.php';
        /**
        ==========================================================
        Membuat Objek
        ==========================================================
        **/
        $objek = new perhitungan;
        /**
        ==========================================================
        Proses
        ==========================================================
        **/
        if (isset($_POST['sisi'])) {
        	$hasil = $objek->luasBujurSangkar($_POST['sisi']);
        	echo "$hasil";
        }
	?>
</body>
</html>