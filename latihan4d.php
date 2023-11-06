<?php

$negara = array();
$negara["Indonesia"]= array("ibukota"=> "D,KI Jakarta","Kode_telepon" => "+62");
$negara["Singapura"]= array("ibukota"=> "Singapura","Kode_telepon" => "+65");
$negara["Malaysia"]= array("ibukota"=> "Kuala Lumpur","Kode_telepon" => "+60");
$negara["Brunei"]= array("ibukota"=> "Bandar Seri Begawan","Kode_telepon" => "+673");
$negara["Thailand"]= array("ibukota"=> "Bangkok","Kode_telepon" => "+66");
$negara["Laos"]= array("ibukota"=> "Vientiane","Kode_telepon" => "+856");
$negara["Philiphin"]= array("ibukota"=> "Manila","Kode_telepon" => "+63");
$negara["Myanmar"]= array("ibukota"=> "Naypyidaw","Kode_telepon" => "+95");

// urutan array berdasarkan negara
ksort($negara);

echo "<table border='1'>";
echo"<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($negara as $key => $value) {
    echo "<tr><td>$key</td><td>$value[ibukota]</td><td>$value[Kode_telepon]</td></tr>";
}
echo "</table>";

?>