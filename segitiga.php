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
		<label>Panjang Alas : </label>
		<input type="text" name="alas">
		<label>Tinggi Segitiga : </label>
		<input type="text" name="tinggi">
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
        if (isset($_POST['alas'])&&isset($_POST['tinggi'])) {
        	$hasil = $objek->luasSegitiga($_POST['alas'],$_POST['tinggi']);
        	echo "$hasil";
        }
	?>
</body>
</html>