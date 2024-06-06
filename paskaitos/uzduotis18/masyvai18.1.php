<?php
// 1 Pavyzdys

    // $skaiciai = array(4, 7, 5, 9, 3, 2, 7);
    // print_r($skaiciai);


// 2 Pavyzdys 

    // $pazymiai = array(10, 9, 5, 7, 6, 2, 8);

    // echo "$pazymiai[3] <br>";
    // echo "$pazymiai[0] <br>";
    // echo "$pazymiai[1] <br>";
    // echo "$pazymiai[5] <br>";
    // echo "$pazymiai[6] <br>";

    // echo "elementu kiekis: " . count($pazymiai);


// 3 Pavyzdys

    // $studentai = array("Lukas", "Paulius", "Tomas", "Gintare", "Gabriele", "Joana", "Martynas");

    // echo "Grupeje esantys studentai: $studentai[0], $studentai[1], $studentai[2], ";
    // echo "$studentai[3], $studentai[4], $studentai[5], $studentai[6]. ";


    // 4 Pavyzdys

    // $auto = array("bmw", "audi", "opel", "mercedes", "citroen");

    // print_r($auto);
    // echo "<br>";

    // $auto[0] = "porsche";
    // $auto[2] = "masserati";

    // print_r($auto);



// 5 Pavyzdys 

    // $skaiciai = array(4, 7, 5, 3, 6, 8);

    // print_r($skaiciai);
    // echo "<br>";

    // $kiekis = count($skaiciai);
    // echo "elementu kiekis: $kiekis <br>";
    // echo "pirmo indeksas: 0, o reiksme: $skaiciai[0] <br>";
    // echo "paskutinio indeksas (kiekis - 1, nes numeracija nuo 0): " . ($kiekis - 1);
    // echo ", o reiksme: " . $skaiciai[$kiekis - 1];


// 6 Pavyzdys

    //  $auto = array("bmw", "audi", "opel", "mercedes", "citroen");
    // $kiekis = count($auto) -1;

    // $atsitiktIndeksas = rand(0, $kiekis);
    // $auto1 = $auto[$atsitiktIndeksas];

    // $auto2 = $auto[rand(0, $kiekis)];

    // echo "Du atsitiktiniai auto: ";



// 1 Uzduotis

    $skaiciai = array(7, 6, 4, 2, 8, 1);

    echo "$skaiciai[0] <br>";
    echo "$skaiciai[5] <br>";


// 2 Uzduotis 

    $skaiciai = array(45, 90, 3, 12, 57);
    $suma = 0;
    $indeksas = 0;

    $skaiciu_kiekis = count($skaiciai);


    while($indeksas < $skaiciu_kiekis) {
        $suma += $skaiciai[$indeksas];
        $indeksas++;     
    }

    $vidurkis = ($skaiciu_kiekis > 0) ? $suma / $skaiciu_kiekis : 0;

    echo "Skaiciu suma: " . $suma . "<br>";
    echo "Vidurkis: " . round($vidurkis, 2);


// 3 Uzduotis
    $skaiciai = [14, 60, 3, 9, 24];
    $skaiciai2 = [56, 78, 2, 69, 45];

    $suma = 0;
    $suma2 = 0;

    foreach ($skaiciai as $skaicius) {
        $suma += $skaicius;
    }

    foreach ($skaiciai2 as $skaicius) {
        $suma2 += $skaicius;
    }


    echo "Suma pirmo masyvo: " . $suma . "<br>";
    echo "Suma antro masyvo: " . $suma2 . "<br>";



// 4 Uzduotis 

$vardai = array("Gediminas", "Minvydas", "Goda", "Aleksas", "Dainius", "Petras", "Danielius");

$random_vardai = array_rand($vardai , 5);

foreach ($random_vardai as $Rvardai) {
    echo $vardai[$Rvardai] . "<br>";
}











//<!-- echo $pavadinimas[indeksas]; // norint gauti (išspausdinti)
// reikšmę

// $pavadinimas[indeksas] = nauja_reikšmė; // norint pakeisti
// reikšmę 
// Viso masyvo atvaizdavimas == > print_r($masyvoPavadinimas); 
// Masyvo dydis (elementų kiekis) == > count($masyvoPavadinimas);
// -->