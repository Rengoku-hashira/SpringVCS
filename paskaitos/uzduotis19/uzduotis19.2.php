<?php

// 1 Uzduotis

    function padaryti($veiksma) {
        echo "<h1>$veiksma</h1>";
    }


    padaryti("Pirmas");
    padaryti("Antras");
    padaryti("Trecias");
    padaryti("Ketvirtas");
    padaryti("Penktas");

// 2 uzduotis
    function duomenis($vardas, $pavarde, $amzius, $profesija) {
       echo "Mano vardas $vardas, Pavarde $pavarde, man $amzius metai, as esu $profesija <br>";
    }


    duomenis ("Deividas", "Davidauskas", 29, "Statybininkas");


// 3 Uzduotis

    function suma($pirmas, $antras) {
        $atsakymas = $pirmas + $antras;
        echo "$pirmas + $antras = $atsakymas <br>";
    }

    function skirtumas($pirmas, $antras) {
        $atsakymas = $pirmas - $antras;
        echo "$pirmas - $antras = $atsakymas <br>";
    }

    function sandauga($pirmas, $antras) {
        $atsakymas = $pirmas * $antras;
        echo "$pirmas * $antras = $atsakymas <br>";
    }

    function dalyba($pirmas, $antras) {
        if ($antras != 0) {
            $atsakymas = $pirmas / $antras;
            echo "$pirmas / $antras = $atsakymas <br>";
        } else {
            echo "Dalyba iš nulio negalima <br>";
        }
    }

    suma(14, 19);
    skirtumas(30, 89);
    sandauga(300, 34);
    dalyba(100, 5);



// 4 Uzduotis


    function Mskaicius($skaicius1, $skaicius2) {
        if ($skaicius1 > $skaicius2) {
            echo "$skaicius1 yra didesnis <br>";
        } elseif ($skaicius2 > $skaicius1) {
            echo "$skaicius2 yra didesnis <br>";
        } else {
            echo "Skaiciai lygus <br>";
        }
    }

    Mskaicius(14, 90);
    Mskaicius(999, 123);
    Mskaicius(2, 7);


















// 1 Pavyzdys

    // function pasisveikinti($vardas) {
    //     echo "Labas, $vardas <br>";
    // }

    // pasisveikinti("Povilas");
    // pasisveikinti("Gintaras");


// 2 Pavyzdys 

    // $vardas = "Gabriele";
    // $amzius = 22;

    // function informacija($vard, $amz) {
    //     echo "$vard ($amz m.) <br>";
    // }


    // informacija($vardas, $amzius);
    // informacija($vardas, 20);
    // informacija("Paulius", $amzius);
    // informacija("Giedrius", 70);



// 3 Pavyzdys

    // function sudetis($pirmas, $antras) {
    //     $atsakymas = $pirmas + $antras;
    //     echo "$pirmas + $antras = $atsakymas <br>";
    // }

    // sudetis(5, 7);
    // sudetis(8, 2);
    // sudetis(1, 8);
    // sudetis(9, 8);



// 4 Pavyzdys


    // function sudetis($a, $b, $c) {
    //     $suma = $a + $b + $c;
    //     echo "$suma <br>";
    // }

    // sudetis(7, 4, 5);
    // sudetis(8, 9, 3);


// 5 Pavyzdys

    // function sudetis($pirmas, $antras) {
    //     $atsakymas = $pirmas + $antras;
    //     echo "$pirmas + $antras = $atsakymas <br>";
    // }

    // function atimtis($pirmas, $antras) {
    //     $atsakymas = $pirmas - $antras;
    //     echo "$pirmas - $antras = $atsakymas <br>";
    // }

    // function skaiciavimai($pirmas, $antras) {
    //     sudetis($pirmas, $antras);
    //     atimtis($pirmas, $antras);
    //     echo "<br>";
    // }


    // skaiciavimai(4, 5);
    // skaiciavimai(8, 9);
    // skaiciavimai(7, 2);



// 6 Pavyzdys 

    // function spausdintiLentele($eilutes, $stulpeliai) {
    //     echo '<table border="1">';
    //     for($i = 0; $i < $eilutes; $i++) {
    //         echo "<tr>";
    //         for ($j = 0; $j < $stulpeliai; $j++) {
    //             echo "<td>$i $j</td>";
    //         }
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    //     echo "<br>";
    // }


    // spausdintiLentele(4, 6);
    // spausdintiLentele(2, 10);
    // spausdintiLentele(3, 3);





















