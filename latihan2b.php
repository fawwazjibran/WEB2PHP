<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
      .kotak {
        width: 50px;
        height: 50px;
        background-color: #ccc;
        border: 1px solid #000;
        display: inline-block;
        text-align: center;
        line-height: 50px;
        margin-right: 5px; /* Tambahkan margin kanan */
        margin-bottom: 5px; /* Tambahkan margin bawah */
      }
      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>
    <?php
      $jumlah_baris = 5; // Variabel untuk jumlah baris

      for ($i = 1; $i <= $jumlah_baris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo "<div class='kotak'>$j</div>";
        }
        echo "<div class='clear'></div>";
      }
    ?>
  </body>
</html>
