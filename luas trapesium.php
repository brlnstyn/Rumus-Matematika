<!DOCTYPE html>
<html>
<head>
	<title>Rumus Trapesium</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>Atas:</td>
			<td><input type="text" name="atas"></td>
		</tr>
		<tr>
			<td>Bawah:</td>
			<td><input type="text" name="bawah"></td>
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
		$atas = @$_POST['atas'];
		$bawah = @$_POST['bawah'];
		$tinggi = @$_POST['tinggi'];
		$jumlah = (($atas + $bawah) * $tinggi) / 2;
		echo "Jadi Luas Trapesium Tersebut Adalah " . $jumlah . " meter persegi.";
	}

?>