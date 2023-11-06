<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN dan Ibu Kotanya</title>
</head>

<body>
    <?php
    // Membuat associative array dengan nama negara dan ibu kotanya
    $negara_ibukota = array(
        'Indonesia' => 'D.K.I Jakarta',
        'Singapura' => 'Singapura',
        'Malaysia' => 'Kuala Lumpur',
        'Brunei' => 'BandarSeriBagawan',
        'Thailand' => 'Bangkok',
        'Laos' => 'Vientiane',
        'Fhilipina' => 'Manila',
        'Myanmar' => 'Naypyidaw'
    );

    echo "<h1>Daftar Negara ASEAN dan Ibu Kotanya :</h1>";
    echo "<ul>";
    foreach($negara_ibukota as $negara => $ibu_kota) {
        echo "<li>$negara : $ibu_kota</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>