<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pahlawan</title>
</head>

<body>

    <?php 
$pahlawan = array(
	1 => array(
		"Logo" => "Halim.jpg",
		"Nama_Pahlawan" => "Abdul Halim Manjalengka",
		"wafat" => "1962",
		"Lahir" => "1887",
		"Berasal" => "Jawa Barat",
	),
	2 => array(
		"Logo" => "Nasution.jpg",
		"Nama_Pahlawan" => "Abdul Haris Nasution",
		"wafat" => "2000",
		"Lahir" => "1918",
		"Berasal" => "Sumatera Utara",
	),
	3 => array(
		"Logo" => "Kadir.jpg",
		"Nama_Pahlawan" => "Abdul Kadir",
		"wafat" => "1771",
		"Lahir" => "1875",
		"Berasal" => "Kalimantan Barat",
	),
	4 => array(
		"Logo" => "Muzakir.jpg",
		"Nama_Pahlawan" => "Abdul Kahar Mudzakir",
		"wafat" => "1973",
		"Lahir" => "1901",
		"Berasal" => "Sulawesi",
	),
	5 => array(
		"Logo" => "Malik.jpg",
		"Nama_Pahlawan" => "Abdul Malik Karim Amrullah",
		"wafat" => "1908",
		"Lahir" => "1959",
		"Berasal" => "Sumatera Barat",
	),
	6 => array(
		"Logo" => "Muis.jpg",
		"Nama_Pahlawan" => "Abdul Muis",
		"wafat" => "1959",
		"Lahir" => "1883",
		"Berasal" => "Sumatera Barat",
	),
	7 => array(
		"Logo" => "Asbullah.jpg",
		"Nama_Pahlawan" => "Abdul Wahab Asbullah",
		"wafat" => "1971",
		"Lahir" => "1888",
		"Berasal" => "Jawa Timur",
	),
	8 => array(
		"Logo" => "Acmad.jpg",
		"Nama_Pahlawan" => "Acmad Subarjo",
		"wafat" => "1978",
		"Lahir" => "1896",
		"Berasal" => "Karawang",
	),
	9 => array(
		"Logo" => "Adam.jpg",
		"Nama_Pahlawan" => "Adam Malik",
		"wafat" => "1984",
		"Lahir" => "1917",
		"Berasal" => "Sumatera Utara",
	),
	10 => array(
		"Logo" => "Agus.jpg",
		"Nama_Pahlawan" => "Agus Salim",
		"wafat" => "1954",
		"Lahir" => "1884",
		"Berasal" => "Sumatera Barat",
	),

);

echo "<left><b>Nama :</b> Fawwaz Aljibran Ashari</left>";
echo "</br>";
echo "<left><b>NIM :</b> 701220028</left>";
echo "</br>";
echo "<left><b>NIM % x 5 =</b> 0,28% x5 = 0,014 => Angka yang dipilih adalah angka terakhir yaitu 4 => Pahlawan Nasional</left>";
echo "</br>";
echo "</br>";
echo "<center><b>Pahlawan Nasional</b></center>";
echo "</br>";
echo "<table border='1'>";
echo "<tr><th>Logo</th><th>Nama Pahlawan</th><th>Lahir</th><th>Wafat</th><th>Berasal</th></tr>";
foreach ($pahlawan as $pahlawan => $data) {
	echo "<tr><td><img src='$data[Logo]' 'alt=' 'width='100'></td>
			  <td><center>$data[Nama_Pahlawan]</center></td>
			  <td><center>$data[wafat]</center></td>
			  <td><center>$data[Lahir]</center></td>
			  <td><center>$data[Berasal]</center></td></tr>";
}
echo "</table>";


?>

</body>

</html>