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
	<form method="GET">
       <!--  Simpan pada 
        <br>
        <select name="penyimpanan">
            <option value="database">Database</option>
            <option value="text">File</option>
        </select>
        <br>
        <br> -->
		<label>Jari Jari Lingkaran : </label>
		<input type="text" name="r">
		<input type="submit" name="submit1" value="Masukkan" >
		<br><br>
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
        if (isset($_GET['r'])) {
        	$hasil = $objek->luasLingkaran($_GET['r']);
        	echo "$hasil";
        }
	?>
</body>
</html>