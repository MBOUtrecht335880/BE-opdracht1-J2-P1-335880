<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/public/css/style.css">
    <title>Overzicht Instructeurs</title>
</head>
<body>
    <u><?= $data['title']; ?></u>

    <h5>Aantal instructeurs: <?= $data['aantal_instructeurs']; ?></h5>

    <table>
        <thead>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Mobiel</th>
            <th>Datum in dienst</th>
            <th>Aantal sterren</th>
            <th>Voertuigen</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>

    <a href="<?= URLROOT; ?>/Homepage/index.php">Home</a> 
</body>
</html>



