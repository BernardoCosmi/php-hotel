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
        [
            'name' => 'Grand Hotel Splendore',
            'description' => 'Eleganza e lusso con vista panoramica sul mare.',
            'parking' => false,
            'vote' => 4,
            'distance_to_center' => 3.5
            //il fatto che fossero dispari e non quindi divisibili in due colonne uguali mi disturbava, ne ho aggiunto uno

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

        <h1 class="text-center m-4">PHP-HOTEL</h1>

        <!-- Form per filtrare gli hotel con parcheggio -->
        <form action="" method="GET" class="mb-4 d-flex flex-column align-items-center text-center">
            <div class="form-check d-flex justfy-content-center text-center">
                <input class="form-check-input me-2" type="checkbox" name="parking" id="parkingCheckbox" value="true">
                <label class="form-check-label" for="parkingCheckbox">Mostra solo hotel con parcheggio</label>
            </div>
            <button type="submit" class="btn btn-primary text-center">Filtra</button>
        </form>
        <div class="row">
            <?php 
            
            //VERIFICA
            $showParking = isset($_GET['parking']) == 'true';
        
            foreach ($hotels as $hotel): 
                if (!$showParking || $hotel['parking']): ?>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $hotel['name']; ?></h5>
                                <p class="card-text"><?php echo $hotel['description']; ?></p>
                                <p class="card-text"><U>Parcheggio <?php echo $hotel['parking'] ? 'disponibile' : 'non disponibile'; ?></U></p>
                                <p class="card-text"><strong>Voto: <?php echo $hotel['vote']; ?></strong></p>
                                <p class="card-text"><i>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</i></p>
                            </div>
                        </div>
                    </div>
                <?php endif; 
            endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>