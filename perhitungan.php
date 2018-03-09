<?php
	/**
    ==========================================================
    Kelas perhitungan
    ==========================================================
    **/
	class perhitungan
	{

		public $bil1 = 0;
		public $bil2 = 0; 
		public $hasil = 0;
		
		function luasSegitiga($bil1, $bil2){
			$this->bil1 = $bil1;
			$this->bil2 = $bil2;
			$this->hasil = ($this->bil1 * $this->bil2)/2; 
			$file = fopen("file.txt", 'a');
            $waktu = date('D\, j\-m\-y');
            fwrite($file, "$waktu---> luas segitiga dengan alas $this->bil1 dan tinggi $this->bil2 = $this->hasil ".PHP_EOL);
            fclose($file);
			return $this->hasil;
		}
		function luasPersegiPanjang($bil1, $bil2){
			$this->bil1 = $bil1;
			$this->bil2 = $bil2;
			$this->hasil = $this->bil1 * $this->bil2; 
			$file = fopen("file.txt", 'a');
            $waktu = date('D\, j\-m\-y');
            fwrite($file, "$waktu---> luas persegi panjang dengan panjang $this->bil1 dan lebar $this->bil2 = $this->hasil ".PHP_EOL);
            fclose($file);
			return $this->hasil;
		}
		function luasBujurSangkar($bil1){
			$this->bil1 = $bil1;
			$this->hasil = $this->bil1 * $this->bil1; 
			$file = fopen("file.txt", 'a');
            $waktu = date('D\, j\-m\-y');
            fwrite($file, "$waktu---> luas Bujur sangkar dengan sisi $this->bil1 = $this->hasil ".PHP_EOL);
            fclose($file);
			return $this->hasil;
		}
		function luasLingkaran($bil1){
			$this->bil1 = $bil1;
			$this->hasil = 3.14 * $this->bil1 * $this->bil1; 
			$file = fopen("file.txt", 'a');
            $waktu = date('D\, j\-m\-y');
            fwrite($file, "$waktu---> luas lingkaran dengan jari jari $this->bil1  = $this->hasil ".PHP_EOL);
            fclose($file);
			return $this->hasil;
		}
	}
?>