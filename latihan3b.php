
<?php
function styleText($jawabanIsset, $jawabanEmpty) {
    $style = "font-size: 28px; font-family: Arial; border: solid; padding: 10px;";
    $styledText = "<p style='$style'>$jawabanIsset $jawabanEmpty</p>";
   
    return $styledText;
}

// Contoh pemanggilan fungsi:
$jawabanIsset = "Isset adalah = Variabel digunakan untuk memeriksa apakah variabel diinisialisasi atau tidak dan nilainya null.<br><br>";
$jawabanEmpty = "Empty adalah = Empty adalah variabel yang telah didenifisikan, tetapi nilainya kosong. ";
$styledTexts = styleText($jawabanIsset, $jawabanEmpty);

echo $styledTexts; // Output dua teks dengan gaya yang ditentukan


?>