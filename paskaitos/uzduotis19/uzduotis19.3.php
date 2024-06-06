<?php

// 1 Uzduotis

function skaiciai($skaicius1, $skaicius2) {
    if($skaicius1 > $skaicius2) {
        return $skaicius1;
    } elseif ($skaicius2 > $skaicius1) {
        return $skaicius2;
    } else {
        return $skaicius1;
    }
}

echo "dydesnis - " . skaiciai(14, 90) . "<br>";
echo "dydesnis - " . skaiciai(87, 36) . "<br>";
echo "dydesnis - " . skaiciai(14, 13) . "<br>";



// 2 Uzduotis

function zodziai() {
    $words = array("Agurkas", "Pomidoras", "Cukinija", "Svogunas", "Ridikeliai");
    return $words;
}

$words = zodziai();
print_r($words);
echo "<br>";

foreach ($words as $word) {
    echo $word . "<br>";
}

// 3 Uzduotis

function generator($kiekis = 100, $min = 1, $max = 100) {
    $skaiciai = array();
    for ($i = 0; $i < $kiekis; $i++){
        $skaiciai[] = rand($min, $max);
    }
    return $skaiciai;
}

$random = generator();

print_r($random);
echo "<br>";


foreach ($random as $rand) {
    echo $rand . "";
}


// 4 Uzduotis 

function connector($word_massive) {
$common = implode("", $word_massive);
return $common;
};

$words = array("Agurkas ", "Pomidoras ", "Kopustas ", "Brokolis ");
$result = connector($words);

echo $result;


// 5 Uzduotis 

function random_figure($figure1, $figure2, $figure3) {
    $figures = array($figure1, $figure2, $figure3);
    $random = array_rand($figures);
    return $figures[$random];
}

$figure1 = 98;
$figure2 = 89;
$figure3 = 23;

$result = random_figure($figure1, $figure2, $figure3);
echo "Chosen figure is: " . $result;


















// 1 Pavyzdys

    // function skaicius() {
    //     $skaicius = rand(1, 100);
    //     return $skaicius;
    // }

    // echo skaicius();



// 2 Pavyzdys

    // function skaicius() {
    //     $skaicius = rand(1, 100);
    //     return $skaicius;
    // }

    // $skaic = skaicius();
    // echo $skaic;


// 3 Pavyzdys

    // function skaicius($min, $max){
    //     $skaicius = rand($min, $max);
    //     return $skaicius;
    // }

    // echo skaicius(5, 10);


// 4 Pavyzdys

    // function skaicius($min, $max) {
    //     return rand($min, $max);
    // }
    // echo skaicius(5, 10);


// 5 Pavyzdys

    // function skaicius($min, $max) {
    //     return rand($min, $max);
    // }

    // $atsitiktinis = skaicius(5, 10);
    // echo "atsitiktinis sakicius: $atsitiktinis";


// 6 Pavyzdys

    // function skaicius($min, $max) {
    //         return rand($min, $max);
    // }

    // echo "atsitiktinis sakicius: " . skaicius(1, 100);


// 7 Pavyzdys

    // function tekstas() {
    //     return "kazkoks apibreztas tekstas"
    // }

    // tekstas();


// 8 Pavyzdys

    // function tekstas() {
    //     return "kazkoks apibreztas tekstas";
    // }

    // $sakinys = tekstas();
    // echo "$sakinys";



// 9 Pavyzdys 

    // function tekstas() {
    //     return "kazkoks apibreztas tekstas";
    // }

    // echo tekstas();


// 10 Pavyzdys

    // function sakinys($vardas, $pavarde, $amzius, $profesija) {
    //     $formatuotasSakinys = "$vardas $pavarde ($amzius m.) dirba $profesija";
    //     return $formatuotasSakinys;
    // }

    // $pirmas = sakinys("Tomas", "Tomauskas", 24, "policininku");
    // $antras = sakinys("Paulius", "Pauliauskas", 21, "gaisrininku");

    // echo "$pirmas <br>";
    // echo "$antras <br>";


// 11 Pavyzdys

    // function atsitiktiniaiSkaiciai($kiek) {
    //     $skaiciai = array();
    //     for ($i = 0; $i < $kiek; $i++) {
    //         array_push($skaiciai, rand(1, 100));
    //     }
    //     return $skaiciai;
    // }

    // $atsitiktiniai = atsitiktiniaiSkaiciai(10);
    // print_r($atsitiktiniai);
    // echo "<br><br>";

    // print_r(atsitiktiniaiSkaiciai(5));



// 12 Pavyzdys

    // function suma($skaiciai) {
    //     $sum = 0;
    //     foreach ($skaiciai as $skaicius) {
    //         $sum += $skaicius;
    //     }
    //     return $sum;
    // }

    // $skaiciai = array(4, 7, 5, 3, 6, 5, 4);
    // echo "skaiciai: ";
    // print_r($skaiciai);
    // echo "<br> siu skaiciu suma: " . suma($skaiciai);



// 13 Pavyzdys

    // function isvedimas($skaiciai) {
    //     echo "skaiciai: ";
    //     foreach ($skaiciai as $sk) {
    //         echo "[$sk] ";
    //     }
    //     echo "<br>";
    // }


    // function suma($skaiciai) {
    //     $sum = 0;
    //     foreach ($skaiciai as $skaicius) {
    //         $sum += $skaicius;
    //     }
    //     return $sum;
    // }

    // $skaiciai = array(7, 5, 8, 3);
    // isvedimas($skaiciai);
    // echo "siu skaiciu suma: " . suma($skaiciai);













