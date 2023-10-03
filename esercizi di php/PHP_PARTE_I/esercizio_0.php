<?php
        $name = "Marco";
        $surname = "Ferri";
        $city = "Bari";
        $province = "Ba";

        $a = 150;
        $b = 50;
        $c = 5;

        $somma = $a + $b;
        $quoziente = $b / $c;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .myDiv, .mySecondDiv  {
            margin: 40px auto;
            text-align: center;
            font-size: 20px;
            border-bottom: 2px solid black;
        }
        .m-b-40px{
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="myDiv">
        <strong>Il mio primo SCRIPT PHP</strong>
        <p class="m-b-40px">
            <em> Il mio nome è: <strong> <?= $name?> </strong> <br> 
            Il mio cognome è: <strong> <?= $surname?> </strong> <br>
            Vivo a: <?= $city ?> <br>
            Provincia di <?= $province?> </em>
        </p>
    </div>

    <div class="mySecondDiv">
    <strong>Il mio secondo SCRIPT PHP</strong>
        <p class="m-b-40px">
            <em>
                La mia prima variabile è <strong> <?= $a?> </strong> <br>
                La mia seconda variabile è:<strong> <?= $b?> </strong> <br>
                La mia terza variabile è: <strong> <?= $c?> </strong> <br> <br> 

                La somma tra la prima varibile e la seconda variabile è: <strong> <?= $somma?> </strong> <br>
                la divisione tra la seconda variabile e la terza variabile è: <strong> <?= $quoziente?> </strong>
            
            </em>
        </p>
    </div>
    
</body>
</html>
