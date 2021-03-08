<!DOCTYPE html>
<html>
<head>
	<title>Luas Persegi Panjang</title>
</head>
<body>
<h4>Masukkan panjang dan lebar persegi panjang ke dalam tabel!</h4>
<form method="POST">
	<table>
		<tr>
			<td>Panjang:</td>
			<td><input type="text" name="panjang"></td>
		</tr>
		<tr>
			<td>Lebar:</td>
			<td><input type="text" name="lebar"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Hitung"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$panjang = @$_POST['panjang'];
		$lebar = @$_POST['lebar'];
		$jumlah = $panjang * $lebar;
		echo "Luas Persegi Panjang Tersebut adalah " . $jumlah . " meter persegi";
	}
?>