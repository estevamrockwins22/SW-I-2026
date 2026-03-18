<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $MSG = "Sua média é:";
    $nome = "User";
    $M1 = 8;
    $M2 = 10;
    $M3 = 9;
    $media = 0;
    $media = ( ($M1 + $M2 + $M3) /3);
    
    if ($media > 10) {
        echo "Erro Na Contagem";
    }
    elseif ($media >= 9) {
        echo "MB";
    }
    elseif ($media >= 7) {
        echo "B";
    }   
    elseif ($media >= 4) {
        echo "R";
    }
    elseif ($media >= 0.5) {
        echo "I";
    }
    else {
        echo "NA";
    }
    ?>
</body>
</html>