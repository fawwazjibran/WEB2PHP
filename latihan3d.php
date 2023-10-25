<?php
    function faktorial($a){
        $angka = 1;
        $faktorial = 1;
        while ($angka <= $a){
            $faktorial = $faktorial*$angka;
            $angka = $angka + 1;
        }
        return $faktorial;
    }
    echo faktorial(5);

    ?>