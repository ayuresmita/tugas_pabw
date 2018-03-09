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
	<form method="get">
        <!-- Simpan pada 
        <br>
        <select name="penyimpanan">
            <option value="database">Database</option>
            <option value="text">File</option>
        </select>
        <br>
        <br> -->
		<label>Panjang  : </label>
		<input type="text" name="p">
		<label>Lebar : </label>
		<input type="text" name="l">
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
        if (isset($_GET['p'])&&isset($_GET['l'])) {
        	$hasil = $objek->luasPersegiPanjang($_GET['p'],$_GET['l']);
        	echo "$hasil";
        }
	?>
</body>
</html>