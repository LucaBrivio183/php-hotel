<?php
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
$check_parking = $_GET['parking'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body class="vh-100 d-flex flex-column justify-content-center">
    <!-- form -->
    <form class="container text-center w-50 p-5" action="index.php" method="get">
        <select class="form-select w-50 d-inline" name="parking">
            <option value="1">Parcheggio Presente</option>
            <option value="0">Parcheggio Assente</option>
        </select>
        <button type="submit" class="btn btn-primary">Cerca</button>
    </form>
    <!-- table -->
    <table class="table table-hover table-bordered container text-center">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Nome:</th>
                <th scope="col">Descrizione:</th>
                <th scope="col">Parcheggio:</th>
                <th scope="col">Voto:</th>
                <th scope="col">Dal centro:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $key => $hotel) { ?>
                <tr class="<?= ($hotel['parking'] == $check_parking) ? '' : 'd-none' ?>">
                    <td scope="col"><?php echo $hotel['name'] ?></td>
                    <td scope="col"><?php echo $hotel['description'] ?></td>
                    <td scope="col"><?php echo $hotel['parking'] ? 'Presente' : 'Assente' ?></td>
                    <td scope="col"><?php echo $hotel['vote'] ?></td>
                    <td scope="col"><?php echo $hotel['distance_to_center'] ?> Km</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>