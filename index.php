<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Una vista mozzafiato sul mare.',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Confort e modernità al tuo servizio.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'La vacanza perfetta a due passi dalla spiaggia.',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => "Un'oasi di relax e tranquillità.",
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Comodità e praticità nel cuore della città.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <? foreach ($hotels as $hotel): ?>
            
                <li>
                    <strong>Nome: </strong><?php echo $hotel['name']; ?><br>
                    <strong>Descrizione: </strong><?php echo $hotel['description']; ?><br>
                    <strong>Parcheggio: </strong><?php echo $hotel['parking'] ? 'Disponibile' : 'Non disponibile'; ?><br>
                    <strong>Voto: </strong><?php echo $hotel['vote']; ?><br>
                    <strong>Distanza dal centro: </strong><?php echo $hotel['distance_to_center']; ?> km<br>
                </li>

            <? endforeach; ?>
        </ul>
    </div>
</body>
</html>