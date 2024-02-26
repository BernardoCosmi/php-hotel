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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <ul class="d-flex justify-content-between flex-wrap">
            <? foreach ($hotels as $hotel): ?>
            
                <li class="text-center list-unstyled m-4 border rounded-4 col-5">
                    <strong><?php echo $hotel['name']; ?></strong><br>
                    <i><?php echo $hotel['description']; ?></i><br>
                    Parcheggio <?php echo $hotel['parking'] ? 'disponibile' : 'non disponibile'; ?><br>
                    <strong>Voto: <?php echo $hotel['vote']; ?></strong><br>
                    <i>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</i><br>
                </li>

            <? endforeach; ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>