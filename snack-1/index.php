<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [
        [
            'casa' => 'team-a ',
            'punti-casa' => '50',
            'ospite' => 'random-team-a',
            'punti-ospite' => '32',
        ],
        [
            'casa' => 'team-b ',
            'punti-casa' => '27',
            'ospite' => 'random-team-b',
            'punti-ospite' => '84',
        ],
        [
            'casa' => 'team-c ',
            'punti-casa' => '60',
            'ospite' => 'random-team-c',
            'punti-ospite' => '61',
        ],
        [
            'casa' => 'team-d ',
            'punti-casa' => '110',
            'ospite' => 'random-team-d',
            'punti-ospite' => '77',
        ],
        [
            'casa' => 'team-e ',
            'punti-casa' => '50',
            'ospite' => 'random-team-e',
            'punti-ospite' => '64',
        ],
        
    ];

    var_dump($partite);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($partite); $i++ ) {?>
            <li><?php echo $partite[$i]["casa"];?> - <?php echo $partite[$i]["ospite"];?> | <?php echo $partite[$i]["punti-casa"] ?> - <?php echo $partite[$i]["punti-ospite"] ?></li>
        <?php } ?>
    </ul>
</body>
</html>
