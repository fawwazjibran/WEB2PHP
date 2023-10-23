<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping 3</title>
</head>
<body>
    <table border="5" callpadding="30" callspacing="1">
        <tr >
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>
<!--TULIS SCRIPT PHP DIBAWAH BARIS INI-->
<?php
    $baris =15;
    $kolom = 5;
    
    echo "<tr>";
    echo "</tr>";
    
    for ($i=1; $i <= $baris; $i++) { 
        echo "<tr>";
        
        for ($j=1; $j <= $kolom; $j++) { 
        echo "<td>baris $i, Kolom $j</td>";
        }echo "</tr>";
    }echo "</table>";
    
    
    
    ?>


    </table>
</body>
</html>