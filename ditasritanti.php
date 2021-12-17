<!DOCTYPE html>
<html>
<head>
	<title>Dita</title>
</head>
<body>
2. <hr>
1. baca data <br>
2. cetak data <br>
3. ubah data <br>
4. hapus data <br>
5. keluar program <br>
<br>
<form method="post">
	<input type="text" name="angka"> <br>
	<button type="submit" name="hitung">hasil</button>
</form>
<?php 
if (isset($_POST['hitung'])){
	$a='1';
	$b='2';
	$c='3';
	$d='4';
	$e='5';
	$input= $_POST['angka'];
	if ($input === $a){
	echo "baca data";
}
elseif ($input === $b){
	echo "cetak data";
}
elseif ($input === $c){
	echo "ubah data";
}
elseif ($input === $d){
	echo "hapus data";
}
elseif ($input === $e){
	echo "keluar program";
}
else {
	echo "data tidak ditemukan";
}
}
?>
<br>
<br>
<br>
3. <hr>
1. luas <br>
2. keliling <br>
3. panjang diagonal <br>
4. keluar program <br>
<form method="post">
	<h3>panjang :</h3> <input type="number" name="panjang"> <br>
<h3>lebar :</h3> <input type="number" name="lebar"> <br>
<h3>masukkan code menu :</h3> <input type="number" name="code"> <br>
<button type="submit" name="luas">cari</button>
</form>
<?php
if (isset($_POST['luas'])){
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$code = $_POST['code'];
	$a='1';
	$b='2';
	$c='3';
	$d='4';
	$e='5';
	if ($code === $a){
		$h1 = $panjang * $lebar;
		echo $h1;
	}
	elseif ($code === $b) {
		$h2 = 2 * $panjang;
		$h3 = 2 * $lebar;
		$hsl = $h2 + $h3;
		echo $hsl;
	}
	elseif ($code === $c) {
		$h4 = $panjang * $panjang;
		$h5 = $lebar * $lebar;
		$h6 = $h4 + $h5;
		echo $h6;
	}
	elseif ($code === $d) {
		echo "keluar program";
	}
	else {
	echo "data tidak ditemukan";
}}
?>
</body>
</html>