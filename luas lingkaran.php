<!DOCTYPE html>
<html>
<head>
	<title>Luas Lingkaran</title>
</head>
<body>
<form method="POST">
<h4>Masukkan jari-jari lingkaran (untuk phi = 3.14)</h4>
	<table>
		<tr>
			<td>jari-jari:</td>
			<td><input type="text" name="jari"></td>
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
		$jari = @$_POST['jari'];
		$hitung = 3.14 * $jari * $jari;
		echo "Luas Lingkaran Tersebut Adalah " . $hitung . " meter persegi";
	}
?>

<br>
<br>

<!DOCTYPE html>
<html>
<head>
	<title>Luas Lingkaran</title>
</head>
<body>
<form method="POST">
<h4>Masukkan jari-jari lingkaran (untuk phi = 22/7)</h4>
	<table>
		<tr>
			<td>jari-jari:</td>
			<td><input type="text" name="jari"></td>
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
		$jari = @$_POST['jari'];
		$hitung = (22 * $jari * $jari) / 7;
		echo "Luas Lingkaran Tersebut Adalah " . $hitung . " meter persegi";
	}
?>