<?php

// 7 Uzduotis 

            $skaiciai = array(7, 6, 14, 9, 5);
            echo implode(",", $skaiciai);
        

// 9 Uzduotis 

            $skaiciai = array(4, 5, 19, 60, 90, 2);
            $kiekis = count($skaiciai);
            $suma = 0;

            for ($i = 0; $i < $kiekis; $i++) {
                $suma += $skaiciai[$i];
            }

            echo "suma gavosi:  $suma <br>";
            echo "Vidurkis: ". ($suma / $kiekis);


// 10 pavyzdys 

            $skaiciai = array();
                
            for ($i = 0; $i < 10; $i++) {
                $skaiciai[$i] = rand(1, 15);
            }

            foreach ($skaiciai as $indikatorius => $skaicius) {
                echo '<table border="1">'
                . "<tr>"
                    . "<td>$skaicius</td>"
                    . "<td>$skaicius</td>"
                    . "<td>$skaicius</td>"
                . "</tr>";
                }


            




// 11 Pavyzdys

    // $skaiciai = array (4, 7, 5, 3, 6);
    // for ($i = 0; $i < count($skaiciai); $i++) {
    // echo "$skaiciai[$i] ";
    // }

// 12 Pavyzdys

    // $skaiciai = array(4, 7, 5, 3, 6, 9); 

    // foreach ($skaiciai as $skaicius) {
    //     echo "$skaicius ";
    // }


// 13 Pavyzdys

    // $vardai = array("Martynas", "Lukas", "Tomas", "Gabriele", "Joana");
    // $kiekis = count($vardai);

    // echo "Vardai: ";

    // for($i = 0; $i < $kiekis; $i++) {
    //     echo "$vardai[$i]";
    // }


// 14 Pavyzdys


    // $skaiciai = array(5, 4, 7, 5, 12, 7, 5, 1);
    // $kiekis = count($skaiciai);

    // $suma = 0;

    // for ($i = 0; $i < $kiekis; $i++) {
    //     $suma += $skaiciai[$i];
    // }


    // echo "suma: $suma <br>";
    // echo "vidurkis: " . ($suma / $kiekis);


    // 15 Pavyzdys

    // $skaiciai = array(7, 4, 5, 3);

    // foreach ($skaiciai as $skaicius) {
    //     echo "[$skaicius]";
    // }


// 16 Pavyzdys

    // $skaiciai1 = array(1, 7, 5, 3, 4);
    // $skaiciai2 = array(8, 5, 3, 4);

    // echo "Pirmas masyvas: ";

    // foreach ($skaiciai1 as $skaicius) {
    //     echo "$skaicius";
    // }

    // echo "<br> Antras masyvas ";

    // foreach ($skaiciai2 as $skaicius) {
    //     echo "$skaicius ";
    // }


// 17 Pavyzdys

    // $nav = array("Pradzia", "Produkcija", "Paslaugos", "Atlikti darbai", "Apie mus", "Kontaktai");

    // if (count($nav) > 0) {
    //     echo "<ul>";
    //     foreach ($nav as $item) {
    //             echo "<li>$item</li>";
    //     }
    //     echo "</ul>";

    // } else {
    //     echo "nera duomenu";
    // }


// 20 Pavyzdys

        // $skaiciai = array(7, 8, 5, 3, 4);

        // print_r($skaiciai);
        // echo "<br>";

        // for($i = 0; $i < count($skaiciai); $i++) {
        //     $skaiciai[$i] += rand(1, 5);
        // }

        // print_r($skaiciai);


// 23 Pavyzdys

        // $masinos = array("audi", "bmw", "mercedes");
        // $rida = array(30041, 24453, 14423);

        //     echo '<table border="1">'
        //     . "<tr>"
        //         . "<td>Indeksas</td>"
        //         . "<td>Masina</td>"
        //         . "<td>Rida</td>"
        //     . "</tr>";


        // for ($i = 0; $i < count($masinos); $i++) {
        //     echo "<tr>"
        //     . "<td>$i</td>"
        //         . "<td>$masinos[$i]</td>"
        //         . "<td>$rida[$i]</td>"
        //     ."</tr>";
        // }       
        //     echo "</table>";

 





