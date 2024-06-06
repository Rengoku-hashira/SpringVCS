<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentele</title>
    <link rel="stylesheet" href="ciklai.css">
</head>
<body>
    <table border="1">
    <tr>
        <th>Pirmas stulpelis</th>
        <th>Antras stulpelis</th>
        <th>Trecias stulpelis</th>
        <th>Ketvirtas stulpelis</th>
        <th>Suma</th>
        <th>Vidurkis</th>
    </tr>
        
    <?php 
        for ($i = 0; $i < 10; $i++) { 
            $pirmuSuma = 0;
            $vidurkis = 0; 
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                if ($j < 4){
                    $randomSkaicius = rand(1, 100);
                    echo "<td>" . $randomSkaicius . "</td>";
                    $pirmuSuma += $randomSkaicius;
                    $vidurkis++; 
                } elseif ($j == 4){
                    echo "<td>" . $pirmuSuma . "</td>";
                }
            }
            
            $vidurkisKeturi = ($vidurkis > 0) ? round($pirmuSuma / $vidurkis, 2) : 0;
            echo "<td>" . $vidurkisKeturi . "</td>";
            echo "</tr>";
        }
     

    ?> 



    </table>
</body>  
</html>
















