<!DOCTYPE html>
<html>
<head>
	<title>Luas Jajar Genjang</title>
</head>
<body>
<h4>Masukkan alas dan tinggi jajar genjang ke dalam tabel berikut!</h4>
<form method="POST">
	<table>
		<tr>
			<td>Alas:</td>
			<td><input type="text" name="alas"></td>
		</tr>
		<tr>
			<td>Tinggi:</td>
			<td><input type="text" name="tinggi"></td>
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
		$alas = @$_POST['alas'];
		$tinggi = @$_POST['tinggi'];
		$jumlah = $alas * $tinggi;
		echo "Jadi Luas Jajar Genjang Tersebut Adalah " . $jumlah . " meter persegi";
	}

?>