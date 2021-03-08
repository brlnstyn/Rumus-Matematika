<!DOCTYPE html>
<html>
<head>
	<title>Luas Persegi</title>
</head>
<body>
<h4>Masukkan sisi persegi ke dalam tabel berikut!</h4>
<form method="POST">
<table>
	<tr>
		<td>Sisi Pertama:</td>
		<td><input type="text" name="sisi_satu"></td>
	</tr>
	<tr>
		<td>Sisi Kedua:</td>
		<td><input type="text" name="sisi_dua"></td>
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
		$sisi_satu = @$_POST['sisi_satu'];
		$sisi_dua = @$_POST['sisi_dua'];
		$jumlah = $sisi_satu * $sisi_dua;
		echo "Luas Persegi Tersebut adalah " . $jumlah . " meter persegi";
	}
?>