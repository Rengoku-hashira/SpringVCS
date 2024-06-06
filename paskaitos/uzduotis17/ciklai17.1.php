<?php
// 1 Pavyzdys

    // for ($i = 0; $i < 10; $i++) {
    //     echo $i . " ";
    // }


// 2 Pavyzdys

    // for ($i = 5; $i <= 10; $i++) {
    //     echo "$i <br>";
    // }

// 3 Pavyzdys

    // For ($i = 5; $i <= 50; $i += 5) {
    //     echo "[$i] <br>";
    // }

// 4 pavyzdys

    // for ($i = 2; $i <= 10; $i++) {
    //     if ($i % 2 == 0) {
    //         echo "skaicius $i yra lyginis <br>";
    //     }
    // }


// 5 pavyzdys

    // for ($i = 1; $i <= 25; $i++) {
    //     if ($i % 2 == 0 || $i % 5 == 0) {
    //         echo "skaicius $i dalinasi is 2 arba 5 <br>";
    //     }
    // }


// 6 Pavyzdys

    // $kiek = 5;

    // for($i = 0; $i < $kiek; $i++) {
    //     echo "$i <br>";
    // }


// 7 Pavyzdys 

    // $pradzia = 7;
    // $pabaiga = 10;

    // for($i = $pradzia; $i <= $pabaiga; $i++) {
    //     echo "$i <br>";
    // }


// 8 Pavyzdys

    // for ($i = 1; $i <= 5; $i++) {
    // for ($j = 1; $j <= 5; $j++){
    //         echo $i * $j . " ";
    //     }
    //     echo "<br>";
    // }


// 9 Pavyzdys

     // for ($i = 1; true; $i++) {
     //     echo "$i <br>";
     //     if ($i >= 3) {
     //         break;
     //     }
     // }


// 10 Pavyzdys

     // for ($i = 1; $i < 5; $i++) {
     //     if ($i == 2) {
     //         continue;
     //     }
     //     echo "$i <br>";
     // }


// 11 Pavyzdys

     // $suma = 0;
     // for ($i = 0; $i < 10; $i++){
     //     $suma += $i;
     // }
     // echo "gauta suma: $suma";
        

// 12 Pavyzdys

        // $suma = 0;
        // for($i = 0; $i <= 10; $i++) {
        //     if($i % 2 == 0)
        //     $suma += $i;
        // }

        // echo "lyginiu suma: $suma";

// 1 uzduotis

        for ($i = 1; $i <= 10; $i++) {
            echo "$i <br>";
        }


// 2 Uzduotis
        for($i = 0; $i <= 15; $i+= 2) {
            echo $i . " ";
            }
            

// 3 Uzduotis

        for ($i = 1; $i <= 20; $i += 3){
            echo "[$i] ";
        }


// 4 Uzduotis 

        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0)
            echo "$i yra lyginis <br>";
        }

// 8 Uzduotis
            $suma = 0;
            for($i = 1; $i <= 100; $i++) {
            $suma += $i;
            }
            echo "visu skaicius suma yra: $suma";

// 9 Uzduotis

                $suma = 0;
                for($i = 20; $i <= 50; $i++){
                    if($i % 2 == 0);
                    $suma += $i;
                }
                echo "suma skaiciu nuo 20 iki 50 yra: $suma";

// 10 uzduotis 

                $suma = 0;
                for($i = 30; $i <= 60; $i++){
                if($i % 3 == 0);
                $suma += $i;
                                }
                echo "suma skaiciu nuo 30 iki 60 yra: $suma";


                // 12 Uzduotis

                for($i = 1; $i <= 100; $i++) {
                    if($i % 3 == 0 && $i % 5 == 0){
                        echo "FizzBuzz\n";
                    } elseif ($i % 3 == 0) {
                        echo "Fizz\n";
                    } elseif ($i % 5 == 0) {
                        echo "BUzz\n";
                    } else {
                        echo $i . "\n <br>";
                    }
                    
                };
                

                






