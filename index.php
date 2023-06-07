<!-- ARRAY PHP -->

<?php

    function strbool($hotel_i) {
        if (is_bool($hotel_i)) {
            return $hotel_i ? 'Si' : 'No';
        }
        return $hotel_i;
    }

    echo strbool(false);
    echo strbool(true);

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    
    <!-- BOOSTRAP LINK/SCRIPT -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>
<body class="bg-dark">
    <div class="container bg-body-tertiary py-5">
        
        <h1 class="fw-bold">LISTA HOTELBOOL</h1>
        
        <!-- FILTER HOTELS -->
        <form class="d-flex gap-2" method="GET">
            <select class="form-select w-25 mb-3" aria-label="Default select example">
                <option selected>Tutti</option>
                <option value="1">Con Parcheggio</option>
                <option value="2">Senza Parcheggio</option>
            </select>

            <select class="form-select w-25 mb-3" aria-label="Default select example">
                <option selected>Tutti</option>
                <option value="1">Voto 1</option>
                <option value="2">Voto 2</option>
                <option value="3">Voto 3</option>
                <option value="4">Voto 4</option>
                <option value="5">Voto 5</option>
            </select>

            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit">Cerca</button>
                <button class="btn btn-danger" type="reset">Cancella</button>
            </div>  
        </form>
        
        <!-- HOTELS TABLE -->
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                <tr>
                <?php foreach ($hotel as $hotel_i) { ?>
                    <td class="table-success"><?= strbool($hotel_i) ?></td>
                <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>