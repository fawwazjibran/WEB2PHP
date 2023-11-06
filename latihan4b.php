<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN</title>
</head>

<body>
    <?php
    // 5
    $negara1 = array('Indonesia', 'Singapura', 'Malaysia', 'Brunei', 'Thailand');

    echo "<h1>Daftar Negara ASEAN awal :</h1>";
    echo "<ul>";
    foreach($negara1 as $negara2) {
        echo "<li>$negara2</li>";
    }
    echo "</ul>";

    // 3 elemen baru
    array_push($negara1, 'Laos', 'Fhiliphin', 'Myanmar');

    // 
    echo "<h1>Daftar Negara ASEAN baru :</h1>";
    echo "<ul>";
    foreach($negara1 as $negara2) {
        echo "<li>$negara2</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>