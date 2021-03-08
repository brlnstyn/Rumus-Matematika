<!DOCTYPE html>
<html>
<head>
	<title>Rumus Belah Ketupat</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>Diagonal 1:</td>
			<td><input type="text" name="diagonal_satu"></td>
		</tr>
		<tr>
			<td>Diagonal 2:</td>
			<td><input type="text" name="diagonal_dua"></td>
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
		$diagonal_satu = @$_POST['diagonal_satu'];
		$diagonal_dua = @$_POST['diagonal_dua'];
		$jumlah = ($diagonal_satu * $diagonal_dua) / 2;
		echo "Jadi Luas Belah Ketupat Tersebut Adalah " . $jumlah . " meter persegi";
	}
?>