<?php


// 1 Uzduotis

    function tekstas() {
        echo  "Lorem ipsum dolor sit amet.";
    }

    tekstas();



// 2 Uzduotis

    function printPoliceOfficerInfo($vardas, $pavarde, $amzius, $alga, $etatas, $spec) {
        echo "Policininko informacija:\n";
        echo "Vardas: $vardas\n";
        echo "Pavardė: $pavarde\n";
        echo "Amžius: $amzius\n";
        echo "Alga: $alga\n";
        echo "Etatas: $etatas\n";
        echo "Specializacija: $spec\n";
    }
    printPoliceOfficerInfo('Jonas', 'Jonaitis', 35, 2500, 'Pilnas etatas', 'Nusikaltimų prevencija');



// 3 Uzduotis

    function printlist($pirkiniai) {
        echo "<ul>\n";
        foreach($pirkiniai as $pirk) {
            echo "<li>$pirk</li>\n";
        }
        
    }

        echo "</ul>\n";

    $pirk = array("Muilas", "Duona", "Limonadas", "Agurkai", "kvapukas");

    printlist($pirk);




// 4 Uzduotis

    function lentele($rows, $min_value, $max_value) {
        $lentele = "<table border='1'>";
        $lentele .= "<tr><th>Pirmas</th><th>Antras</th><th>Trečias</th></tr>";
        
        for ($i = 0; $i < $rows; $i++) {
            $eile1 = rand($min_value, $max_value);
            $eile2 = rand($min_value, $max_value);
            $suma = $eile1 + $eile2;
            
            $lentele .= "<tr><td>$eile1</td><td>$eile2</td><td>$suma</td></tr>";
        }
        
        $lentele .= "</lentele>";
        return $lentele;
    }

    echo lentele(5, 2, 10);



// 5 Uzduotis 

    function sarasas($masyvas) {
        foreach ($masyvas as $mas) {
        echo $mas . " ";
    }
    }

    $masyvas = array(5, 6, 19, 36, 54, 78);
    sarasas($masyvas);




// 1 Pavyzdys

    // function pasisveikinti() {
    //     echo "labas pasauli <br>";
    // }

    // pasisveikinti();


// 2 Pavyzdys

    // function labas() {
    //     echo "labas ir tau <br>";
    // }
    // labas();
    // labas();
    // labas();


// 3 Pavyzdys

    // function funkcija() {
    //     echo "funkcijos vidus";
    // }


// 4 Pavyzdys

    // function pirma() {
    //     echo "pirma funkcija<br>";
    // }

    // function antra() {
    //     echo "antra funkcija<br>";
    // }

    // pirma();
    // antra();
    // pirma();
    // pirma();
    // antra();



// 5 Pavyzdys

    // function atsakymas() {
    //     echo 5 + 3;
    // }

    // atsakymas();


// 6 Pavyzdys

    // $pirmas = 5;
    // $antras = 8;

    // function sudeti() {
    //     echo $pirmas + $antras;
    // }

    // sudeti();



// 7 Pavyzdys

    // function pirma() {
    //     echo "pirma";
    // }

    // pirma();

    // function antra() {
    //     echo "antra";
    // }

    // antra();



// 8 Pavyzdys

     // funkcija(); 

    // function funkcija() {
    //     echo "funkcijos kodas";
    // }



// 9 Pavyzdys 

// function lentele() {
//     echo '<table border="1">';
//     for ($i = 0; $i < 5; $i++) {
//         echo "<tr>";
//         for ($j = 0; $j < 10; $j++) {
//             echo "<td>$i $j</td>";
//         }
//         echo "</tr>";
//     }
//     echo "</table>";
//     echo "<br>";
// }

// lentele();
// lentele();




// 10 Pavyzdys 

// function informacija() {
//     $vardas = "Ieva";
//     $amzius = 24;
//     echo "$vardas ($amzius m.) <br>";
// }

// function klaidinga() {
//     echo $vardas;
// }


// informacija();
// klaidinga();



// 11 Pavyzdys

// function isvedimas() {
//     pirma();
//     antra();
// }

// function pirma() {
//     echo "pirma <br>";
// }

// function antra() {
//     echo "antra <br>";
// }

// isvedimas();
