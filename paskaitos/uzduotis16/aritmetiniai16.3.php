<?php

// 1 Pavyzdys 
// echo 56 + 42 - 7 * 2;


// 2 Pavyzdys
// echo 5 + 3 . "<br>";
// echo 9 - 4 . "<br>";
// echo 8 * 2 . "<br>";
// echo 7 / 3 . "<br>";
// echo 7 % 3 . "<br>";

// 3 Pavyzdys
// echo 7 * 3 + (5 - 5 * 0) / 7;


// 4 Pavyzdys
// $skaicius = 6 + 7;
// echo $skaicius; 

// 5 Pavyzdys 

// $pirmas = 7;
// $antras = 5;

// echo "$pirmas + $antras = " . ($pirmas + $antras) . "<br>";
// echo "$pirmas - $antras = " . ($pirmas - $antras) . "<br>";
// echo "$pirmas * $antras = " . ($pirmas * $antras) . "<br>";
// echo "$pirmas / $antras = " . ($pirmas / $antras) . "<br>";


// 6 Pavyzdys

// $pirmas = 7;
// $antras = 5;

// $suma = $pirmas + $antras;
// $skirtumas = $pirmas - $antras;
// $sandauga = $pirmas * $antras;
// $dalmuo = $pirmas / $antras;

// echo "$pirmas + $antras = $suma <br>";
// echo "$pirmas - $antras = $skirtumas <br>";
// echo "$pirmas * $antras = $sandauga <br>";
// echo "$pirmas / $antras = $dalmuo <br>";


// 7 Pavyzdys

// $skaicius = 2;

// echo "keitimas, galutinis <br>";

// echo $skaicius++ . "" . $skaicius . "<br>";
// echo $skaicius++ . "" . $skaicius . "<br>";
// echo ++$skaicius . "" . $skaicius . "<br>";
// echo $skaicius++ . "" . $skaicius . "<br>";
// echo $skaicius-- . "" . $skaicius . "<br>";
// echo --$skaicius . "" . $skaicius . "<br>";


// 8 Pavyzdys

    // $skaicius = 5;
    // echo  $skaicius. "<br>";

    // $skaicius += 5;
    // echo $skaicius. "<br>";



    //1 uzduotis

    $skaicius_kitas = 25;
    $kvadratas = $skaicius_kitas * 2;
    $laipsnis = $skaicius_kitas ** 3;

    echo "Skaicius: {$skaicius_kitas}\n";
    echo "Kvadratas: {$kvadratas}\n";
    echo "Laipsnis: {$laipsnis}\n"; 

    // 2 uzduotis ir 3

    $figure = 29;
    $figure1 = 34;
     
    $suma = $figure + $figure1;
    $skirtumas = $figure1 - $figure;
    $daugyba = $suma * $skirtumas;
    $dalyba = $suma / $skirtumas;

    echo "$figure1 - $figure = $skirtumas <br>";
    echo "$figure + $figure1 = $suma <br>";
    echo "$suma * $skirtumas = $daugyba <br>";
    echo "$suma / $skirtumas = $dalyba <br>";


    // 4 Uzduotis

    $pirmas = 9;
    $antras = 64;
    $trecias = 17;
    $ketvirtas = 98;

    $suma = $pirmas + $antras + $trecias + $ketvirtas;
    $vidurkis = $suma / 4;

    echo "$suma / 4 = $vidurkis <br>";


    // 5 Uzduotis 
    $skaicius = 5;

    for($i = 1; $i <= 10; $i++) {
        $lentele = $skaicius * $i;
        echo "{$skaicius} x {$i} = {$lentele}\n <br>";
    }














